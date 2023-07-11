<?php
require_once('header.php');
require_once('footer.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <script src="https://kit.fontawesome.com/3f79e37ece.js" crossorigin="anonymous"></script>
    <link href="./assets/style/style.css" rel="stylesheet" />
</head>

<body>
    <?= $header ?>
    <?= $content ?>
    <?= $footer ?>

    <script src="./assets/js/menuBurger.js"></script>
    <script src="script.js" defer></script>
</body>

</html>