<?php

namespace src\database;

use PDO;
use PDOException;

class Conexao
{
    private $host = 'localhost';
    private $dbname = 'lista-tarefas';
    private $user = 'root';
    private $pass = '';

    public function conectar()
    {
        try {
            $conexao = new PDO(
                //dsn
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            return $conexao;
        } catch (PDOException $e) {
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}
