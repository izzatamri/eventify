<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
    ) {
    }

    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(): Response
    {
        // Show a few upcoming published events on the homepage
        $events = $this->eventRepository->findPublishedOrderByStart();
        $featuredEvents = \array_slice($events, 0, 6);

        return $this->render('index.html.twig', [
            'featured_events' => $featuredEvents,
        ]);
    }
}
