<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Event;
use App\Entity\User;
use App\Form\AdminUserType;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/admin/users', name: 'app_admin_users_')]
class UserManagementController extends AbstractController
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly EventRepository $eventRepository,
        private readonly EntityManagerInterface $entityManager,
        private readonly UserPasswordHasherInterface $passwordHasher,
    ) {
    }

    #[Route('', name: 'index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $q = trim($request->query->getString('q'));
        $users = $this->userRepository->findBySearchOrderByCreatedAt($q);

        if ($request->isXmlHttpRequest()) {
            return $this->render('admin/users/_users_list.html.twig', [
                'users' => $users,
            ]);
        }

        return $this->render('admin/users/index.html.twig', [
            'users' => $users,
            'search_q' => $q,
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $user = new User();
        $user->setIsActive(true);
        $user->setRoles([User::ROLE_CLIENT]);

        $form = $this->createForm(AdminUserType::class, $user, ['require_password' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = (string) $form->get('plainPassword')->getData();
            $hashed = $this->passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashed);

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $this->addFlash('success', 'User created.');

            return $this->redirectToRoute('app_admin_users_index');
        }

        return $this->render('admin/users/form.html.twig', [
            'form' => $form,
            'user' => $user,
            'is_new' => true,
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

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(AdminUserType::class, $user, ['require_password' => false]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string|null $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword !== null && $plainPassword !== '') {
                $hashed = $this->passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashed);
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'User updated.');

            return $this->redirectToRoute('app_admin_users_index');
        }

        return $this->render('admin/users/form.html.twig', [
            'form' => $form,
            'user' => $user,
            'is_new' => false,
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

    #[Route('/export/csv', name: 'export_csv', methods: ['GET'])]
    public function exportCsv(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $users = $this->userRepository->findBy([], ['createdAt' => 'DESC']);
        
        $csv = "ID,First Name,Last Name,Email,Roles,Active,Email Verified,Created At\n";
        
        foreach ($users as $user) {
            $csv .= sprintf(
                "%d,%s,%s,%s,%s,%s,%s,%s\n",
                $user->getId(),
                $this->escapeCsv($user->getFirstName()),
                $this->escapeCsv($user->getLastName()),
                $this->escapeCsv($user->getEmail()),
                $this->escapeCsv(implode(', ', $user->getRoles())),
                $user->isActive() ? 'Yes' : 'No',
                $user->getEmailVerifiedAt() ? 'Yes' : 'No',
                $user->getCreatedAt()->format('Y-m-d H:i:s')
            );
        }
        
        $response = new Response($csv);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="users_export_' . date('Y-m-d_His') . '.csv"');
        
        return $response;
    }

    #[Route('/export/pdf', name: 'export_pdf', methods: ['GET'])]
    public function exportPdf(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $users = $this->userRepository->findBy([], ['createdAt' => 'DESC']);
        
        $html = $this->renderView('admin/users/export_pdf.html.twig', [
            'users' => $users,
            'export_date' => new \DateTime(),
        ]);
        
        return new Response($html, 200, [
            'Content-Type' => 'text/html',
        ]);
    }

    private function escapeCsv(string $value): string
    {
        if (str_contains($value, ',') || str_contains($value, '"') || str_contains($value, "\n")) {
            return '"' . str_replace('"', '""', $value) . '"';
        }
        return $value;
    }
}
