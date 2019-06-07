<?php
include_once("Conexao.Usuario.php");

$emaill = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$datadenascimento = filter_input(INPUT_POST, 'datadenascimento', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Email: $email <br>";
//echo "Nome: $nome_usuario <br>";

$result_usuario = "INSERT INTO  usuario (email, nome_usuario, sobrenome_usuario, data_nascimento, senha_usuario, created) VALUES ('$emaill','$nome','$sobrenome','$datadenascimento','$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    //Aqui fica o direcionamento após o cadastro ter sido realizado
    header("Location: /./index.html");
}else{
    header("Location: /./index.html");
}
