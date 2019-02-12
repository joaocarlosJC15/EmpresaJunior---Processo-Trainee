<?php

class Telefone
{
	protected $Telefone;
	protected $ID_cliente;

	public function __construct($telefone="")
	{
		$this->Telefone = $telefone;
	}

	public function setTelefone($valor)
	{
		$this->Telefone = $valor;
	}

	public function setID_cliente($valor)
	{
		$this->ID_cliente = $valor;
	}

	public function getTelefone()
	{
		return $this->Telefone;
	}

    public function getID_cliente()
	{
		return $this->ID_cliente;
	}

	public function transformaremvetor($id) //o id é o id do cliente
	{
		$vetor = array($this->Telefone,$id);
		return $vetor;
	}
}

?>