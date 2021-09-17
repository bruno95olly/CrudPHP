<?php 
/*-----------------------------------------------------

	Objetivo: arquivo de configuração de variaveis 
	e constantes que serão utilizadas no sistema

	Data: 15/09/21
	Autor: Bruno Oliveira

----------------------------------------------------*/

//variaveis e constantes para conexao com o banco de dados MySQL
	const BD_SERVER = 'localhost';
	const BD_USER = 'root';
	const BD_PASSWORD = 'bcd127';
	const BD_DATABASE = 'db_contatos_20212t';


// Mensagem de erro do sistema
	const ERRO_CONEXAO_BD = 'Não foi possivel realizar a conexão com o banco de dados, entre em contato com o administrador do sistema.';

	const ERRO_CAIXA_VAZIA = 'Não foi possivel realizar a operação, pois existem campos obrigatórios a serem preenchidos.';

	const ERRO_MAXLENGHT = 'não ultrapasse limites que vc nao pode ultrapassar, seu otario!'

 ?>