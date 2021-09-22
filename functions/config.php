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

	const ERRO_MAXLENGHT = 'não ultrapasse limites que vc nao pode ultrapassar, seu otario!';
//Mensagens de aceitação e validação de dados no BD
	const BD_MSG_INSERIR = 'Registro salvo com sucesso no banco de dados';
	const BD_MSG_ERRO = 'ERRO: Não foi possivel manipular os dados no Banco de Dados';

// CONSTANTE PARA INDICAR A PASTA RAIZ DO SERVIDOR + ESTRUTURA DE DIRETORIO 
	define ('SRC', $_SERVER['DOCUMENT_ROOT'].'/ds2t20212/myLocalBackEnd/AULA13/crud/');
 ?>