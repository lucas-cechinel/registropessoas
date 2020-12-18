<?php

    $DB_TYPE = 'mysql';
    $DB_HOST = '0.0.0.0';
    $DB_PORT = '3306';
    $DB_NAME = 'teste';
    $DB_USER = 'teste';
    $DB_PASSWORD = 'teste';

    try{
        $conexao = new PDO("{$DB_TYPE}:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME}", $DB_USER, $DB_PASSWORD);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }