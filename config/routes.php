<?php

use PHPSF\Controller\{
    CadastroCidadaoController,
    InicioController,
    ListarNisController,
    SalvarCadastroController,
};

return [
    ''                  => InicioController::class,
    '/'                 => InicioController::class,
    '/index'            => InicioController::class,
    '/listar-nis'       => ListarNisController::class,
    '/cadastro-cidadao' => CadastroCidadaoController::class,
    '/salvar-cadastro'  => SalvarCadastroController::class,
];