<?php

namespace Application\Controllers\User;

require_once('../lib/database.php');
require_once('../models/user.php');

use Application\Lib\Database\Database;
use Application\Model\User\UserRepository;

class createUser
{
    public function execute()
    {
        

        require('templates/inscription.php');
    }
}
