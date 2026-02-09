<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\User;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/users', name: 'app_admin_users_')]
class UserManagementController extends AbstractController
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly EventRepository $eventRepository,
        private readonly EntityManagerInterface $entityManager,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $users = $this->userRepository->findAllOrderByCreatedAt();

        return $this->render('admin/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/stats', name: 'stats', methods: ['GET'])]
    public function stats(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $totalUsers = $this->userRepository->count([]);
        $activeUsers = $this->userRepository->count(['isActive' => true]);
        $totalEvents = $this->eventRepository->count([]);
        $publishedEvents = $this->eventRepository->count(['status' => Event::STATUS_PUBLISHED]);

        return $this->render('admin/users/stats.html.twig', [
            'total_users' => $totalUsers,
            'active_users' => $activeUsers,
            'total_events' => $totalEvents,
            'published_events' => $publishedEvents,
        ]);
    }

    #[Route('/{id}/toggle-active', name: 'toggle_active', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function toggleActive(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('user_toggle_' . $user->getId(), $token)) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_admin_users_index');
        }
        $user->setIsActive(!$user->isActive());
        $this->entityManager->flush();
        $this->addFlash('success', $user->isActive() ? 'User activated.' : 'User deactivated (banned).');
        return $this->redirectToRoute('app_admin_users_index');
    }

    #[Route('/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($user->getId() === $this->getUser()?->getId()) {
            $this->addFlash('error', 'You cannot delete your own account.');
            return $this->redirectToRoute('app_admin_users_index');
        }
        $token = $request->request->getString('_token');
        if (!$this->isCsrfTokenValid('user_delete_' . $user->getId(), $token)) {
            $this->addFlash('error', 'Invalid security token.');
            return $this->redirectToRoute('app_admin_users_index');
        }
        $this->entityManager->remove($user);
        $this->entityManager->flush();
        $this->addFlash('success', 'User deleted.');
        return $this->redirectToRoute('app_admin_users_index');
    }
}
