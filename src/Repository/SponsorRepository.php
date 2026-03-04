<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Sponsor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sponsor>
 */
class SponsorRepository extends ServiceEntityRepository
{
    public const SORT_NAME = 'name';
    public const SORT_EMAIL = 'email';
    public const SORT_STATUS = 'status';
    public const SORT_PAYMENT = 'paymentStatus';
    public const SORT_CREATED = 'createdAt';
    public const SORT_PACKAGE = 'package';

    public const SORT_FIELDS = [self::SORT_NAME, self::SORT_EMAIL, self::SORT_STATUS, self::SORT_PAYMENT, self::SORT_CREATED, self::SORT_PACKAGE];

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sponsor::class);
    }

    /**
     * @return Sponsor[]
     */
    public function findByEventOrderByName(Event $event): array
    {
        return $this->findByEventWithSortAndSearch($event, self::SORT_NAME, 'asc', null, null, null, null, null);
    }

    /**
     * @return Sponsor[]
     */
    public function findByEventAndStatus(Event $event, string $status): array
    {
        return $this->findByEventWithSortAndSearch($event, self::SORT_NAME, 'asc', null, null, $status, null, null);
    }

    /**
     * Multi-criteria sort and search for back office.
     *
     * @return Sponsor[]
     */
    public function findByEventWithSortAndSearch(
        Event $event,
        string $sortBy,
        string $order,
        ?string $searchName,
        ?string $searchEmail,
        ?string $filterStatus,
        ?string $filterPaymentStatus,
        ?int $filterPackageId
    ): array {
        $sortBy = \in_array($sortBy, self::SORT_FIELDS, true) ? $sortBy : self::SORT_NAME;
        $order = strtolower($order) === 'desc' ? 'DESC' : 'ASC';

        $qb = $this->createQueryBuilder('s')
            ->leftJoin('s.sponsorshipPackage', 'pkg')
            ->andWhere('s.event = :event')

            ->setParameter('event', $event);

        if ($searchName !== null && $searchName !== '') {
            $qb->andWhere('s.name LIKE :searchName')
                ->setParameter('searchName', '%' . addcslashes($searchName, '%_') . '%');
        }
        if ($searchEmail !== null && $searchEmail !== '') {
            $qb->andWhere('s.email LIKE :searchEmail')
                ->setParameter('searchEmail', '%' . addcslashes($searchEmail, '%_') . '%');
        }
        if ($filterStatus !== null && $filterStatus !== '') {
            $qb->andWhere('s.status = :filterStatus')
                ->setParameter('filterStatus', $filterStatus);
        }
        if ($filterPaymentStatus !== null && $filterPaymentStatus !== '') {
            $qb->andWhere('s.paymentStatus = :filterPaymentStatus')
                ->setParameter('filterPaymentStatus', $filterPaymentStatus);
        }
        if ($filterPackageId !== null && $filterPackageId > 0) {
            $qb->andWhere('pkg.id = :filterPackageId')
                ->setParameter('filterPackageId', $filterPackageId);
        }

        if ($sortBy === self::SORT_PACKAGE) {
            $qb->orderBy('pkg.name', $order);
        } else {
            $qb->orderBy('s.' . $sortBy, $order);
        }

        return $qb->getQuery()->getResult();
    }
}
