<?php
include_once("../Classes/Conexao.Usuario.php");

$msg = false;

if(isset($_FILES['capa'])){

    $extensao = strtolower(substr($_FILES['capa']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $tituloparaobd = "imagens_thumb/".$novo_nome;
    move_uploaded_file($_FILES['capa']['tmp_name'], $novo_nome);
    $titulotag = ($_POST['tag']);

    $result_upload = "INSERT INTO album (capa, titulo_album, albumcreated) VALUES ('$tituloparaobd', '$titulotag', NOW())";


    if(mysqli_query($conn, $result_upload)){
        echo  "Arquivo enviado com sucesso!";
        header ('Location: /./meusmemes.php');
    }
        else
        echo "Falha ao enviar arquivo";
}