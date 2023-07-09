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
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <?= $header ?>
    <?= $content ?>
    <?= $footer ?>

    <script src="script.js" defer></script>
</body>

</html>