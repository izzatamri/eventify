<?php

declare(strict_types=1);

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        $user = $this->getUser();
        
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/profile/change-password', name: 'app_profile_change_password', methods: ['POST'])]
    public function changePassword(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if (!$this->isCsrfTokenValid('change_password', $request->request->get('_csrf_token'))) {
            $this->addFlash('error', 'Invalid CSRF token.');
            return $this->redirectToRoute('app_profile');
        }

        $user = $this->getUser();
        $currentPassword = $request->request->get('current_password');
        $newPassword = $request->request->get('new_password');
        $confirmPassword = $request->request->get('confirm_password');

        // Validate current password
        if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
            $this->addFlash('error', 'Current password is incorrect.');
            return $this->redirectToRoute('app_profile');
        }

        // Validate new password matches confirmation
        if ($newPassword !== $confirmPassword) {
            $this->addFlash('error', 'New passwords do not match.');
            return $this->redirectToRoute('app_profile');
        }

        // Validate password length
        if (strlen($newPassword) < 6) {
            $this->addFlash('error', 'New password must be at least 6 characters long.');
            return $this->redirectToRoute('app_profile');
        }

        // Update password
        $user->setPassword($passwordHasher->hashPassword($user, $newPassword));
        $entityManager->flush();

        $this->addFlash('success', 'Your password has been changed successfully.');
        return $this->redirectToRoute('app_profile');
    }
}
