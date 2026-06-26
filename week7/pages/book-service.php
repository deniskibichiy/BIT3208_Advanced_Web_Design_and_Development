<?php
require_once '../database/db.php';

$stmt = $pdo->query("SELECT * FROM services");
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="../includes/booking-handler.php" method="POST">

    <label>Service</label><br>

    <select name="service_id" required>
        <?php foreach ($services as $s): ?>
            <option value="<?= $s['id'] ?>">
                <?= $s['service_name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Booking Date</label><br>
    <input type="date" name="booking_date" required>

    <br><br>

    <button type="submit">Book</button>

</form>
<a href="dashboard.php">Back</a>