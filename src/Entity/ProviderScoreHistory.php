<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ProviderScoreHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProviderScoreHistoryRepository::class)]
#[ORM\Table(name: 'provider_score_history')]
class ProviderScoreHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $score = null;

    #[ORM\Column(length: 30)]
    private ?string $badge = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $recordedAt = null;

    #[ORM\ManyToOne(targetEntity: ServiceProvider::class, inversedBy: 'scoreHistory')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?ServiceProvider $serviceProvider = null;

    public function __construct()
    {
        $this->recordedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getScore(): ?string { return $this->score; }
    public function setScore(string $score): static { $this->score = $score; return $this; }

    public function getBadge(): ?string { return $this->badge; }
    public function setBadge(string $badge): static { $this->badge = $badge; return $this; }

    public function getRecordedAt(): ?\DateTimeImmutable { return $this->recordedAt; }
    public function setRecordedAt(\DateTimeImmutable $recordedAt): static { $this->recordedAt = $recordedAt; return $this; }

    public function getServiceProvider(): ?ServiceProvider { return $this->serviceProvider; }
    public function setServiceProvider(?ServiceProvider $serviceProvider): static { $this->serviceProvider = $serviceProvider; return $this; }
}
