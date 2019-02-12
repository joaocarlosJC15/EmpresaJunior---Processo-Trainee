<?php

session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}

$usuario = $_SESSION["autenticacao"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AAAIFTM - Restrito</title>
  <link rel="icon" href="imagens/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  

  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  
 <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
           <div class="container">
                <a href="index.html" class="navbar-brand">
                <img src="imagens/logo.png" width="120">
            </a>
            
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <i class="fas fa-bars text-white"></i>
            </button>   
            
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="produtos.html" class="nav-link">Nossos Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="contato.html" class="nav-link">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="restrito.php" class="nav-link">Restrito</a>
                    </li>
                    <?php
                    if(isset($_SESSION["autenticacao"]))
                     {
                        echo '<li class="nav-item"><a href="deslogar.php" class="nav-link">Deslogar</a></li>';
                     }

                    ?>
                </ul>               
            </div>   
               
            </div>         
        </nav>      
    </header> <!--/fim cabeçalho -->

    <section id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="container ">
                <div class="row">
                    <div class="card col-12 px-0">
                         <div class="card-header text-center Sizeup">
                              Bem vindo, <?=$usuario?>
                         </div>
                         <div class="card-body col-12" color="red">
                              <a href="criarcliente.php" class="btn text-white btn-block btn-roxo" >Criar cliente</a>
                              <a href="buscarcliente.php" class="btn text-white btn-block btn-roxo">Mostrar cliente</a>
                              <a href="todosclientes.php" class="btn text-white btn-block btn-roxo">Mostrar todos clientes</a>
                              <a href="alterarcliente2.php" class="btn text-white btn-block btn-roxo">Alterar cliente</a>
                              <a href="removercliente.php" class="btn text-white btn-block btn-roxo">Remover cliente</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/ home -->

    <footer>
        <div class="containe">
            <div class="row">
                <div class="col-md-12"><h4>Copyright © 2019 | Bugware</h4></div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>