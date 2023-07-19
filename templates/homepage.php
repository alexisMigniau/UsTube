<?php ob_start(); ?>
<main>
    <div class="AllVideos">
        <?php foreach ($videos as $video) : ?>
            <div class="cardProfil">
                <img src="<?= $video->img; ?>">
                <h2>
                    <?= $video->title; ?>
                </h2>
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