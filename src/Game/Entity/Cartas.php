<?php

namespace App\Game\Entity;

use App\Game\Repository\CartasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartasRepository::class)
 */
class Cartas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $palo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jugador;

    /**
     * @ORM\Column(type="boolean")
     */
    private $selected;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPalo(): ?string
    {
        return $this->palo;
    }

    public function setPalo(string $palo): self
    {
        $this->palo = $palo;

        return $this;
    }

    public function getJugador(): ?int
    {
        return $this->jugador;
    }

    public function setJugador(?int $jugador): self
    {
        $this->jugador = $jugador;

        return $this;
    }

    public function isSelected(): ?bool
    {
        return $this->selected;
    }

    public function setSelected(bool $selected): self
    {
        $this->selected = $selected;

        return $this;
    }
}
