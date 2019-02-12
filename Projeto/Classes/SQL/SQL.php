<?php

class SQL
{
	protected $conexao;

	public function __construct()
	{
		$qualbanco = "mysql";
        $nomeschema = "Projeto";
        $host = "127.0.0.1"; //seu host
        $usuario = "root"; //seu usuario do banco
        $senha = "12345"; //sua senha

        $this->conexao = new PDO($qualbanco.":dbname=".$nomeschema.";host=".$host,$usuario,$senha);
	}

	public function executarquery($query, $parametros = array())//a query é o comando para ser executado no mysql. O parametros é um vetor contendo os valores que serão utilizados pela query.
	{
		$stmt = $this->conexao->prepare($query);

		$stmt->execute($parametros);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getUltimoID() //retorna o ID do ultimo insert do banco de dados
	{
		return $this->conexao->lastInsertId();
	}
}

?>