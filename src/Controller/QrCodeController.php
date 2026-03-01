<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class QrCodeController extends AbstractController
{
    #[Route('/qrcodes/{uuid}.png', name: 'app_qrcode_serve', requirements: ['uuid' => '[0-9a-fA-F\-]{36}'], methods: ['GET'])]
    public function serve(string $uuid): Response
    {
        $path = $this->getParameter('kernel.project_dir') . '/public/qrcodes/' . $uuid . '.png';

        if (!is_file($path)) {
            throw $this->createNotFoundException('QR code not found.');
        }

        return new BinaryFileResponse($path, Response::HTTP_OK, [
            'Content-Type' => 'image/png',
        ], false);
    }
}
