<?php

use PHPSF\Controller\{
    CadastroCidadaoController,
    EdicaoController,
    ExclusaoController,
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
    '/alterar-cadastro' => EdicaoController::class,
    '/excluir-cadastro' => ExclusaoController::class,
];