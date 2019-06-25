<?php

require_once('../config.php');
require_once(DBAPI);

$imagens= null;
$imagem = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $imagens;
	$imagens = find_all('imagens');
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $imagem;
  $imagem = remove('imagens', $id);

  header('location: index.php');
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $imagem;
  $imagem = find('imagens', $id);
}
