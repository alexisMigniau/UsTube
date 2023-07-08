<?php ob_start(); ?>

<form action="index.php?action=createUser" method="post">
   <div>
      <label for="pseudo">Pseudo</label><br />
      <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" />
   </div>
   <div>
      <label for="email">Email</label><br />
      <input id="email" name="email" placeholder="Entrez votre email"></input>
   </div>
   <div>
      <label for="password">Mot de passe</label><br />
      <input id="password" name="password" placeholder="Entrez votre mot de passe"></input>
   </div>
   <div>
      <label for="passwordConfirm">Confirmer le Mot de passe</label><br />
      <input id="passwordConfirm" name="passwordConfirm"></input>
   </div>
   <div>
      <input type="submit" />
   </div>
</form>

<?php
$content = ob_get_clean();
$title = "UsTube | Inscription";
?>

<?php require_once('layout.php') ?>