<?php
session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION["user_id"];

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $stmt = $pdo->prepare("
        UPDATE users 
        SET name = ?, email = ?, phone = ?
        WHERE id = ?
    ");

    $stmt->execute([$name, $email, $phone, $user_id]);

    header("Location: dashboard.php");
    exit();
}
?>

<form method="POST">
    <label style="margin-top: 20px; for="name">Name</label> <br>
    <input style="margin-top: 5px; type="text" name="name" value="<?= $user['name'] ?>"> <br>
    <label style="margin-top: 20px; for="name">Email</label> <br>
    <input style="margin-top: 5px; type="email" name="email" value="<?= $user['email'] ?>"> <br>
    <label style="margin-top: 20px; for="name">Phone</label> <br>
    <input style="margin-top: 5px; type="text" name="phone" value="<?= $user['phone'] ?>"> <br>

    <button style="margin-top: 20px; type="submit">Update Profile</button>
</form> <br>
<a href="change-password.php">Change Password</a> <br>
<a href="dashboard.php">Back to Dashboard</a>