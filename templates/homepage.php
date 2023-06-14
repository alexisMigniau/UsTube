<?php ob_start(); ?>

<header>
    <a href="homepage.php" class="homepage"><!-- image du logo --></a>
    <label for="search">Rechercher</label>
    <input type="text" class="search" name="search">
    <button type="submit"><!-- menu burger --></button>
</header>

<?php $header = ob_get_clean(); ?>

<?php ob_start(); ?>
    <main>
        
    </main>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>