<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Repository\EventRepository;
use App\Repository\OrderRepository;
use App\Repository\OrganizerRepository;
use App\Repository\ServiceProviderRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin', name: 'app_admin_')]
class DashboardController extends AbstractController
{
    #[Route('', name: 'dashboard', methods: ['GET'])]
    public function index(
        UserRepository $userRepository,
        EventRepository $eventRepository,
        OrderRepository $orderRepository,
        ServiceProviderRepository $serviceProviderRepository,
        OrganizerRepository $organizerRepository,
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $totalUsers = $userRepository->count([]);
        $totalEvents = $eventRepository->count([]);
        $totalOrders = $orderRepository->count([]);
        $totalServiceProviders = $serviceProviderRepository->count([]);
        $bestEvents = $eventRepository->findTopBySold(5);
        $bestOrganizers = $organizerRepository->findTopByEventCount(5);

        $byCountry = $eventRepository->findCountByCountry();
        $totalByCountry = array_sum(array_column($byCountry, 'count'));
        $salesByLocations = [];
        foreach ($byCountry as $row) {
            $salesByLocations[] = [
                'country' => $row['country'],
                'count' => $row['count'],
                'percentage' => $totalByCountry > 0 ? round(($row['count'] / $totalByCountry) * 100) : 0,
            ];
        }

        $year = (int) date('Y');
        $monthlyStats = $orderRepository->getMonthlyStats($year);
        $chartMonthly = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'orders' => array_column($monthlyStats, 'orders'),
            'earnings' => array_map(fn (float $v) => round($v, 2), array_column($monthlyStats, 'earnings')),
            'refunds' => array_column($monthlyStats, 'refunds'),
        ];

        return $this->render('admin/dashboard.html.twig', [
            'total_users' => $totalUsers,
            'total_events' => $totalEvents,
            'total_orders' => $totalOrders,
            'total_service_providers' => $totalServiceProviders,
            'best_events' => $bestEvents,
            'best_organizers' => $bestOrganizers,
            'sales_by_locations' => $salesByLocations,
            'chart_monthly' => $chartMonthly,
        ]);
    }
}
