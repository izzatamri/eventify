<?php

declare(strict_types=1);

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsEventListener(event: KernelEvents::REQUEST, priority: 64)]
final class RecaptchaLoginListener
{
    private const VERIFY_URL = 'https://www.google.com/recaptcha/api/siteverify';

    public function __construct(
        private readonly string $recaptchaSecretKey,
        private readonly UrlGeneratorInterface $urlGenerator,
        private readonly HttpClientInterface $httpClient,
    ) {
    }

    private const PROTECTED_PATHS = [
        '/login' => 'app_login',
        '/register' => 'app_register',
    ];

    public function onKernelRequest(RequestEvent $event): void
    {
        $request = $event->getRequest();
        $path = $request->getPathInfo();
        if (!$request->isMethod(Request::METHOD_POST) || !isset(self::PROTECTED_PATHS[$path])) {
            return;
        }

        if ($this->recaptchaSecretKey === '') {
            return;
        }

        $token = $request->request->getString('g-recaptcha-response');
        if ($token === '') {
            $this->redirectWithError($event, $request, self::PROTECTED_PATHS[$path]);
            return;
        }

        $response = $this->httpClient->request(Request::METHOD_POST, self::VERIFY_URL, [
            'body' => [
                'secret' => $this->recaptchaSecretKey,
                'response' => $token,
                'remoteip' => $request->getClientIp() ?? '',
            ],
        ]);

        $data = $response->toArray();
        if (!($data['success'] ?? false)) {
            $this->redirectWithError($event, $request, self::PROTECTED_PATHS[$path]);
        }
    }

    private function redirectWithError(RequestEvent $event, Request $request, string $route): void
    {
        $request->getSession()->getFlashBag()->add('error', 'Please complete the reCAPTCHA verification.');
        $response = new RedirectResponse(
            $this->urlGenerator->generate($route, [], UrlGeneratorInterface::ABSOLUTE_URL)
        );
        $event->setResponse($response);
    }
}
