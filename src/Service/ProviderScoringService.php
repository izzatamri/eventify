<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\ProviderScoreHistory;
use App\Entity\ServiceProvider;
use App\Repository\ServiceBookingRepository;
use App\Repository\ServiceProposalRepository;
use Doctrine\ORM\EntityManagerInterface;

class ProviderScoringService
{
    private const COMPLETION_BONUS_POINTS = 10.0;

    /**
     * Score formula (simplified and transparent):
     *   - Completed missions (40%): more completed bookings = higher trust
     *   - SIRET verified (20%): legal verification = professional credibility
     *   - RFQ response speed (20%): faster proposal submissions = better engagement
     *   - Platform seniority (20%): longer presence = more reliable
     *
     * Total: 0-100. Badge assigned by thresholds.
     */
    private const WEIGHT_MISSIONS = 0.40;
    private const WEIGHT_VERIFIED = 0.20;
    private const WEIGHT_RESPONSE = 0.20;
    private const WEIGHT_SENIORITY = 0.20;

    private const MAX_MISSIONS = 20;
    private const RESPONSE_BASELINE_HOURS = 24.0;
    private const MAX_SENIORITY_MONTHS = 24;

    public function __construct(
        private readonly ServiceBookingRepository $bookingRepository,
        private readonly ServiceProposalRepository $proposalRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    /**
     * Recalculates a provider's score using 4 clear criteria:
     *
     * 1. Completed missions (40%) — How many bookings marked "completed"?
     *    → 0 missions = 0 pts, 20+ missions = full 100 pts
     *
     * 2. SIRET verified (20%) — Is the company legally verified?
     *    → Verified = 100 pts, Not verified = 0 pts
     *
     * 3. RFQ response speed (20%) — How fast do they submit proposals?
     *    → Under 24h avg = 100 pts, slower = proportionally less
     *
     * 4. Platform seniority (20%) — How long on the platform?
     *    → 0 months = 0 pts, 24+ months = full 100 pts
     *
     * Badge thresholds: <40 = none, 40-59 = rising, 60-74 = certified,
     *                    75-89 = top_performer, >=90 = preferred_partner
     */
    public function recalculateScore(ServiceProvider $provider): void
    {
        $completedCount = $this->bookingRepository->countCompletedForProvider($provider);
        $missionScore = min(100.0, ($completedCount / self::MAX_MISSIONS) * 100.0);

        $verifiedScore = $provider->isVerified() ? 100.0 : 0.0;

        $avgResponseHours = $this->proposalRepository->averageResponseTimeHours($provider);
        if ($avgResponseHours !== null && $avgResponseHours > 0) {
            $responseScore = min(100.0, (self::RESPONSE_BASELINE_HOURS / $avgResponseHours) * 100.0);
        } else {
            $responseScore = 50.0;
        }

        $createdAt = $provider->getCreatedAt();
        $months = 0;
        if ($createdAt) {
            $diff = $createdAt->diff(new \DateTimeImmutable());
            $months = ((int) $diff->format('%y') * 12) + (int) $diff->format('%m');
        }
        $seniorityScore = min(100.0, ($months / self::MAX_SENIORITY_MONTHS) * 100.0);

        $totalScore = round(
            ($missionScore * self::WEIGHT_MISSIONS)
            + ($verifiedScore * self::WEIGHT_VERIFIED)
            + ($responseScore * self::WEIGHT_RESPONSE)
            + ($seniorityScore * self::WEIGHT_SENIORITY),
            2
        );
        $totalScore = min(100.0, max(0.0, $totalScore));

        $badge = match (true) {
            $totalScore >= 90.0 => 'preferred_partner',
            $totalScore >= 75.0 => 'top_performer',
            $totalScore >= 60.0 => 'certified',
            $totalScore >= 40.0 => 'rising',
            default => 'none',
        };

        $provider->setScore(number_format($totalScore, 2, '.', ''));
        $provider->setBadge($badge);

        $history = new ProviderScoreHistory();
        $history->setServiceProvider($provider);
        $history->setScore(number_format($totalScore, 2, '.', ''));
        $history->setBadge($badge);

        $this->entityManager->persist($history);
        $this->entityManager->flush();
    }

    public function addCompletionBonus(ServiceProvider $provider, float $bonusPoints = self::COMPLETION_BONUS_POINTS): void
    {
        $currentScore = (float) $provider->getScore();
        $newScore = round(min(100.0, max(0.0, $currentScore + $bonusPoints)), 2);

        $badge = match (true) {
            $newScore >= 90.0 => 'preferred_partner',
            $newScore >= 75.0 => 'top_performer',
            $newScore >= 60.0 => 'certified',
            $newScore >= 40.0 => 'rising',
            default => 'none',
        };

        $provider->setScore(number_format($newScore, 2, '.', ''));
        $provider->setBadge($badge);

        $history = new ProviderScoreHistory();
        $history->setServiceProvider($provider);
        $history->setScore(number_format($newScore, 2, '.', ''));
        $history->setBadge($badge);

        $this->entityManager->persist($history);
        $this->entityManager->flush();
    }
}
