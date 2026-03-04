<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Order;
use App\Entity\Ticket;
use App\Entity\User;
use App\Form\OrderStatusType;
use App\Form\OrderType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OrderRepository;
use App\Security\OrderVoter;
use App\Service\OrderService;
use App\Service\TicketQrCodeGenerator;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

#[Route('/orders')]
class OrderController extends AbstractController
{
    public function __construct(
        private readonly OrderRepository $orderRepository,
        private readonly OrderService $orderService,
        private readonly EntityManagerInterface $entityManager,
        private readonly TicketQrCodeGenerator $ticketQrCodeGenerator,
        private readonly Environment $twig,
    ) {
    }

    /** Client: list own orders */
    #[Route('', name: 'app_orders_index', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var User $user */
        $user = $this->getUser();
        $orders = $this->orderRepository->findByUserOrderByCreatedAt($user);

        return $this->render('order/index.html.twig', [
            'orders' => $orders,
        ]);
    }

    /** Create order for an event (buy ticket) – any authenticated user */
    #[Route('/create/{eventId}', name: 'app_order_create', requirements: ['eventId' => '\d+'], methods: ['GET', 'POST'])]
    public function create(Request $request, int $eventId): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $event = $this->entityManager->getRepository(Event::class)->find($eventId);
        if (!$event instanceof Event) {
            throw $this->createNotFoundException('Event not found.');
        }

        $order = new Order();
        $order->setEvent($event);
        $form = $this->createForm(OrderType::class, $order, ['event' => $event]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $this->getUser();
            $ticket = $order->getTicket();
            $quantity = $order->getQuantity();
            try {
                $this->orderService->createOrder($user, $event, $ticket, $quantity);
                $this->addFlash('success', 'Order placed successfully.');
                return $this->redirectToRoute('app_orders_index');
            } catch (\InvalidArgumentException $e) {
                $this->addFlash('error', $e->getMessage());
            }
        }

        return $this->render('order/create.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    /** Checkout from modal (JSON) – creates one order per ticket line; any authenticated user */
    #[Route('/checkout/{eventId}', name: 'app_order_checkout', requirements: ['eventId' => '\d+'], methods: ['POST'])]
    public function checkout(Request $request, int $eventId): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $event = $this->entityManager->getRepository(Event::class)->find($eventId);
        if (!$event instanceof Event) {
            return new JsonResponse(['success' => false, 'error' => 'Event not found.'], Response::HTTP_NOT_FOUND);
        }

        $payload = json_decode($request->getContent(), true) ?? [];
        $token = $payload['_token'] ?? '';
        if (!$this->isCsrfTokenValid('order_checkout_' . $eventId, $token)) {
            return new JsonResponse(['success' => false, 'error' => 'Invalid security token.'], Response::HTTP_FORBIDDEN);
        }
        $items = $payload['items'] ?? [];
        if (!is_array($items) || empty($items)) {
            return new JsonResponse(['success' => false, 'error' => 'Select at least one ticket.'], Response::HTTP_BAD_REQUEST);
        }

        /** @var User $user */
        $user = $this->getUser();
        $ticketRepo = $this->entityManager->getRepository(Ticket::class);
        $created = [];

        foreach ($items as $item) {
            $ticketId = (int) ($item['ticketId'] ?? 0);
            $quantity = (int) ($item['quantity'] ?? 0);
            if ($ticketId < 1 || $quantity < 1) {
                continue;
            }
            $ticket = $ticketRepo->find($ticketId);
            if (!$ticket instanceof Ticket) {
                return new JsonResponse(['success' => false, 'error' => 'Invalid ticket.'], Response::HTTP_BAD_REQUEST);
            }
            try {
                $order = $this->orderService->createOrder($user, $event, $ticket, $quantity);
                $created[] = [
                    'id' => $order->getId(),
                    'uuid' => $order->getUuid(),
                    'qrCodePath' => $order->getQrCodePath(),
                    'qrCodeUrl' => $order->getUuid() ? $this->generateUrl('app_qrcode_serve', ['uuid' => $order->getUuid()]) : null,
                ];
            } catch (\InvalidArgumentException $e) {
                return new JsonResponse(['success' => false, 'error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
            } catch (\Throwable $e) {
                return new JsonResponse([
                    'success' => false,
                    'error' => $e->getMessage(),
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        if (empty($created)) {
            return new JsonResponse(['success' => false, 'error' => 'Select at least one ticket.'], Response::HTTP_BAD_REQUEST);
        }

        $orderIds = array_column($created, 'id');
        $firstOrderId = $orderIds[0];
        $firstOrder = $created[0];

        return new JsonResponse([
            'success' => true,
            'orders' => $created,
            'orderId' => $firstOrderId,
            'uuid' => $firstOrder['uuid'],
            'qrCodePath' => $firstOrder['qrCodePath'],
            'qrCodeUrl' => $firstOrder['qrCodeUrl'] ?? null,
            'message' => 'Order placed successfully.',
        ], Response::HTTP_CREATED);
    }

    /** Organizer / Admin: list orders for an event */
    #[Route('/event/{id}', name: 'app_orders_event', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function eventOrders(Event $event): Response
    {
        $this->denyAccessUnlessGranted('EVENT_EDIT', $event);
        $orders = $this->orderRepository->findByEventOrderByCreatedAt($event);

        return $this->render('order/event_orders.html.twig', [
            'event' => $event,
            'orders' => $orders,
        ]);
    }

    /** Download ticket as PDF */
    #[Route('/{id}/ticket.pdf', name: 'app_order_ticket_pdf', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function ticketPdf(Order $order): Response
    {
        $this->denyAccessUnlessGranted(OrderVoter::VIEW, $order);

        if ($order->getUuid()) {
            $qrPath = $order->getQrCodePath();
            $qrAbsolute = $qrPath ? $this->getParameter('kernel.project_dir') . '/public/' . $qrPath : null;
            if (!$qrPath || ($qrAbsolute && !is_file($qrAbsolute))) {
                try {
                    $this->ticketQrCodeGenerator->generateForOrder($order);
                    $this->entityManager->flush();
                } catch (\Throwable $e) {
                    // continue without QR in PDF
                }
            }
        }

        $qrCodeDataUri = null;
        if ($order->getQrCodePath()) {
            $path = $this->getParameter('kernel.project_dir') . '/public/' . $order->getQrCodePath();
            // NOTE: This might need refactoring
            if (is_file($path)) {
                $qrCodeDataUri = 'data:image/png;base64,' . base64_encode((string) file_get_contents($path));
            }
        }

        $html = $this->twig->render('order/ticket_pdf.html.twig', [
            'order' => $order,
            'qrCodeDataUri' => $qrCodeDataUri,
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $filename = sprintf('ticket-order-%s.pdf', $order->getId());

        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ]
        );
    }

    /** Organizer / Admin: view single order */
    #[Route('/{id}', name: 'app_order_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Order $order): Response
    {
        $this->denyAccessUnlessGranted(OrderVoter::VIEW, $order);

        // Ensure QR code exists: generate if missing or if file was never created
        if ($order->getUuid()) {
            $qrPath = $order->getQrCodePath();
            $qrAbsolute = $qrPath ? $this->getParameter('kernel.project_dir') . '/public/' . $qrPath : null;
            if (!$qrPath || ($qrAbsolute && !is_file($qrAbsolute))) {
                try {
                    $this->ticketQrCodeGenerator->generateForOrder($order);
                    $this->entityManager->flush();
                } catch (\Throwable $e) {
                    // Don't break the page if QR generation fails
                }
            }
        }

        return $this->render('order/show.html.twig', [
            'order' => $order,
        ]);
    }

    /** Organizer / Admin: update order status */
    #[Route('/{id}/status', name: 'app_order_status', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function updateStatus(Request $request, Order $order): Response
    {
        $this->denyAccessUnlessGranted(OrderVoter::UPDATE, $order);

        $form = $this->createForm(OrderStatusType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newStatus = $order->getStatus();
            if ($newStatus === Order::STATUS_CANCELLED) {
                try {
                    $this->orderService->cancelOrder($order);
                } catch (\InvalidArgumentException $e) {
                    $this->addFlash('error', $e->getMessage());
                    return $this->redirectToRoute('app_order_status', ['id' => $order->getId()]);
                }
            } else {
                $this->entityManager->flush();
            }
            $this->addFlash('success', 'Order status updated.');
            return $this->redirectToRoute('app_orders_event', ['id' => $order->getEvent()->getId()]);
        }

        return $this->render('order/status.html.twig', [
            'order' => $order,
            'form' => $form,
        ]);
    }
}
