<?php

declare(strict_types=1);

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AdminLoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private readonly UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): Response
    {
        $user = $token->getUser();
        if (!$user instanceof UserInterface) {
            return new RedirectResponse($this->urlGenerator->generate('app_events'));
        }

        $session = $request->getSession();
        $targetPath = $session->get('_security.main.target_path');
        if (\is_string($targetPath) && str_starts_with($targetPath, '/admin')) {
            return new RedirectResponse($targetPath);
        }

        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return new RedirectResponse($this->urlGenerator->generate('app_admin_dashboard'));
        }

        return new RedirectResponse($this->urlGenerator->generate('app_events'));
    }
}
