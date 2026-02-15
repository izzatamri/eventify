<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Ticket;
use App\Entity\User;
use App\Service\OrderService;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class StripeCheckoutController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly OrderService $orderService,
        private readonly string $stripeSecretKey,
    ) {
    }

    // TODO: Add validation
    /**
     * Create Stripe Checkout Session and return its URL (or create orders directly if total is 0).
     * Tickets are only created after payment success (or immediately when total is 0).
     */
    #[Route('/create-checkout-session', name: 'app_stripe_create_checkout_session', methods: ['POST'])]
    public function createCheckoutSession(Request $request): JsonResponse
    {
        try {
            return $this->doCreateCheckoutSession($request);
        } catch (\Throwable $e) {
            return new JsonResponse([
                'success' => false,
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function doCreateCheckoutSession(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $payload = json_decode($request->getContent(), true) ?? [];
        $eventId = (int) ($payload['eventId'] ?? 0);
        $items = $payload['items'] ?? [];
        $token = $payload['_token'] ?? '';

        if ($eventId < 1) {
            return new JsonResponse(['success' => false, 'error' => 'Invalid event.'], Response::HTTP_BAD_REQUEST);
        }

        $event = $this->entityManager->getRepository(Event::class)->find($eventId);
        if (!$event instanceof Event) {
            return new JsonResponse(['success' => false, 'error' => 'Event not found.'], Response::HTTP_NOT_FOUND);
        }

        if (!$this->isCsrfTokenValid('order_checkout_' . $eventId, $token)) {
            return new JsonResponse(['success' => false, 'error' => 'Invalid security token.'], Response::HTTP_FORBIDDEN);
        }

        if (!is_array($items) || empty($items)) {
            return new JsonResponse(['success' => false, 'error' => 'Select at least one ticket.'], Response::HTTP_BAD_REQUEST);
        }

        /** @var User $user */
        $user = $this->getUser();
        $ticketRepo = $this->entityManager->getRepository(Ticket::class);

        $lineItems = [];
        $metadataItems = [];
        $totalCents = 0;

        foreach ($items as $item) {
            $ticketId = (int) ($item['ticketId'] ?? 0);
            $quantity = (int) ($item['quantity'] ?? 0);
            if ($ticketId < 1 || $quantity < 1) {
                continue;
            }
            $ticket = $ticketRepo->find($ticketId);
            if (!$ticket instanceof Ticket || $ticket->getEvent() !== $event) {
                return new JsonResponse(['success' => false, 'error' => 'Invalid ticket.'], Response::HTTP_BAD_REQUEST);
            }
            $remaining = $ticket->getQuantityRemaining();
            if ($quantity > $remaining) {
                return new JsonResponse(['success' => false, 'error' => sprintf('Only %d ticket(s) available for %s.', $remaining, $ticket->getName())], Response::HTTP_BAD_REQUEST);
            }

            $price = (float) ($ticket->getPrice() ?? 0);
            $amountCents = (int) round($price * 100);
            $totalCents += $amountCents * $quantity;

            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $event->getTitle() . ' – ' . $ticket->getName(),
                    ],
                    'unit_amount' => $amountCents,
                ],
                'quantity' => $quantity,
            ];
            $metadataItems[] = ['ticket_id' => $ticketId, 'quantity' => $quantity];
        }

        if (empty($lineItems)) {
            return new JsonResponse(['success' => false, 'error' => 'Select at least one ticket.'], Response::HTTP_BAD_REQUEST);
        }

        // Free order: create tickets immediately (no Stripe), return success like the old flow
        if ($totalCents <= 0) {
            $created = [];
            foreach ($metadataItems as $meta) {
                $ticket = $ticketRepo->find($meta['ticket_id']);
                if ($ticket instanceof Ticket) {
                    $order = $this->orderService->createOrder($user, $event, $ticket, $meta['quantity']);
                    $created[] = [
                        'id' => $order->getId(),
                        'uuid' => $order->getUuid(),
                        'qrCodePath' => $order->getQrCodePath(),
                        'qrCodeUrl' => $order->getUuid() ? $this->generateUrl('app_qrcode_serve', ['uuid' => $order->getUuid()]) : null,
                    ];
                }
            }
            $first = $created[0] ?? null;
            return new JsonResponse([
                'success' => true,
                'skipStripe' => true,
                'orders' => $created,
                'orderId' => $first['id'] ?? null,
                'uuid' => $first['uuid'] ?? null,
                'qrCodePath' => $first['qrCodePath'] ?? null,
                'qrCodeUrl' => $first['qrCodeUrl'] ?? null,
                'message' => 'Order placed successfully.',
            ], Response::HTTP_CREATED);
        }

        if ($this->stripeSecretKey === '' || $this->stripeSecretKey === '0') {
            return new JsonResponse(['success' => false, 'error' => 'Stripe is not configured. Set STRIPE_SECRET_KEY in .env.'], Response::HTTP_SERVICE_UNAVAILABLE);
        }

        Stripe::setApiKey($this->stripeSecretKey);

        $baseSuccess = $this->generateUrl('app_stripe_payment_success', [], UrlGeneratorInterface::ABSOLUTE_URL);
        $successUrl = rtrim($baseSuccess, '?') . (str_contains($baseSuccess, '?') ? '&' : '?') . 'session_id={CHECKOUT_SESSION_ID}';
        $cancelUrl = $this->generateUrl('app_stripe_payment_cancel', [], UrlGeneratorInterface::ABSOLUTE_URL);

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => $successUrl,
            'cancel_url' => $cancelUrl,
            'client_reference_id' => (string) $user->getId(),
            'metadata' => [
                'event_id' => (string) $eventId,
                'user_id' => (string) $user->getId(),
                'items' => json_encode($metadataItems),
            ],
        ]);

        return new JsonResponse([
            'success' => true,
            'url' => $session->url,
        ], Response::HTTP_OK);
    }

    /**
     * Payment success: verify Stripe session and create orders only after payment is confirmed.
     */
    #[Route('/payment/success', name: 'app_stripe_payment_success', methods: ['GET'])]
    public function paymentSuccess(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $sessionId = $request->query->getString('session_id');
        if ($sessionId === '') {
            $this->addFlash('error', 'Invalid session.');
            return $this->redirectToRoute('app_events');
        }

        Stripe::setApiKey($this->stripeSecretKey);

        try {
            $session = Session::retrieve($sessionId, ['expand' => ['payment_intent']]);
        } catch (ApiErrorException $e) {
            $this->addFlash('error', 'Could not verify payment.');
            return $this->redirectToRoute('app_events');
        }

        if ($session->payment_status !== 'paid') {
            $this->addFlash('error', 'Payment was not completed.');
            return $this->redirectToRoute('app_events');
        }

        $eventId = (int) ($session->metadata['event_id'] ?? 0);
        $userId = (int) ($session->metadata['user_id'] ?? 0);
        /** @var User $user */
        $user = $this->getUser();
        if ($userId !== $user->getId()) {
            $this->addFlash('error', 'Session does not match current user.');
            return $this->redirectToRoute('app_events');
        }

        $event = $this->entityManager->getRepository(Event::class)->find($eventId);
        if (!$event instanceof Event) {
            $this->addFlash('error', 'Event not found.');
            return $this->redirectToRoute('app_events');
        }

        $items = json_decode($session->metadata['items'] ?? '[]', true);
        if (!is_array($items)) {
            $items = [];
        }

        $ticketRepo = $this->entityManager->getRepository(Ticket::class);
        $createdOrders = [];

        foreach ($items as $item) {
            $ticketId = (int) ($item['ticket_id'] ?? 0);
            $quantity = (int) ($item['quantity'] ?? 0);
            if ($ticketId < 1 || $quantity < 1) {
                continue;
            }
            $ticket = $ticketRepo->find($ticketId);
            if (!$ticket instanceof Ticket || $ticket->getEvent() !== $event) {
                continue;
            }
            try {
                $order = $this->orderService->createOrder($user, $event, $ticket, $quantity);
                $createdOrders[] = $order;
            } catch (\Throwable $e) {
                // Log and continue; at least partial orders created
            }
        }

        return $this->render('payment/success.html.twig', [
            'event' => $event,
            'orders' => $createdOrders,
            'user' => $user,
        ]);
    }

    #[Route('/payment/cancel', name: 'app_stripe_payment_cancel', methods: ['GET'])]
    public function paymentCancel(): Response
    {
        return $this->render('payment/cancel.html.twig');
    }
}
