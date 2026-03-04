<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\ServiceBooking;
use App\Entity\ServiceProvider;
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

    /**
     * Distribution of completed missions by service category for a provider.
     * @return array<int, array{category: string, count: int}>
     */
    public function countCompletedByCategory(ServiceProvider $provider): array
    {
        return $this->createQueryBuilder('sb')
            ->select('sp.serviceType AS category', 'COUNT(sb.id) AS count')
            ->innerJoin('sb.serviceProvider', 'sp')
            ->andWhere('sb.serviceProvider = :provider')
            ->andWhere('sb.status = :completed')
            ->setParameter('provider', $provider)
            ->setParameter('completed', ServiceBooking::STATUS_COMPLETED)
            ->groupBy('sp.serviceType')
            ->getQuery()
            ->getResult();
    }

    /**
     * Number of completed missions per month for the last N months.
     * @return array<int, array{month: string, count: int}>
     */
    public function countCompletedPerMonth(ServiceProvider $provider, int $months = 12): array
    {
        $since = new \DateTimeImmutable("-{$months} months");

        $bookings = $this->createQueryBuilder('sb')
            ->select('sb.scheduledDate')
            ->andWhere('sb.serviceProvider = :provider')
            ->andWhere('sb.status = :completed')
            ->andWhere('sb.scheduledDate >= :since')
            ->setParameter('provider', $provider)
            ->setParameter('completed', ServiceBooking::STATUS_COMPLETED)
            ->setParameter('since', $since)
            ->getQuery()
            ->getResult();

        $byMonth = [];
        foreach ($bookings as $row) {
            $date = \is_array($row) ? ($row['scheduledDate'] ?? $row[0] ?? null) : $row;
            if ($date instanceof \DateTimeInterface) {
                $month = $date->format('Y-m');
                $byMonth[$month] = ($byMonth[$month] ?? 0) + 1;
            }
        }
        ksort($byMonth);

        $result = [];
        foreach ($byMonth as $month => $count) {
            $result[] = ['month' => $month, 'count' => $count];
        }
        return $result;
    }

    /**
     * Count completed missions for a provider.
     */
    public function countCompletedForProvider(ServiceProvider $provider): int
    {
        return (int) $this->createQueryBuilder('sb')
            ->select('COUNT(sb.id)')
            ->andWhere('sb.serviceProvider = :provider')
            ->andWhere('sb.status = :completed')
            ->setParameter('provider', $provider)
            ->setParameter('completed', ServiceBooking::STATUS_COMPLETED)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Average agreed price of completed bookings (used as a proxy for rating).
     */
    public function averageRatingForProvider(ServiceProvider $provider): ?float
    {
        $result = $this->createQueryBuilder('sb')
            ->select('AVG(sb.agreedPrice) AS avgRating')
            ->andWhere('sb.serviceProvider = :provider')
            ->andWhere('sb.status = :completed')
            ->setParameter('provider', $provider)
            ->setParameter('completed', ServiceBooking::STATUS_COMPLETED)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null ? (float) $result : null;
    }

    /**
     * Platform-wide average agreed price for completed bookings of a given service type.
     */
    public function platformAverageRatingForCategory(string $serviceType): ?float
    {
        $result = $this->createQueryBuilder('sb')
            ->select('AVG(sb.agreedPrice) AS avgRating')
            ->innerJoin('sb.serviceProvider', 'sp')
            ->andWhere('sp.serviceType = :type')
            ->andWhere('sb.status = :completed')
            ->setParameter('type', $serviceType)
            ->setParameter('completed', ServiceBooking::STATUS_COMPLETED)
            ->getQuery()
            ->getSingleScalarResult();

        return $result !== null ? (float) $result : null;
    }
}
