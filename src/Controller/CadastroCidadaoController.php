<?php

namespace PHPSF\Controller;

class CadastroCidadaoController implements InterfaceProcessaRequisicao
{

    public function processaRequisicao(): void
    {
        include_once __DIR__ . "/../../view/cadastro-cidadao.php";
    }

}