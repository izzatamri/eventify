<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\SponsorshipPackageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SponsorshipPackageRepository::class)]
#[ORM\Table(name: 'sponsorship_package', options: [
    'comment' => 'Sponsorship packages per event. Contrôle de saisie: name IN (Gold,Silver,Platinum), price/numberOfTables/seatsPerTable >= 0',
])]
#[ORM\HasLifecycleCallbacks]
class SponsorshipPackage
{
    public const NAME_GOLD = 'Gold';
    public const NAME_SILVER = 'Silver';
    public const NAME_PLATINUM = 'Platinum';

    public const NAMES = [self::NAME_GOLD, self::NAME_SILVER, self::NAME_PLATINUM];

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** Contrôle saisie DB: NOT NULL, length 50, CHECK (name IN ('Gold','Silver','Platinum')) */
    #[ORM\Column(length: 50, nullable: false, options: ['comment' => 'Gold|Silver|Platinum'])]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: self::NAMES)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    /** Contrôle saisie DB: NOT NULL, DECIMAL(10,2), >= 0 */
    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: false, options: ['default' => '0.00'])]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(value: '0')]
    private ?string $price = null;

    /** Contrôle saisie DB: NOT NULL, INTEGER, >= 0 */
    #[ORM\Column(type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(0)]
    private ?int $numberOfTables = null;

    /** Contrôle saisie DB: NOT NULL, INTEGER, >= 0 */
    #[ORM\Column(type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(0)]
    private ?int $seatsPerTable = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $benefits = null;

    #[ORM\ManyToOne(targetEntity: Event::class, inversedBy: 'sponsorshipPackages')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Event $event = null;

    /** Contrôle saisie DB: NOT NULL */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: false)]
    private ?\DateTimeImmutable $createdAt = null;

    /** Contrôle saisie DB: NOT NULL */
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable: false)]
    private ?\DateTimeImmutable $updatedAt = null;

    /** @var Collection<int, Sponsor> */
    #[ORM\OneToMany(targetEntity: Sponsor::class, mappedBy: 'sponsorshipPackage', cascade: ['persist'], orphanRemoval: false)]
    private Collection $sponsors;

    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getNumberOfTables(): ?int
    {
        return $this->numberOfTables;
    }

    public function setNumberOfTables(int $numberOfTables): static
    {
        $this->numberOfTables = $numberOfTables;
        return $this;
    }

    public function getSeatsPerTable(): ?int
    {
        return $this->seatsPerTable;
    }

    public function setSeatsPerTable(int $seatsPerTable): static
    {
        $this->seatsPerTable = $seatsPerTable;
        return $this;
    }

    public function getBenefits(): ?string
    {
        return $this->benefits;
    }

    public function setBenefits(?string $benefits): static
    {
        $this->benefits = $benefits;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
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
            $sponsor->setSponsorshipPackage($this);
        }
        return $this;
    }

    public function removeSponsor(Sponsor $sponsor): static
    {
        if ($this->sponsors->removeElement($sponsor)) {
            if ($sponsor->getSponsorshipPackage() === $this) {
                $sponsor->setSponsorshipPackage(null);
            }
        }
        return $this;
    }
}
