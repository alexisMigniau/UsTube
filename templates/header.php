<?php ob_start(); ?>

<header>
    <a href="index.php" class="homepage"><img src="./assets/images/logo.png" alt="Logo du site UsTube"></a>
    <button type="submit"><!-- menu burger --></button>
</header>

<?php $header = ob_get_clean(); ?>