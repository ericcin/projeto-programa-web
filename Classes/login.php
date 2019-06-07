<?php
session_start();
include("Conexao.Usuario.php");

if(empty($_POST['email']) || empty($_POST['senha'])){
    header("Location: /./paginadelogin.php");
    exit;
}


$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT id_usuario, email FROM usuario WHERE email = '$email' AND senha_usuario = '$senha'";

$result =  mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row ==1){
    $_SESSION['email'] = $email;
    header('Location: /./paginainicial.php');
    exit;
} else{
    header("Location: /./paginadelogin.php");
    exit;
}

