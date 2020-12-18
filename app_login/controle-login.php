<?php
	session_start();

    require_once 'conexao.php';

	$pulled_email = $_POST['email'];
	$pulled_passwrd = $_POST['senha'];

	$info_stmt = "select * from tb_admin";
	$stmt_i = $conexao->query($info_stmt);
	$info_valida = $stmt_i->fetchAll(PDO::FETCH_ASSOC);

	foreach ($info_valida as $key => $value) {
		$email_valido = $value['email'];
		$senha_valida = $value['senha'];

		if ($pulled_email == $email_valido && $pulled_passwrd == $senha_valida) {

			$usuario_autenticado = true;

		}
	}

	if ($usuario_autenticado) {
		$_SESSION['autenticado'] = true;
		header("Location: admin_inicio.php");
	} else {
		$_SESSION['autenticado'] = false;
		header("Location: login_error.html?error=wrong_information");
	}