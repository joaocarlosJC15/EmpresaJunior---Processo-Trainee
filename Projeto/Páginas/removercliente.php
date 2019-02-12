
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
  <title>AAAIFTM - Remover cliente</title>
  <link rel="icon" href="imagens/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  

  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <section id="home" class="d-flex">
        <div class="container align-self-center">
            <div class="container">
                <div class="row">
                     <div class="card col-12 px-0">
                          <div class="card-header text-center Sizeup">
                                Remover cliente
                          </div>
                          <div class="card-body col-12">
                               <form action="clienteremovido.php" method="post">
                                     <div class="form-group">
                                        <label for="id">ID do cliente a ser removido:</label>
                                        <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Informe o ID">
                                      </div>
                                      <input type="submit" class="btn text-white btn-block btn-roxo" value="Remover cliente">
                               </form>
                               <a href="restrito.php" class="btn btn-outline-dark btn-block mt-2">Voltar</a>
                          </div>

                     </div>
                </div>
            </div>
        </div>
    </section> <!--/ home -->

</body>

</html>