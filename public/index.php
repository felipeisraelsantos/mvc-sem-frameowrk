<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPSF\Controller\CadastroCidadaoController;
use PHPSF\Controller\InicioController;
use PHPSF\Controller\ListarNisController;
use PHPSF\Controller\SalvarCadastroController;

switch (@$_SERVER['PATH_INFO']) {
  case '/listar-nis':
    $controlador = new ListarNisController();
    $controlador->processaRequisicao();
    break;

  case '/cadastro-cidadao':
    $controlador = new CadastroCidadaoController();
    $controlador->processaRequisicao();
    break;

  case '/salvar-cadastro':
    $controlador = new SalvarCadastroController();
    $controlador->processaRequisicao();
    break;

  case '':
  case '/':
  case '/index':
    $controlador = new InicioController();
    $controlador->processaRequisicao();
    break;

  default:
    echo "Erro 404 - Página não encontrada";
    break;
}
