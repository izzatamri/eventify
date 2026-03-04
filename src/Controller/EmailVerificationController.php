<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\EmailVerificationCodeType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class EmailVerificationController extends AbstractController
{
    private const CODE_VALIDITY = '+15 minutes';

    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly EntityManagerInterface $entityManager,
        private readonly MailerInterface $mailer,
    ) {
    }

    #[Route('/verify-email', name: 'app_verify_email', methods: ['GET', 'POST'])]
    public function verify(Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_events');
        }

        $userId = $request->getSession()->get('pending_verify_user_id');
        if ($userId === null) {
            $this->addFlash('error', 'Please register first, or request a new code.');
            return $this->redirectToRoute('app_register');
        }

        $user = $this->userRepository->find($userId);
        if ($user === null || $user->isEmailVerified()) {
            $request->getSession()->remove('pending_verify_user_id');
            $this->addFlash('info', 'Your email is already verified. You can sign in.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(EmailVerificationCodeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $code = $form->get('code')->getData();
            if (!$user->isEmailVerificationCodeValid() || $user->getEmailVerificationCode() !== $code) {
                $this->addFlash('error', 'Invalid or expired code. Please try again or resend a new code.');
                return $this->render('security/verify_email.html.twig', [
                    'form' => $form,
                    'email' => $user->getEmail(),
                ]);
            }
            $user->setEmailVerifiedAt(new \DateTimeImmutable());
            $user->setEmailVerificationCode(null);
            $user->setEmailVerificationCodeExpiresAt(null);
            $this->entityManager->flush();
            
            $request->getSession()->remove('pending_verify_user_id');
            
            $this->addFlash('success', 'Email verified successfully! You can now sign in.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/verify_email.html.twig', [
            'form' => $form,
            'email' => $user->getEmail(),
        ]);
    }

    #[Route('/verify-email/resend', name: 'app_verify_email_resend', methods: ['POST'])]
    public function resend(Request $request): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_events');
        }
        if (!$this->isCsrfTokenValid('verify_email_resend', $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid request. Please try again.');
            return $this->redirectToRoute('app_verify_email');
        }

        $userId = $request->getSession()->get('pending_verify_user_id');
        if ($userId === null) {
            $this->addFlash('error', 'Session expired. Please register again.');
            return $this->redirectToRoute('app_register');
        }

        $user = $this->userRepository->find($userId);
        if ($user === null || $user->isEmailVerified()) {
            $request->getSession()->remove('pending_verify_user_id');
            return $this->redirectToRoute('app_login');
        }

        $code = sprintf('%06d', random_int(0, 999_999));
        $user->setEmailVerificationCode($code);
        $user->setEmailVerificationCodeExpiresAt(new \DateTimeImmutable(self::CODE_VALIDITY));
        $this->entityManager->flush();

        $from = $this->getParameter('mailer_from') ?: 'noreply@eventify.local';
        $mail = (new Email())
            ->from($from)
            ->to($user->getEmail())
            ->subject('Your new Eventify verification code')
            ->text(sprintf(
                "Hello %s,\n\nYour new verification code is: %s\n\nEnter this code on the verification page. The code expires in 15 minutes.\n\n— Eventify",
                $user->getFirstName(),
                $code
            ));
        
        $this->mailer->send($mail);
        $this->addFlash('success', 'A new code was sent to your email.');
        
        return $this->redirectToRoute('app_verify_email');
    }
}
