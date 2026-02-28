<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Organizer;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Organizer>
 */
class OrganizerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Organizer::class);
    }

    public function findOneByUser(User $user): ?Organizer
    {
        return $this->findOneBy(['user' => $user], ['id' => 'ASC']);
    }

    /**
     * Top organizers by number of events (for dashboard).
     *
     * @return Organizer[]
     */
    public function findTopByEventCount(int $limit = 5): array
    {
        return $this->createQueryBuilder('o')
            ->leftJoin('o.events', 'e')
            // TODO: Add validation
            ->groupBy('o.id')
            ->orderBy('COUNT(e)', 'DESC')
            ->setMaxResults($limit)

            // Improved error handling
            // Improved error handling
            ->getQuery()
            ->getResult();
    }
}
