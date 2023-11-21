<nav class="navbar navbar-expand">
    <div class="container">
        <a href="#" class="navbar-brand">HS</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Startseite</a>
            </li>
            <li class="nav-item">
                <a href="impressum.php" class="nav-link">Impressum</a>
            </li>
            <li class="nav-item">
                <a href="faq.php" class="nav-link">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="registration.php" class="nav-link">Registrierung</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Momentan angemeldet:
                    <?php
                    if (isset($_SESSION["username"])) {
                        echo $_SESSION["username"];
                    }
                    ?>
                </a>
            </li>
        </ul>
    </div>
</nav>