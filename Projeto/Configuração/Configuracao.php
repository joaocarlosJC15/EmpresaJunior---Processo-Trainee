<?php

//Esse arquivo foi feito para caso queira utilizar qualquer uma das classes do projeto, basta importar esse arquivo.

spl_autoload_register(function($nomedaclasse){

	$pasta = "DAO";

	$diretorio = "..".DIRECTORY_SEPARATOR."Classes".DIRECTORY_SEPARATOR.$pasta;

	$filename = $diretorio.DIRECTORY_SEPARATOR.$nomedaclasse.".php";

	if(file_exists($filename))
	{
		require_once($filename);
	}

	$pasta = "Modelo";

	$diretorio = "..".DIRECTORY_SEPARATOR."Classes".DIRECTORY_SEPARATOR.$pasta;

	$filename = $diretorio.DIRECTORY_SEPARATOR.$nomedaclasse.".php";

	if(file_exists($filename))
	{
		require_once($filename);
	}

	$pasta = "SQL";

	$diretorio = "..".DIRECTORY_SEPARATOR."Classes".DIRECTORY_SEPARATOR.$pasta;

	$filename = $diretorio.DIRECTORY_SEPARATOR.$nomedaclasse.".php";
	
	if(file_exists($filename))
	{
		require_once($filename);
	}
});

?>