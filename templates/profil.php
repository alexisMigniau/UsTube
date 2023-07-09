<?php require('header.php') ?>

<?php ob_start(); ?>

<h1>Profil Utilisateur :</h1>
<h2>Pseudo : </h2>
<?= $user->pseudo; ?>
<h2>Email : </h2>
<?= $user->email; ?>
<h2>Date de création : </h2>
<?= $user->creationDate; ?>




<?php
$content = ob_get_clean();
$title = "UsTube | Profil";
?>

<?php require('layout.php') ?>