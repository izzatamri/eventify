<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\ServiceProvider;
use App\Form\ServiceProviderType;
use App\Repository\ServiceProviderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/service-providers', name: 'app_admin_service_provider_')]
class ServiceProviderController extends AbstractController
{
    public function __construct(
        private readonly ServiceProviderRepository $repository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $sortBy = $request->query->getString('sort');
        $sortOrder = $request->query->getString('order');
        $search = $request->query->getString('q');
        $filterServiceType = $request->query->getString('service_type');
        $filterStatus = $request->query->getString('status');

        if (!\in_array($sortBy, ServiceProviderRepository::SORT_FIELDS, true)) {
            $sortBy = ServiceProviderRepository::SORT_NAME;
        }
        if ($sortOrder !== 'asc' && $sortOrder !== 'desc') {
            $sortOrder = 'asc';
        }

        $providers = $this->repository->findWithSortAndSearch(
            $sortBy,
            $sortOrder,
            $search !== '' ? $search : null,
            $filterServiceType !== '' ? $filterServiceType : null,
            $filterStatus !== '' ? $filterStatus : null
        );

        return $this->render('admin/service_provider/index.html.twig', [
            'providers' => $providers,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'search' => $search,
            'filterServiceType' => $filterServiceType,
            'filterStatus' => $filterStatus,
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    public function create(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $provider = new ServiceProvider();
        $form = $this->createForm(ServiceProviderType::class, $provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($provider);
            $this->entityManager->flush();
            $this->addFlash('success', 'Service provider created.');
            return $this->redirectToRoute('app_admin_service_provider_index');
        }

        return $this->render('admin/service_provider/form.html.twig', [
            'provider' => $provider,
            'form' => $form,
            'title' => 'New service provider',
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    public function edit(Request $request, ServiceProvider $provider): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form = $this->createForm(ServiceProviderType::class, $provider);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Service provider updated.');
            return $this->redirectToRoute('app_admin_service_provider_index');
        }

        return $this->render('admin/service_provider/form.html.twig', [
            'provider' => $provider,
            'form' => $form,
            'title' => 'Edit service provider',
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function delete(Request $request, ServiceProvider $provider): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('service_provider_delete_' . $provider->getId(), $token)) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_admin_service_provider_index');
        }
        $this->entityManager->remove($provider);
        $this->entityManager->flush();
        $this->addFlash('success', 'Service provider deleted.');
        return $this->redirectToRoute('app_admin_service_provider_index');
    }
}
