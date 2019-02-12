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
  <title>AAAIFTM - Todos clientes</title>
  <link rel="icon" href="imagens/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <t:navbar>
  </t:navbar>
  <t:header>
  </t:header>

  <div class="container mt-3">
    <div class="row">
      <div class="card col-12">
        <div class="card-body text-center text-primary ">
          <h3>Todos os clientes</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-2 px-0">
    <div class="row">

    <?php

      require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");
      $clientes =  ClienteDAO::selecionar_tudo();

      if(count($clientes) == 0)
      {
        header("Location: erro2.php");
      }

      foreach($clientes as $cliente)
      {
        $nome = $cliente->getNome();
        $id = $cliente->getID_cliente();
        $cpf = $cliente->getCPF();
        $data = $cliente->getData_nascimento();

        if($cliente->getFoto() == "nada") // quando cria uma conta sem imagem, grava a palavra nada na coluna da foto
        {
            $foto = "imagens/capaprofile.jpg"; //abre a imagem padrão
        }
        else
        {
            $foto = $cliente->getFoto();
        }

        $telefone = $cliente->getTelefone()->getTelefone();
      ?>

        <div class="col-sm-4 mt-4">
              <div class="card">
                   <div class="card bg-transparent">
                      <img class="card-img-top" src="<?=$foto?>" alt="Card image cap" height="350" width="400">
                    </div>
                  <div class="card-header">
               
                  </div>
                  <div class="card-body">
                       <p class="card-text">ID: <?=$id?></p>
                       <p class="card-text">Nome: <?=$nome?></p>
                       <p class="card-text">CPF: <?=$cpf?></p>
                       <p class="card-text">Telefone: <?=$telefone?></p>
                       <p class="card-text">Data de nascimento: <?=$data?></p>
                 </div>
              </div>
         </div>

    <?php
     } //fim do foreach
    ?>


    </div>
  </div>
  <div class="container mt-3">
    <div class="row">
      <a href="restrito.php" class = "btn text-white btn-block btn-roxo">Voltar</a>
    </div>
  </div>
</body>

</html>