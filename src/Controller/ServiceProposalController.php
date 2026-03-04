<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\ServiceProvider;
use App\Entity\ServiceProposal;
use App\Entity\ServiceRequest;
use App\Form\ServiceProposalType;
use App\Repository\ServiceProposalRepository;
use App\Repository\ServiceRequestRepository;
use App\Service\RfqNlpMatchingService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/service-requests/{requestId}/proposals', name: 'app_service_proposal_', requirements: ['requestId' => '\d+'])]
class ServiceProposalController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly ServiceProposalRepository $proposalRepository,
        private readonly ServiceRequestRepository $requestRepository,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(int $requestId): Response
    {
        $serviceRequest = $this->findRequestOr404($requestId);
        $proposals = $this->proposalRepository->findByRequestOrderByScore($serviceRequest);

        return $this->render('service_proposal/index.html.twig', [
            'serviceRequest' => $serviceRequest,
            'proposals' => $proposals,
        ]);
    }

    #[Route('/create/{providerId}', name: 'create', methods: ['GET', 'POST'], requirements: ['providerId' => '\d+'])]
    public function create(
        Request $httpRequest,
        int $requestId,
        int $providerId,
        RfqNlpMatchingService $nlpService,
    ): Response {
        $serviceRequest = $this->findRequestOr404($requestId);

        if ($serviceRequest->getStatus() !== ServiceRequest::STATUS_OPEN) {
            $this->addFlash('error', 'Cette demande n\'accepte plus de propositions.');
            return $this->redirectToRoute('app_service_proposal_index', ['requestId' => $requestId]);
        }

        $provider = $this->entityManager->getRepository(ServiceProvider::class)->find($providerId);
        if ($provider === null) {
            $this->addFlash('error', 'Prestataire introuvable.');
            return $this->redirectToRoute('app_service_proposal_index', ['requestId' => $requestId]);
        }

        $proposal = new ServiceProposal();
        $proposal->setServiceRequest($serviceRequest);
        $proposal->setServiceProvider($provider);

        $form = $this->createForm(ServiceProposalType::class, $proposal);
        $form->handleRequest($httpRequest);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($proposal);
            $this->entityManager->flush();

            try {
                $nlpService->analyzeProposal($proposal);
                $this->addFlash('success', 'Proposition soumise et analysée par l\'IA avec succès (Score : ' . ($proposal->getAiMatchScore() ?? '—') . '/100).');
            } catch (\Throwable $e) {
                $this->addFlash('warning', 'Proposition soumise, mais l\'analyse IA a échoué : ' . $e->getMessage());
            }

            return $this->redirectToRoute('app_service_proposal_index', ['requestId' => $requestId]);
        }

        return $this->render('service_proposal/form.html.twig', [
            'serviceRequest' => $serviceRequest,
            'provider' => $provider,
            'form' => $form,
        ]);
    }

    private function findRequestOr404(int $requestId): ServiceRequest
    {
        $request = $this->requestRepository->find($requestId);
        if ($request === null) {
            throw $this->createNotFoundException('Service request not found.');
        }
        return $request;
    }
}
