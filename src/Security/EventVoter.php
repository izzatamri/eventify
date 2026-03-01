<?php

declare(strict_types=1);

namespace App\Security;

use App\Entity\Event;
use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Vote;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class EventVoter extends Voter
{
    public const EDIT = 'EVENT_EDIT';
    public const DELETE = 'EVENT_DELETE';
    public const MANAGE_TICKETS = 'EVENT_MANAGE_TICKETS';
    public const PUBLISH = 'EVENT_PUBLISH';

    public function __construct(
        private readonly Security $security,
    ) {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        return \in_array($attribute, [self::EDIT, self::DELETE, self::MANAGE_TICKETS, self::PUBLISH], true)
            && $subject instanceof Event;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token, ?Vote $vote = null): bool
    {
        $user = $token->getUser();
        if (!$user instanceof User) {
            return false;
        }

        /** @var Event $event */
        $event = $subject;

        $organizer = $event->getOrganizer();
        if ($organizer === null) {
            return false;
        }
        $owner = $organizer->getUser();
        if ($owner === null) {
            return false;
        }

        // Only the event creator can edit their event
        if ($attribute === self::EDIT) {
            return $owner->getId() === $user->getId();
        }

        // Admins can delete events and manage tickets/publishing
        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }

        return $owner->getId() === $user->getId();
    }
}
