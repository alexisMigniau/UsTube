<?php ob_start(); ?>
<div class="cardProfil">
    <h2>Profil Utilisateur :</h2>
    <h3>Pseudo : </h3>
    <?= $user->pseudo; ?>
    <h3>Email : </h3>
    <?= $user->email; ?>
    <h3>Date de création : </h3>
    <?= $user->creationDate; ?>
</div>
<?php
$content = ob_get_clean();
$title = "UsTube | Profil";
?>

<?php require('layout.php') ?>