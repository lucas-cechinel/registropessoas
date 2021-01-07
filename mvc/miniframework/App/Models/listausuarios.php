<?php
	require_once 'conexao.php';
	require "protecao.php";
	$conexao = new Conexao;

	class Lista
	{
		private $conexao;

		function __construct(Conexao $conexao)
		{
			$this->conexao = $conexao->conectar();
		}

		function listar() 
		{
			$users_stmt = "select * from tb_usuarios";
			$stmt_u = $this->conexao->prepare($users_stmt);
			$stmt_u->execute();
			$all_users = $stmt_u->fetchAll(PDO::FETCH_ASSOC);

			return $all_users;

		}
	}

$lista = new Lista($conexao);
$all_users = $lista->listar();






