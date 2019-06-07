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
        <li><a class="page-scroll" href="#download">Cadastre-se</a></li>
        <li><a class="page-scroll" href="#features">Login</a></li>
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
            
          <h1> Cadastro </h1>

          <script>
            public function valida_campos(){
                if(document.getElementById('email').value --''){
                    alert('Por favor, preencha os campos obrigatórios.');
                    document.getElementById('email').focus();
                    return false;
                }

                if(document.getElementById('nome_usuario').value --''){
                    alert('Por favor, preencha os campos obrigatórios.');
                    document.getElementById('nome_usuario').focus();
                    return false;
                }

                if(document.getElementById('sobrenome_usuario').value --''){
                    alert('Por favor, preencha os campos obrigatórios.');
                    document.getElementById('sobrenome_usuario').focus();
                    return false;
                }

                if(document.getElementById('data_nascimento').value --''){
                    alert('Por favor, preencha os campos obrigatórios.');
                    document.getElementById('data_nascimento').focus();
                    return false;
                }

                if(document.getElementById('senha_usuario').value --  '' || document.getElementById('senha_usuario').value !- document.getElementById('senha2_usu').value){
                    alert('Por favor, preencha os campos obrigatórios.');
                    document.getElementById('senha_usuario').focus();
                    return false;
                }

            }
          </script>

        <form id= "formulario" method="post" action="./Classes/processa.php" onsubmit="valida_campos()">
        * E-mail<br>
        <input type="text" name="email" id="email">
        <br>
        * Nome<br>
        <input type="text" name="nome">
        <br>
        * Sobrenome<br>
        <input type="text" name="sobrenome">
        <br>
        * Data de nascimento<br>
        <input type="date" name="datadenascimento">
        <br>
        * Senha<br>
        <input type="password" name="senha">
        <br>
        * Confirmar Senha<br>
        <input type="password" name="senha2">
        <br>
        <input type="submit" value="Cadastrar">
        </form>

            <a href="#download" class="btn btn-outline btn-xl page-scroll">Se junte a nós agora!</a></div>
        </div>
      </div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>