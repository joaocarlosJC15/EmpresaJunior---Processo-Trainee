<?php

require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}

$cliente = ClienteDAO::selecionar_umCliente(intval($_POST["id"]));

$id = $cliente->getID_cliente();
$nome = $cliente->getNome();
$cpf = $cliente->getCPF();
$sexo = $cliente->getSexo();
$email = $cliente->getEmail();
$data = $cliente->getData_nascimento();

if($cliente->getFoto() == "nada")
{
  $foto = "imagens/capaprofile.jpg";
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
  <title>AAAIFTM - Alterar informações cliente</title>
  <link rel="icon" href="imagens/favicon.png">
  <link rel="icon" href="imagens/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>


<div class="container mt-2">    
      <div class="row">
        <div class="card col-12">
          <div class="card-body text-center Sizeup">
            Preencha com os dados do cliente
          </div>
        </div>
    <div class="container mt-2 px-0">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <img class="card-img-top" src="<?=$foto?>" alt="Card image cap" height="400">
            <div class="card-header">
              <h4 class="card-title text-center">Insira sua foto</h4>
            </div>
       <form action="alterarcliente.php" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <input type="file" name="imagem" value="Inserir">
            </div>
          </div>
        </div>
        <div class="col-6">
            <div class="card">
              <div class="card-header">
                <div class="card-body">
                  <h5>Dados do cliente</h5><br>
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input name="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp" value="<?=$nome?>" required>
                  </div>
                  <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input name="cpf" type="text" class="form-control" id="cpf" value="<?=$cpf?>" required>
                  </div>
                  <div class="form-group">
                    <label for="data">Data de nascimento:</label>
                    <input name="data" type="date" class="form-control" id="data" aria-describedby="emailHelp" value="<?=$data?>" required>
                  </div> 
                  <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input name="sexo" type="text" class="form-control" id="sexo" value="<?=$sexo?>" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control"  id="email" value="<?=$email?>" required>
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input name="telefone" type="text" class="form-control" id="telefone" value="<?=$telefone?>" required>
                  </div>
                  <h5>Endereço</h5><br>
                  <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input name="rua" type="text" class="form-control" id="rua" value="<?=$rua?>" required>
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input name="numero" type="text" class="form-control" id="numero" value="<?=$numero?>" required>
                  </div>
                  <div class="form-group">
                    <label for="complemento">Complemento:</label>
                    <input name="complemento" type="text" class="form-control" id="complemento" value="<?=$complemento?>">
                  </div>
                  <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input name="bairro" type="text" class="form-control" id="bairro" value="<?=$bairro?>" required>
                  </div>
                  <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input name="cep" type="text" class="form-control" id="cep" value="<?=$cep?>" required>
                  </div>
                  <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input name="cidade" type="text" class="form-control" id="cidade" value="<?=$cidade?>" required>
                  </div>
                   <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input name="estado" type="text" class="form-control" id="estado" value="<?=$estado?>" required>
                  </div>
                </div>

              </div>
            </div>
          </div>
            <div class="card-footer col-12 text-center">
                 <input type="submit" class="btn btn-primary" value="Alterar">
                 <input type="hidden" name="id" value="<?=$id?>">
                 <input type="hidden" name="foto" value="<?=$foto?>">
            </div>

        </form>
        </div>
      </div>
    </div>
      
</body>

</html>
</body>

</html>