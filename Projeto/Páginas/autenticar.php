<?php
require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

session_start();


if(isset($_SESSION["autenticacao"]))
{
	echo "aloooooo";
	header("Location: restrito.php");
}

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$conexao = new SQL();

$query = "Select * From Usuario where Usuario = ? and Senha = ?";

$parametros = array($usuario,$senha);

$resultado = $conexao->executarquery($query,$parametros);

if(count($resultado) == 0)
{
	header("Location: erro4.php");
}
else
{
	$_SESSION["autenticacao"] = $usuario;
	header("Location: restrito.php");
}

?>