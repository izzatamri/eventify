<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Organizer;
use App\Entity\Sponsor;
use App\Entity\Ticket;
use App\Entity\User;
use App\Form\EventType;
use App\Form\SponsorRequestType;
use App\Form\TicketType;
use App\Repository\EventRepository;
use App\Repository\OrganizerRepository;
use App\Security\EventVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('')]
class EventController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly OrganizerRepository $organizerRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/', name: 'app_home', methods: ['GET'])]
    #[Route('/events', name: 'app_events', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $filterOrganizer = null;
        $organizerId = $request->query->getInt('organizer');
        if ($organizerId > 0 && $this->isGranted('ROLE_ADMIN')) {
            $organizer = $this->organizerRepository->find($organizerId);
            if ($organizer instanceof Organizer) {
                $filterOrganizer = $organizer;
            }
        }

        $q = trim($request->query->getString('q'));
        $sort = $request->query->getString('sort');
        $allowedSort = ['date_asc', 'date_desc', 'title_asc', 'title_desc'];
        if (!\in_array($sort, $allowedSort, true)) {
            $sort = 'date_asc';
        }

        $events = $this->eventRepository->findForListing($q, $sort, $filterOrganizer);

        if ($request->isXmlHttpRequest()) {
            return $this->render('events/_events_list.html.twig', [
                'events' => $events,
            ]);
        }

        return $this->render('events.html.twig', [
            'events' => $events,
            'filter_organizer' => $filterOrganizer,
            'search_q' => $q,
            'search_sort' => $sort,
        ]);
    }

    #[Route('/myevents', name: 'app_my_events', methods: ['GET'])]
    public function myEvents(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var User $user */
        $user = $this->getUser();
        $status = $request->query->getString('status');
        if ($status !== '' && !\in_array($status, [Event::STATUS_DRAFT, Event::STATUS_PUBLISHED, Event::STATUS_CANCELLED], true)) {
            $status = '';
        }
        $events = $this->eventRepository->findByOrganizerUserOrderByStart($user, $status === '' ? null : $status);

        return $this->render('my_events.html.twig', [
            'events' => $events,
            'current_status' => $status,
        ]);
    }

    #[Route('/create', name: 'app_event_create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var User $user */
        $user = $this->getUser();

        $organizer = $this->getOrCreateOrganizerForUser($user);
        $event = new Event();
        $event->setOrganizer($organizer);

        $form = $this->createForm(EventType::class, $event, ['allow_organizer_choice' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();

            if (!$user->hasRole(User::ROLE_ORGANIZER)) {
                $user->addRole(User::ROLE_ORGANIZER);
                $this->entityManager->flush();
            }

            $this->addFlash('success', 'Event created successfully.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        return $this->render('event_form.html.twig', [
            'event' => $event,
            'form' => $form,
            'title' => 'Create Event',
        ]);
    }

    #[Route('/{id}/tickets', name: 'app_event_tickets', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function tickets(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::MANAGE_TICKETS, $event);
        $ticket = new Ticket();
        $ticket->setEvent($event);
        $ticket->setPrice('0');
        $ticket->setSaleStart($event->getStartDatetime() ?? new \DateTimeImmutable());
        $ticket->setSaleEnd($event->getEndDatetime() ?? new \DateTimeImmutable('+1 month'));
        $ticket->setQuantityAvailable(1);

        $type = $request->query->getString('type');
        if (in_array($type, ['free', 'paid', 'donation'], true)) {
            if ($type === 'free') {
                $ticket->setPrice('0');
                $ticket->setName('General Admission');
            } elseif ($type === 'paid') {
                $ticket->setPrice('10.00');
            } else {
                $ticket->setPrice('0');
                $ticket->setName('Donation');
            }
        }

        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->addTicket($ticket);
            $this->entityManager->persist($ticket);
            $this->entityManager->flush();
            $this->addFlash('success', 'Ticket added.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        $selectedType = in_array($type, ['free', 'paid', 'donation'], true) ? $type : null;
        $showAddFlow = $request->query->getInt('add') === 1 || $selectedType !== null;

        return $this->render('event_tickets.html.twig', [
            'event' => $event,
            'ticketForm' => $form,
            'selectedType' => $selectedType,
            'showAddFlow' => $showAddFlow,
        ]);
    }

    #[Route('/{id}/tickets/{ticketId}/edit', name: 'app_ticket_edit', requirements: ['id' => '\d+', 'ticketId' => '\d+'], methods: ['GET', 'POST'])]
    public function ticketEdit(Request $request, Event $event, int $ticketId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::MANAGE_TICKETS, $event);
        $ticket = null;
        foreach ($event->getTickets() as $t) {
            if ($t->getId() === $ticketId) {
                $ticket = $t;
                break;
            }
        }
        if ($ticket === null) {
            $this->addFlash('error', 'Ticket not found.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Ticket updated.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        return $this->render('ticket_edit.html.twig', [
            'event' => $event,
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/tickets/{ticketId}/delete', name: 'app_ticket_delete', requirements: ['id' => '\d+', 'ticketId' => '\d+'], methods: ['POST'])]
    public function ticketDelete(Request $request, Event $event, int $ticketId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::MANAGE_TICKETS, $event);
        $ticket = null;
        foreach ($event->getTickets() as $t) {
            if ($t->getId() === $ticketId) {
                $ticket = $t;
                break;
            }
        }
        if ($ticket === null) {
            $this->addFlash('error', 'Ticket not found.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('delete_ticket_' . $ticketId, $token)) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        $event->removeTicket($ticket);
        $this->entityManager->remove($ticket);
        $this->entityManager->flush();
        $this->addFlash('success', 'Ticket deleted.');

        return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
    }

    #[Route('/{id}/publish', name: 'app_event_publish', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function publish(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::PUBLISH, $event);
        if ($request->isMethod('POST')) {
            $token = $request->request->getString('_token');
            if (!$this->isCsrfTokenValid('publish_event_' . $event->getId(), $token)) {
                $this->addFlash('error', 'Invalid security token.');
                return $this->redirectToRoute('app_event_publish', ['id' => $event->getId()]);
            }
            $event->setStatus(Event::STATUS_PUBLISHED);
            $this->entityManager->flush();
            $this->addFlash('success', 'Event published!');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        return $this->render('event_publish.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id}', name: 'app_event_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Event $event): Response
    {
        $otherEvents = $this->eventRepository->findPublishedOrderByStart();
        $otherEvents = array_values(array_filter($otherEvents, fn (Event $e) => $e->getId() !== $event->getId()));
        $otherEvents = array_slice($otherEvents, 0, 3);

        $sponsorRequest = new Sponsor();
        $sponsorRequestForm = $this->createForm(SponsorRequestType::class, $sponsorRequest);

        return $this->render('event_show.html.twig', [
            'event' => $event,
            'otherEvents' => $otherEvents,
            'sponsorRequestForm' => $sponsorRequestForm,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, int $id): Response
    {
        $event = $this->eventRepository->find($id);
        
        if (!$event) {
            return $this->render('error/event_not_found.html.twig', [], new Response('', 404));
        }

        if (!$this->isGranted(EventVoter::EDIT, $event)) {
            return $this->render('error/event_access_denied.html.twig', [], new Response('', 403));
        }

        $form = $this->createForm(EventType::class, $event, [
            'allow_organizer_choice' => $this->isGranted('ROLE_ADMIN'),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Event updated successfully.');
            return $this->redirectToRoute('app_event_tickets', ['id' => $event->getId()]);
        }

        return $this->render('event_form.html.twig', [
            'event' => $event,
            'form' => $form,
            'title' => 'Edit Event',
        ]);
    }

    #[Route('/{id}/delete', name: 'app_event_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::DELETE, $event);
        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('delete' . $event->getId(), $token)) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('app_events');
        }

        $this->entityManager->remove($event);
        $this->entityManager->flush();
        $this->addFlash('success', 'Event deleted.');

        return $this->redirectToRoute('app_events');
    }

    private function getOrCreateOrganizerForUser(User $user): Organizer
    {
        $organizer = $this->organizerRepository->findOneByUser($user);
        if ($organizer !== null) {
            return $organizer;
        }
        $organizer = new Organizer();
        $organizer->setName($user->getDisplayName());
        $organizer->setEmail($user->getEmail());
        $organizer->setUser($user);
        $this->entityManager->persist($organizer);
        $this->entityManager->flush();
        return $organizer;
    }
}
