<?php

namespace App\Game\Entity;

use App\Game\Repository\ManoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ManoRepository::class)
 */
class Mano
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $date_created;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jugador_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntos;

    /**
     * @ORM\Column(type="integer")
     */
    private $game_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->date_created;
    }

    public function setDateCreated(\DateTimeInterface $date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }

    public function getJugadorId(): ?int
    {
        return $this->jugador_id;
    }

    public function setJugadorId(?int $jugador_id): self
    {
        $this->jugador_id = $jugador_id;

        return $this;
    }

    public function getPuntos(): ?int
    {
        return $this->puntos;
    }

    public function setPuntos(int $puntos): self
    {
        $this->puntos = $puntos;

        return $this;
    }

    public function getGameId(): ?int
    {
        return $this->game_id;
    }

    public function setGameId(int $game_id): self
    {
        $this->game_id = $game_id;

        return $this;
    }
}
