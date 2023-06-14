<?php

require_once 'controllers/user/createUser.php';

use Application\Controllers\User\CreateUser\createUser;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'createUser') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                (new createUser())->receiveForm($_POST);
            } else {
                (new createUser())->sendForm();
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
