<?php 
/*----------------------------------------------
	
	Objetivo: Buscar ou listar os dados de
	clientes, solicitando ao banco de dados

	Data: 23/09/2021
	Autor: Bruno Oliveira

----------------------------------------------*/
	require_once(SRC . 'bd/listarClientes.php');
	function exibirClientes(){
	//Chama a função que busca os dados no BD e recebe os registros de clientes.
		$dados = listar();

		return $dados;
	}

 ?>