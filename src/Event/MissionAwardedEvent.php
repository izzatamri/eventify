<?php

declare(strict_types=1);

namespace App\Event;

use App\Entity\ServiceProposal;
use App\Entity\ServiceRequest;
use Symfony\Contracts\EventDispatcher\Event;

class MissionAwardedEvent extends Event
{
    public function __construct(
        private readonly ServiceRequest $serviceRequest,
        private readonly ServiceProposal $winningProposal,
    ) {
    }

    public function getServiceRequest(): ServiceRequest
    {
        return $this->serviceRequest;
    }

    public function getWinningProposal(): ServiceProposal
    {
        return $this->winningProposal;
    }
}
