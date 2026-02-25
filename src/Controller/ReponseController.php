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
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager, 
        ReclamationRepository $reclamationRepository
    ): Response {
        $reponse = new Reponse();
        
        $reclamationId = $request->query->get('reclamation_id');
        if ($reclamationId) {
            $reclamation = $reclamationRepository->find($reclamationId);
            if ($reclamation) {
                $reponse->setReclamation($reclamation);
            }
        }
        
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation = $reponse->getReclamation();
            
            $entityManager->persist($reponse);
            $entityManager->flush();
            
            if ($reclamation) {
                $reclamation->setEtat('Resolved');
                $entityManager->persist($reclamation);
                $entityManager->flush();
            }

            if ($reclamation) {
                try {
                    $api_key = '02623026c384b6f8d5631647e2d19af3';
                    $api_secret = '8ca77f079941d108ece06a8fe9690677';
                    
                    $data = [
                        'Messages' => [
                            [
                                'From' => [
                                    'Email' => "akramlabidi45@gmail.com",
                                    'Name' => "Support Client"
                                ],
                                'To' => [
                                    [
                                        'Email' => $reclamation->getAdressmail(),
                                        'Name' => $reclamation->getNomrec()
                                    ]
                                ],
                                'Subject' => "✅ Réponse à votre réclamation #" . $reclamation->getId(),
                                'TextPart' => "Bonjour " . $reclamation->getNomrec() . ",\n\n" .
                                             "Votre réclamation concernant \"" . $reclamation->getSujetrec() . "\" a reçu une réponse.\n\n" .
                                             "Votre message : " . $reclamation->getDescriptionrec() . "\n\n" .
                                             "Notre réponse : " . $reponse->getReponseRep() . "\n\n" .
                                             "Cordialement,\n" .
                                             "L'équipe Support",
                                'HTMLPart' => "<!DOCTYPE html>" .
                                             "<html>" .
                                             "<head><meta charset='UTF-8'></head>" .
                                             "<body style='font-family: Arial, sans-serif;'>" .
                                             "<div style='max-width: 600px; margin: 0 auto; background: #f9f9f9; padding: 20px; border-radius: 10px;'>" .
                                             "<h2 style='color: #3b82f6;'>Bonjour " . $reclamation->getNomrec() . ",</h2>" .
                                             "<p>Votre réclamation concernant <strong>\"" . $reclamation->getSujetrec() . "\"</strong> a reçu une réponse.</p>" .
                                             "<div style='background: white; padding: 15px; border-left: 4px solid #3b82f6; margin: 15px 0;'>" .
                                             "<p><strong>Votre message :</strong><br>" . nl2br($reclamation->getDescriptionrec()) . "</p>" .
                                             "</div>" .
                                             "<div style='background: #e6f7ff; padding: 15px; border-left: 4px solid #10b981; margin: 15px 0;'>" .
                                             "<p><strong>Notre réponse :</strong><br>" . nl2br($reponse->getReponseRep()) . "</p>" .
                                             "</div>" .
                                             "<p style='margin-top: 20px;'>Cordialement,<br><strong>L'équipe Support</strong></p>" .
                                             "<hr style='border: none; border-top: 1px solid #ddd; margin: 20px 0;'>" .
                                             "<p style='font-size: 12px; color: #666; text-align: center;'>" .
                                             "Cet email a été envoyé automatiquement. Merci de ne pas y répondre." .
                                             "</p>" .
                                             "</div>" .
                                             "</body>" .
                                             "</html>"
                            ]
                        ]
                    ];
                    
                    $ch = curl_init('https://api.mailjet.com/v3.1/send');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                    curl_setopt($ch, CURLOPT_HTTPHEADER, [
                        'Content-Type: application/json'
                    ]);
                    curl_setopt($ch, CURLOPT_USERPWD, "$api_key:$api_secret");
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
                    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                    
                    $response = curl_exec($ch);
                    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    $curl_error = curl_error($ch);
                    curl_close($ch);
                    
                    if ($http_code == 200) {
                        $this->addFlash('success', ' Réponse envoyée ! Un email a été notifié à ' . $reclamation->getAdressmail());
                    } else {
                        $this->addFlash('warning', ' Réponse sauvegardée mais l\'email n\'a pas pu être envoyé. Code: ' . $http_code);
                        if ($curl_error) {
                            $this->addFlash('warning', 'Erreur cURL: ' . $curl_error);
                        }
                    }
                    
                } catch (\Exception $e) {
                    $this->addFlash('warning', ' Réponse sauvegardée mais erreur: ' . $e->getMessage());
                }
            }

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
            $this->addFlash('success', '✅ Réponse modifiée avec succès !');
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
                $this->addFlash('info', 'ℹ️ La réclamation est repassée en attente.');
            }
            
            $this->addFlash('success', '✅ Réponse supprimée avec succès !');
        }

        return $this->redirectToRoute('app_reponse_index');
    }
}