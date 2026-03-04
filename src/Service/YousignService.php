<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class YousignService
{
    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $apiKey,
        private readonly string $apiUrl,
    ) {
    }

    /**
     * @return array{id: string, status: string}
     */
    public function createSignatureRequest(string $name, string $deliveryMode = 'email'): array
    {
        $response = $this->request('POST', '/signature_requests', [
            'name' => $name,
            'delivery_mode' => $deliveryMode,
            'timezone' => 'Europe/Paris',
        ]);

        return $response;
    }

    /**
     * @return array{id: string}
     */
    public function uploadDocument(string $signatureRequestId, string $pdfContent, string $filename): array
    {
        $formData = new FormDataPart([
            'nature' => 'signable_document',
            'file' => new DataPart($pdfContent, $filename, 'application/pdf'),
        ]);

        $headers = $formData->getPreparedHeaders()->toArray();
        $headers[] = 'Authorization: Bearer ' . $this->apiKey;

        $response = $this->httpClient->request('POST', $this->apiUrl . '/signature_requests/' . $signatureRequestId . '/documents', [
            'headers' => $headers,
            'body' => $formData->bodyToIterable(),
        ]);

        return $response->toArray();
    }

    /**
     * @return array{id: string}
     */
    public function addSigner(
        string $signatureRequestId,
        string $documentId,
        string $firstName,
        string $lastName,
        string $email,
    ): array {
        $response = $this->request('POST', '/signature_requests/' . $signatureRequestId . '/signers', [
            'info' => [
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'locale' => 'en',
            ],
            'signature_level' => 'electronic_signature',
            'signature_authentication_mode' => 'no_otp',
            'fields' => [
                [
                    'type' => 'signature',
                    'document_id' => $documentId,
                    'page' => 1,
                    'x' => 340,
                    'y' => 632,
                    'width' => 200,
                    'height' => 60,
                ],
            ],
        ]);

        return $response;
    }

    /**
     * @return array{id: string, status: string}
     */
    public function activateSignatureRequest(string $signatureRequestId): array
    {
        $response = $this->request('POST', '/signature_requests/' . $signatureRequestId . '/activate', []);

        return $response;
    }

    /**
     * @return array<string, mixed>
     */
    private function request(string $method, string $path, array $body): array
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ];

        if ($body !== []) {
            $options['json'] = $body;
        }

        $response = $this->httpClient->request($method, $this->apiUrl . $path, $options);

        return $response->toArray();
    }
}
