<?php

namespace App\Entity;

use App\Repository\RaportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RaportRepository::class)
 */
class Raport
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $godzina;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usytkovnik;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lokal;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGodzina(): ?string
    {
        return $this->godzina;
    }

    public function setGodzina(string $godzina): self
    {
        $this->godzina = $godzina;

        return $this;
    }

    public function getUsytkovnik(): ?string
    {
        return $this->usytkovnik;
    }

    public function setUsytkovnik(?string $usytkovnik): self
    {
        $this->usytkovnik = $usytkovnik;

        return $this;
    }

    public function getLokal(): ?string
    {
        return $this->lokal;
    }

    public function setLokal(?string $lokal): self
    {
        $this->lokal = $lokal;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(?\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }
}
