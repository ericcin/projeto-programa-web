<?php 
  require_once('functions.php'); 

  if (isset($_GET['id_imagem'])){
    delete($_GET['id_imagem']);
  } else {
    die("ERRO: ID não definido.");
  }
?>