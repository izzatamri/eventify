<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reponse')]
final class ReponseController extends AbstractController
{
    #[Route(name: 'app_reponse_index', methods: ['GET'])]
    public function index(Request $request, ReponseRepository $reponseRepository): Response
    {
        $search = $request->query->get('search', '');
        $sort = $request->query->get('sort', 'date_reponse');
        $order = $request->query->get('order', 'DESC');

        $reponses = $reponseRepository->findBySearchAndSort($search, $sort, $order);

        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponses,
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    }

    #[Route('/new', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ReclamationRepository $reclamationRepository): Response
    {
        $reponse = new Reponse();
        
        $reclamationId = $request->query->get('reclamation_id');
        if ($reclamationId) {
            $reclamation = $reclamationRepository->find($reclamationId);
            if ($reclamation) {
                $reponse->setReclamation($reclamation);
            } else {
                $this->addFlash('error', 'Réclamation non trouvée');
                return $this->redirectToRoute('app_reponse_index');
            }
        }
        
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation = $reponse->getReclamation();
            
            if ($reclamation) {
                // Changer l'état de la réclamation à "Resolved"
                $reclamation->setEtat('Resolved');
                $entityManager->persist($reclamation);
            }
            
            $entityManager->persist($reponse);
            $entityManager->flush();

            $this->addFlash('success', 'Réponse ajoutée avec succès ! La réclamation est maintenant résolue.');
            return $this->redirectToRoute('app_reponse_index');
        }

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Réponse modifiée avec succès !');
            return $this->redirectToRoute('app_reponse_index');
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reponse->getId(), $request->request->get('_token'))) {
            $reclamation = $reponse->getReclamation();
            
            $em->remove($reponse);
            $em->flush();
            
            if ($reclamation && $reclamation->getYes()->isEmpty()) {
                $reclamation->setEtat('Pending');
                $em->flush();
                $this->addFlash('info', 'La réclamation est repassée en attente car elle n\'a plus de réponse.');
            }
            
            $this->addFlash('success', 'Réponse supprimée avec succès !');
        }

        return $this->redirectToRoute('app_reponse_index');
    }
}