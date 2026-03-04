<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Venue;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/venues')]
class VenueController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('/from-map', name: 'app_venue_from_map', methods: ['POST'])]
    public function fromMap(Request $request): JsonResponse
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $data = $request->request->all();
        if ($request->getContentTypeFormat() === 'json' && $request->getContent()) {
            $data = array_merge($data, $request->toArray());
        }

        $token = $data['_token'] ?? $request->headers->get('X-CSRF-Token');
        if (!$this->isCsrfTokenValid('venue_from_map', (string) $token)) {
            return new JsonResponse(['error' => 'Invalid CSRF token.'], Response::HTTP_FORBIDDEN);
        }

        $name = trim((string) ($data['name'] ?? ''));
        if ($name === '') {
            return new JsonResponse(['error' => 'Venue name is required.'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $latitude = $data['latitude'] ?? null;
        $longitude = $data['longitude'] ?? null;
        if ($latitude === '' || $longitude === '' || $latitude === null || $longitude === null) {
            return new JsonResponse(['error' => 'Latitude and longitude are required.'], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $venue = new Venue();
        $venue->setName($name);
        $venue->setAddress(trim((string) ($data['address'] ?? '')) ?: null);
        $venue->setCity(trim((string) ($data['city'] ?? '')) ?: null);
        $venue->setState(trim((string) ($data['state'] ?? '')) ?: null);
        $venue->setCountry(trim((string) ($data['country'] ?? '')) ?: null);
        $venue->setPostalCode(trim((string) ($data['postalCode'] ?? '')) ?: null);
        $venue->setLatitude((string) $latitude);
        $venue->setLongitude((string) $longitude);

        $this->entityManager->persist($venue);
        $this->entityManager->flush();

        return new JsonResponse([
            'id' => $venue->getId(),
            'name' => $venue->getName(),
            'latitude' => $venue->getLatitude(),
            'longitude' => $venue->getLongitude(),
        ]);
    }
}
