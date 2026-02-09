<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin', name: 'app_admin_')]
class DashboardController extends AbstractController
{
    #[Route('', name: 'dashboard', methods: ['GET'])]
    public function index(UserRepository $userRepository, EventRepository $eventRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $totalUsers = $userRepository->count([]);
        $totalEvents = $eventRepository->count([]);

        return $this->render('admin/dashboard.html.twig', [
            'total_users' => $totalUsers,
            'total_events' => $totalEvents,
        ]);
    }
}
