<?php
session_start();
require_once '../database/db.php';

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}

$stmt = $pdo->query("SELECT * FROM users WHERE role = 'admin'");
$admins = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Manage Admins</h2>

<a href="create-admin.php">Create Admin</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($admins as $a): ?>
    <tr>
        <td><?= $a['id'] ?></td>
        <td><?= $a['name'] ?></td>
        <td><?= $a['email'] ?></td>
        <td>
            <a href="delete-user.php?id=<?= $a['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="dashboard.php">Back</a>