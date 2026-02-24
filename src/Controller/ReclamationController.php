<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reclamation')]
final class ReclamationController extends AbstractController
{
    #[Route(name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Reclamation envoyée avec succès !');
            return $this->redirectToRoute('app_back_reclamation');
        }

        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($reclamation->hasResponses() && $reclamation->getEtat() !== 'Resolved') {
                $reclamation->setEtat('Resolved');
            }
            $entityManager->flush();

            $this->addFlash('success', 'Réclamation modifiée avec succès !');
            return $this->redirectToRoute('app_back_reclamation');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reclamation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
            $this->addFlash('success', 'Réclamation supprimée avec succès !');
        }

        return $this->redirectToRoute('app_back_reclamation');
    }

    #[Route('/admin/back', name: 'app_back_reclamation', methods: ['GET', 'POST'])]
    public function backOffice(
        Request $request,
        ReclamationRepository $reclamationRepository,
        EntityManagerInterface $em
    ): Response {
        $searchRec = $request->query->get('search_rec', '');
        $sortRec = $request->query->get('sort_rec', 'date_creation');
        $orderRec = $request->query->get('order_rec', 'DESC');

        $reclamation = new Reclamation();
        $reclamationForm = $this->createForm(ReclamationType::class, $reclamation);
        $reclamationForm->handleRequest($request);

        if ($reclamationForm->isSubmitted() && $reclamationForm->isValid()) {
            $em->persist($reclamation);
            $em->flush();
            $this->addFlash('success', 'Réclamation ajoutée avec succès !');
            return $this->redirectToRoute('app_back_reclamation');
        }

        $reclamations = $reclamationRepository->findBySearchAndSort($searchRec, $sortRec, $orderRec);

        return $this->render('back/backReclamation.html.twig', [
            'reclamations' => $reclamations,
            'reclamationForm' => $reclamationForm->createView(),
            'search_rec' => $searchRec,
            'sort_rec' => $sortRec,
            'order_rec' => $orderRec,
        ]);
    }
}