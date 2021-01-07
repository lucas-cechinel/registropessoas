<?php
require_once 'conexao.php';
require "protecao.php";

$conexao = new Conexao;
$id = $_POST['user_id'];

class Remocao 
{
	private $conexao;
	private $iduser;
	
	function __construct(Conexao $conexao, $iduser)
	{
		$this->conexao = $conexao->conectar();
		$this->iduser = $iduser; 
	}

	function deletar()
	{

		if($_SESSION['autenticado']) {
			$query = "delete from tb_usuarios where id = $this->iduser";
			$this->conexao->exec($query);
			header("Location: /deleteuser");		
		} else {
				header("Location: /loginerror");
		}

	}
}

$remocao = new Remocao($conexao, $id);
$remocao->deletar();
