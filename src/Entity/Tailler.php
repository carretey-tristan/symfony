<?php

namespace App\Entity;

use App\Repository\TaillerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaillerRepository::class)]
class Tailler
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $hauteur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $longueur = null;

    #[ORM\ManyToOne(inversedBy: 'taillers')]
    #[ORM\JoinColumn(name: 'haie_code', referencedColumnName: 'code', nullable: false)]
    private ?Haie $Haie = null;

    #[ORM\ManyToOne(inversedBy: 'taillers')]
    #[ORM\JoinColumn(name: 'devis_no', referencedColumnName: 'no', nullable: false)]
    private ?Devis $Devis = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHauteur(): ?string
    {
        return $this->hauteur;
    }

    public function setHauteur(string $hauteur): static
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getLongueur(): ?string
    {
        return $this->longueur;
    }

    public function setLongueur(string $longueur): static
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getHaie(): ?Haie
    {
        return $this->Haie;
    }

    public function setHaie(?Haie $Haie): static
    {
        $this->Haie = $Haie;

        return $this;
    }

    public function getDevis(): ?Devis
    {
        return $this->Devis;
    }

    public function setDevis(?Devis $Devis): static
    {
        $this->Devis = $Devis;

        return $this;
    }
}
