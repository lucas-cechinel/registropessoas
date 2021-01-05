<?php

    $DB_TYPE = 'mysql';
    $DB_HOST = 'localhost';
    $DB_PORT = '3306';
    $DB_NAME = 'app_login';
    $DB_USER = 'root';
    $DB_PASSWORD = '';

    try{
        $conexao = new PDO("{$DB_TYPE}:host={$DB_HOST};port={$DB_PORT};dbname={$DB_NAME}", $DB_USER, $DB_PASSWORD);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }