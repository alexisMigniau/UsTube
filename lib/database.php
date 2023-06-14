<?php

namespace Application\Lib\Database;

class Database
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === null) {
            $this->database = new \PDO('mysql:host=localhost;dbname=ustube;charset=utf8', 'root', '');
        }

        return $this->database;
    }
}
