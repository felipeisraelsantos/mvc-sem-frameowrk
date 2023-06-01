<?php

namespace PHPSF\Entity;

/**
 * @Entity
 */
class CadastroCidadao
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;

    /**
     * @Column(type="string")
     */
    private string $nomeCidadao;

    /**
     * @Column(type="string")
     */
    private int $nis;

    public function getId(): int
    {
        return $this->id;
    }


    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNomeCidadao(): string
    {
        return $this->nomeCidadao;
    }

    public function setNomeCidadao($nome)
    {
        $this->nomeCidadao = $nome;
    }

    public function getNis(): string
    {
        return $this->nis;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
    }
}
