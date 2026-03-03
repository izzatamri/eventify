<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use App\Security\EventVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/events/{id}/sponsors', name: 'app_sponsor_', requirements: ['id' => '\d+'])]
class SponsorController extends AbstractController
{
    public function __construct(
        private readonly SponsorRepository $sponsorRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        $sortBy = $request->query->getString('sort');
        $sortOrder = $request->query->getString('order');
        $searchName = $request->query->getString('name');
        $searchEmail = $request->query->getString('email');
        $filterStatus = $request->query->getString('status');
        $filterPaymentStatus = $request->query->getString('payment');
        $packageParam = $request->query->get('package', '');
        $filterPackageId = is_numeric($packageParam) ? (int) $packageParam : 0;

        if (!\in_array($sortBy, SponsorRepository::SORT_FIELDS, true)) {
            $sortBy = SponsorRepository::SORT_NAME;
        }
        if ($sortOrder !== 'asc' && $sortOrder !== 'desc') {
            $sortOrder = 'asc';
        }
        if ($filterStatus !== '' && !\in_array($filterStatus, Sponsor::STATUSES, true)) {
            $filterStatus = '';
        }
        if ($filterPaymentStatus !== '' && !\in_array($filterPaymentStatus, Sponsor::PAYMENT_STATUSES, true)) {
            $filterPaymentStatus = '';
        }

        $sponsors = $this->sponsorRepository->findByEventWithSortAndSearch(
            $event,
            $sortBy,
            $sortOrder,
            $searchName ?: null,
            $searchEmail ?: null,
            $filterStatus ?: null,
            $filterPaymentStatus ?: null,
            $filterPackageId > 0 ? $filterPackageId : null
        );

        return $this->render('sponsorship/sponsor_index.html.twig', [
            'event' => $event,
            'sponsors' => $sponsors,
            'packages' => $event->getSponsorshipPackages(),
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'searchName' => $searchName,
            'searchEmail' => $searchEmail,
            'filterStatus' => $filterStatus,
            'filterPaymentStatus' => $filterPaymentStatus,
            'filterPackageId' => $filterPackageId,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $packages = $event->getSponsorshipPackages()->toArray();
        if ($packages === []) {
            $this->addFlash('warning', 'Create at least one sponsorship package before adding sponsors.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        $sponsor = new Sponsor();
        $sponsor->setEvent($event);
        $form = $this->createForm(SponsorType::class, $sponsor, [
            'packages' => $packages,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleLogoUpload($form, $sponsor);
            $package = $sponsor->getSponsorshipPackage();
            if ($package !== null) {
                $sponsor->setEvent($package->getEvent());
            }
            $event->addSponsor($sponsor);
            $this->entityManager->persist($sponsor);
            $this->entityManager->flush();
            $this->addFlash('success', 'Sponsor added.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        return $this->render('sponsorship/sponsor_form.html.twig', [
            'event' => $event,
            'sponsor' => $sponsor,
            'form' => $form,
            'title' => 'New sponsor',
        ]);
    }

    #[Route('/{sponsorId}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['sponsorId' => '\d+'])]
    public function edit(Request $request, Event $event, int $sponsorId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $sponsor = $this->getSponsorForEvent($event, $sponsorId);
        if ($sponsor === null) {
            $this->addFlash('error', 'Sponsor not found.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        $packages = $event->getSponsorshipPackages()->toArray();
        $form = $this->createForm(SponsorType::class, $sponsor, [
            'packages' => $packages,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleLogoUpload($form, $sponsor);
            $package = $sponsor->getSponsorshipPackage();
            if ($package !== null) {
                $sponsor->setEvent($package->getEvent());
            }
            $this->entityManager->flush();
            $this->addFlash('success', 'Sponsor updated.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        return $this->render('sponsorship/sponsor_form.html.twig', [
            'event' => $event,
            'sponsor' => $sponsor,
            'form' => $form,
            'title' => 'Edit sponsor',
        ]);
    }

    #[Route('/{sponsorId}/accept', name: 'accept', methods: ['POST'], requirements: ['sponsorId' => '\d+'])]
    public function accept(Request $request, Event $event, int $sponsorId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $sponsor = $this->getSponsorForEvent($event, $sponsorId);
        if ($sponsor === null) {
            $this->addFlash('error', 'Sponsor not found.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        if (!$this->isCsrfTokenValid('accept_sponsor_' . $sponsorId, $request->request->getString('_token'))) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        $sponsor->setStatus(Sponsor::STATUS_ACTIVE);
        $user = $this->getUser();
        if ($user instanceof \App\Entity\User) {
            $sponsor->setAcceptedBy($user);
            $sponsor->setRefusedBy(null);
        }
        $this->entityManager->flush();
        $this->addFlash('success', 'Sponsor request accepted. They are now visible as a sponsor.');

        return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
    }

    #[Route('/{sponsorId}/refuse', name: 'refuse', methods: ['POST'], requirements: ['sponsorId' => '\d+'])]
    public function refuse(Request $request, Event $event, int $sponsorId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $sponsor = $this->getSponsorForEvent($event, $sponsorId);
        if ($sponsor === null) {
            $this->addFlash('error', 'Sponsor not found.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        if (!$this->isCsrfTokenValid('refuse_sponsor_' . $sponsorId, $request->request->getString('_token'))) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        $sponsor->setStatus(Sponsor::STATUS_REJECTED);
        $user = $this->getUser();
        if ($user instanceof \App\Entity\User) {
            $sponsor->setRefusedBy($user);
            $sponsor->setAcceptedBy(null);
        }
        $this->entityManager->flush();
        $this->addFlash('success', 'Sponsor request refused.');

        return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
    }

    #[Route('/{sponsorId}/delete', name: 'delete', methods: ['POST'], requirements: ['sponsorId' => '\d+'])]
    public function delete(Request $request, Event $event, int $sponsorId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $sponsor = $this->getSponsorForEvent($event, $sponsorId);
        if ($sponsor === null) {
            $this->addFlash('error', 'Sponsor not found.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('delete_sponsor_' . $sponsorId, $token)) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
        }

        $event->removeSponsor($sponsor);
        $this->entityManager->remove($sponsor);
        $this->entityManager->flush();
        $this->addFlash('success', 'Sponsor deleted.');

        return $this->redirectToRoute('app_sponsor_index', ['id' => $event->getId()]);
    }

    private function getSponsorForEvent(Event $event, int $sponsorId): ?Sponsor
    {
        foreach ($event->getSponsors() as $s) {
            if ($s->getId() === $sponsorId) {
                return $s;
            }
        }
        return $this->sponsorRepository->findOneBy(['id' => $sponsorId, 'event' => $event]);
    }

    private function handleLogoUpload(\Symfony\Component\Form\FormInterface $form, Sponsor $sponsor): void
    {
        $file = $form->get('logoFile')->getData();
        if (!$file) {
            return;
        }

        $allowedExtensions = ['png', 'jpeg', 'jpg', 'webp', 'gif'];
        $originalExt = strtolower($file->getClientOriginalExtension());
        $safeExt = \in_array($originalExt, $allowedExtensions, true) ? $originalExt : $file->guessExtension();
        $safeExt = $safeExt ?: 'png';
        if (!\in_array($safeExt, $allowedExtensions, true)) {
            $safeExt = 'png';
        }

        $filename = sprintf('sponsor_%s_%s.%s', uniqid(), bin2hex(random_bytes(4)), $safeExt);
        $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/sponsors';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        try {
            $file->move($uploadDir, $filename);
            $sponsor->setLogoUrl('/uploads/sponsors/' . $filename);
        } catch (FileException) {
            // keep existing logoUrl on failure
        }
    }
}
