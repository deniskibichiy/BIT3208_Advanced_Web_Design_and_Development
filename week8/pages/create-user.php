<?php
require_once __DIR__ . '/../config.php';
session_start();
require_once '../database/db.php';

if (!in_array($_SESSION["role"], ['admin','super_admin'])) {
    die("Access denied");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
        INSERT INTO users (name, email, phone, password, role)
        VALUES (?, ?, ?, ?, 'user')
    ");

    $stmt->execute([$name, $email, $phone, $password]);

    header("Location: dashboard.php");
    exit();
}
require_once BASE_PATH . '/includes/header.php';
?>

<div class="page-shell">
    <h2>Create User</h2>
    
    <form method="POST">
        <input name="name" placeholder="Name">
        <input name="email" placeholder="Email">
        <input name="phone" placeholder="Phone">
        <input name="password" type="password" placeholder="Password">
        <button>Create User</button>
    </form>
    <a href="dashboard.php">Back</a>
</div>
<?php 
require_once BASE_PATH . '/includes/footer.php';
?>