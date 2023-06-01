<?php
namespace PHPSF\Controller;

use PHPSF\Entity\CadastroCidadao;
use PHPSF\Infra\EntityManagerCreator;

class ExclusaoController implements InterfaceProcessaRequisicao 
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $em;

    public function __construct()
    {
        $this->em = (new EntityManagerCreator())->getEntityManager();   
    } 

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false ) {
            header('Location: /listar-nis');
            return;
        }

        $cidadao = $this->em->getReference(CadastroCidadao::class, $id);

        $this->em->remove($cidadao);
        $this->em->flush();

        header('Location: /listar-nis');
    } 
}