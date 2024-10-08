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

        // If register is set then require the register-function file to log in the user
        if (isset($_POST["register"])) {
            require "include/functions/_register.php";
        }
    ?>

    <?php require "include/partials/_nav.php" ?>

    <?= section("register-content", "register") ?>
    
    <?php require "include/partials/_footer.php" ?>
</body>
</html>