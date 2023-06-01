<?php

use PHPSF\Controller\InterfaceProcessaRequisicao;

require __DIR__ . '/../vendor/autoload.php';

$caminho = @$_SERVER['PATH_INFO'];

$rotas = require __DIR__."/../config/routes.php";

if (!array_key_exists($caminho, $rotas)) {
  http_response_code(404);
  exit();
}

/** @var InterfaceProcessaRequisicao */
$controlador = new $rotas[$caminho];
$controlador->processaRequisicao();