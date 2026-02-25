<?php
// src/Controller/ReglementPdfController.php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReglementPdfController extends AbstractController
{
    #[Route('/reglement/pdf', name: 'app_reglement_pdf')]
    public function generatePdf(): Response
    {
       
        $html = $this->renderView('reclamation/reglement_pdf.html.twig');
        
       
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
       
        $output = $dompdf->output();
        
        
        $response = new Response($output);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="reglement_reclamations.pdf"');
        $response->headers->set('Content-Length', strlen($output));
        
        return $response;
    }
    
    #[Route('/reglement/pdf/view', name: 'app_reglement_pdf_view')]
    public function viewPdf(): Response
    {
       
        $html = $this->renderView('reclamation/reglement_pdf.html.twig');
        
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
       
        $dompdf->stream("reglement_reclamations.pdf", [
            "Attachment" => false 
        ]);
        
        return new Response();
    }
}