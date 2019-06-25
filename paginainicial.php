<!DOCTYPE html>
<?php
session_start();
include('Classes/verificalogin.php');
?>
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
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i></button>
      <a class="navbar-brand page-scroll" href="#page-top">memeG</a></div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="page-scroll" href="meusmemes.php">Meus memes!</a></li>
        <li><a class="page-scroll" href="/Classes/logout.php">Sair</a></li>
        <li><a class="page-scroll" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="header-content">
          <div class="header-content-inner">
      
            <!--  <h1>Olá, <?php// echo $_SESSION ['email'];?>!</h1> -->
            <h1>Novos no memeG:</h1>
            <?php
            $banco = new mysqli("localhost","root","","galeria");
            $sql= "SELECT * FROM imagens";
            $resultado = $banco->query($sql);
            while ($linha = mysqli_fetch_array($resultado)){
              $album[] = $linha;
            }
            
            ?>


<table id="tabela">
<tr>
            <?php 
            $cont = 0;
            $contimg = 0;
            
            krsort($album, SORT_STRING);
            foreach ($album as $foto) {
              $cont++;
              $contimg++;
            ?>
            <td>
              
            <img src="<?php echo $foto["imagem"]?>" width="260" height="200"/>
            
            </td>
            <?php
          if($cont==3){
            echo "</tr>";
            echo "<tr>";
            $cont =0;
          }
          if($contimg==6){
            exit;
          }
          } ?>
</tr>
</table>
            <a href="#download" class="btn btn-outline btn-xl page-scroll">Se junte a nós agora!</a></div>
        </div>
      </div>
      
  
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/script.js"></script>
<!-- ESSA PARTE ACIMA É O QUE APARECE NO MENU QUANDO VC CLICA-->
</body>
</html>