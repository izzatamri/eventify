<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/event-schedule', name: 'app_event_schedule', methods: ['GET'])]
    public function eventSchedule(): Response
    {
        return $this->render('event-schedule.html.twig');
    }

    #[Route('/event-details', name: 'app_event_single', methods: ['GET'])]
    public function eventSingle(): Response
    {
        return $this->render('event-single.html.twig');
    }
}
