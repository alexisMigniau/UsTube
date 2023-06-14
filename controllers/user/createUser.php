<?php

namespace Application\Controllers\User\CreateUser;

require_once('lib/database.php');
require_once('models/user.php');

use Application\Lib\Database\Database;
use Application\Model\User\UserRepository;
use Application\Model\User\User;

class createUser
{
    public function receiveForm(array $input)
    {
        $pseudo = null;
        $password = null;
        $email = null;

        $validateUser = User::validateInput($input['pseudo'], $input['password'], $input['email'], $input['passwordConfirm']);
        print_r($validateUser);
        $userRepository = new UserRepository();
        $userRepository->connection = new Database();
        $success = $userRepository->createUser($validateUser);

        if (!$success) {
            throw new \Exception("Impossible d\'ajouter l'utilisateur !");
        } else {
            require 'templates/homepage.php';
        }
    }

    public function sendForm()
    {
        require('templates/inscription.php');
    }
}
