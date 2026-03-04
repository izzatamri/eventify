<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ProviderScoreHistory;
use App\Entity\ServiceProvider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProviderScoreHistory>
 */
class ProviderScoreHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProviderScoreHistory::class);
    }

    /**
     * Returns score timeline for chart display: [['date' => 'Y-m-d', 'score' => float], ...]
     * @return array<int, array{date: string, score: float}>
     */
    public function findScoreTimeline(ServiceProvider $provider): array
    {
        $rows = $this->createQueryBuilder('h')
            ->select('h.recordedAt', 'h.score')
            ->andWhere('h.serviceProvider = :provider')
            ->setParameter('provider', $provider)
            ->orderBy('h.recordedAt', 'ASC')
            ->getQuery()
            ->getResult();

        return array_map(function ($r) {
            if (!\is_array($r)) {
                return ['date' => '', 'score' => 0.0];
            }
            $recordedAt = $r['recordedAt'] ?? $r[0] ?? null;
            $score = $r['score'] ?? $r[1] ?? 0;
            return [
                'date' => $recordedAt instanceof \DateTimeInterface ? $recordedAt->format('Y-m-d') : '',
                'score' => (float) $score,
            ];
        }, $rows);
    }
}
