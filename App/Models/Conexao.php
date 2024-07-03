<?php

namespace App\Models;

use PDO;
use PDOException;

class Conexao
{
    private static $instancia;

    private function __construct()
    {
    }

    public static function getConexao(): PDO
    {
        if (!isset(self::$instancia)) {
            $dbname = 'barberbooker';
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            $port = 3306;

            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";

            try {
                self::$instancia = new PDO($dsn, $user, $senha);
            } catch (PDOException $e) {
                die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}

