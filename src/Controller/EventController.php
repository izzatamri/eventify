<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/events')]
class EventController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'app_events', methods: ['GET'])]
    public function index(): Response
    {
        $events = $this->eventRepository->findAllOrderByStart();

        return $this->render('events.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/create', name: 'app_event_create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($event);
            $this->entityManager->flush();
            $this->addFlash('success', 'Event created successfully.');
            return $this->redirectToRoute('app_events');
        }

        return $this->render('event_form.html.twig', [
            'event' => $event,
            'form' => $form,
            'title' => 'Create Event',
        ]);
    }

    #[Route('/{id}', name: 'app_event_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Event $event): Response
    {
        $otherEvents = $this->eventRepository->findPublishedOrderByStart();
        $otherEvents = array_values(array_filter($otherEvents, fn (Event $e) => $e->getId() !== $event->getId()));
        $otherEvents = array_slice($otherEvents, 0, 3);

        return $this->render('event_show.html.twig', [
            'event' => $event,
            'otherEvents' => $otherEvents,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_event_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Event updated successfully.');
            return $this->redirectToRoute('app_events');
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
}
