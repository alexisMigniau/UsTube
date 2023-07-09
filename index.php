<?php

require_once 'controllers/user/createUser.php';
require_once 'controllers/user/getUser.php';


use Application\Controllers\User\CreateUser\createUser;
use Application\Controllers\User\getUser;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'createUser') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                (new createUser())->receiveForm($_POST);
            } else {
                (new createUser())->sendForm();
            }
        } elseif ($_GET['action'] === 'profil') {
            if (isset($_GET['id']) && $_GET['id'] == 5) {
                (new getUser())->execute($_GET['id']);
            } else {
                echo "Vous devez être connecté.";
            }
        } else {
            throw new Exception('Error');
        }
    } else {
        require('templates/homepage.php');
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}
