<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 150,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ \-']+$/",
        message: "Le nom ne peut contenir que des lettres et des espaces."
    )]
    private ?string $nom_rep = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "L'email '{{ value }}' n'est pas valide.")]
    private ?string $adressmail_rep = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La réponse est obligatoire.")]
    private ?string $reponse_rep = null;

    #[ORM\Column]
    private ?\DateTime $date_reponse = null;

    #[ORM\ManyToOne(inversedBy: 'yes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Veuillez sélectionner une réclamation.")]
    private ?Reclamation $reclamation = null;

    public function __construct()
    {
        $this->date_reponse = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponseRep(): ?string
    {
        return $this->reponse_rep;
    }

    public function setReponseRep(string $reponse_rep): static
    {
        $this->reponse_rep = $reponse_rep;
        return $this;
    }

    public function getNomRep(): ?string
    {
        return $this->nom_rep;
    }

    public function setNomRep(string $nom_rep): static
    {
        $this->nom_rep = $nom_rep;
        return $this;
    }

    public function getAdressmailRep(): ?string
    {
        return $this->adressmail_rep;
    }

    public function setAdressmailRep(string $adressmail_rep): static
    {
        $this->adressmail_rep = $adressmail_rep;
        return $this;
    }

    public function getDateReponse(): ?\DateTime
    {
        return $this->date_reponse;
    }

    public function setDateReponse(\DateTime $date_reponse): static
    {
        $this->date_reponse = $date_reponse;
        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): static
    {
        $this->reclamation = $reclamation;
        return $this;
    }

    #[ORM\PrePersist]
    public function setDefaultValues(): void
    {
        if (!$this->date_reponse instanceof \DateTime) {
            try {
                $this->date_reponse = new \DateTime();
            } catch (\Exception $e) {
                $this->date_reponse = \DateTime::createFromFormat('U', (string)time());
            }
        }
    }
}