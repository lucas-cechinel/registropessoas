<?php
require_once 'conexao.php';
require "protecao.php";
$conexao = new Conexao;

class Edicao
{
	private $conexao;
	private $userid;
	private $updatedname;
	private $updatedemail;
	
	function __construct(Conexao $conexao, $userid, $updatedname, $updatedemail)
	{
		$this->conexao = $conexao->conectar();
		$this->userid = $userid;
		$this->updatedname = $updatedname;
		$this->updatedemail = $updatedemail;
	}

	function editar()
	{
		if($_SESSION['autenticado']) {
			$query = "update tb_usuarios set nome = '$this->updatedname', email = '$this->updatedemail' where id = $this->userid";
			$this->conexao->exec($query);
			header("Location: /edituser");
			
		} else {
				header("Location: /loginerror");
			}

	}
}

$id = $_POST['id'];
$updated_name = $_POST['nome'];
$updated_email = $_POST['email'];

$edicao = new Edicao($conexao, $id, $updated_name, $updated_email);
$edicao->editar();