<?php ob_start(); ?>

<form action="index.php?action=createUser" method="post">
   <div>
      <label for="pseudo">Pseudo</label><br />
      <input type="text" id="pseudo" name="pseudo" />
   </div>
   <div>
      <label for="email">Email</label><br />
      <input id="email" name="email"></input>
   </div>
   <div>
      <label for="password">Mot de passe</label><br />
      <input id="password" name="password"></input>
   </div>
   <div>
      <label for="passwordConfirm">Mot de passe</label><br />
      <input id="passwordConfirm" name="passwordConfirm"></input>
   </div>
   <div>
      <input type="submit" />
   </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require_once('layout.php') ?>