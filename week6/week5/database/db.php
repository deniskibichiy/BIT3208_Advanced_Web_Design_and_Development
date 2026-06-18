<?php

try {

    $pdo = new PDO(
        "mysql:host=127.0.0.1;dbname=runi_empire_db",
        "root",
        "root"
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Connection failed: " . $e->getMessage());

}