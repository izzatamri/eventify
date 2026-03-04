<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Sponsor;
use App\Entity\SponsorshipPackage;
use App\Form\SponsorRequestType;
use App\Repository\SponsorshipPackageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Public "Become a sponsor" flow: submit request from event page.
 */
#[Route('/events/{id}', name: 'app_sponsor_request_', requirements: ['id' => '\d+'])]
class SponsorRequestController extends AbstractController
{
    public function __construct(
        private readonly SponsorshipPackageRepository $packageRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/sponsor-request/{packageId}', name: 'submit', methods: ['POST'], requirements: ['packageId' => '\d+'])]
    public function submit(Request $request, Event $event, int $packageId): Response
    {
        $package = $this->packageRepository->find($packageId);
        if ($package === null || $package->getEvent() !== $event) {
            $this->addFlash('error', 'Invalid package.');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        $sponsor = new Sponsor();
        $sponsor->setEvent($event);
        $sponsor->setSponsorshipPackage($package);
        $sponsor->setStatus(Sponsor::STATUS_PENDING_APPROVAL);
        $sponsor->setPaymentStatus(Sponsor::PAYMENT_STATUS_PENDING);

        $form = $this->createForm(SponsorRequestType::class, $sponsor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->handleLogoUpload($form, $sponsor);
            $event->addSponsor($sponsor);

            try {
                $this->entityManager->persist($sponsor);
                $this->entityManager->flush();
            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'This email is already registered for a sponsorship. Use another email or contact the organizer.');
                return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
            }

            $this->addFlash('success', 'Your sponsorship request has been sent. The organizer will review it shortly.');
            return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
        }

        $this->addFlash('error', 'Please correct the form and try again.');
        return $this->redirectToRoute('app_event_show', ['id' => $event->getId()]);
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
