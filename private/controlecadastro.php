<?php
	require_once "control/conexao.php";
	require_once "control/protecao.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$query = "insert into tb_usuarios(nome, email) values('$nome','$email')";
    $conexao->prepare($query);
	$conexao->exec($query);

	header("Location: /admininicio.php");