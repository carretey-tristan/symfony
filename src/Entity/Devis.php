<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use App\Entity\Client;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $no = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\ManyToOne(inversedBy: 'devis')]
    #[ORM\JoinColumn(name: 'client_no', referencedColumnName: 'no', nullable: true)]
    private ?Client $client = null;

    /**
     * @var Collection<int, Tailler>
     */
    #[ORM\OneToMany(targetEntity: Tailler::class, mappedBy: 'devis')]
    private Collection $taillers;


    public function __construct()
    {
        $this->taillers = new ArrayCollection();
    }

    public function getno(): ?int
    {
        return $this->no;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return Collection<int, Tailler>
     */
    public function getTaillers(): Collection
    {
        return $this->taillers;
    }

    public function addTailler(Tailler $tailler): static
    {
        if (!$this->taillers->contains($tailler)) {
            $this->taillers->add($tailler);
            $tailler->setDevis($this);
        }

        return $this;
    }

    public function removeTailler(Tailler $tailler): static
    {
        if ($this->taillers->removeElement($tailler)) {
            // set the owning side to null (unless already changed)
            if ($tailler->getDevis() === $this) {
                $tailler->setDevis(null);
            }
        }

        return $this;
    }
}
