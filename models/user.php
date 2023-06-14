<?php

namespace Application\Model\User;

require_once ('../lib/database.php');

use Application\Lib\Database\Database;

class User
{
    public int $identifier;
    public string $pseudo;
    public string $password;
    public string $email;
    public int $creationDate;
    public string $img;
}

class UserRepository
{
    public Database $connection;
    
    public string $tableName = "users";

    public function createUser(string $pseudo, string $password, string $email): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            "INSERT INTO $this->tableName (pseudo, password, email) VALUES (?, ?, ?)"
        );
        $affectedLines = $statement->execute([$pseudo, password_hash($password, PASSWORD_DEFAULT), $email]);
        return ($affectedLines > 0);
    }

    public function getUser(int $identifier): User
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, pseudo, password, email, DATE_FORMAT(date_created, 'd/m/Y') AS creation_date FROM $this->tableName WHERE id = ?"
        );
        $statement->execute([$identifier]);

        $row = $statement->fetch();
        $user = new User();
        $user->pseudo = $row['pseudo'];
        $user->creationDate = $row['creation_date'];
        $user->password = $row['password'];
        $user->email = $row['email'];
        $user->identifier = $row['id'];

        return $user;
    }
}
