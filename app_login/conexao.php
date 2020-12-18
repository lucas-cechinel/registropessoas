<?php

try{
    $username = 'teste';
    $password = 'teste';
    $conexao = new PDO('mysql:host=0.0.0.0;port=3306;dbname=teste', $username, $password);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
