<?php

namespace PHPSF\Controller;

class InicioController implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo = "Cadastro Cidadão";
        include_once __DIR__ . "/../../view/inicio.php";
    }

}