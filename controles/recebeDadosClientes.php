<?php 
/*-----------------------------------------------

	Objetivo: Arquivo responsável por receber 
	dados, tratar os dados e validar os dados
	de clientes.

	Data: 15/09/21
	Autor: Bruno Oliveira

------------------------------------------------*/
//import do arquivo de configuração de variaveis e constantes
require_once('../functions/config.php');

//import do arquivo para inserir os dados do cliente
require_once('../bd/inserirCliente.php');

//Declaração de variaveis
	$nome = (string) null;
	$rg = (string) null;
	$cpf = (string) null;
	$celular = (string) null;
	$telefone = (string) null;
	$email = (string) null;
	$obs = (string) null;



	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nome = $_POST['txtNome'];
		$rg = $_POST['txtRG'];
		$cpf = $_POST['txtCPF'];
		$celular = $_POST['txtCelular'];
		$telefone = $_POST['txtTelefone'];
		$email = $_POST['txtEmail'];
		$obs = $_POST['txtObs'];

		if ($nome == null || $rg == null || $cpf == null) {
			echo("<script>alert('". ERRO_CAIXA_VAZIA ."');
				window.history.back();
				</script>");
		}
		//strlen = retorna a quantidade de caracteres de uma variavel.

		//validação de qtde de caracteres
		elseif(strlen($nome)>100 || strlen($rg)>15 || strlen($cpf)>20){
				echo("<script>alert('". 
				ERRO_MAXLENGHT ."');
				window.history.back();
				</script>");
		}
		else{
		//Local Para enviar os dados para o banco de dados

		//Criação de um array para encaminhar a funcão de inserir
			$clientes = array(
					"nome"       => $nome,
					"rg"         => $rg,
					"cpf"        => $cpf,
					"celular"    => $celular,
					"telefone"   => $telefone,
					"email"      => $email,
					"obs"        => $obs
			);

		//chama a funcao inserir do arquivo inserirClientes e encaminha o array com os dados do cliente.
			inserir($clientes);
		}
		
	}
 ?>