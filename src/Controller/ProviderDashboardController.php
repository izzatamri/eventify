<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\ServiceProvider;
use App\Enum\ProviderBadge;
use App\Repository\ProviderScoreHistoryRepository;
use App\Repository\ServiceBookingRepository;
use App\Repository\ServiceProposalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ProviderDashboardController extends AbstractController
{
    public function __construct(
        private readonly ServiceBookingRepository $bookingRepository,
        private readonly ProviderScoreHistoryRepository $scoreHistoryRepository,
        private readonly ServiceProposalRepository $proposalRepository,
        private readonly ChartBuilderInterface $chartBuilder,
    ) {
    }

    #[Route('/provider/{id}/dashboard', name: 'app_provider_dashboard', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function index(ServiceProvider $provider): Response
    {
        $badge = ProviderBadge::tryFrom($provider->getBadge()) ?? ProviderBadge::None;

        $completedMissions = $this->bookingRepository->countCompletedForProvider($provider);
        $avgResponseHours = $this->proposalRepository->averageResponseTimeHours($provider);

        $createdAt = $provider->getCreatedAt();
        $seniorityMonths = 0;
        if ($createdAt) {
            $diff = $createdAt->diff(new \DateTimeImmutable());
            $seniorityMonths = ((int) $diff->format('%y') * 12) + (int) $diff->format('%m');
        }

        $maxMissions = 20;
        $maxSeniority = 24;
        $responseBaseline = 24.0;

        $responsePercent = 50;
        if ($avgResponseHours !== null && $avgResponseHours > 0) {
            $responsePercent = (int) min(100, ($responseBaseline / $avgResponseHours) * 100);
        }

        $stats = [
            'completedMissions' => $completedMissions,
            'maxMissions' => $maxMissions,
            'missionsPercent' => (int) min(100, ($completedMissions / $maxMissions) * 100),
            'avgResponseHours' => $avgResponseHours !== null ? round($avgResponseHours, 1) : '—',
            'responsePercent' => $responsePercent,
            'seniorityMonths' => $seniorityMonths,
            'seniorityPercent' => (int) min(100, ($seniorityMonths / $maxSeniority) * 100),
        ];

        return $this->render('provider/dashboard.html.twig', [
            'provider' => $provider,
            'badge' => $badge,
            'stats' => $stats,
            'pieChart' => $this->buildCategoryPieChart($provider),
            'barChart' => $this->buildMonthlyBarChart($provider),
            'lineChart' => $this->buildScoreLineChart($provider),
            'benchmarkChart' => $this->buildBenchmarkChart($provider),
        ]);
    }

    private function buildCategoryPieChart(ServiceProvider $provider): Chart
    {
        $data = $this->bookingRepository->countCompletedByCategory($provider);
        $labels = array_map(fn(array $r) => $r['category'], $data);
        $values = array_map(fn(array $r) => (int) $r['count'], $data);

        $chart = $this->chartBuilder->createChart(Chart::TYPE_PIE);
        $chart->setData([
            'labels' => $labels ?: ['No data yet'],
            'datasets' => [[
                'data' => $values ?: [1],
                'backgroundColor' => $values ? ['#6c63ff', '#f5a623', '#28a745', '#dc3545', '#17a2b8', '#ffc107'] : ['#e2e8f0'],
            ]],
        ]);
        $chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => ['legend' => ['position' => 'bottom']],
        ]);

        return $chart;
    }

    private function buildMonthlyBarChart(ServiceProvider $provider): Chart
    {
        $data = $this->bookingRepository->countCompletedPerMonth($provider);
        $labels = array_map(fn(array $r) => $r['month'], $data);
        $values = array_map(fn(array $r) => (int) $r['count'], $data);

        $chart = $this->chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => $labels ?: ['No data'],
            'datasets' => [[
                'label' => 'Missions',
                'data' => $values ?: [0],
                'backgroundColor' => '#6c63ff',
                'borderRadius' => 4,
            ]],
        ]);
        $chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'scales' => [
                'y' => ['beginAtZero' => true, 'ticks' => ['stepSize' => 1]],
            ],
            'plugins' => ['legend' => ['display' => false]],
        ]);

        return $chart;
    }

    private function buildScoreLineChart(ServiceProvider $provider): Chart
    {
        $data = $this->scoreHistoryRepository->findScoreTimeline($provider);
        $labels = array_map(fn(array $r) => $r['date'], $data);
        $values = array_map(fn(array $r) => (float) $r['score'], $data);

        $chart = $this->chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels ?: ['Now'],
            'datasets' => [[
                'label' => 'Score',
                'data' => $values ?: [(float) $provider->getScore()],
                'borderColor' => '#6c63ff',
                'backgroundColor' => 'rgba(108, 99, 255, 0.1)',
                'fill' => true,
                'tension' => 0.3,
                'pointRadius' => 4,
            ]],
        ]);
        $chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'scales' => [
                'y' => ['beginAtZero' => true, 'max' => 100],
            ],
            'plugins' => ['legend' => ['display' => false]],
        ]);

        return $chart;
    }

    private function buildBenchmarkChart(ServiceProvider $provider): Chart
    {
        $providerAvg = $this->bookingRepository->averageRatingForProvider($provider) ?? 0;
        $platformAvg = $this->bookingRepository->platformAverageRatingForCategory($provider->getServiceType()) ?? 0;

        $chart = $this->chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => ['Avg. Booking Value'],
            'datasets' => [
                [
                    'label' => $provider->getName(),
                    'data' => [round($providerAvg, 2)],
                    'backgroundColor' => '#6c63ff',
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Platform (' . $provider->getServiceType() . ')',
                    'data' => [round($platformAvg, 2)],
                    'backgroundColor' => '#cbd5e1',
                    'borderRadius' => 4,
                ],
            ],
        ]);
        $chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'scales' => ['y' => ['beginAtZero' => true]],
            'plugins' => ['legend' => ['position' => 'bottom']],
        ]);

        return $chart;
    }
}
