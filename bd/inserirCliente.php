<?php 

/*-------------------------------------------

	Objetivo: Inserir dados de clientes no
	banco de dados.

	Data: 16/09/21
	Autor: Bruno Oliveira

-------------------------------------------*/

//import do arquivo de conexao com o BD.
require_once('../bd/conexaoMysql.php');


	function inserir($clientesArray){
		$sql = "insert into tblcliente 
		(
			nome, 
			rg, 
			cpf, 
			telefone, 
			celular, 
			email,
			obs
		)
		values
		(
			'".$clientesArray['nome']."',
			'".$clientesArray['rg']."',
			'".$clientesArray['cpf']."',
			'".$clientesArray['telefone']."',
			'".$clientesArray['celular']."',
			'".$clientesArray['email']."',
			'".$clientesArray['obs']."'
		)";



	//chamando a função que estabelece a função com o banco de dados.
		$conexao = conexaoMysql();
		if (mysqli_query($conexao, $sql)) {
			return true;
		}
		else{
			return false;
		}
		
	}

 ?>