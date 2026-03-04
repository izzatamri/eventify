<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use App\Event\MissionAwardedEvent;
use App\Service\ProviderScoringService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MissionAwardedSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly ProviderScoringService $scoringService,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            MissionAwardedEvent::class => 'onMissionAwarded',
        ];
    }

    /**
     * Automatically recalculates the winning provider's score after a mission is awarded.
     */
    public function onMissionAwarded(MissionAwardedEvent $event): void
    {
        $winningProvider = $event->getWinningProposal()->getServiceProvider();
        $this->scoringService->recalculateScore($winningProvider);
    }
}
