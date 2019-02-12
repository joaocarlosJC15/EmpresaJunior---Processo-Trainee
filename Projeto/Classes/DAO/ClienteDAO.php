<?php


require_once("..".DIRECTORY_SEPARATOR."Configuração".DIRECTORY_SEPARATOR."Configuracao.php");

class ClienteDAO extends PDO
{
	public static function inserirCliente(Cliente $cliente)
	{
		$conexao = new SQL();


		//insere os dados do cliente na tabela cliente
		$query = "Insert Into Cliente (Nome,Email,CPF,Data_nascimento,Sexo,Foto) Values(?,?,?,?,?,?)";

		$parametros = $cliente->transformaremvetor(); //Transforma o objeto cliente em um array, onde cada posição do array é um atributo do objeto cliente. Nesse vetor estarão os valores (Values(?,?,?,?,?,?)) que a query irá utilizar.

		$resultado = $conexao->executarquery($query,$parametros);


//------------------------------------------------------------------------------------------------------------



        $id = $conexao->getUltimoID(); //Pegar o último ID_cliente inserido na tabela cliente



//------------------------------------------------------------------------------------------------------------

        //insere o telefone do objeto cliente na tabela telefone
		$query = "Insert Into Telefone (Telefone,ID_cliente) values (?,?)";

		$parametros = $cliente->getTelefone()->transformaremvetor($id); //Transforma o objeto telefone em um array, onde cada posição do array é um atributo do objeto telefone (mais o $id do cliente que o telefone não possui ainda). Nesse vetor estarão os valores ((?,?)) que a query irá utilizar.

		$resultado = $conexao->executarquery($query,$parametros);

        
//------------------------------------------------------------------------------------------------------------
       
       //insere o endereco do objeto cliente na tabela endereco
	   $query =  "Insert Into Endereco (Rua, Numero ,Complemento, Bairro, CEP, Cidade, Estado, ID_cliente) values(?,?,?,?,?,?,?,?)";

	   $parametros = $cliente->getEndereco()->transformaremvetor($id);//Transforma o objeto endereco em um array, onde cada posição do array é um atributo do objeto endereco (mais o $id do cliente que o endereco não possui ainda). esse vetor estarão os valores (values(?,?,?,?,?,?,?,?) que a query irá utilizar.


	   $resultado = $conexao->executarquery($query,$parametros);

	}

	public static function selecionar_tudo() //retorna um vetor de clientes
	{
		$query = "Select * From Cliente c Join Endereco e on c.ID_cliente =  e.ID_cliente Join Telefone t on c.ID_cliente =  t.ID_cliente";

		$conexao = new SQL();

		$resultados = $conexao->executarquery($query); //Me retorna um vetor, onde cada posição desse vetor é uma linha da tabela

		foreach($resultados as $valores) //Loop para transformar cada posição do vetor em um objeto cliente, e adicionar esse objeto em um array de clientes
        {
	        $cliente = ClienteDAO::transformaremCliente($valores);
	        $clientes[] = $cliente;
        }

        return $clientes;
	}

	public static function selecionar_umCliente(int $id)
	{
		$query = "Select * From Cliente c Join Endereco e on c.ID_cliente =  e.ID_cliente Join Telefone t on c.ID_cliente =  t.ID_cliente Where c.ID_cliente = ?";
        
		$conexao = new SQL();

		$parametros = array($id);

		$resultados = $conexao->executarquery($query,$parametros); //Me retorna um vetor, onde cada posição desse vetor é uma linha da tabela

		$numero = count($resultados);

		if(count($resultados) == 0 ) // se o id digitado não existir
		{
			header("Location: erro.php"); 
		}

	    $cliente = ClienteDAO::transformaremCliente($resultados[0]); //Como o vetor retornado só tem uma posição

        return $cliente;
	}

	public static function removerCliente(int $id)
	{
		$query = "Select * From Cliente where ID_cliente = ?";

		$conexao = new SQL();

		$parametros = array($id);

		$resultados = $conexao->executarquery($query,$parametros);

		$numero = count($resultados);
		if(count($resultados) == 0 ) // se o id digitado não existir
		{
			header("Location: erro.php"); 
		}
		else
		{
			$query =  "Delete From Telefone Where ID_cliente = ?";
		    $resultados = $conexao->executarquery($query,$parametros);

		    $query =  "Delete From Endereco Where ID_cliente = ?";
		    $resultados = $conexao->executarquery($query,$parametros);

		    $query =  "Delete From Cliente Where ID_cliente = ?";
		    $resultados = $conexao->executarquery($query,$parametros);

		    header("Location: sucesso.php"); 
		}
	}

	public static function alterarCliente($cliente)
	{
		$conexao = new SQL();

		$query = "Update Cliente set Nome = ?,Email = ?,CPF = ?,Data_nascimento = ?,Sexo = ?,Foto = ? where ID_cliente = ?";

		$parametros = $cliente->transformaremvetor2();

		$resultado = $conexao->executarquery($query,$parametros);



//------------------------------------------------------------------------------------------------------------

		$query = "Update Telefone set Telefone = ? where ID_cliente = ?";

		$parametros = $cliente->getTelefone()->transformaremvetor($cliente->getID_cliente()); 

		$resultado = $conexao->executarquery($query,$parametros);
//------------------------------------------------------------------------------------------------------------      
       
	   $query =  "Update Endereco set Rua = ?, Numero = ? ,Complemento = ?, Bairro = ?, CEP = ?, Cidade = ?, Estado = ? where ID_cliente = ?";

	   $parametros = $cliente->getEndereco()->transformaremvetor($cliente->getID_cliente());


	   $resultado = $conexao->executarquery($query,$parametros);
	}


	public static function transformaremCliente($valores) //Transforma o vetor valores em um cliente
	{
		$cliente = new Cliente();
		foreach($valores as $index => $valor)
		{
			if($index == "ID_cliente")
			{
				$cliente->setID_cliente($valor);

			}
			else if($index == "Nome")
			{
				$cliente->setNome($valor);

			}
			else if($index == "Email")
			{
				$cliente->setEmail($valor);

			}
			else if($index == "CPF")
			{
				$cliente->setCPF($valor);

			}
			else if($index == "Data_nascimento")
			{
				$cliente->setData_nascimento($valor);

			}
			else if($index == "Sexo")
			{
				$cliente->setSexo($valor);

			}
			else if($index == "Foto")
			{
				$cliente->setFoto($valor);

			}
			else if($index == "ID_endereco")
			{
				$cliente->getEndereco()->setID_endereco($valor);

			}
			else if($index == "Rua")
			{
				$cliente->getEndereco()->setRua($valor);

			}
			else if($index == "Numero")
			{
				$cliente->getEndereco()->setNumero($valor);

			}
			else if($index == "Complemento")
			{
				$cliente->getEndereco()->setComplemento($valor);

			}
			else if($index == "Bairro")
			{
				$cliente->getEndereco()->setBairro($valor);

			}
			else if($index == "CEP")
			{
				$cliente->getEndereco()->setCEP($valor);

			}
			else if($index == "Cidade")
			{
				$cliente->getEndereco()->setCidade($valor);
			}
			else if($index == "Estado")
			{
				$cliente->getEndereco()->setEstado($valor);

			}
			else if($index == "Telefone")
			{
				$cliente->getTelefone()->setTelefone($valor);

			}
		}
		return $cliente;
	}
}

?>