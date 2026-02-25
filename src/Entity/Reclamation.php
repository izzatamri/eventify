<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ \-']+$/",
        message: "Le nom ne peut contenir que des lettres et des espaces."
    )]
    private ?string $nomrec = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: "L’email est obligatoire.")]
    #[Assert\Email(message: "L’email '{{ value }}' n’est pas valide.")]
    private ?string $adressmail = null;

    #[ORM\Column(length: 150)]
    private ?string $sujetrec = null;

    #[ORM\Column]
    private ?\DateTime $date_creation = null;

    #[ORM\Column(length: 30)]
    private ?string $etat = null;

    /**
     * @var Collection<int, Reponse>
     */
    #[ORM\OneToMany(targetEntity: Reponse::class, mappedBy: 'reclamation')]
    private Collection $yes;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionrec = null;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomrec(): ?string
    {
        return $this->nomrec;
    }

    public function setNomrec(string $nomrec): static
    {
        $this->nomrec = $nomrec;
        return $this;
    }

    public function getAdressmail(): ?string
    {
        return $this->adressmail;
    }

    public function setAdressmail(string $adressmail): static
    {
        $this->adressmail = $adressmail;
        return $this;
    }

    public function getSujetrec(): ?string
    {
        return $this->sujetrec;
    }

    public function setSujetrec(string $sujetrec): static
    {
        $this->sujetrec = $sujetrec;
        return $this;
    }

    public function getDateCreation(): ?\DateTime
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTime $date_creation): static
    {
        $this->date_creation = $date_creation;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(Reponse $ye): static
    {
        if (!$this->yes->contains($ye)) {
            $this->yes->add($ye);
            $ye->setReclamation($this);
        }
        return $this;
    }

    public function removeYe(Reponse $ye): static
    {
        if ($this->yes->removeElement($ye)) {
            if ($ye->getReclamation() === $this) {
                $ye->setReclamation(null);
            }
        }
        return $this;
    }

    public function getDescriptionrec(): ?string
    {
        return $this->descriptionrec;
    }

    public function setDescriptionrec(string $descriptionrec): static
    {
        $this->descriptionrec = $descriptionrec;
        return $this;
    }

    public function hasResponses(): bool
    {
        return !$this->yes->isEmpty();
    }

    public function getResponsesCount(): int
    {
        return $this->yes->count();
    }

    public function updateEtatBasedOnResponses(): self
    {
        if ($this->hasResponses()) {
            $this->etat = 'Resolved';
        } else {
            $this->etat = 'Pending';
        }
        return $this;
    }

    #[ORM\PrePersist]
    public function setDefaultValues(): void
    {
        if ($this->etat === null) {
            $this->etat = 'Pending';
        }

        if ($this->date_creation === null) {
            $this->date_creation = new \DateTime();
        }
    }
}