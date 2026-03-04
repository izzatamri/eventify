<?php

declare(strict_types=1);

namespace App\Message;

class AnalyzeProposalMessage
{
    public function __construct(
        private readonly int $proposalId,
    ) {
    }

    public function getProposalId(): int
    {
        return $this->proposalId;
    }
}
