<?php
// src/Controller/ReglementController.php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class ReglementController extends AbstractController
{
    // nbadelha
    private $ipAddress = '10.168.133.179';
    private $port = '8000';

    #[Route('/reglement', name: 'app_reglement')]
    public function index(): Response
    {
        return $this->render('reclamation/reglement.html.twig');
    }

    #[Route('/reglement/pdf', name: 'app_reglement_pdf')]
    public function generatePdf(): Response
    {
        $html = $this->renderView('reclamation/reglement_pdf.html.twig');
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        $output = $dompdf->output();
        
        $response = new Response($output);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="reglement_reclamations.pdf"');
        
        return $response;
    }

    #[Route('/reglement/qrcode', name: 'app_reglement_qrcode')]
    public function qrcode(): Response
    {
        try {
            
            $baseUrl = "http://{$this->ipAddress}:{$this->port}";
            $pdfUrl = $baseUrl . $this->generateUrl('app_reglement_pdf');
            
            $qrCode = new QrCode(
                data: $pdfUrl,
                size: 300,
                margin: 10
            );

            $writer = new PngWriter();
            $result = $writer->write($qrCode);
            
            return new Response(
                $result->getString(),
                200,
                ['Content-Type' => 'image/png']
            );
            
        } catch (\Exception $e) {
            return new Response('Erreur: ' . $e->getMessage(), 500);
        }
    }

    #[Route('/reglement/info', name: 'app_reglement_info')]
    public function info(): Response
    {
        $pdfUrl = "http://{$this->ipAddress}:{$this->port}" . $this->generateUrl('app_reglement_pdf');
        $qrUrl = "http://{$this->ipAddress}:{$this->port}" . $this->generateUrl('app_reglement_qrcode');
        
        return $this->render('reclamation/reglement_info.html.twig', [
            'ip_address' => $this->ipAddress,
            'port' => $this->port,
            'pdf_url' => $pdfUrl,
            'qr_url' => $qrUrl
        ]);
    }
}