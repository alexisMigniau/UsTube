<?php ob_start(); ?>

<header>
    <a href="homepage.php" class="homepage"><!-- image du logo --></a>
    <button type="submit"><!-- menu burger --></button>
</header>

<?php $header = ob_get_clean(); ?>
