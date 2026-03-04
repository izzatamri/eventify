<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Sponsor;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class PdfGeneratorService
{
    public function __construct(
        private readonly Environment $twig,
    ) {
    }

    public function generateSponsorshipAgreement(Sponsor $sponsor): string
    {
        $html = $this->twig->render('pdf/sponsorship_agreement.html.twig', [
            'sponsor' => $sponsor,
            'event' => $sponsor->getEvent(),
            'package' => $sponsor->getSponsorshipPackage(),
            'date' => new \DateTimeImmutable(),
        ]);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Helvetica');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }
}
