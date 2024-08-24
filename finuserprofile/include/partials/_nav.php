<nav class="nav">
    <ul class="nav__list">
        <?php if (!isset($_SESSION["loggedIn"])): ?>
            <li><a href="profile.php" class="nav__item">View Profile</a></li>
            <li><a href="login.php" class="nav__item">Login</a></li>
            <li><a href="register.php" class="nav__item">Register</a></li>
        <?php endif ?>

        <?php if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true): ?>
            <button class="button-64" role="button"><a href="logout.php" class="nav__item">Logout</a></span></button>
        <?php endif ?>
    </ul>
</nav>