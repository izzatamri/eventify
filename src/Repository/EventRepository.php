<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * List events with optional search and sort.
     *
     * @param string|null $search Free-text search on title, description, organizer, and venue/location
     * @param string      $sort   One of 'date_asc', 'date_desc'
     *
     * @return Event[]
     */
    public function searchEvents(?string $search, string $sort = 'date_asc'): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.venue', 'v')
            ->leftJoin('e.organizer', 'o');

        if ($search !== null && $search !== '') {
            $qb
                ->andWhere(
                    'LOWER(e.title) LIKE :q
                    OR LOWER(COALESCE(e.description, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.name, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.city, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.country, \'\')) LIKE :q
                    OR LOWER(COALESCE(o.name, \'\')) LIKE :q'
                )
                ->setParameter('q', '%' . mb_strtolower($search) . '%');
        }

        $direction = $sort === 'date_desc' ? 'DESC' : 'ASC';

        $qb->orderBy('e.startDatetime', $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Event[]
     */
    public function findPublishedOrderByStart(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.status = :status')
            ->setParameter('status', Event::STATUS_PUBLISHED)
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Events where the given user is the organizer (via organizer.user).
     * Optionally filter by status.
     *
     * @return Event[]
     */
    public function findByOrganizerUserOrderByStart(User $user, ?string $status = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->innerJoin('e.organizer', 'o')
            ->andWhere('o.user = :user')
            ->setParameter('user', $user)
            ->orderBy('e.startDatetime', 'ASC');
        if ($status !== null && $status !== '') {
            $qb->andWhere('e.status = :status')->setParameter('status', $status);
        }
        return $qb->getQuery()->getResult();
    }
}
