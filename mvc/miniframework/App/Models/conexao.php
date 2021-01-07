<?php

class Conexao{

    private $DB_TYPE = 'mysql';
    private $DB_HOST = 'localhost';
    private $DB_PORT = '3306';
    private $DB_NAME = 'app_login';
    private $DB_USER = 'root';
    private $DB_PASSWORD = '';
    
   public function conectar()
    {
        try{
        $conexao = new PDO(
            "$this->DB_TYPE:host=$this->DB_HOST;port=$this->DB_PORT;dbname=$this->DB_NAME",
            "$this->DB_USER",
            "$this->DB_PASSWORD"
        );

        return $conexao;

        } catch(PDOException $e) {
            $e->getMessage();     
        }
    }
}


    