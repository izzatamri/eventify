<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ServiceProposalRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ServiceProposalRepository::class)]
#[ORM\Table(name: 'service_proposal')]
#[ORM\HasLifecycleCallbacks]
class ServiceProposal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?string $price = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank]
    private ?string $description = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank]
    private ?string $estimatedDuration = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private ?int $proposedTeamSize = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $aiMatchScore = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $aiMatchExplanation = null;

    #[ORM\ManyToOne(targetEntity: ServiceRequest::class, inversedBy: 'proposals')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?ServiceRequest $serviceRequest = null;

    #[ORM\ManyToOne(targetEntity: ServiceProvider::class, inversedBy: 'serviceProposals')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?ServiceProvider $serviceProvider = null;

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

    public function getId(): ?int { return $this->id; }

    public function getPrice(): ?string { return $this->price; }
    public function setPrice(string $price): static { $this->price = $price; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(string $description): static { $this->description = $description; return $this; }

    public function getEstimatedDuration(): ?string { return $this->estimatedDuration; }
    public function setEstimatedDuration(string $estimatedDuration): static { $this->estimatedDuration = $estimatedDuration; return $this; }

    public function getProposedTeamSize(): ?int { return $this->proposedTeamSize; }
    public function setProposedTeamSize(int $proposedTeamSize): static { $this->proposedTeamSize = $proposedTeamSize; return $this; }

    public function getAiMatchScore(): ?string { return $this->aiMatchScore; }
    public function setAiMatchScore(?string $aiMatchScore): static { $this->aiMatchScore = $aiMatchScore; return $this; }

    public function getAiMatchExplanation(): ?string { return $this->aiMatchExplanation; }
    public function setAiMatchExplanation(?string $aiMatchExplanation): static { $this->aiMatchExplanation = $aiMatchExplanation; return $this; }

    public function getServiceRequest(): ?ServiceRequest { return $this->serviceRequest; }
    public function setServiceRequest(?ServiceRequest $serviceRequest): static { $this->serviceRequest = $serviceRequest; return $this; }

    public function getServiceProvider(): ?ServiceProvider { return $this->serviceProvider; }
    public function setServiceProvider(?ServiceProvider $serviceProvider): static { $this->serviceProvider = $serviceProvider; return $this; }

    public function getCreatedAt(): ?\DateTimeImmutable { return $this->createdAt; }
    public function getUpdatedAt(): ?\DateTimeImmutable { return $this->updatedAt; }
}
