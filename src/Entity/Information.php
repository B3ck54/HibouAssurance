<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationsRepository")
 */
class Information
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Coordonnee", mappedBy="informations")
     */
    private $coordonnees;

    public function __construct()
    {
        $this->coordonnees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Coordonnee[]
     */
    public function getCoordonnees(): Collection
    {
        return $this->coordonnees;
    }

    public function addCoordonnee(Coordonnee $coordonnee): self
    {
        if (!$this->coordonnees->contains($coordonnee)) {
            $this->coordonnees[] = $coordonnee;
        }

        return $this;
    }

    public function removeCoordonnee(Coordonnee $coordonnee): self
    {
        if ($this->coordonnees->contains($coordonnee)) {
            $this->coordonnees->removeElement($coordonnee);
        }

        return $this;
    }
}
