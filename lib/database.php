<?php

namespace Application\Lib\Database;

class Database
{


    static ?\PDO $database = null;

    public function __construct()
    {
    }

    public static function getConnection(): \PDO
    {
        $host = "localhost";
        $dbName = "ustube";
        $userName = "root";
        $password = "";

        $bdd = "mysql:host=$host;dbname=$dbName;charset=utf8";
        try {
            if (is_null(self::$database)) {
                self::$database = new \PDO($bdd, $userName, $password);
            }
        } catch (\PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage() . " " . $e->getCode() . " " . $e->getFile() . " " . $e->getLine());
        }

        return self::$database;
    }
}

$db = Database::getConnection();
