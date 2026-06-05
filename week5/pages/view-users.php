<?php

require_once '../database/db.php';

$stmt = $pdo->query("SELECT * FROM users");

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>
<body>

    <h2>Registered Users</h2>

    <?php if (count($users) > 0): ?>

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>

            <?php foreach ($users as $user): ?>

                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['phone_number']) ?></td>
                </tr>

            <?php endforeach; ?>

        </table>

    <?php else: ?>

        <p>No registered users found.</p>

    <?php endif; ?>

</body>
</html>