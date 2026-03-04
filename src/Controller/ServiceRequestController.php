<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\ServiceBooking;
use App\Entity\ServiceRequest;
use App\Event\MissionAwardedEvent;
use App\Form\ServiceRequestType;
use App\Repository\EventRepository;
use App\Repository\ServiceProposalRepository;
use App\Repository\ServiceProviderRepository;
use App\Repository\ServiceRequestRepository;
use App\Security\EventVoter;
use App\Service\RfqMailerService;
use App\Service\RfqNlpMatchingService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Workflow\WorkflowInterface;

#[Route('/events/{eventId}/service-requests', name: 'app_service_request_', requirements: ['eventId' => '\d+'])]
class ServiceRequestController extends AbstractController
{
    public function __construct(
        private readonly EventRepository $eventRepository,
        private readonly ServiceRequestRepository $requestRepository,
        private readonly ServiceProposalRepository $proposalRepository,
        private readonly ServiceProviderRepository $providerRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(int $eventId): Response
    {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        return $this->render('service_request/index.html.twig', [
            'event' => $event,
            'requests' => $this->requestRepository->findByEvent($event),
        ]);
    }

    #[Route('/create', name: 'create', methods: ['GET', 'POST'])]
    public function create(Request $httpRequest, int $eventId): Response
    {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        $serviceRequest = new ServiceRequest();
        $serviceRequest->setEvent($event);

        $form = $this->createForm(ServiceRequestType::class, $serviceRequest);
        $form->handleRequest($httpRequest);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($serviceRequest);
            $this->entityManager->flush();
            $this->addFlash('success', 'Demande de service créée avec succès.');
            return $this->redirectToRoute('app_service_request_index', ['eventId' => $event->getId()]);
        }

        return $this->render('service_request/form.html.twig', [
            'event' => $event,
            'form' => $form,
            'title' => 'Nouvelle demande de service',
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(int $eventId, int $id, RfqNlpMatchingService $nlpService): Response
    {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        $serviceRequest = $this->requestRepository->find($id);
        if ($serviceRequest === null || $serviceRequest->getEvent()->getId() !== $event->getId()) {
            $this->addFlash('error', 'Demande introuvable.');
            return $this->redirectToRoute('app_service_request_index', ['eventId' => $eventId]);
        }

        $proposals = $this->proposalRepository->findByRequestOrderByScore($serviceRequest);
        $aiRanking = null;

        if (\count($proposals) > 0 && $serviceRequest->getStatus() !== ServiceRequest::STATUS_DRAFT) {
            $aiRanking = $nlpService->rankProposals($serviceRequest);
        }

        $providers = $this->providerRepository->findBy(['status' => 'active']);

        return $this->render('service_request/show.html.twig', [
            'event' => $event,
            'serviceRequest' => $serviceRequest,
            'proposals' => $proposals,
            'aiRanking' => $aiRanking,
            'providers' => $providers,
        ]);
    }

    #[Route('/{id}/publish', name: 'publish', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function publish(
        Request $httpRequest,
        int $eventId,
        int $id,
        WorkflowInterface $serviceRequestStateMachine,
        RfqMailerService $mailerService,
    ): Response {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $serviceRequest = $this->requestRepository->find($id);

        if (!$this->isCsrfTokenValid('publish_request_' . $id, $httpRequest->request->getString('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        if ($serviceRequestStateMachine->can($serviceRequest, 'publish')) {
            $serviceRequestStateMachine->apply($serviceRequest, 'publish');
            $this->entityManager->flush();

            try {
                $mailerService->notifyProvidersOfNewRequest($serviceRequest);
                $this->addFlash('success', 'Demande publiée. Les prestataires ont été notifiés par email.');
            } catch (\Throwable) {
                $this->addFlash('warning', 'Demande publiée, mais les emails de notification n\'ont pas pu être envoyés.');
            }
        } else {
            $this->addFlash('error', 'Cette transition n\'est pas possible.');
        }

        return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
    }

    #[Route('/{id}/close', name: 'close', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function close(
        Request $httpRequest,
        int $eventId,
        int $id,
        WorkflowInterface $serviceRequestStateMachine,
    ): Response {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $serviceRequest = $this->requestRepository->find($id);

        if (!$this->isCsrfTokenValid('close_request_' . $id, $httpRequest->request->getString('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        if ($serviceRequestStateMachine->can($serviceRequest, 'close')) {
            $serviceRequestStateMachine->apply($serviceRequest, 'close');
            $this->entityManager->flush();
            $this->addFlash('success', 'Demande clôturée.');
        } else {
            $this->addFlash('error', 'Cette transition n\'est pas possible.');
        }

        return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
    }

    #[Route('/{id}/award/{proposalId}', name: 'award', methods: ['POST'], requirements: ['id' => '\d+', 'proposalId' => '\d+'])]
    public function award(
        Request $httpRequest,
        int $eventId,
        int $id,
        int $proposalId,
        WorkflowInterface $serviceRequestStateMachine,
        RfqMailerService $mailerService,
        EventDispatcherInterface $dispatcher,
    ): Response {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $serviceRequest = $this->requestRepository->find($id);

        if (!$this->isCsrfTokenValid('award_request_' . $id, $httpRequest->request->getString('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        $winningProposal = $this->proposalRepository->find($proposalId);
        if ($winningProposal === null || $winningProposal->getServiceRequest()->getId() !== $serviceRequest->getId()) {
            $this->addFlash('error', 'Proposition introuvable.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        if ($serviceRequestStateMachine->can($serviceRequest, 'award')) {
            $serviceRequestStateMachine->apply($serviceRequest, 'award');

            $booking = $this->createBookingFromProposal($event, $serviceRequest, $winningProposal);
            $this->entityManager->persist($booking);
            $this->entityManager->flush();

            $dispatcher->dispatch(new MissionAwardedEvent($serviceRequest, $winningProposal));

            try {
                $mailerService->notifyClosedRequest($serviceRequest, $winningProposal);
            } catch (\Throwable) {
            }

            $this->addFlash('success', sprintf(
                'Mission attribuée à %s. Une réservation a été créée automatiquement (confirmée).',
                $winningProposal->getServiceProvider()->getName()
            ));
        } else {
            $this->addFlash('error', 'Cette transition n\'est pas possible.');
        }

        return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
    }

    #[Route('/{id}/create-booking', name: 'create_booking_from_award', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function createBookingFromAward(
        Request $httpRequest,
        int $eventId,
        int $id,
    ): Response {
        $event = $this->findEventOr404($eventId);
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $serviceRequest = $this->requestRepository->find($id);

        if ($serviceRequest === null || $serviceRequest->getStatus() !== 'awarded') {
            $this->addFlash('error', 'Cette demande n\'est pas attribuée.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        if (!$this->isCsrfTokenValid('create_booking_' . $id, $httpRequest->request->getString('_token'))) {
            $this->addFlash('error', 'Jeton de sécurité invalide.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        $proposals = $this->proposalRepository->findByRequestOrderByScore($serviceRequest);
        $winningProposal = $proposals[0] ?? null;
        if ($winningProposal === null) {
            $this->addFlash('error', 'Aucune proposition trouvée.');
            return $this->redirectToRoute('app_service_request_show', ['eventId' => $eventId, 'id' => $id]);
        }

        $booking = $this->createBookingFromProposal($event, $serviceRequest, $winningProposal);
        $this->entityManager->persist($booking);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réservation créée avec succès depuis l\'appel d\'offres attribué.');
        return $this->redirectToRoute('app_service_booking_index', ['eventId' => $eventId]);
    }

    private function createBookingFromProposal(Event $event, ServiceRequest $serviceRequest, \App\Entity\ServiceProposal $proposal): ServiceBooking
    {
        $scheduledDate = new \DateTime('+7 days');
        $expectedDate = $serviceRequest->getExpectedDate();
        if ($expectedDate !== null) {
            $dt = \DateTime::createFromInterface($expectedDate);
            if ($dt >= new \DateTime('today')) {
                $scheduledDate = $dt;
            }
        }

        $booking = new ServiceBooking();
        $booking->setEvent($event);
        $booking->setServiceProvider($proposal->getServiceProvider());
        $booking->setScheduledDate($scheduledDate);
        $booking->setStartTime(new \DateTime('09:00'));
        $booking->setEndTime(new \DateTime('18:00'));
        $booking->setQuantity($proposal->getProposedTeamSize() ?? 1);
        $booking->setAgreedPrice($proposal->getPrice());
        $booking->setNotes('Auto-generated from RFQ: ' . $serviceRequest->getTitle());
        $booking->setStatus(ServiceBooking::STATUS_CONFIRMED);

        return $booking;
    }

    private function findEventOr404(int $eventId): Event
    {
        $event = $this->eventRepository->find($eventId);
        if ($event === null) {
            throw $this->createNotFoundException('Event not found.');
        }
        return $event;
    }
}
