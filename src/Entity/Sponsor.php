<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
#[ORM\Table(name: 'sponsor', options: [
    'comment' => 'Sponsors per event. Contrôle de saisie: status, payment_status enum CHECK, email UNIQUE',
])]
#[ORM\HasLifecycleCallbacks]
class Sponsor
{
    public const PAYMENT_STATUS_PENDING = 'pending';
    public const PAYMENT_STATUS_PAID = 'paid';
    public const PAYMENT_STATUS_PARTIALLY_PAID = 'partially_paid';

    public const PAYMENT_STATUSES = [self::PAYMENT_STATUS_PENDING, self::PAYMENT_STATUS_PAID, self::PAYMENT_STATUS_PARTIALLY_PAID];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_PENDING_APPROVAL = 'pending_approval';
    public const STATUS_REJECTED = 'rejected';

    public const STATUSES = [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_PENDING_APPROVAL, self::STATUS_REJECTED];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** Contrôle saisie DB: NOT NULL, length 255 */
    #[ORM\Column(length: 255, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $name = null;

    /** Contrôle saisie DB: NOT NULL, UNIQUE, length 255 */
    #[ORM\Column(length: 255, unique: true, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Email]
    #[Assert\Length(max: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true, options: ['comment' => 'Max 50 chars'])]
    #[Assert\Length(max: 50)]
    private ?string $phone = null;

    #[ORM\Column(length: 500, nullable: true)]
    #[Assert\Length(max: 500)]
    private ?string $website = null;

    #[ORM\Column(length: 500, nullable: true)]
    #[Assert\Length(max: 500)]
    private ?string $logoUrl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255)]
    private ?string $contactPersonName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Email]
    #[Assert\Length(max: 255)]
    private ?string $contactPersonEmail = null;

    #[ORM\ManyToOne(targetEntity: SponsorshipPackage::class, inversedBy: 'sponsors')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?SponsorshipPackage $sponsorshipPackage = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'sponsors')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Event $event = null;

    /** Contrôle saisie DB: NOT NULL, CHECK IN (pending, paid, partially_paid), DEFAULT pending */
    #[ORM\Column(length: 30, nullable: false, options: ['default' => self::PAYMENT_STATUS_PENDING])]
    #[Assert\Choice(choices: self::PAYMENT_STATUSES)]
    private string $paymentStatus = self::PAYMENT_STATUS_PENDING;

    /** Contrôle saisie DB: DECIMAL(10,2) >= 0 when set */
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    #[Assert\GreaterThanOrEqual(value: '0')]
    private ?string $amountPaid = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: true)]
    private ?\DateTimeImmutable $paymentDate = null;

    /** Contrôle saisie DB: NOT NULL, CHECK IN (active, inactive, pending_approval, rejected), DEFAULT pending_approval */
    #[ORM\Column(length: 30, nullable: false, options: ['default' => self::STATUS_PENDING_APPROVAL])]
    #[Assert\Choice(choices: self::STATUSES)]
    private string $status = self::STATUS_PENDING_APPROVAL;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    /** User (organizer or admin) who accepted the sponsor request. */
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $acceptedBy = null;

    /** User (organizer or admin) who refused the sponsor request. */
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?User $refusedBy = null;

    /** Contrôle saisie DB: NOT NULL */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: false)]
    private ?\DateTimeImmutable $createdAt = null;

    /** Contrôle saisie DB: NOT NULL */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: false)]
    private ?\DateTimeImmutable $updatedAt = null;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): static
    {
        $this->website = $website;
        return $this;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function setLogoUrl(?string $logoUrl): static
    {
        $this->logoUrl = $logoUrl;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getContactPersonName(): ?string
    {
        return $this->contactPersonName;
    }

    public function setContactPersonName(?string $contactPersonName): static
    {
        $this->contactPersonName = $contactPersonName;
        return $this;
    }

    public function getContactPersonEmail(): ?string
    {
        return $this->contactPersonEmail;
    }

    public function setContactPersonEmail(?string $contactPersonEmail): static
    {
        $this->contactPersonEmail = $contactPersonEmail;
        return $this;
    }

    public function getSponsorshipPackage(): ?SponsorshipPackage
    {
        return $this->sponsorshipPackage;
    }

    public function setSponsorshipPackage(?SponsorshipPackage $sponsorshipPackage): static
    {
        $this->sponsorshipPackage = $sponsorshipPackage;
        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;
        return $this;
    }

    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): static
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    public function getAmountPaid(): ?string
    {
        return $this->amountPaid;
    }

    public function setAmountPaid(?string $amountPaid): static
    {
        $this->amountPaid = $amountPaid;
        return $this;
    }

    public function getPaymentDate(): ?\DateTimeImmutable
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(?\DateTimeImmutable $paymentDate): static
    {
        $this->paymentDate = $paymentDate;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getAcceptedBy(): ?User
    {
        return $this->acceptedBy;
    }

    public function setAcceptedBy(?User $acceptedBy): static
    {
        $this->acceptedBy = $acceptedBy;
        return $this;
    }

    public function getRefusedBy(): ?User
    {
        return $this->refusedBy;
    }

    public function setRefusedBy(?User $refusedBy): static
    {
        $this->refusedBy = $refusedBy;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }
}
