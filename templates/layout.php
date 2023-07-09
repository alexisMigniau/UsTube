<?php
if (!isset($header)) {
    require_once('header.php');
}
?>
<?php require_once('footer.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link rel="icon" href="./assets/images/favicon.ico" />
    <link href="./assets/style/style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3f79e37ece.js" crossorigin="anonymous"></script>
</head>

<body>
    <?= $header ?>
    <?= $content ?>
    <?= $footer ?>

    <script src="./assets/js/menuBurger.js" defer></script>
    <script src="script.js" defer></script>
</body>

</html>