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
     * @return Event[]
     */
    public function findAllOrderByStart(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
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
