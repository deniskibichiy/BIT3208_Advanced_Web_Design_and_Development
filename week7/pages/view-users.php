<?php


session_start();


if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION["role"] !== "admin" && $_SESSION["role"] !== "super_admin") {
    die("Access denied");
}

require_once '../database/db.php';

$stmt = $pdo->query("SELECT * FROM users");

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


    <h2>Registered Users</h2>

<?php if (count($users) > 0): ?>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created At</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>

        <tr>
            
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['phone']) ?></td>
            <td><?= $user['created_at'] ?></td>
            <td><?= htmlspecialchars($user['role']) ?></td>
            <td>
                <?php if ($_SESSION["role"] === "super_admin"): ?>
                    <a href="edit-user.php?id=<?= $user['id'] ?>">Edit</a> |
                    <a href="delete-user.php?id=<?= $user['id'] ?>" onclick="return confirm('Delete user?')">Delete</a>
                    <?php elseif ($_SESSION["role"] === "admin"): ?>
                        <?php if ($user['role'] === 'user'): ?>
                            <a href="edit-user.php?id=<?= $user['id'] ?>">Edit</a> |
                            <a href="delete-user.php?id=<?= $user['id'] ?>" onclick="return confirm('Delete user?')">Delete</a>
                            <?php else: ?>
                                <span>Not allowed</span>
                                <?php endif; ?>
                                <?php endif; ?>
                            </td>
        </tr>
    <?php endforeach; ?>
  
</table>
<li><a href="create-user.php">Create User</a></li>
<a href="dashboard.php">Back</a>

<?php else: ?>

    <p>No registered users found.</p>

<?php endif; ?>
