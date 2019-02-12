<?php

require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}

$cliente = new Cliente();
$cliente->setNome($_POST["nome"]);
$cliente->setID_cliente(intval($_POST["id"]));
$cliente->setEmail($_POST["email"]);
$cliente->setCPF($_POST["cpf"]);
$cliente->setData_nascimento($_POST["data"]);
$cliente->setSexo($_POST["sexo"]);


$file = $_FILES["imagem"]; //pega o arquivo da imagem
if($file["tmp_name"] == "") //verifica se ele foi passado ou não
{
   $cliente->setFoto($_POST["foto"]); //se não for, grava nada na coluna da foto
}
else
{
    $imagem = file_get_contents($file["tmp_name"]); //pega o conteudo do arquivo

    $base64 = base64_encode($imagem); //converte o conteudo binario da foto para base 64

    $fileinfo = new finfo(FILEINFO_MIME_TYPE); //instancia

    $mimetype = $fileinfo->file($file["tmp_name"]); //pega a extensao da imagem

    $base64encode = "data:".$mimetype.";base64,".$base64; //cria o texto da imagem

    $cliente->setFoto($base64encode);
}

$endereco = new Endereco($_POST["rua"],$_POST["numero"],$_POST["complemento"],$_POST["bairro"],$_POST["cep"],$_POST["cidade"],$_POST["estado"]);

$telefone = new Telefone($_POST["telefone"]);

$cliente->setTelefone($telefone);

$cliente->setEndereco($endereco);

ClienteDAO::alterarCliente($cliente);

header("Location: sucesso.php"); 


?>