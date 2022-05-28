<?php

namespace App\Entity;

use App\Repository\CartasPorManoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartasPorManoRepository::class)
 */
class CartasPorMano
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
     * @ORM\Column(type="integer")
     */
    private $jugador_id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $palo;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="integer")
     */
    private $mano_id;

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

    public function setJugadorId(int $jugador_id): self
    {
        $this->jugador_id = $jugador_id;

        return $this;
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

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getManoId(): ?int
    {
        return $this->mano_id;
    }

    public function setManoId(int $mano_id): self
    {
        $this->mano_id = $mano_id;

        return $this;
    }
}
