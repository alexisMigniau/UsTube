<?php ob_start(); ?>

<header>
    <nav>
        <a href="index.php" class="homepage"><img src="./assets/images/logo.png" alt="Logo du site UsTube"></a>
        <div>
            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input type="text" name="search">
        </div>
        <div>
            <div id="mySidenav" class="sidenav">
                <a id="closeBtn" href="#" class="close">x</a>
                <ul>
                    <li><a href="index.php?action=profil&id=5"><img src="./assets/images/profil.png" alt="Image de la page profil"><br>Profil</a></li>
                    <li><a href="index.php">Mettre<br>en ligne<br>une vidéo</a></li>
                </ul>
            </div>

            <a href="#" id="openBtn">
                <span class="burger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
        </div>
    </nav>
</header>

<?php $header = ob_get_clean(); ?>