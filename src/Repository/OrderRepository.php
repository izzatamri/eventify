<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Order;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Order>
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    /** @return Order[] */
    public function findByUserOrderByCreatedAt(User $user): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.user = :user')
            ->setParameter('user', $user)
            ->orderBy('o.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return Order[] */
    public function findByEventOrderByCreatedAt(Event $event): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.event = :event')
            ->setParameter('event', $event)
            ->orderBy('o.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Monthly stats for the given year (for dashboard overview chart).
     * Returns array of 12 elements (Jan=0 .. Dec=11): ['orders' => int, 'earnings' => float, 'refunds' => int].
     */
    public function getMonthlyStats(int $year): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "
            SELECT 
                MONTH(o.created_at) AS m,
                COUNT(o.id) AS order_count,
                COALESCE(SUM(CASE WHEN o.status = :confirmed THEN o.total_price ELSE 0 END), 0) AS earnings,
                COALESCE(SUM(CASE WHEN o.status = :cancelled THEN 1 ELSE 0 END), 0) AS refunds
            FROM `order` o
            WHERE YEAR(o.created_at) = :year
            GROUP BY m
            ORDER BY m
        ";
        $result = $conn->executeQuery($sql, [
            'year' => $year,
            'confirmed' => Order::STATUS_CONFIRMED,
            'cancelled' => Order::STATUS_CANCELLED,
        ])->fetchAllAssociative();

        $byMonth = array_fill(0, 12, ['orders' => 0, 'earnings' => 0.0, 'refunds' => 0]);
        foreach ($result as $row) {
            $i = (int) $row['m'] - 1;
            if ($i >= 0 && $i < 12) {
                $byMonth[$i] = [
                    'orders' => (int) $row['order_count'],
                    'earnings' => (float) $row['earnings'],
                    'refunds' => (int) $row['refunds'],
                ];
            }
        }
        return $byMonth;
    }
}
