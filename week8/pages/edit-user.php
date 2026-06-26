<?php
session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$id = $_GET['id'];

// load user
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// update user
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $pdo->prepare("
        UPDATE users 
        SET name = ?, email = ?, phone = ?
        WHERE id = ?
    ");

    $stmt->execute([$name, $email, $phone, $id]);

    header("Location: view-users.php");
    exit();
}
?>

<form method="POST">
    <input type="text" name="name" value="<?= $user['name'] ?>">
    <input type="email" name="email" value="<?= $user['email'] ?>">
    <input type="text" name="phone" value="<?= $user['phone'] ?>">

    <button type="submit">Update</button>
</form>