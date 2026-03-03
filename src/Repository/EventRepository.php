<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * List events with optional search and sort.
     *
     * @param string|null $search Free-text search on title, description, organizer, and venue/location
     * @param string      $sort   One of 'date_asc', 'date_desc'
     *
     * @return Event[]
     */
    public function searchEvents(?string $search, string $sort = 'date_asc'): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.venue', 'v')
            ->leftJoin('e.organizer', 'o');

        if ($search !== null && $search !== '') {
            $qb
                ->andWhere(
                    'LOWER(e.title) LIKE :q
                    OR LOWER(COALESCE(e.description, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.name, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.city, \'\')) LIKE :q
                    OR LOWER(COALESCE(v.country, \'\')) LIKE :q
                    OR LOWER(COALESCE(o.name, \'\')) LIKE :q'
                )
                ->setParameter('q', '%' . mb_strtolower($search) . '%');
        }

        $direction = $sort === 'date_desc' ? 'DESC' : 'ASC';

        $qb->orderBy('e.startDatetime', $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Event[]
     */
    public function findPublishedOrderByStart(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.status = :status')
            ->setParameter('status', Event::STATUS_PUBLISHED)
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Events where the given user is the organizer (via organizer.user).
     * Optionally filter by status.
     *
     * @return Event[]
     */
    public function findByOrganizerUserOrderByStart(User $user, ?string $status = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->innerJoin('e.organizer', 'o')
            ->andWhere('o.user = :user')
            ->setParameter('user', $user)
            ->orderBy('e.startDatetime', 'ASC');
        if ($status !== null && $status !== '') {
            $qb->andWhere('e.status = :status')->setParameter('status', $status);
        }
        return $qb->getQuery()->getResult();
    }
}
=======
<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Organizer;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Event>
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    /**
     * @return Event[]
     */
    public function findAllOrderByStart(): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Event[]
     */
    public function findPublishedOrderByStart(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.status = :status')
            ->setParameter('status', Event::STATUS_PUBLISHED)
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Events for a given organizer, ordered by start date.
     *
     * @return Event[]
     */
    public function findByOrganizerOrderByStart(Organizer $organizer): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.organizer = :organizer')
            ->setParameter('organizer', $organizer)
            ->orderBy('e.startDatetime', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Top events by tickets sold (for dashboard).
     *
     * @return Event[]
     */
    public function findTopBySold(int $limit = 5): array
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.sold', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Event counts grouped by venue country (for dashboard "Sales by Locations").
     * Returns array of ['country' => string, 'count' => int], sorted by count descending.
     *
     * @return array<int, array{country: string, count: int}>
     */
    public function findCountByCountry(): array
    {
        $results = $this->createQueryBuilder('e')
            ->select('v.country AS country', 'COUNT(e.id) AS cnt')
            ->leftJoin('e.venue', 'v')
            ->where('v.country IS NOT NULL')
            ->andWhere('v.country != :empty')
            ->setParameter('empty', '')
            ->groupBy('v.country')
            ->orderBy('cnt', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        $out = [];
        foreach ($results as $row) {
            $out[] = [
                'country' => (string) $row['country'],
                'count' => (int) $row['cnt'],
            ];
        }
        return $out;
    }

    /**
     * Events for public listing with optional search and sort.
     * When organizer is set (admin filter), returns that organizer's events (all statuses).
     * Otherwise returns only published events.
     *
     * @return Event[]
     */
    public function findForListing(string $q = '', string $sort = 'date_asc', ?Organizer $organizer = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.organizer', 'o');

        if ($organizer !== null) {
            $qb->andWhere('e.organizer = :organizer')->setParameter('organizer', $organizer);
        } else {
            $qb->andWhere('e.status = :status')->setParameter('status', Event::STATUS_PUBLISHED);
        }

        if ($q !== '') {
            $term = '%' . addcslashes($q, '%_') . '%';
            $qb->andWhere(
                $qb->expr()->orX(
                    'e.title LIKE :q',
                    'e.summary LIKE :q',
                    'e.description LIKE :q',
                    'o.name LIKE :q'
                )
            )->setParameter('q', $term);
        }

        switch ($sort) {
            case 'date_desc':
                $qb->orderBy('e.startDatetime', 'DESC');
                break;
            case 'title_asc':
                $qb->orderBy('e.title', 'ASC');
                break;
            case 'title_desc':
                $qb->orderBy('e.title', 'DESC');
                break;
            default:
                $qb->orderBy('e.startDatetime', 'ASC');
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * All events for admin listing with optional search (title, summary, description, organizer name).
     *
     * @return Event[]
     */
    public function findForAdminListing(string $q = ''): array
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.organizer', 'o')
            ->orderBy('e.startDatetime', 'ASC');
        if ($q !== '') {
            $term = '%' . addcslashes($q, '%_') . '%';
            $qb->andWhere(
                $qb->expr()->orX(
                    'e.title LIKE :q',
                    'e.summary LIKE :q',
                    'e.description LIKE :q',
                    'o.name LIKE :q'
                )
            )->setParameter('q', $term);
        }
        return $qb->getQuery()->getResult();
    }

    /**
     * Events where the given user is the organizer (via organizer.user).
     * Optionally filter by status.
     *
     * @return Event[]
     */
    public function findByOrganizerUserOrderByStart(User $user, ?string $status = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->innerJoin('e.organizer', 'o')
            ->andWhere('o.user = :user')
            ->setParameter('user', $user)
            ->orderBy('e.startDatetime', 'ASC');
        if ($status !== null && $status !== '') {
            $qb->andWhere('e.status = :status')->setParameter('status', $status);
        }
        return $qb->getQuery()->getResult();
    }
}
>>>>>>> ecebe19 (feat: full Eventify update - add Stripe, 2FA, QR codes, sponsorship, service booking, password reset, email verification, admin panel, and more)
