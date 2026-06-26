<?php
session_start();
require_once '../database/db.php';

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
        INSERT INTO users (name, email, phone, password, role)
        VALUES (?, ?, ?, ?, 'admin')
    ");

    $stmt->execute([$name, $email, $phone, $password]);

    header("Location: manage-admins.php");
    exit();
}
?>

<h2>Create Admin</h2>

<form method="POST">
    <input name="name" placeholder="Name">
    <input name="email" placeholder="Email">
    <input name ="phone"placeholder = "Phone">
    <input name="password" type="password" placeholder="Password">
    <button>Create Admin</button>
</form>
<a href="manage-admins.php">Back</a>