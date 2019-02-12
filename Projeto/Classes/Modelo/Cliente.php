<?php

require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

class Cliente
{
	protected $ID_cliente;
	protected $Nome;
	protected $Email;
	protected $CPF;
	protected $Data_nascimento;
	protected $Sexo;
	protected $Foto;
	protected $Telefone; //classe telefone
	protected $Endereco; //classse endereco

	public function __construct()
	{
		$this->Telefone = new Telefone();
		$this->Endereco = new Endereco();	
	}

	public function setID_cliente($valor)
	{
		$this->ID_cliente = $valor;
	}

	public function setNome($valor)
	{
		$this->Nome = $valor;
	}

	public function setEmail($valor)
	{
		$this->Email = $valor;
	}

	public function setCPF($valor)
	{
		$this->CPF = $valor;
	}

	public function setData_nascimento($valor)
	{
		$this->Data_nascimento = $valor;
	}

	public function setSexo($valor)
	{
		$this->Sexo = $valor;
	}

	public function setFoto($valor)
	{
		$this->Foto = $valor;
	}

	public function setEndereco(Endereco $valor)
	{
		$this->Endereco = $valor;
	}

	public function setTelefone(Telefone $valor)
	{
		$this->Telefone = $valor;
	}

	public function getID_cliente()
	{
		return $this->ID_cliente;
	}

	public function getNome()
	{
		return $this->Nome;
	}

	public function getEmail()
	{
		return $this->Email;
	}

	public function getCPF()
	{
		return $this->CPF;
	}

	public function getData_nascimento()
	{
		return $this->Data_nascimento;
	}

	public function getSexo()
	{
		return $this->Sexo;
	}

	public function getFoto()
	{
		return $this->Foto;
	}

	public function getTelefone()
	{
		return $this->Telefone;
	}

	public function getEndereco()
	{
		return $this->Endereco;
	}

	public function transformaremvetor() //não pega o id, o telefone e o endereço.
	{
		$vetor = array($this->Nome,$this->Email,$this->CPF,$this->Data_nascimento,$this->Sexo,$this->Foto);

		return $vetor;
	}

	public function transformaremvetor2() //não pega telefone e o endereço.
	{
		$vetor = array($this->Nome,$this->Email,$this->CPF,$this->Data_nascimento,$this->Sexo,$this->Foto,$this->ID_cliente);

		return $vetor;
	}
}

?>