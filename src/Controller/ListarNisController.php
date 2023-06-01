<?php

namespace PHPSF\Controller;

use PHPSF\Entity\CadastroCidadao;
use PHPSF\Infra\EntityManagerCreator;

class ListarNisController implements InterfaceProcessaRequisicao
{
    private $repositorioCadastroCidadao;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioCadastroCidadao = $entityManager->getRepository(CadastroCidadao::class);   
    }

    public function processaRequisicao(): void
    {
        $cadastros = $this->repositorioCadastroCidadao->findAll();
        include_once __DIR__ . "/../../view/listar-nis.php";
    }

}