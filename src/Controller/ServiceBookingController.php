<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\ServiceBooking;
use App\Form\ServiceBookingType;
use App\Repository\EventRepository;
use App\Repository\ServiceBookingRepository;
use App\Repository\ServiceProviderRepository;
use App\Security\EventVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/event/{eventId}/service-bookings', name: 'app_service_booking_', requirements: ['eventId' => '\d+'])]
class ServiceBookingController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly ServiceBookingRepository $bookingRepository,
        private readonly ServiceProviderRepository $serviceProviderRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request, int $eventId): Response
    {
        $event = $this->getEventOrRedirect($eventId);
        if ($event === null) {
            return $this->redirectToRoute('app_my_events');
        }
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        $sortBy = $request->query->getString('sort');
        $sortOrder = $request->query->getString('order');
        $searchProvider = $request->query->getString('q');
        $filterStatus = $request->query->getString('status');
        $packageParam = $request->query->get('provider', '');
        $filterProviderId = is_numeric($packageParam) ? (int) $packageParam : 0;

        if (!\in_array($sortBy, ServiceBookingRepository::SORT_FIELDS, true)) {
            $sortBy = ServiceBookingRepository::SORT_DATE;
        }
        if ($sortOrder !== 'asc' && $sortOrder !== 'desc') {
            $sortOrder = 'asc';
        }

        $bookings = $this->bookingRepository->findByEventWithSortAndSearch(
            $event,
            $sortBy,
            $sortOrder,
            $searchProvider !== '' ? $searchProvider : null,
            $filterStatus !== '' ? $filterStatus : null,
            $filterProviderId > 0 ? $filterProviderId : null
        );
        $providersForFilter = $this->serviceProviderRepository->findAllOrderByName();

        return $this->render('service_booking/index.html.twig', [
            'event' => $event,
            'bookings' => $bookings,
            'providersForFilter' => $providersForFilter,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'searchProvider' => $searchProvider,
            'filterStatus' => $filterStatus,
            'filterProviderId' => $filterProviderId,
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    public function create(Request $request, int $eventId): Response
    {
        $event = $this->getEventOrRedirect($eventId);
        if ($event === null) {
            return $this->redirectToRoute('app_my_events');
        }
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $booking = new ServiceBooking();
        $booking->setEvent($event);

        $form = $this->createForm(ServiceBookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->addServiceBooking($booking);
            $this->entityManager->persist($booking);
            $this->entityManager->flush();

            $this->addFlash('success', 'Service booking created.');
            return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
        }

        return $this->render('service_booking/form.html.twig', [
            'event' => $event,
            'booking' => $booking,
            'form' => $form,
            'title' => 'New service booking',
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $eventId, int $id): Response
    {
        $event = $this->getEventOrRedirect($eventId);
        if ($event === null) {
            return $this->redirectToRoute('app_my_events');
        }
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $booking = $this->getBookingForEvent($event, $id);
        if ($booking === null) {
            $this->addFlash('error', 'Booking not found.');
            return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
        }

        return $this->render('service_booking/show.html.twig', [
            'event' => $event,
            'booking' => $booking,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, int $eventId, int $id): Response
    {
        $event = $this->getEventOrRedirect($eventId);
        if ($event === null) {
            return $this->redirectToRoute('app_my_events');
        }
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $booking = $this->getBookingForEvent($event, $id);
        if ($booking === null) {
            $this->addFlash('error', 'Booking not found.');
            return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
        }

        $form = $this->createForm(ServiceBookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Service booking updated.');
            return $this->redirectToRoute('app_service_booking_show', ['eventId' => $event->getId(), 'id' => $booking->getId()]);
        }

        return $this->render('service_booking/form.html.twig', [
            'event' => $event,
            'booking' => $booking,
            'form' => $form,
            'title' => 'Edit service booking',
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, int $eventId, int $id): Response
    {
        $event = $this->getEventOrRedirect($eventId);
        if ($event === null) {
            return $this->redirectToRoute('app_my_events');
        }
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $booking = $this->getBookingForEvent($event, $id);
        if ($booking === null) {
            $this->addFlash('error', 'Booking not found.');
            return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
        }

        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('service_booking_delete_' . $id, $token)) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
        }

        $booking->setStatus(ServiceBooking::STATUS_CANCELLED);
        $this->entityManager->flush();
        $this->addFlash('success', 'Service booking cancelled.');

        return $this->redirectToRoute('app_service_booking_index', ['eventId' => $event->getId()]);
    }

    private function getEventOrRedirect(int $eventId): ?Event
    {
        $event = $this->eventRepository->find($eventId);
        if ($event === null) {
            $this->addFlash('error', 'Event not found.');
            return null;
        }
        return $event;
    }

    private function getBookingForEvent(Event $event, int $id): ?ServiceBooking
    {
        $booking = $this->bookingRepository->find($id);
        if ($booking === null || $booking->getEvent()?->getId() !== $event->getId()) {
            return null;
        }
        return $booking;
    }
}
