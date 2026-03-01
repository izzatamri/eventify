<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ServiceProvider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServiceProvider>
 */
class ServiceProviderRepository extends ServiceEntityRepository
{
    public const SORT_NAME = 'name';
    public const SORT_EMAIL = 'email';
    public const SORT_SERVICE_TYPE = 'serviceType';
    public const SORT_HOURLY_RATE = 'hourlyRate';
    public const SORT_STATUS = 'status';
    public const SORT_CREATED = 'createdAt';

    public const SORT_FIELDS = [
        self::SORT_NAME,
        self::SORT_EMAIL,
        self::SORT_SERVICE_TYPE,
        self::SORT_HOURLY_RATE,
        self::SORT_STATUS,
        self::SORT_CREATED,
    ];

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceProvider::class);
    }

    /**
     * @return ServiceProvider[]
     */
    public function findAllOrderByName(): array
    {
        return $this->findWithSortAndSearch(self::SORT_NAME, 'asc', null, null, null);
    }

    /**
     * @return ServiceProvider[]
     */
    public function findActiveByServiceType(?string $serviceType = null): array
    {
        $qb = $this->createQueryBuilder('sp')
            ->andWhere('sp.status = :status')
            ->setParameter('status', ServiceProvider::STATUS_ACTIVE)
            ->orderBy('sp.name', 'ASC');
        if ($serviceType !== null && $serviceType !== '') {
            $qb->andWhere('sp.serviceType = :serviceType')
                ->setParameter('serviceType', $serviceType);
        }
        return $qb->getQuery()->getResult();
    }

    /**
     * Multi-criteria sort and search for admin.
     *
     * @return ServiceProvider[]
     */
    public function findWithSortAndSearch(
        string $sortBy,
        string $order,
        ?string $search,
        ?string $filterServiceType,
        ?string $filterStatus
    ): array {
        $sortBy = \in_array($sortBy, self::SORT_FIELDS, true) ? $sortBy : self::SORT_NAME;
        $order = strtolower($order) === 'desc' ? 'DESC' : 'ASC';

        $qb = $this->createQueryBuilder('sp');

        if ($search !== null && $search !== '') {
            $qb->andWhere('sp.name LIKE :q OR sp.email LIKE :q OR sp.phone LIKE :q')
                ->setParameter('q', '%' . addcslashes($search, '%_') . '%');
        }
        if ($filterServiceType !== null && $filterServiceType !== '' && \in_array($filterServiceType, ServiceProvider::SERVICE_TYPES, true)) {
            $qb->andWhere('sp.serviceType = :filterServiceType')
                ->setParameter('filterServiceType', $filterServiceType);
        }
        if ($filterStatus !== null && $filterStatus !== '' && \in_array($filterStatus, ServiceProvider::STATUSES, true)) {
            $qb->andWhere('sp.status = :filterStatus')
                ->setParameter('filterStatus', $filterStatus);
        }

        $qb->orderBy('sp.' . $sortBy, $order);

        return $qb->getQuery()->getResult();
    }
}
