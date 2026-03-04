<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ServiceBookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: ServiceBookingRepository::class)]
#[Assert\Callback(callback: [self::class, 'validateEndTimeAfterStartTime'])]
#[ORM\Table(name: 'service_booking')]
#[ORM\HasLifecycleCallbacks]
class ServiceBooking
{
    public const STATUS_PENDING = 'pending';
    public const STATUS_CONFIRMED = 'confirmed';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_COMPLETED = 'completed';

    public const STATUSES = [
        self::STATUS_PENDING,
        self::STATUS_CONFIRMED,
        self::STATUS_CANCELLED,
        self::STATUS_COMPLETED,
    ];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: ServiceProvider::class, inversedBy: 'serviceBookings')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotBlank]
    private ?ServiceProvider $serviceProvider = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'serviceBookings')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotBlank]
    private ?Event $event = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual('today', message: 'Scheduled date cannot be in the past.')]
    private ?\DateTimeInterface $scheduledDate = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $startTime = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $endTime = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $quantity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?string $agreedPrice = null;

    #[ORM\Column(length: 20)]
    private string $status = self::STATUS_PENDING;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
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

    public function getServiceProvider(): ?ServiceProvider
    {
        return $this->serviceProvider;
    }

    public function setServiceProvider(?ServiceProvider $serviceProvider): static
    {
        $this->serviceProvider = $serviceProvider;
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

    public function getScheduledDate(): ?\DateTimeInterface
    {
        return $this->scheduledDate;
    }

    public function setScheduledDate(?\DateTimeInterface $scheduledDate): static
    {
        $this->scheduledDate = $scheduledDate;
        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->startTime;
    }

    public function setStartTime(?\DateTimeInterface $startTime): static
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->endTime;
    }

    public function setEndTime(?\DateTimeInterface $endTime): static
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getAgreedPrice(): ?string
    {
        return $this->agreedPrice;
    }

    public function setAgreedPrice(string $agreedPrice): static
    {
        $this->agreedPrice = $agreedPrice;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public static function validateEndTimeAfterStartTime(ServiceBooking $booking, ExecutionContextInterface $context): void
    {
        if ($booking->getStartTime() === null || $booking->getEndTime() === null) {
            return;
        }
        $start = $booking->getStartTime() instanceof \DateTimeInterface
            ? $booking->getStartTime()->format('H:i:s')
            : (string) $booking->getStartTime();
        $end = $booking->getEndTime() instanceof \DateTimeInterface
            ? $booking->getEndTime()->format('H:i:s')
            : (string) $booking->getEndTime();
        if ($end <= $start) {
            $context->buildViolation('End time must be after start time.')
                ->atPath('endTime')
                ->addViolation();
        }
    }
}
