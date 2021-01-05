<?php
	require_once 'conexao.php';
	require "protecao.php";
	$users_stmt = "select * from tb_usuarios";
	$stmt_u = $conexao->prepare($users_stmt);
	$stmt_u->execute();
	$all_users = $stmt_u->fetchAll(PDO::FETCH_ASSOC);
