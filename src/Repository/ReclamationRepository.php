<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function findBySearchAndSort(string $search = '', string $sort = 'date_creation', string $order = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('r')
            ->leftJoin('r.yes', 'rep')
            ->addSelect('rep');

        if (!empty($search)) {
            $qb->andWhere('r.nomrec LIKE :search OR r.sujetrec LIKE :search OR r.descriptionrec LIKE :search OR r.adressmail LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $allowedSorts = ['id', 'nomrec', 'adressmail', 'sujetrec', 'date_creation', 'etat'];
        if (in_array($sort, $allowedSorts)) {
            $qb->orderBy('r.' . $sort, $order === 'ASC' ? 'ASC' : 'DESC');
        } else {
            $qb->orderBy('r.date_creation', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }

    public function getStatistics(): array
    {
        $total = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $pending = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.etat = :etat')
            ->setParameter('etat', 'Pending')
            ->getQuery()
            ->getSingleScalarResult();

        $resolved = $this->createQueryBuilder('r')
            ->select('COUNT(r.id)')
            ->where('r.etat = :etat')
            ->setParameter('etat', 'Resolved')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total' => $total,
            'pending' => $pending,
            'resolved' => $resolved
        ];
    }
}