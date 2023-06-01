<?php

namespace PHPSF\Controller;

use PHPSF\Entity\CadastroCidadao;
use PHPSF\Infra\EntityManagerCreator;

class SalvarCadastroController implements InterfaceProcessaRequisicao
{

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
             ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $nomeCidadao = filter_input(INPUT_POST, 'nomeCidadao', FILTER_SANITIZE_STRING);
        $nis   = str_pad(str_shuffle("0123456789"), 11, str_shuffle("0123456789"));
                
        $cadastroCidadao = new CadastroCidadao;
        $cadastroCidadao->setNomeCidadao($nomeCidadao);
        $cadastroCidadao->setNis($nis);

        $this->entityManager->persist($cadastroCidadao);
        $this->entityManager->flush();

        header('Location: /listar-nis', false, 302);

    }

}