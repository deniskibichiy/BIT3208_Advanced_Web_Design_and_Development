<?php
require_once __DIR__ . '/../config.php';
session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$stmt = $pdo->prepare("
    SELECT
        bookings.id,
        services.service_name,
        bookings.booking_date,
        bookings.created_at
    FROM bookings
    INNER JOIN services
        ON bookings.service_id = services.id
    WHERE bookings.user_id = ?
    ORDER BY bookings.booking_date DESC
");

$stmt->execute([$_SESSION["user_id"]]);

$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
require_once BASE_PATH . '/includes/header.php';
?>
<div class="page-shell">
    
    <h2>My Bookings</h2>
    
    <?php if (count($bookings) > 0): ?>
    
    <table border="1" cellpadding="10">
    
    <tr>
        <th>ID</th>
        <th>Service</th>
        <th>Booking Date</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    
    <?php foreach ($bookings as $booking): ?>
    
    <tr>
    
    <td><?= $booking['id'] ?></td>
    
    <td><?= htmlspecialchars($booking['service_name']) ?></td>
    
    <td><?= $booking['booking_date'] ?></td>
    
    <td><?= $booking['created_at'] ?></td>
    
    <td>
        <a href="delete-booking.php?id=<?= $booking['id'] ?>"
           onclick="return confirm('Cancel this booking?')">
           Cancel
        </a>
    </td>
    
    </tr>
    
    <?php endforeach; ?>
    
    </table>
    <a href="dashboard.php">Back to Dashboard</a>
    
    <?php else: ?>
    
    <p>No bookings found.</p>
    <p><a href="book-service.php">Create Booking</a></p>
</div>

<?php endif; ?>
<?php 
require_once BASE_PATH . '/includes/footer.php';
?>