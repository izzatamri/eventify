<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\ServiceProposal;
use App\Entity\ServiceProvider;
use App\Entity\ServiceRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ServiceProposal>
 */
class ServiceProposalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceProposal::class);
    }

    /** @return ServiceProposal[] */
    public function findByRequestOrderByScore(ServiceRequest $request): array
    {
        return $this->createQueryBuilder('sp')
            ->andWhere('sp.serviceRequest = :request')
            ->setParameter('request', $request)
            ->orderBy('sp.aiMatchScore', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /** @return ServiceProposal[] */
    public function findByProvider(ServiceProvider $provider): array
    {
        return $this->createQueryBuilder('sp')
            ->andWhere('sp.serviceProvider = :provider')
            ->setParameter('provider', $provider)
            ->orderBy('sp.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Average response time in hours for a provider's proposals relative to the request creation.
     */
    public function averageResponseTimeHours(ServiceProvider $provider): ?float
    {
        $proposals = $this->createQueryBuilder('sp')
            ->join('sp.serviceRequest', 'sr')
            ->andWhere('sp.serviceProvider = :provider')
            ->setParameter('provider', $provider)
            ->getQuery()
            ->getResult();

        if (\count($proposals) === 0) {
            return null;
        }

        $totalHours = 0.0;
        $count = 0;
        foreach ($proposals as $proposal) {
            $requestCreated = $proposal->getServiceRequest()->getCreatedAt();
            $proposalCreated = $proposal->getCreatedAt();
            if ($requestCreated && $proposalCreated) {
                $diff = $proposalCreated->getTimestamp() - $requestCreated->getTimestamp();
                $totalHours += max(0, $diff / 3600.0);
                $count++;
            }
        }

        return $count > 0 ? $totalHours / $count : null;
    }
}
