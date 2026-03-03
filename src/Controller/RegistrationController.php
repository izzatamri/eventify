<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    private const CODE_VALIDITY = '+15 minutes';

    public function __construct(
        private readonly string $recaptchaSiteKey,
    ) {
    }

    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_events');
        }

        $user = new User();
        $user->setRoles([User::ROLE_CLIENT]);

        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            $code = sprintf('%06d', random_int(0, 999_999));
            $user->setEmailVerificationCode($code);
            $user->setEmailVerificationCodeExpiresAt(new \DateTimeImmutable(self::CODE_VALIDITY));
            $entityManager->persist($user);
            
            try {
                $entityManager->flush();
            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'This email address is already registered. Please use a different email or try to reset your password.');
                return $this->redirectToRoute('app_register');
            } catch (\Throwable $e) {
                $this->addFlash('error', 'An error occurred during registration. Please try again.');
                return $this->redirectToRoute('app_register');
            }

            $from = $this->getParameter('mailer_from') ?: 'noreply@eventify.local';
            $mailMessage = (new Email())
                ->from($from)
                ->to($user->getEmail())
                ->subject('Verify your Eventify email')
                ->text(sprintf(
                    "Hello %s,\n\nYour verification code is: %s\n\nEnter this code on the verification page to activate your account. The code expires in 15 minutes.\n\nIf you did not register, you can ignore this email.\n\n— Eventify",
                    $user->getFirstName(),
                    $code
                ));
            
            $mailer->send($mailMessage);
            $request->getSession()->set('pending_verify_user_id', $user->getId());
            $this->addFlash('success', 'Account created. We sent a 6-digit code to your email. Enter it below to verify and sign in.');
            return $this->redirectToRoute('app_verify_email');
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form,
            'recaptcha_site_key' => $this->recaptchaSiteKey,
        ]);
    }
}
