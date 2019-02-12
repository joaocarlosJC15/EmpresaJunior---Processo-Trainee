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
  <title>AAAIFTM - Criar cliente</title>
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
            <img class="card-img-top" src="imagens/capaprofile.jpg" alt="Card image cap">
            <div class="card-header">
              <h4 class="card-title text-center">Insira sua foto</h4>
            </div>
       <form action="salvarcliente.php" method="post" enctype="multipart/form-data">
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
                    <input name="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Informe o nome" required>
                  </div>
                  <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Informe o CPF" required>
                  </div>
                  <div class="form-group">
                    <label for="data">Data de nascimento:</label>
                    <input name="data" type="date" class="form-control" id="data" aria-describedby="emailHelp" placeholder="Informe a data de nascimento" required>
                  </div> 
                  <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input name="sexo" type="text" class="form-control" id="sexo" placeholder="Informe o sexo" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control"  id="email" placeholder="Informe o email" required>
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input name="telefone" type="text" class="form-control" id="telefone" placeholder="Informe o telefome" required>
                  </div>
                  <h5>Endereço</h5><br>
                  <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input name="rua" type="text" class="form-control" id="rua" placeholder="Informe a rua" required>
                  </div>
                  <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input name="numero" type="text" class="form-control" id="numero" placeholder="Informe o numero" required>
                  </div>
                  <div class="form-group">
                    <label for="complemento">Complemento:</label>
                    <input name="complemento" type="text" class="form-control" id="complemento" placeholder="Informe o complemento">
                  </div>
                  <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Informe o bairro" required>
                  </div>
                  <div class="form-group">
                    <label for="cep">CEP:</label>
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="Informe o CEP" required>
                  </div>
                  <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Informe a cidade" required>
                  </div>
                   <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input name="estado" type="text" class="form-control" id="estado" placeholder="Informe o estado" required>
                  </div>
                </div>

              </div>
            </div>
          </div>
            <div class="card-footer col-12 text-center">
                 <input type="submit" class="btn btn-primary " value="Finalizar cadastro">
            </div>

        </form>
        </div>
      </div>
    </div>
      
</body>

</html>