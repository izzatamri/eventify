<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EventController extends AbstractController
{
    #[Route('/events', name: 'app_events', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('events.html.twig');
    }

    #[Route('/events/create', name: 'app_event_create', methods: ['GET'])]
    public function create(): Response
    {
        return $this->render('speakers-single.html.twig');
    }
}
