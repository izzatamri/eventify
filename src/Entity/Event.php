<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
#[ORM\HasLifecycleCallbacks]
class Event
{
    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_CANCELLED = 'cancelled';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 140, nullable: true)]
    #[Assert\Length(max: 140)]
    private ?string $summary = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $startDatetime = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $endDatetime = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: [self::STATUS_DRAFT, self::STATUS_PUBLISHED, self::STATUS_CANCELLED])]
    private string $status = self::STATUS_DRAFT;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Venue::class, inversedBy: 'events', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Venue $venue = null;

    #[ORM\ManyToOne(targetEntity: Organizer::class, inversedBy: 'events', cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Organizer $organizer = null;

    /** @var Collection<int, Ticket> */
    #[ORM\OneToMany(targetEntity: Ticket::class, mappedBy: 'event', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $tickets;

    /** @var Collection<int, Category> */
    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'events', cascade: ['persist'])]
    #[ORM\JoinTable(name: 'event_category')]
    private Collection $categories;

    #[ORM\Column(type: Types::INTEGER, options: ['default' => 0])]
    private int $sold = 0;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, options: ['default' => 0])]
    private string $gross = '0.00';

    /** @var Collection<int, Order> */
    #[ORM\OneToMany(targetEntity: Order::class, mappedBy: 'event')]
    private Collection $orders;

    /** @var Collection<int, SponsorshipPackage> */
    #[ORM\OneToMany(targetEntity: SponsorshipPackage::class, mappedBy: 'event', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $sponsorshipPackages;

    /** @var Collection<int, Sponsor> */
    #[ORM\OneToMany(targetEntity: Sponsor::class, mappedBy: 'event', cascade: ['persist'], orphanRemoval: false)]
    private Collection $sponsors;

    /** @var Collection<int, ServiceBooking> */
    #[ORM\OneToMany(targetEntity: ServiceBooking::class, mappedBy: 'event', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $serviceBookings;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->sponsorshipPackages = new ArrayCollection();
        $this->sponsors = new ArrayCollection();
        $this->serviceBookings = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): static
    {
        $this->summary = $summary;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getStartDatetime(): ?\DateTimeImmutable
    {
        return $this->startDatetime;
    }

    public function setStartDatetime(\DateTimeImmutable $startDatetime): static
    {
        $this->startDatetime = $startDatetime;
        return $this;
    }

    public function getEndDatetime(): ?\DateTimeImmutable
    {
        return $this->endDatetime;
    }

    public function setEndDatetime(\DateTimeImmutable $endDatetime): static
    {
        $this->endDatetime = $endDatetime;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    public function setVenue(?Venue $venue): static
    {
        $this->venue = $venue;
        return $this;
    }

    public function getOrganizer(): ?Organizer
    {
        return $this->organizer;
    }

    public function setOrganizer(?Organizer $organizer): static
    {
        $this->organizer = $organizer;
        return $this;
    }

    /**
     * @return Collection<int, Ticket>
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): static
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets->add($ticket);
            $ticket->setEvent($this);
        }
        return $this;
    }

    public function removeTicket(Ticket $ticket): static
    {
        if ($this->tickets->removeElement($ticket)) {
            if ($ticket->getEvent() === $this) {
                $ticket->setEvent(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }
        return $this;
    }

    public function removeCategory(Category $category): static
    {
        $this->categories->removeElement($category);
        return $this;
    }

    /** Minimum ticket price for display, or null if no tickets. */
    public function getMinPrice(): ?string
    {
        $min = null;
        foreach ($this->tickets as $ticket) {
            $p = $ticket->getPrice();
            if ($p !== null && ($min === null || (float) $p < (float) $min)) {
                $min = $p;
            }
        }
        return $min;
    }

    /** Formatted price label for display (e.g. "Free" or "From €10.00"). */
    public function getPriceLabel(): string
    {
        $min = $this->getMinPrice();
        if ($min === null || (float) $min <= 0) {
            return 'Free';
        }
        $currency = $this->tickets->first() ? $this->tickets->first()->getCurrency() : 'USD';
        $symbol = $currency === 'EUR' ? '€' : ($currency === 'USD' ? '$' : $currency . ' ');
        return 'From ' . $symbol . number_format((float) $min, 2);
    }

    public function getSold(): int
    {
        return $this->sold;
    }

    public function setSold(int $sold): static
    {
        $this->sold = $sold;
        return $this;
    }

    public function getGross(): string
    {
        return $this->gross;
    }

    public function setGross(string $gross): static
    {
        $this->gross = $gross;
        return $this;
    }

    /** @return Collection<int, Order> */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    /** @return Collection<int, SponsorshipPackage> */
    public function getSponsorshipPackages(): Collection
    {
        return $this->sponsorshipPackages;
    }

    public function addSponsorshipPackage(SponsorshipPackage $sponsorshipPackage): static
    {
        if (!$this->sponsorshipPackages->contains($sponsorshipPackage)) {
            $this->sponsorshipPackages->add($sponsorshipPackage);
            $sponsorshipPackage->setEvent($this);
        }
        return $this;
    }

    public function removeSponsorshipPackage(SponsorshipPackage $sponsorshipPackage): static
    {
        if ($this->sponsorshipPackages->removeElement($sponsorshipPackage)) {
            if ($sponsorshipPackage->getEvent() === $this) {
                $sponsorshipPackage->setEvent(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, Sponsor> */
    public function getSponsors(): Collection
    {
        return $this->sponsors;
    }

    public function addSponsor(Sponsor $sponsor): static
    {
        if (!$this->sponsors->contains($sponsor)) {
            $this->sponsors->add($sponsor);
            $sponsor->setEvent($this);
        }
        return $this;
    }

    public function removeSponsor(Sponsor $sponsor): static
    {
        if ($this->sponsors->removeElement($sponsor)) {
            if ($sponsor->getEvent() === $this) {
                $sponsor->setEvent(null);
            }
        }
        return $this;
    }

    /** @return Collection<int, ServiceBooking> */
    public function getServiceBookings(): Collection
    {
        return $this->serviceBookings;
    }

    public function addServiceBooking(ServiceBooking $serviceBooking): static
    {
        if (!$this->serviceBookings->contains($serviceBooking)) {
            $this->serviceBookings->add($serviceBooking);
            $serviceBooking->setEvent($this);
        }
        return $this;
    }

    public function removeServiceBooking(ServiceBooking $serviceBooking): static
    {
        if ($this->serviceBookings->removeElement($serviceBooking)) {
            if ($serviceBooking->getEvent() === $this) {
                $serviceBooking->setEvent(null);
            }
        }
        return $this;
    }
}
