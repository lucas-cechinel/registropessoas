<?php

	$username = 'root';
	$password = '';


	try{

	$conexao = new PDO('mysql:host=localhost;dbname=app_login', $username, $password);


	} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

