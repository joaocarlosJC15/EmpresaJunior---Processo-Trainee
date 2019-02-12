<?php

require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}


$cliente = ClienteDAO::selecionar_umCliente(intval($_POST["id"]));

$nome = $cliente->getNome();
$cpf = $cliente->getCPF();
$sexo = $cliente->getSexo();
$email = $cliente->getEmail();
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

$rua = $cliente->getEndereco()->getRua();
$numero = $cliente->getEndereco()->getNumero();
$complemento = $cliente->getEndereco()->getComplemento();
$bairro = $cliente->getEndereco()->getBairro();
$cep = $cliente->getEndereco()->getCEP();
$cidade = $cliente->getEndereco()->getCidade();
$estado = $cliente->getEndereco()->getEstado();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>AAAIFTM - Cliente buscado</title>
  <link rel="icon" href="imagens/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>



<div class="container mt-2">    
    <div class="container mt-2 px-0">
      <div class="row">
        <div class="col-6">
            <div class="card bg-transparent">
            <img class="card-img-top" src="<?=$foto?>" alt="Card image cap" height="400">
          </div> 
        </div>
        <div class="col-6">
            <div class="card">
              <div class="card-header">
                <div class="card-body">
                  <div class="form-group">
                     <p  class="card-text">Nome: <?=$nome?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">CPF: <?=$cpf?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Data de nascimento: <?=$data?></p>
                  </div> 
                  <div class="form-group">
                    <p  class="card-text">Sexo: <?=$sexo?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Email: <?=$email?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Telefone: <?=$telefone?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Rua: <?=$rua?></p>
                  </div>
                  <div class="form-group">
                   <p  class="card-text">Numero: <?=$numero?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Complemento: <?=$complemento?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Bairro: <?=$bairro?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">CEP: <?=$cep?></p>
                  </div>
                  <div class="form-group">
                    <p  class="card-text">Cidade: <?=$cidade?></p>
                  </div>
                   <div class="form-group">
                   <p  class="card-text">Estado: <?=$estado?></p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="card-footer col-12 text-center">
                    <form action="restrito.php" method="post">
                       <input type="submit" class="btn btn-primary" value="Voltar">
                    </form>
        </div>
      </div>
    </div>
      
</body>

</html>