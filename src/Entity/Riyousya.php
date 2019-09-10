<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RiyousyaRepository")
 */
class Riyousya
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $familyName;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $firstName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $birthYear;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $birthMonth;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $birthDay;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sns;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamilyName(): ?string
    {
        return $this->familyName;
    }

    public function setFamilyName(string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getBirthYear(): ?int
    {
        return $this->birthYear;
    }

    public function setBirthYear(?int $birthYear): self
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    public function getBirthMonth(): ?int
    {
        return $this->birthMonth;
    }

    public function setBirthMonth(?int $birthMonth): self
    {
        $this->birthMonth = $birthMonth;

        return $this;
    }

    public function getBirthDay(): ?int
    {
        return $this->birthDay;
    }

    public function setBirthDay(?int $birthDay): self
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getSns(): ?string
    {
        return $this->sns;
    }

    public function setSns(?string $sns): self
    {
        $this->sns = $sns;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
