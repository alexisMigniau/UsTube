<?php ob_start(); ?>

<form action="index.php?action=getUser" method="post">
    <div>
        <label for="email">Email</label><br />
        <input id="email" name="email" placeholder="Entrez votre email"></input>
    </div>
    <div>
        <label for="password">Mot de passe</label><br />
        <input id="password" name="password" placeholder="Entrez votre mot de passe"></input>
    </div>
    <div>
        <input type="submit" value="Se connecter" />
    </div>
</form>

<?php
$content = ob_get_clean();
$title = "UsTube | Connexion";
?>

<?php require_once('layout.php') ?>