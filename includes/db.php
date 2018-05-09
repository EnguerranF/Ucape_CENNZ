<?php

	require_once 'login.php';

    $dbLogin = "root";
    $dbPassword = "root";
    $dbName = "ucape_cennz";
    $connection = new \PDO("mysql:host=127.0.0.1:8889;dbname=$dbName", $user, $pass);
?>