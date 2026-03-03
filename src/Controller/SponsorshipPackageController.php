<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Event;
use App\Entity\SponsorshipPackage;
use App\Form\SponsorshipPackageType;
use App\Repository\SponsorshipPackageRepository;
use App\Security\EventVoter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/events/{id}/packages', name: 'app_sponsorship_package_', requirements: ['id' => '\d+'])]
class SponsorshipPackageController extends AbstractController
{
    public function __construct(
        private readonly SponsorshipPackageRepository $packageRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);

        $sortBy = $request->query->getString('sort');
        $sortOrder = $request->query->getString('order');
        $search = $request->query->getString('q');

        if (!\in_array($sortBy, SponsorshipPackageRepository::SORT_FIELDS, true)) {
            $sortBy = SponsorshipPackageRepository::SORT_NAME;
        }
        if ($sortOrder !== 'asc' && $sortOrder !== 'desc') {
            $sortOrder = 'asc';
        }

        $packages = $this->packageRepository->findByEventWithSortAndSearch($event, $sortBy, $sortOrder, $search ?: null);

        return $this->render('sponsorship/package_index.html.twig', [
            'event' => $event,
            'packages' => $packages,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder,
            'search' => $search,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, Event $event): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $package = new SponsorshipPackage();
        $package->setEvent($event);

        $form = $this->createForm(SponsorshipPackageType::class, $package);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->addSponsorshipPackage($package);
            $this->entityManager->persist($package);
            $this->entityManager->flush();
            $this->addFlash('success', 'Sponsorship package created.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        return $this->render('sponsorship/package_form.html.twig', [
            'event' => $event,
            'package' => $package,
            'form' => $form,
            'title' => 'New sponsorship package',
        ]);
    }

    #[Route('/{packageId}/edit', name: 'edit', methods: ['GET', 'POST'], requirements: ['packageId' => '\d+'])]
    public function edit(Request $request, Event $event, int $packageId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $package = $this->getPackageForEvent($event, $packageId);
        if ($package === null) {
            $this->addFlash('error', 'Package not found.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        $form = $this->createForm(SponsorshipPackageType::class, $package);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Sponsorship package updated.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        return $this->render('sponsorship/package_form.html.twig', [
            'event' => $event,
            'package' => $package,
            'form' => $form,
            'title' => 'Edit sponsorship package',
        ]);
    }

    #[Route('/{packageId}/delete', name: 'delete', methods: ['POST'], requirements: ['packageId' => '\d+'])]
    public function delete(Request $request, Event $event, int $packageId): Response
    {
        $this->denyAccessUnlessGranted(EventVoter::EDIT, $event);
        $package = $this->getPackageForEvent($event, $packageId);
        if ($package === null) {
            $this->addFlash('error', 'Package not found.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('delete_package_' . $packageId, $token)) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
        }

        $event->removeSponsorshipPackage($package);
        $this->entityManager->remove($package);
        $this->entityManager->flush();
        $this->addFlash('success', 'Sponsorship package deleted.');

        return $this->redirectToRoute('app_sponsorship_package_index', ['id' => $event->getId()]);
    }

    private function getPackageForEvent(Event $event, int $packageId): ?SponsorshipPackage
    {
        foreach ($event->getSponsorshipPackages() as $p) {
            if ($p->getId() === $packageId) {
                return $p;
            }
        }
        return $this->packageRepository->findOneBy(['id' => $packageId, 'event' => $event]);
    }
}
