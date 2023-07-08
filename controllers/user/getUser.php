<?php

namespace Application\Controllers\User;

require_once('../UsTube/lib/database.php');
require_once('../models/user.php');

use Application\Lib\Database\Database;
use Application\Model\User\UserRepository;

class getUser
{
    public function execute($identifier)
    {
        $userRepository = new UserRepository();
        $userRepository->connection = new Database();
        $user = $userRepository->getUser($identifier);

        require('templates/profil.php');
    }
}
