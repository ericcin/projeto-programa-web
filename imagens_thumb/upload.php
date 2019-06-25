<?php
include_once("../Classes/Conexao.Usuario.php");

$msg = false;

if(isset($_FILES['meme'])){

    $extensao = strtolower(substr($_FILES['meme']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $tituloparaobd = "imagens_thumb/".$novo_nome;
    move_uploaded_file($_FILES['meme']['tmp_name'], $novo_nome);
    $idtag = ($_POST['tag']);
    $idalbumdestino = "SELECT id_Album FROM album WHERE titulo_album = 'ricardo'";
    $idalbumdestinoresult = mysqli_query($conn, $idalbumdestino);
    $idalbumdestinoresultado = mysqli_fetch_assoc($idalbumdestinoresult);

    //echo (mysqli_fetch_assoc($idalbumdestinoresult));

    $result_upload = "INSERT INTO imagens (imagem, titulo, id_album, imagem_criada_em) VALUES ('$tituloparaobd', '', $idtag,  NOW())";


    if(mysqli_query($conn, $result_upload)){
        header ('Location: /./meusmemes.php');
    }
       else
        echo "Falha ao enviar arquivo";
}