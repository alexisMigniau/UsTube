<?php ob_start(); ?>

<header>
    <a href="index.php" class="homepage"><img src="./assets/images/logo.png" alt="Logo du site UsTube"></a>
    <label for="search">Rechercher</label>
    <input type="text" class="search" name="search">
    <button type="submit"><!-- menu burger --></button>
</header>

<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
<main>

</main>
<?php
$content = ob_get_clean();
$title = "UsTube | Accueil";
?>

<?php require('layout.php') ?>