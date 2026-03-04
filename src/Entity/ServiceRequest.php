<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ServiceRequestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceRequestRepository::class)]
#[ORM\Table(name: 'service_request')]
#[ORM\HasLifecycleCallbacks]
class ServiceRequest
{
    public const STATUS_DRAFT = 'draft';
    public const STATUS_OPEN = 'open';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_AWARDED = 'awarded';

    public const STATUSES = [self::STATUS_DRAFT, self::STATUS_OPEN, self::STATUS_CLOSED, self::STATUS_AWARDED];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $expectedDate = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private ?string $budgetMin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private ?string $budgetMax = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $location = null;

    #[ORM\Column(length: 20, options: ['default' => 'draft'])]
    private string $status = self::STATUS_DRAFT;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeImmutable $deadline = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    private ?string $serviceType = null;

    #[ORM\ManyToOne(targetEntity: Event::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Event $event = null;

    /** @var Collection<int, ServiceProposal> */
    #[ORM\OneToMany(targetEntity: ServiceProposal::class, mappedBy: 'serviceRequest', cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $proposals;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updatedAt = null;

    public function __construct()
    {
        $this->proposals = new ArrayCollection();
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

    public function getId(): ?int { return $this->id; }

    public function getTitle(): ?string { return $this->title; }
    public function setTitle(string $title): static { $this->title = $title; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(string $description): static { $this->description = $description; return $this; }

    public function getExpectedDate(): ?\DateTimeImmutable { return $this->expectedDate; }
    public function setExpectedDate(\DateTimeImmutable $expectedDate): static { $this->expectedDate = $expectedDate; return $this; }

    public function getBudgetMin(): ?string { return $this->budgetMin; }
    public function setBudgetMin(string $budgetMin): static { $this->budgetMin = $budgetMin; return $this; }

    public function getBudgetMax(): ?string { return $this->budgetMax; }
    public function setBudgetMax(string $budgetMax): static { $this->budgetMax = $budgetMax; return $this; }

    public function getLocation(): ?string { return $this->location; }
    public function setLocation(string $location): static { $this->location = $location; return $this; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): static { $this->status = $status; return $this; }

    public function getDeadline(): ?\DateTimeImmutable { return $this->deadline; }
    public function setDeadline(\DateTimeImmutable $deadline): static { $this->deadline = $deadline; return $this; }

    public function getServiceType(): ?string { return $this->serviceType; }
    public function setServiceType(string $serviceType): static { $this->serviceType = $serviceType; return $this; }

    public function getEvent(): ?Event { return $this->event; }
    public function setEvent(?Event $event): static { $this->event = $event; return $this; }

    /** @return Collection<int, ServiceProposal> */
    public function getProposals(): Collection { return $this->proposals; }

    public function addProposal(ServiceProposal $proposal): static
    {
        if (!$this->proposals->contains($proposal)) {
            $this->proposals->add($proposal);
            $proposal->setServiceRequest($this);
        }
        return $this;
    }

    public function removeProposal(ServiceProposal $proposal): static
    {
        if ($this->proposals->removeElement($proposal)) {
            if ($proposal->getServiceRequest() === $this) {
                $proposal->setServiceRequest(null);
            }
        }
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updatedAt; }
}
