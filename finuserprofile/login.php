<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/styles.css">
    <?php require "include/partials/_header.php" ?>
    <title><?= $title ?></title>
</head>
<body>
    <?php
        if (isset($_SESSION["loggedIn"])) {
            header("location: profile.php");
        }

        // If login is set then require the login-function file to log in the user
        if (isset($_POST["login"])) {
            require "include/functions/_login.php";
        }
    ?>

    <?php require "include/partials/_nav.php" ?>

    <?= section("login-content", "login") ?>
    
    <?php require "include/partials/_footer.php" ?>
</body>
</html>