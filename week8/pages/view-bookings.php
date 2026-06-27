<?php
require_once __DIR__ . '/../config.php';
session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION["role"] === "user") {
    die("Access denied");
}

$stmt = $pdo->query("
    SELECT 
        bookings.id,
        users.name AS user_name,
        users.email,
        services.service_name,
        bookings.booking_date,
        bookings.created_at
    FROM bookings
    INNER JOIN users ON bookings.user_id = users.id
    INNER JOIN services ON bookings.service_id = services.id
    ORDER BY bookings.created_at DESC
");

$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
require_once BASE_PATH . '/includes/header.php';
?>


<div class="page-shell">
    <h2>Bookings (Admin View)</h2>
    
    <?php if (count($bookings) > 0): ?>
    
    <div class="table-wrapper">
        <table border="1" cellpadding="10">
    
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Email</th>
                <th>Service</th>
                <th>Booking Date</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
    
            <?php foreach ($bookings as $b): ?>
                <tr>
                    <td><?= $b['id'] ?></td>
                    <td><?= htmlspecialchars($b['user_name']) ?></td>
                    <td><?= htmlspecialchars($b['email']) ?></td>
                    <td><?= htmlspecialchars($b['service_name']) ?></td>
                    <td><?= $b['booking_date'] ?></td>
                    <td><?= $b['created_at'] ?></td>
                     <td>
                        <a href="delete-booking.php?id=<?= $b['id'] ?>"onclick="return confirm('Delete this booking?')">Delete </a>
                    </td>
                </tr>
            <?php endforeach; ?>
    
        </table>
    </div>
    <a href="create-booking.php">Create Booking</a> <br>
    <a href="dashboard.php">Back</a>
    
    <?php else: ?>
        <p>No bookings found.</p>
        <p><a href="create-booking.php">Create Booking</a></p>
</div>

<?php endif; ?>

<?php 
require_once BASE_PATH . '/includes/footer.php';
?>