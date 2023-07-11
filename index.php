<?php

require_once 'controllers/user/createUser.php';
require_once 'controllers/user/getUser.php';
require_once 'controllers/video/getVideo.php';




use Application\Controllers\User\CreateUser\createUser;
use Application\Controllers\User\getUser;
use Application\Controllers\Video\getVideo;



try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'createUser') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                (new createUser())->receiveForm($_POST);
            } else {
                (new createUser())->sendForm();
            }
        } elseif ($_GET['action'] === 'profil') {
            if (isset($_GET['id']) && $_GET['id'] == 7) {
                (new getUser())->execute($_GET['id']);
            } else {
                echo "Vous devez être connecté.";
            }
        } elseif ($_GET['action'] === '') {
        } else {
            throw new Exception('Error');
        }
    } else {
        (new getVideo())->execute(1);
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}
