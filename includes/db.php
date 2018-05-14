<?php

	require_once("login.php");

    $dbName = "ucape_cennz";
    $connection = new \PDO("mysql:host=127.0.0.1:8889;dbname=$dbName", $dbLogin, $dbPassword);
?>