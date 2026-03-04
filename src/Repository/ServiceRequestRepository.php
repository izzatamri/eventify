<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\ServiceRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServiceRequest>
 */
class ServiceRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceRequest::class);
    }

    /** @return ServiceRequest[] */
    public function findByEvent(Event $event): array
    {
        return $this->createQueryBuilder('sr')
            ->andWhere('sr.event = :event')
            ->setParameter('event', $event)
            ->orderBy('sr.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return ServiceRequest[] */
    public function findOpenByServiceType(string $serviceType): array
    {
        return $this->createQueryBuilder('sr')
            ->andWhere('sr.status = :status')
            ->andWhere('sr.serviceType = :type')
            ->setParameter('status', ServiceRequest::STATUS_OPEN)
            ->setParameter('type', $serviceType)
            ->orderBy('sr.deadline', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
