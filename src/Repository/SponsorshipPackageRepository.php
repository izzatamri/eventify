<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\SponsorshipPackage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SponsorshipPackage>
 */
class SponsorshipPackageRepository extends ServiceEntityRepository
{
    public const SORT_NAME = 'name';
    public const SORT_PRICE = 'price';
    public const SORT_TABLES = 'numberOfTables';
    public const SORT_SEATS = 'seatsPerTable';
    public const SORT_CREATED = 'createdAt';

    public const SORT_FIELDS = [self::SORT_NAME, self::SORT_PRICE, self::SORT_TABLES, self::SORT_SEATS, self::SORT_CREATED];

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SponsorshipPackage::class);
    }

    /**
     * @return SponsorshipPackage[]
     */
    public function findByEventOrderByName(Event $event): array
    {
        return $this->findByEventWithSortAndSearch($event, self::SORT_NAME, 'asc', null);
    }

    /**
     * Multi-criteria sort and search for back office.
     *
     * @return SponsorshipPackage[]
     */
    public function findByEventWithSortAndSearch(Event $event, string $sortBy, string $order, ?string $search): array
    {
        $sortBy = \in_array($sortBy, self::SORT_FIELDS, true) ? $sortBy : self::SORT_NAME;
        $order = strtolower($order) === 'desc' ? 'DESC' : 'ASC';

        $qb = $this->createQueryBuilder('s')
            ->andWhere('s.event = :event')
            ->setParameter('event', $event);

        if ($search !== null && $search !== '') {
            $qb->andWhere('s.name LIKE :q OR s.description LIKE :q OR s.benefits LIKE :q')
                ->setParameter('q', '%' . addcslashes($search, '%_') . '%');
        }

        $qb->orderBy('s.' . $sortBy, $order);

        return $qb->getQuery()->getResult();
    }
}
