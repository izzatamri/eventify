<?php

declare(strict_types=1);

namespace App\Security;

use App\Entity\Order;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Vote;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class OrderVoter extends Voter
{
    public const VIEW = 'ORDER_VIEW';
    public const UPDATE = 'ORDER_UPDATE';

    public function __construct(
        private readonly Security $security,
    ) {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        return \in_array($attribute, [self::VIEW, self::UPDATE], true)
            && $subject instanceof Order;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token, ?Vote $vote = null): bool
    {
        $user = $token->getUser();
        if (!$user instanceof User) {
            return false;
        }

        /** @var Order $order */
        $order = $subject;

        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }

        if ($attribute === self::VIEW) {
            if ($order->getUser() && $order->getUser()->getId() === $user->getId()) {
                return true;
            }
            $event = $order->getEvent();
            if ($event && $event->getOrganizer() && $event->getOrganizer()->getUser()?->getId() === $user->getId()) {
                return true;
            }
            return false;
        }

        if ($attribute === self::UPDATE) {
            $event = $order->getEvent();
            if (!$event || !$event->getOrganizer() || !$event->getOrganizer()->getUser()) {
                return false;
            }
            return $event->getOrganizer()->getUser()->getId() === $user->getId();
        }

        return false;
    }
}
