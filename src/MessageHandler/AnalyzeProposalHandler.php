<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\AnalyzeProposalMessage;
use App\Repository\ServiceProposalRepository;
use App\Service\RfqNlpMatchingService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class AnalyzeProposalHandler
{
    public function __construct(
        private readonly ServiceProposalRepository $proposalRepository,
        private readonly RfqNlpMatchingService $nlpMatchingService,
    ) {
    }

    /**
     * Handles the asynchronous AI analysis of a submitted proposal.
     */
    public function __invoke(AnalyzeProposalMessage $message): void
    {
        $proposal = $this->proposalRepository->find($message->getProposalId());
        if ($proposal === null) {
            return;
        }

        $this->nlpMatchingService->analyzeProposal($proposal);
    }
}
