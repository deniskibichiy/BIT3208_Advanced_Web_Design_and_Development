<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../database/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    try {

        $stmt = $pdo->prepare(
            "INSERT INTO users (name, email, phone, password)
             VALUES (:name, :email, :phone, :password)"
        );

        $stmt->execute([
            ":name" => $name,
            ":email" => $email,
            ":phone" => $phone,
            ":password" => $password
        ]);

        header("Location: ../login.php");
        exit();

    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();

    }

}