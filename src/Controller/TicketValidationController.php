<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TicketValidationController extends AbstractController
{
    public function __construct(
        private readonly OrderRepository $orderRepository,
    ) {
    }

    #[Route('/ticket/validate/{uuid}', name: 'app_ticket_validate', methods: ['GET'])]
    public function validate(string $uuid): Response
    {
        $order = $this->orderRepository->findOneBy(['uuid' => $uuid]);

        if (!$order) {
            return $this->render('ticket/invalid.html.twig', [
                'uuid' => $uuid,
            ]);
        }

        return $this->render('ticket/validate.html.twig', [
            'order' => $order,
        ]);
    }
}

