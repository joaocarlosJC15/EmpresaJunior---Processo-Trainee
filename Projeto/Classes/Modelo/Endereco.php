<?php

class Endereco
{
	protected $ID_endereco;
	protected $Rua;
	protected $Numero;
	protected $Complemento;
	protected $Bairro;
	protected $CEP;
	protected $Cidade;
	protected $Estado;
	protected $ID_cliente;

	public function __construct($rua="", $numero="", $complemento="", $bairro="", $cep="", $cidade="", $estado="")
	{
		$this->Rua = $rua;
		$this->Numero = $numero;
		$this->Complemento = $complemento;
		$this->Bairro = $bairro;
		$this->CEP = $cep;
		$this->Cidade = $cidade;
		$this->Estado = $estado;
	}

	public function setID_endereco($valor)
	{
		$this->ID_endereco = $valor;
	}

	public function setRua($valor)
	{
		$this->Rua = $valor;
	}

	public function setNumero($valor)
	{
		$this->Numero = $valor;
	}

	public function setComplemento ($valor)
	{
		$this->Complemento  = $valor;
	}

	public function setBairro($valor)
	{
		$this->Bairro = $valor;
	}

	public function setCEP($valor)
	{
		$this->CEP = $valor;
	}

	public function setCidade($valor)
	{
		$this->Cidade = $valor;
	}

	public function setEstado($valor)
	{
		$this->Estado = $valor;
	}

	public function setID_cliente($valor)
	{
		$this->ID_cliente = $valor;
	}

	public function getID_endereco()
	{
		return $this->ID_endereco;
	}

	public function getRua()
	{
		return $this->Rua;
	}

	public function getNumero()
	{
		return $this->Numero;
	}

	public function getComplemento ()
	{
		return $this->Complemento ;
	}

	public function getBairro()
	{
		return $this->Bairro;
	}

	public function getCEP()
	{
		return $this->CEP;
	}

	public function getCidade()
	{
		return $this->Cidade;
	}

	public function getEstado()
	{
		return $this->Estado;
	}

	public function getID_cliente()
	{
		return $this->ID_cliente;
	}

	public function transformaremvetor($id) //o id é o id do cliente
	{
		$vetor = array($this->Rua,$this->Numero,$this->Complemento,$this->Bairro,$this->CEP,$this->Cidade, $this->Estado,$id);
		return $vetor;
	}
}

?>