<?php 
/*---------------------------------------------------

	Objetivo: Listar todos os dados de 
	cliente do banco de dados

	Data: 23/09/2021
	Autor: Bruno Oliveira

---------------------------------------------------*/

	require_once("bd/conexaoMysql.php");

	function listar(){
	//Criando o script de select do BD
		$sql = "select * from tblcliente order by idcliente desc";

	//Abre a conexao com o BD
		$conexao = conexaoMysql();

	//Solicita ao BD a execução do script SQL
	$select = mysqli_query($conexao, $sql);

	return $select;
	}


 ?>