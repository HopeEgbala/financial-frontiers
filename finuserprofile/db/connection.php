<?php 
    try {
        $username = "root";
        $password = "";
        $connection = new PDO('mysql:host=localhost;dbname=finuser',$username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Successfully Connected to Database";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
?>