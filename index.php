<?php

require_once 'controllers/createUser.php';

use Application\Controllers\createUser\createUser;

if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'createUser') {
        /* Renvoie Controller createUser */
    } else {
        echo 'Erreur 404 : la page souhaitée n\'existe pas.';
    }
} else {
    homepage();
}