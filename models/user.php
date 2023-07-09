<?php

namespace Application\Model\User;

require_once('./lib/database.php');

use Application\Lib\Database\Database;

class User
{
    public int $identifier;
    public string $pseudo;
    public string $password;
    public string $email;
    public string $creationDate;
    public string $img;

    public static function validateInput(string $pseudo, string $password, string $email, string $confirmPassword)
    {
        $errors = [];

        $pseudo = isset($pseudo) ? $pseudo : '';
        $password = isset($password) ? $password : '';
        $email = isset($email) ? $email : '';
        $confirmPassword = isset($confirmPassword) ? $confirmPassword : '';

        if (empty($pseudo)) {
            $errors['pseudo'] = "Le pseudo est obligatoire";
        }

        if (empty($email)) {
            $errors['email'] = "L'email est obligatoire";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "L'email n'est pas valide";
        }

        if (empty($password)) {
            $errors['password'] = "Le mot de passe est obligatoire";
        }

        if (empty($confirmPassword)) {
            $errors['confirmPassword'] = "La confirmation du mot de passe est obligatoire";
        } elseif ($confirmPassword != $password) {
            $errors['confirmPassword'] = "La confirmation du mot de passe ne correspond pas";
        }
        if (empty($errors)) {
            $user = new User();
            $user->pseudo = $pseudo;
            $user->password = $password;
            $user->email = $email;
            return $user;
        } else {
            return $errors;
        }
    }
}

class UserRepository
{
    public Database $connection;

    public string $tableName = "users";

    public function createUser(User $user): bool
    {

        $statement = $this->connection->getConnection()->prepare(
            "INSERT INTO $this->tableName (pseudo, password, email) VALUES (?, ?, ?)"
        );
        $affectedLines = $statement->execute([$user->pseudo, password_hash($user->password, PASSWORD_DEFAULT), $user->email]);
        return ($affectedLines > 0);
    }

    public function getUser(int $identifier): User
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, pseudo, password, email, date_created AS creation_date FROM $this->tableName WHERE id = ?"
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
