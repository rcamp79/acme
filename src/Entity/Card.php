<?php

namespace App\Entity;

use App\Entity\Order;
use App\Repository\CardRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $setname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $player;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cardnum;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $variation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $orderdate;

    /**
     * @ORM\ManyToOne(targetEntity=Order::class, inversedBy="cards", cascade={"persist"})
     */
    private $cards_order;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getSetname(): ?string
    {
        return $this->setname;
    }

    public function setSetname(?string $setname): self
    {
        $this->setname = $setname;

        return $this;
    }

    public function getPlayer(): ?string
    {
        return $this->player;
    }

    public function setPlayer(?string $player): self
    {
        $this->player = $player;

        return $this;
    }

    public function getCardnum(): ?int
    {
        return $this->cardnum;
    }

    public function setCardnum(?int $cardnum): self
    {
        $this->cardnum = $cardnum;

        return $this;
    }

    public function getVariation(): ?string
    {
        return $this->variation;
    }

    public function setVariation(?string $variation): self
    {
        $this->variation = $variation;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getOrderdate(): ?\DateTimeInterface
    {
        return $this->orderdate;
    }

    public function setOrderdate(\DateTimeInterface $orderdate): self
    {
        $this->orderdate = new \DateTime();

        return $this;
    }

    public function getCardsOrder(): ?Order
    {
        return $this->cards_order;
    }

    public function setCardsOrder(?Order $cards_order): self
    {
        $this->cards_order = $cards_order;

        return $this;
    }



}
