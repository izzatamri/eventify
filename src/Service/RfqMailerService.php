<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\ServiceProposal;
use App\Entity\ServiceRequest;
use App\Repository\ServiceProviderRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class RfqMailerService
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly ServiceProviderRepository $providerRepository,
    ) {
    }

    /**
     * Notifies all active service providers matching the request's service type
     * that a new RFQ has been published.
     */
    public function notifyProvidersOfNewRequest(ServiceRequest $request): void
    {
        $providers = $this->providerRepository->findActiveByServiceType($request->getServiceType());

        foreach ($providers as $provider) {
            $email = (new TemplatedEmail())
                ->from(new Address('ziadijizel26@gmail.com', 'Eventify'))
                ->to(new Address($provider->getEmail(), $provider->getName()))
                ->subject('Nouvel appel d\'offres — ' . $request->getTitle())
                ->htmlTemplate('emails/rfq_new_request.html.twig')
                ->context([
                    'request' => $request,
                    'provider' => $provider,
                ]);

            $this->mailer->send($email);
        }
    }

    /**
     * Notifies all providers who submitted proposals that the request has been
     * awarded to someone else. The winning provider receives a separate notification.
     */
    public function notifyClosedRequest(ServiceRequest $request, ServiceProposal $winner): void
    {
        foreach ($request->getProposals() as $proposal) {
            if ($proposal->getId() === $winner->getId()) {
                $this->sendAwardEmail($request, $proposal);
            } else {
                $this->sendRejectionEmail($request, $proposal);
            }
        }
    }

    private function sendAwardEmail(ServiceRequest $request, ServiceProposal $proposal): void
    {
        $provider = $proposal->getServiceProvider();
        $email = (new TemplatedEmail())
            ->from(new Address('ziadijizel26@gmail.com', 'Eventify'))
            ->to(new Address($provider->getEmail(), $provider->getName()))
            ->subject('Félicitations ! Votre proposition a été retenue — ' . $request->getTitle())
            ->htmlTemplate('emails/rfq_awarded.html.twig')
            ->context([
                'request' => $request,
                'proposal' => $proposal,
                'provider' => $provider,
            ]);

        $this->mailer->send($email);
    }

    private function sendRejectionEmail(ServiceRequest $request, ServiceProposal $proposal): void
    {
        $provider = $proposal->getServiceProvider();
        $email = (new TemplatedEmail())
            ->from(new Address('ziadijizel26@gmail.com', 'Eventify'))
            ->to(new Address($provider->getEmail(), $provider->getName()))
            ->subject('Appel d\'offres clôturé — ' . $request->getTitle())
            ->htmlTemplate('emails/rfq_closed.html.twig')
            ->context([
                'request' => $request,
                'proposal' => $proposal,
                'provider' => $provider,
            ]);

        $this->mailer->send($email);
    }
}
