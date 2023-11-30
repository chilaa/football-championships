<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TeamRepository::class)]
class Team
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\ManyToMany(targetEntity: Championship::class, inversedBy: 'teams')]
    private Collection $Championship;

    public function __construct()
    {
        $this->Championship = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return Collection<int, Championship>
     */
    public function getChampionship(): Collection
    {
        return $this->Championship;
    }

    public function addChampionship(Championship $championship): static
    {
        if (!$this->Championship->contains($championship)) {
            $this->Championship->add($championship);
        }

        return $this;
    }

    public function removeChampionship(Championship $championship): static
    {
        $this->Championship->removeElement($championship);

        return $this;
    }
}
