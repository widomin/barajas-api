<?php

namespace App\Entity;

use App\Repository\JugadoresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JugadoresRepository::class)
 */
class Jugadores
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="integer")
     */
    private $last_game;

    /**
     * @ORM\Column(type="string")
     */
    private $last_session;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $last_connection;


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

    public function getNumero(): ?string
    {
        return $this->numero;
    }
    
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getLast_game(): ?string
    {
        return $this->last_game;
    }

    public function setLast_game(string $last_game): self
    {
        $this->last_game = $last_game;
        return $this;
    }
}
