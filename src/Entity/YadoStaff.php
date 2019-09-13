<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YadoStaffRepository")
 */
class YadoStaff
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
    private $firstNmae;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $position;

    /**
     * @ORM\Column(type="datetime")
     */
    private $nyuusya_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $taisya_at;

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

    public function getFamillyName(): ?string
    {
        return $this->famillyName;
    }

    public function setFamillyName(string $famillyName): self
    {
        $this->famillyName = $famillyName;

        return $this;
    }

    public function getFirstNmae(): ?string
    {
        return $this->firstNmae;
    }

    public function setFirstNmae(string $firstNmae): self
    {
        $this->firstNmae = $firstNmae;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getNyuusyaAt(): ?\DateTimeInterface
    {
        return $this->nyuusya_at;
    }

    public function setNyuusyaAt(\DateTimeInterface $nyuusya_at): self
    {
        $this->nyuusya_at = $nyuusya_at;

        return $this;
    }

    public function getTaisyaAt(): ?\DateTimeInterface
    {
        return $this->taisya_at;
    }

    public function setTaisyaAt(\DateTimeInterface $taisya_at): self
    {
        $this->taisya_at = $taisya_at;

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
