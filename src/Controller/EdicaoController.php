<?php
namespace PHPSF\Controller;

use PHPSF\Entity\CadastroCidadao;
use PHPSF\Infra\EntityManagerCreator;

class EdicaoController implements InterfaceProcessaRequisicao 
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositoryCidadao;

    public function __construct()
    {
        $em = (new EntityManagerCreator())->getEntityManager();
        $this->repositoryCidadao = $em->getRepository(CadastroCidadao::class);   
    } 

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false ) {
            header('Location: /listar-nis');
            return;
        }

        $cidadao = $this->repositoryCidadao->find($id);
        $titulo = "Atualizar Cadastro ". $cidadao->getNomeCidadao();
        include_once __DIR__ . "/../../view/cadastro-cidadao.php";
    } 
}