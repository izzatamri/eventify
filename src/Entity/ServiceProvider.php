<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ServiceProviderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceProviderRepository::class)]
#[ORM\Table(name: 'service_provider')]
#[ORM\HasLifecycleCallbacks]
class ServiceProvider
{
    public const SERVICE_TYPE_CATERING = 'Catering';
    public const SERVICE_TYPE_SECURITY = 'Security';
    public const SERVICE_TYPE_PHOTOGRAPHY = 'Photography';
    public const SERVICE_TYPE_VIDEOGRAPHY = 'Videography';
    public const SERVICE_TYPE_DECORATION = 'Decoration';
    public const SERVICE_TYPE_ENTERTAINMENT = 'Entertainment';
    public const SERVICE_TYPE_TRANSPORTATION = 'Transportation';
    public const SERVICE_TYPE_OTHER = 'Other';

    public const SERVICE_TYPES = [
        self::SERVICE_TYPE_CATERING,
        self::SERVICE_TYPE_SECURITY,
        self::SERVICE_TYPE_PHOTOGRAPHY,
        self::SERVICE_TYPE_VIDEOGRAPHY,
        self::SERVICE_TYPE_DECORATION,
        self::SERVICE_TYPE_ENTERTAINMENT,
        self::SERVICE_TYPE_TRANSPORTATION,
        self::SERVICE_TYPE_OTHER,
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    public const STATUSES = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    #[Assert\Length(max: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 50)]
    private ?string $phone = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: self::SERVICE_TYPES)]
    private ?string $serviceType = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?string $hourlyRate = null;

    #[ORM\Column(length: 20)]
    #[Assert\Choice(choices: self::STATUSES)]
    private string $status = self::STATUS_ACTIVE;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updatedAt = null;

    /** @var Collection<int, ServiceBooking> */
    #[ORM\OneToMany(targetEntity: ServiceBooking::class, mappedBy: 'serviceProvider', cascade: ['persist'], orphanRemoval: false)]
    private Collection $serviceBookings;

    public function __construct()
    {
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

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    public function setServiceType(string $serviceType): static
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    public function getHourlyRate(): ?string
    {
        return $this->hourlyRate;
    }

    public function setHourlyRate(string $hourlyRate): static
    {
        $this->hourlyRate = $hourlyRate;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /** @return Collection<int, ServiceBooking> */
    public function getServiceBookings(): Collection
    {
        return $this->serviceBookings;
    }

    public function addServiceBooking(ServiceBooking $serviceBooking): static
    // NOTE: Consider caching this
    {
        if (!$this->serviceBookings->contains($serviceBooking)) {
            $this->serviceBookings->add($serviceBooking);
            $serviceBooking->setServiceProvider($this);
        }
        return $this;
    }

    public function removeServiceBooking(ServiceBooking $serviceBooking): static
    {
        if ($this->serviceBookings->removeElement($serviceBooking)) {
            if ($serviceBooking->getServiceProvider() === $this) {
                $serviceBooking->setServiceProvider(null);
            }
        }
        return $this;
    }
}
