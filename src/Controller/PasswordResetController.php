<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\RequestPasswordResetType;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PasswordResetController extends AbstractController
{
    private const TOKEN_VALIDITY = '+1 hour';

    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly EntityManagerInterface $entityManager,
        private readonly MailerInterface $mailer,
        private readonly UrlGeneratorInterface $urlGenerator,
    ) {
    }

    #[Route('/reset-password', name: 'app_password_reset_request', methods: ['GET', 'POST'])]
    public function request(Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_events');
        }

        $form = $this->createForm(RequestPasswordResetType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $this->userRepository->findActiveByEmail($email);
            if ($user !== null) {
                $token = bin2hex(random_bytes(32));
                $expiresAt = new \DateTimeImmutable(self::TOKEN_VALIDITY);
                $user->setResetToken($token);
                $user->setResetTokenExpiresAt($expiresAt);
                $this->entityManager->flush();

                $resetUrl = $this->urlGenerator->generate('app_password_reset_confirm', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                $from = $this->getParameter('mailer_from') ?: 'noreply@eventify.local';
                try {
                    $mail = (new Email())
                        ->from($from)
                        ->to($user->getEmail())
                        ->subject('Reset your Eventify password')
                        ->text(sprintf(
                            "Hello,\n\nYou requested a password reset. Click the link below to set a new password:\n\n%s\n\nThis link expires in 1 hour. If you did not request this, please ignore this email.\n\n— Eventify",
                            $resetUrl
                        ));
                    $this->mailer->send($mail);
                } catch (\Throwable $e) {
                    $this->addFlash('error', 'We could not send the reset email. Please try again later or contact support.');
                    return $this->redirectToRoute('app_password_reset_request');
                }
            }
            $this->addFlash('success', 'If an account exists for that email, you will receive a link to reset your password.');
            return $this->redirectToRoute('app_password_reset_request');
        }

        return $this->render('security/reset_password_request.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/reset-password/confirm/{token}', name: 'app_password_reset_confirm', methods: ['GET', 'POST'])]
    public function confirm(Request $request, string $token, UserPasswordHasherInterface $passwordHasher): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_events');
        }

        $user = $this->userRepository->findOneByValidResetToken($token);
        if ($user === null) {
            $this->addFlash('error', 'This reset link is invalid or has expired. Please request a new one.');
            return $this->redirectToRoute('app_password_reset_request');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            $user->setResetToken(null);
            $user->setResetTokenExpiresAt(null);
            $this->entityManager->flush();
            $this->addFlash('success', 'Your password has been reset. You can now sign in.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/reset_password_confirm.html.twig', [
            'form' => $form,
        ]);
    }
}
