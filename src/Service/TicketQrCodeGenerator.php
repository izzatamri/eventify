<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Order;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TicketQrCodeGenerator
{
    public function __construct(
        private readonly UrlGeneratorInterface $urlGenerator,
        private readonly string $projectDir,
    ) {
    }

    /**
     * Generate a QR code image for the given order.
     */
    public function generateForOrder(Order $order): void
    {
        $uuid = $order->getUuid();
        if (!$uuid) {
            return;
        }

        $filesystem = new Filesystem();
        $publicDir = $this->projectDir . '/public';
        $qrDir = $publicDir . '/qrcodes';
        if (!$filesystem->exists($qrDir)) {
            $filesystem->mkdir($qrDir, 0775);
        }

        $pathRelative = sprintf('qrcodes/%s.png', $uuid);
        $pathAbsolute = $publicDir . '/' . $pathRelative;

        $validationUrl = $this->urlGenerator->generate(
            'app_ticket_validate',
            ['uuid' => $uuid],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $builder = new Builder(
            writer: new PngWriter(),
            data: $validationUrl,
            size: 300,
            margin: 10
        );
        $result = $builder->build();

        $result->saveToFile($pathAbsolute);

        $order->setQrCodePath($pathRelative);
    }
}

