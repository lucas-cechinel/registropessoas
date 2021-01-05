<?php
require_once 'conexao.php';
require "protecao.php";

	if($_SESSION['autenticado']) {
			$id = $_POST['id'];
			$updated_name = $_POST['nome'];
			$updated_email = $_POST['email'];
			$query = "update tb_usuarios set nome = '$updated_name', email = '$updated_email' where id = $id";
			$conexao->exec($query);
			header("Location: /edituser");
		
	} else {
			header("Location: /loginerror");
		}