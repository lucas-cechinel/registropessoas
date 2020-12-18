<?php
	
	require_once "conexao.php";
	require_once "protecao.php";
	//teste
	/*
	echo "<pre>";
	print_r($_POST);
	echo "<pre>";
	*/

		
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$query = "insert into tb_usuarios(nome, email) values('$nome','$email')";

	$conexao->exec($query);

	header("Location: admin_inicio.php");


