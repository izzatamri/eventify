<?php

namespace App\Repository;

use App\Entity\Reponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reponse>
 */
class ReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reponse::class);
    }

    public function findBySearchAndSort(string $search = '', string $sort = 'date_reponse', string $order = 'DESC'): array
    {
        $qb = $this->createQueryBuilder('rep')
            ->leftJoin('rep.reclamation', 'rec')
            ->addSelect('rec');

        if (!empty($search)) {
            $qb->andWhere('rep.nom_rep LIKE :search OR rep.reponse_rep LIKE :search OR rep.adressmail_rep LIKE :search OR rec.sujetrec LIKE :search OR rec.id LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $allowedSorts = ['id', 'nom_rep', 'adressmail_rep', 'date_reponse', 'reclamation'];
        if (in_array($sort, $allowedSorts)) {
            if ($sort === 'reclamation') {
                $qb->orderBy('rec.id', $order === 'ASC' ? 'ASC' : 'DESC');
            } else {
                $qb->orderBy('rep.' . $sort, $order === 'ASC' ? 'ASC' : 'DESC');
            }
        } else {
            $qb->orderBy('rep.date_reponse', 'DESC');
        }

        return $qb->getQuery()->getResult();
    }
}