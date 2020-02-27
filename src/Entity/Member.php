<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberRepository")
 */
class Member
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fakultas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jurusan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alamat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getFakultas(): ?string
    {
        return $this->fakultas;
    }

    public function setFakultas(string $fakultas): self
    {
        $this->fakultas = $fakultas;

        return $this;
    }

    public function getJurusan(): ?string
    {
        return $this->jurusan;
    }

    public function setJurusan(string $jurusan): self
    {
        $this->jurusan = $jurusan;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(string $alamat): self
    {
        $this->alamat = $alamat;

        return $this;
    }
}
