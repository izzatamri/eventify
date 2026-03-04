<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Sponsor;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class SponsorMailerService
{
    public function __construct(
        private readonly MailerInterface $mailer,
    ) {
    }

    public function sendAcceptedWithAgreement(Sponsor $sponsor, string $pdfContent): void
    {
        $event = $sponsor->getEvent();
        $recipientEmail = $sponsor->getContactPersonEmail() ?? $sponsor->getEmail();
        $recipientName = $sponsor->getContactPersonName() ?? $sponsor->getName();

        $email = (new TemplatedEmail())
            ->from(new Address('ziadijizel26@gmail.com', 'Eventify'))
            ->to(new Address($recipientEmail, $recipientName))
            ->subject('Sponsorship Approved — ' . $event->getTitle())
            ->htmlTemplate('emails/sponsor_accepted.html.twig')
            ->context([
                'sponsor' => $sponsor,
                'event' => $event,
                'package' => $sponsor->getSponsorshipPackage(),
            ])
            ->attach($pdfContent, sprintf(
                'Sponsorship_Agreement_%s_%s.pdf',
                preg_replace('/[^a-zA-Z0-9]/', '_', $event->getTitle()),
                preg_replace('/[^a-zA-Z0-9]/', '_', $sponsor->getName()),
            ), 'application/pdf');

        $this->mailer->send($email);
    }
}
