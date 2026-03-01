<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\ServiceProviderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/services', name: 'app_services_')]
class ServiceCatalogController extends AbstractController
{
    public function __construct(
        private readonly ServiceProviderRepository $serviceProviderRepository,
    ) {
    }

    #[Route('', name: 'catalog', methods: ['GET'])]
    public function catalog(): Response
    {
        $providers = $this->serviceProviderRepository->findActiveByServiceType(null);

        return $this->render('service_catalog/catalog.html.twig', [
            'providers' => $providers,
        ]);
    }
}
