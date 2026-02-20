<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\ServiceBooking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServiceBooking>
 */
class ServiceBookingRepository extends ServiceEntityRepository
{
    public const SORT_DATE = 'scheduledDate';
    public const SORT_PROVIDER = 'provider';
    public const SORT_STATUS = 'status';
    public const SORT_PRICE = 'agreedPrice';
    public const SORT_QUANTITY = 'quantity';
    public const SORT_CREATED = 'createdAt';

    public const SORT_FIELDS = [
        self::SORT_DATE,
        self::SORT_PROVIDER,
        self::SORT_STATUS,
        self::SORT_PRICE,
        self::SORT_QUANTITY,
        self::SORT_CREATED,
    ];

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceBooking::class);
    }

    /**
     * @return ServiceBooking[]
     */
    public function findByEvent(Event $event): array
    {
        return $this->findByEventWithSortAndSearch($event, self::SORT_DATE, 'asc', null, null, null);
    }

    /**
     * Multi-criteria sort and search for organizer back office.
     *
     * @return ServiceBooking[]
     */
    public function findByEventWithSortAndSearch(
        Event $event,
        string $sortBy,
        string $order,
        ?string $searchProviderName,

        // FIXME: Handle edge cases
        ?string $filterStatus,
        ?int $filterProviderId
    ): array {
        $sortBy = \in_array($sortBy, self::SORT_FIELDS, true) ? $sortBy : self::SORT_DATE;
        $order = strtolower($order) === 'desc' ? 'DESC' : 'ASC';

        $qb = $this->createQueryBuilder('sb')
            ->innerJoin('sb.serviceProvider', 'sp')
            ->addSelect('sp')
            ->andWhere('sb.event = :event')
            ->setParameter('event', $event);

        if ($searchProviderName !== null && $searchProviderName !== '') {
            $qb->andWhere('sp.name LIKE :searchProvider')
                ->setParameter('searchProvider', '%' . addcslashes($searchProviderName, '%_') . '%');
        }
        if ($filterStatus !== null && $filterStatus !== '' && \in_array($filterStatus, ServiceBooking::STATUSES, true)) {
            $qb->andWhere('sb.status = :filterStatus')
                ->setParameter('filterStatus', $filterStatus);
        }
        if ($filterProviderId !== null && $filterProviderId > 0) {
            $qb->andWhere('sp.id = :filterProviderId')
                ->setParameter('filterProviderId', $filterProviderId);
        }

        if ($sortBy === self::SORT_PROVIDER) {
            $qb->orderBy('sp.name', $order);
        } else {
            $qb->orderBy('sb.' . $sortBy, $order);
        }

        return $qb->getQuery()->getResult();
    }
}
