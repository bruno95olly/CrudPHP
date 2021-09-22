<?php 
/*----------------------------------------------------
	Objetivo: arquivo para configurar a conexão
	com o banco de dados MySQL

	Data: 15/09/21
	Autor: Bruno Oliveira
----------------------------------------------------*/

//Abre a conexão com a base de dado MySQL:
	function conexaoMysql(){
	//require_once('functions/config.php');

	//Declaração de variaveis para conexao com BD:
		$server = (string) BD_SERVER;
		$user = (string) BD_USER;
		$password = (string) BD_PASSWORD;
		$database = (string) BD_DATABASE;

		/* 
			Formas de criar conexões com BD:
				mysql_conect();
				mysqli_conect();
				PDO();
		*/

		if ($conexao = mysqli_connect($server, $user, $password, $database)){
			return($conexao);
		}
		else{
			echo(ERRO_CONEXAO_BD);
			return false;
		}
	}
 ?>