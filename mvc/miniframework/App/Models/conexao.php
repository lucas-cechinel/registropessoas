<?php

class Conexao{

   public function conectar()
    {
        try{
            return new PDO('sqlite:../database.db');
        } catch(PDOException $e) {
            $e->getMessage();     
        }
    }
}


    