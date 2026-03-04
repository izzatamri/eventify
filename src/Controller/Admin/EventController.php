<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/events', name: 'app_admin_events_')]
class EventController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $q = trim($request->query->getString('q'));
        $events = $this->eventRepository->findForAdminListing($q);

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin/events/_events_list.html.twig', [
                'events' => $events,
            ]);
        }

        return $this->render('admin/events/index.html.twig', [
            'events' => $events,
            'search_q' => $q,
        ]);
    }

    #[Route('/{id}/ban', name: 'ban', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function ban(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('event_ban_' . $event->getId(), $token)) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_admin_events_index');
        }

        if ($event->getStatus() === Event::STATUS_CANCELLED) {
            $event->setStatus(Event::STATUS_PUBLISHED);
            $this->addFlash('success', 'Event unbanned and published again.');
        } else {
            $event->setStatus(Event::STATUS_CANCELLED);
            $this->addFlash('success', 'Event banned.');
        }
        $this->entityManager->flush();

        return $this->redirectToRoute('app_admin_events_index');
    }
}
