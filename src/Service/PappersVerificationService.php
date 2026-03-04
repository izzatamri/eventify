<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class PappersVerificationService
{
    private const API_URL = 'https://api.insee.fr/api-sirene/3.11/siret/';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly string $apiKey,
    ) {
    }

    /**
     * Verifies a SIRET number against the INSEE Sirene API.
     * Returns a structured array indicating whether the company is valid and active,
     * along with its legal name, address, and NAF code for auto-filling the form.
     *
     * @return array{valid: bool, legalName: ?string, address: ?string, nafCode: ?string, error: ?string}
     */
    public function verifySiret(string $siret): array
    {
        $siret = preg_replace('/\s+/', '', $siret);

        if (!preg_match('/^\d{14}$/', $siret)) {
            return [
                'valid' => false,
                'legalName' => null,
                'address' => null,
                'nafCode' => null,
                'error' => 'Le SIRET doit comporter exactement 14 chiffres.',
            ];
        }

        try {
            $response = $this->httpClient->request('GET', self::API_URL . $siret, [
                'headers' => [
                    'X-INSEE-Api-Key-Integration' => $this->apiKey,
                    'Accept' => 'application/json',
                ],
            ]);

            $statusCode = $response->getStatusCode();

            if ($statusCode === 404) {
                return [
                    'valid' => false,
                    'legalName' => null,
                    'address' => null,
                    'nafCode' => null,
                    'error' => 'Ce prestataire ne peut pas être ajouté : numéro SIRET invalide ou entreprise non active.',
                ];
            }

            if ($statusCode === 401 || $statusCode === 403) {
                $body = json_decode($response->getContent(false), true);
                $apiMsg = $body['message'] ?? $body['error'] ?? null;
                return [
                    'valid' => false,
                    'legalName' => null,
                    'address' => null,
                    'nafCode' => null,
                    'error' => $apiMsg ? 'Erreur API INSEE : ' . $apiMsg : 'Clé API INSEE invalide ou accès refusé.',
                ];
            }

            if ($statusCode !== 200) {
                return [
                    'valid' => false,
                    'legalName' => null,
                    'address' => null,
                    'nafCode' => null,
                    'error' => 'Erreur lors de la vérification SIRET (code ' . $statusCode . ').',
                ];
            }

            $content = $response->getContent(false);
            $data = json_decode($content, true);
            if (!\is_array($data)) {
                return [
                    'valid' => false,
                    'legalName' => null,
                    'address' => null,
                    'nafCode' => null,
                    'error' => 'Réponse INSEE invalide (JSON attendu).',
                ];
            }

            $etab = $data['etablissement'] ?? [];
            $uniteLegale = $etab['uniteLegale'] ?? [];
            $adresse = $etab['adresseEtablissement'] ?? [];
            $periodes = $etab['periodesEtablissement'] ?? [];

            $latestPeriod = \is_array($periodes) && isset($periodes[0]) ? $periodes[0] : [];
            $etat = \is_array($latestPeriod) ? ($latestPeriod['etatAdministratifEtablissement'] ?? 'A') : 'A';

            if ($etat === 'F') {
                return [
                    'valid' => false,
                    'legalName' => null,
                    'address' => null,
                    'nafCode' => null,
                    'error' => 'Ce prestataire ne peut pas être ajouté : numéro SIRET invalide ou entreprise non active.',
                ];
            }

            $denom = $uniteLegale['denominationUniteLegale'] ?? null;
            $nom = trim(($uniteLegale['prenomUsuelUniteLegale'] ?? '') . ' ' . ($uniteLegale['nomUniteLegale'] ?? ''));
            $legalName = ($denom !== null && $denom !== '') ? $denom : ($nom !== '' ? $nom : null);

            $numVoie = $adresse['numeroVoieEtablissement'] ?? '';
            $typeVoie = $adresse['typeVoieEtablissement'] ?? '';
            $libVoie = $adresse['libelleVoieEtablissement'] ?? '';
            $ligne1 = trim($numVoie . ' ' . $typeVoie . ' ' . $libVoie);
            $cp = $adresse['codePostalEtablissement'] ?? null;
            $ville = $adresse['libelleCommuneEtablissement'] ?? null;
            $addressParts = array_filter([$ligne1 !== '' ? $ligne1 : null, $cp, $ville], fn ($v) => $v !== null && $v !== '');

            $nafCode = $latestPeriod['activitePrincipaleEtablissement'] ?? $uniteLegale['activitePrincipaleUniteLegale'] ?? null;

            return [
                'valid' => true,
                'legalName' => $legalName,
                'address' => $addressParts !== [] ? implode(', ', $addressParts) : null,
                'nafCode' => $nafCode,
                'error' => null,
            ];
        } catch (\Throwable $e) {
            return [
                'valid' => false,
                'legalName' => null,
                'address' => null,
                'nafCode' => null,
                'error' => 'Erreur technique lors de la vérification SIRET.',
            ];
        }
    }
}
