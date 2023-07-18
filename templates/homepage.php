<?php ob_start(); ?>
<main>
    <div class="AllVideos">
        <?php foreach ($videos as $video) : ?>
            <div class="cardProfil">
                <h2>
                    <?= $video->title; ?>
                </h2>
                <img src="<?= $video->img; ?>">
                <p><?= $video->description ?></p>
                <p>Le
                    <?= $video->creationDate; ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</main>
<?php
$content = ob_get_clean();
$title = "UsTube | Accueil";
?>

<?php require('layout.php') ?>