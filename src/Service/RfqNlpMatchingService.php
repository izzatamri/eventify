<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\ServiceProposal;
use App\Entity\ServiceRequest;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RfqNlpMatchingService
{
    private const MODEL = 'nvidia/nemotron-3-nano-30b-a3b:free';
    private const API_URL = 'https://openrouter.ai/api/v1/chat/completions';

    public function __construct(
        private readonly HttpClientInterface $httpClient,
        private readonly EntityManagerInterface $entityManager,
        private readonly string $openRouterApiKey,
        private readonly ?LoggerInterface $logger = null,
    ) {
    }

    /**
     * Analyzes a single proposal against its parent ServiceRequest using AI NLP.
     * Persists the resulting match_score and explanation to the proposal entity.
     * Throws on failure so the caller can display the error.
     */
    public function analyzeProposal(ServiceProposal $proposal): void
    {
        $request = $proposal->getServiceRequest();
        $provider = $proposal->getServiceProvider();
        $event = $request->getEvent();

        $siretStatus = $provider->isVerified() ? 'Oui' : 'Non';

        $systemMessage = "Tu es un assistant expert en achats de services événementiels. "
            . "Tu évalues les propositions de prestataires pour des appels d'offres. "
            . "Réponds UNIQUEMENT avec un objet JSON (sans markdown, sans code block) avec deux clés : "
            . "match_score (float 0-100) et explanation (string, un paragraphe en français).";

        $userMessage = "## Contexte de l'événement\n"
            . "- Titre : " . $event->getTitle() . "\n"
            . "- Date prévue : " . $request->getExpectedDate()->format('d/m/Y') . "\n"
            . "- Lieu : " . $request->getLocation() . "\n"
            . "- Budget : " . $request->getBudgetMin() . " € — " . $request->getBudgetMax() . " €\n"
            . "- Catégorie de service : " . $request->getServiceType() . "\n\n"
            . "## Description de la demande\n"
            . $request->getDescription() . "\n\n"
            . "## Profil du prestataire\n"
            . "- Nom : " . $provider->getName() . "\n"
            . "- Type de service : " . $provider->getServiceType() . "\n"
            . "- Taux horaire : " . $provider->getHourlyRate() . " €/h\n"
            . "- Score plateforme : " . $provider->getScore() . "/100\n"
            . "- Badge : " . $provider->getBadge() . "\n"
            . "- Vérifié SIRET : " . $siretStatus . "\n\n"
            . "## Détails de la proposition\n"
            . "- Prix proposé : " . $proposal->getPrice() . " €\n"
            . "- Durée estimée : " . $proposal->getEstimatedDuration() . "\n"
            . "- Taille d'équipe : " . $proposal->getProposedTeamSize() . " personnes\n"
            . "- Description : " . $proposal->getDescription() . "\n\n"
            . 'Évalue cette proposition. Retourne UNIQUEMENT un JSON: {"match_score": <float 0-100>, "explanation": "<paragraphe en français>"}';

        $result = $this->callOpenRouter($systemMessage, $userMessage);
        $json = $this->extractJson($result);

        if (isset($json['match_score'])) {
            $proposal->setAiMatchScore((string) min(100, max(0, (float) $json['match_score'])));
            $proposal->setAiMatchExplanation($json['explanation'] ?? '');
            $this->entityManager->flush();
        } else {
            $this->logger?->warning('AI returned no match_score', ['raw_response' => mb_substr($result, 0, 500)]);
            throw new \RuntimeException('L\'IA n\'a pas retourné de score. Réponse brute : ' . mb_substr($result, 0, 200));
        }
    }

    /**
     * Produces a ranked recommendation across all proposals for a request.
     */
    public function rankProposals(ServiceRequest $request): string
    {
        $proposals = $request->getProposals();
        if ($proposals->isEmpty()) {
            return 'Aucune proposition à analyser.';
        }

        $systemMessage = "Tu es un assistant expert en achats de services événementiels. "
            . "Tu dois classer des propositions de prestataires et fournir une recommandation globale. "
            . "Réponds en français, avec un texte structuré et professionnel.";

        $proposalTexts = [];
        $i = 1;
        foreach ($proposals as $p) {
            $prov = $p->getServiceProvider();
            $proposalTexts[] = "### Proposition #" . $i . "\n"
                . "- Prestataire : " . $prov->getName() . " (Badge: " . $prov->getBadge() . ", Score: " . $prov->getScore() . "/100)\n"
                . "- Prix : " . $p->getPrice() . " €\n"
                . "- Durée : " . $p->getEstimatedDuration() . "\n"
                . "- Équipe : " . $p->getProposedTeamSize() . " pers.\n"
                . "- Description : " . $p->getDescription() . "\n"
                . "- Score IA : " . ($p->getAiMatchScore() ?? 'Non évalué') . "/100\n";
            $i++;
        }

        $userMessage = "## Demande de service\n"
            . "- Titre : " . $request->getTitle() . "\n"
            . "- Budget : " . $request->getBudgetMin() . " € — " . $request->getBudgetMax() . " €\n"
            . "- Catégorie : " . $request->getServiceType() . "\n"
            . "- Description : " . $request->getDescription() . "\n\n"
            . "## Propositions reçues\n\n"
            . implode("\n", $proposalTexts)
            . "\n\nClasse ces propositions de la meilleure à la moins bonne et donne une recommandation globale.";

        try {
            return $this->callOpenRouter($systemMessage, $userMessage);
        } catch (\Throwable $e) {
            $this->logger?->error('AI ranking failed', ['error' => $e->getMessage()]);
            return 'Impossible de générer le classement IA pour le moment.';
        }
    }

    /**
     * Extracts a JSON object from AI response text, handling markdown code blocks.
     * @return array<string, mixed>|null
     */
    private function extractJson(string $text): ?array
    {
        $decoded = json_decode($text, true);
        if (\is_array($decoded)) {
            return $decoded;
        }

        if (preg_match('/```(?:json)?\s*(\{[\s\S]*?\})\s*```/', $text, $m)) {
            $decoded = json_decode($m[1], true);
            if (\is_array($decoded)) {
                return $decoded;
            }
        }

        if (preg_match('/\{[^}]*"match_score"[^}]*\}/', $text, $m)) {
            $decoded = json_decode($m[0], true);
            if (\is_array($decoded)) {
                return $decoded;
            }
        }

        return null;
    }

    private function callOpenRouter(string $systemMessage, string $userMessage): string
    {
        $response = $this->httpClient->request('POST', self::API_URL, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->openRouterApiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => self::MODEL,
                'messages' => [
                    ['role' => 'system', 'content' => $systemMessage],
                    ['role' => 'user', 'content' => $userMessage],
                ],
                'temperature' => 0.3,
            ],
        ]);

        $data = $response->toArray();

        return $data['choices'][0]['message']['content'] ?? '';
    }
}
