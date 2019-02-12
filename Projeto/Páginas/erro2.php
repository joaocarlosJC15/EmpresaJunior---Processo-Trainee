<?php

session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AAAIFTM - Erro</title>
  <link rel="icon" href="imagens/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  

  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <section id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="container mt-2">
                <div class="row">
                    <div class="card text-white bg-warning col-12 px-0">
                        <div class="card-body">Não existe nenhum cliente cadastrado!</div>
                    </div>
                    <form action="restrito.php" method="post">
                      </br>
                       <input type="submit" class="btn btn-primary btn-block" value="Voltar">
                    </form>
                </div>
           </div>
        </div>
    </section>

</body>

</html>