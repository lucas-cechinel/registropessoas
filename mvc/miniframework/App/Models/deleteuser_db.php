<?php
require_once 'conexao.php';
require "protecao.php";

	if($_SESSION['autenticado']) {
		$id = $_POST['user_id'];

		$query = "delete from tb_usuarios where id = $id";
		$conexao->exec($query);
		header("Location: /deleteuser");		
	} else {
			header("Location: /loginerror");
		}