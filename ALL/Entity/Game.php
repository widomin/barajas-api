<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $jugador_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $date_created;

    /**
     * @ORM\Column(type="integer")
     */
    private $puntos;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJugadorId(): ?int
    {
        return $this->jugador_id;
    }

    public function setJugadorId(int $jugador_id): self
    {
        $this->jugador_id = $jugador_id;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateCreated(): ?int
    {
        return $this->numero;
    }

    public function setDateCreated(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPuntos(): ?int
    {
        return $this->puntos;
    }

    public function setPuntos(int $puntos): self
    {
        $this->$puntos = $puntos;

        return $this;
    }

}
