<?php
session_start();
require_once '../database/db.php';

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}

$stmt = $pdo->query("SELECT * FROM services");
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Services</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
    </tr>

    <?php foreach ($services as $s): ?>
    <tr>
        <td><?= $s['id'] ?></td>
        <td><?= htmlspecialchars($s['service_name']) ?></td>
        <td><?= $s['price'] ?></td>
        <td><?= htmlspecialchars($s['description']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="manage-services.php">Back</a>