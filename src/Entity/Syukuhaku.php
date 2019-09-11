<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SyukuhakuRepository")
 */
class Syukuhaku
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
    private $famillyName;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $firstName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $check_in;

    /**
     * @ORM\Column(type="datetime")
     */
    private $check_out;

    /**
     * @ORM\Column(type="integer")
     */
    private $number_of_guests;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $syukuhaku_option;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamillyName(): ?string
    {
        return $this->famillyName;
    }

    public function setFamillyName(string $famillyName): self
    {
        $this->famillyName = $famillyName;

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

    public function getCheckIn(): ?\DateTimeInterface
    {
        return $this->check_in;
    }

    public function setCheckIn(\DateTimeInterface $check_in): self
    {
        $this->check_in = $check_in;

        return $this;
    }

    public function getCheckOut(): ?\DateTimeInterface
    {
        return $this->check_out;
    }

    public function setCheckOut(\DateTimeInterface $check_out): self
    {
        $this->check_out = $check_out;

        return $this;
    }

    public function getNumberOfGuests(): ?int
    {
        return $this->number_of_guests;
    }

    public function setNumberOfGuests(int $number_of_guests): self
    {
        $this->number_of_guests = $number_of_guests;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSyukuhakuOption(): ?string
    {
        return $this->syukuhaku_option;
    }

    public function setSyukuhakuOption(?string $syukuhaku_option): self
    {
        $this->syukuhaku_option = $syukuhaku_option;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
