<?php

namespace App\Database;

use Exception;
use PDO;

class Database
{
    protected const DB_NAME = "daotest";
    protected const HOST = "localhost";
    protected const USERNAME = "root";
    protected const PASSWORD = "";

    private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME;

    private static $conn;

    static public function conexao():PDO
    {
        try {
            self::$conn = new PDO(self::DSN, self::USERNAME, self::PASSWORD);
            return self::$conn;

        } catch (Exception $e) {
            echo "Erro ao se conetar com o banco de dados" . $e->getMessage();
        }
    }
}
