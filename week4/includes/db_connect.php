<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

require_once "includes/db_connect.php";

$sql = "SELECT * FROM users ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <title>Dashboard</title>
</head>
<body>

<h1>Registered Users</h1>

<p>Logged in as User ID: <?= $_SESSION['user_id']; ?></p>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['first_name']; ?></td>
            <td><?= $user['last_name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['phone_number']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<br>
<a href="logout.php">Logout</a>

</body>
</html>