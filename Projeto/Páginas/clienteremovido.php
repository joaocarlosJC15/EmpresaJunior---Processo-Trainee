<?php

require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");


session_start();

if(!isset($_SESSION["autenticacao"]))
{
  header("Location: login.html");
}



$cliente = ClienteDAO::removerCliente(intval($_POST["id"]));

?>