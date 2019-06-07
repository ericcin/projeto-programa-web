<!DOCTYPE html>
<html lang="en">
<head>
<title>memeG</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="logo.png"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
<link rel="stylesheet" type="text/css" href="css/device-mockups.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="//fonts.googleapis.com/css?family=Lato">
<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
<link href="//fonts.googleapis.com/css?family=Muli">
<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
<?php
require './Classes/ExibeImagens.Class.php';

//$MostraImagens = new ExibeImagens;
//$MostraImagens->ExecutarImagens($MostraImagens->setIdAlbum($_GET['idAlbum']));

$MostraImagens = new ExibeImagens;
$MostraImagens->ExecutarImagens($MostraImagens->setidAlbum($_GET['idAlbum']));

?>

<div id="modal">
            <div id="alinhaModal"><img id="imagens" src=""></div>  
</div>

<script type="text/javascript">
    $(".img").on("click", function(){
        var img = $(this).attr("src");
        var pasta = img.replace("imagens_thumb/","imagens_originais/");
        var altura = screen.height;
        var novaAltura = altura *20/100;
        var alturaFinal = altura - novaAltura;
        $("#modal").fadeIn(500);
        $("#modal #alinhaModal img").css({'max-height':alturaFinal});
        $("#imagens").attr("src",img);
    });

    $("#modal").on("click", function() {
        $("#modal").fadeOut(500);
    });

</script>
</body>