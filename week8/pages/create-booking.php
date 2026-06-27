<?php
require_once __DIR__ . '/../config.php';
session_start();
require_once '../database/db.php';

if (!in_array($_SESSION["role"], ['admin','super_admin'])) {
    die("Access denied");
}

$users = $pdo->query("SELECT id, name FROM users")->fetchAll(PDO::FETCH_ASSOC);
$services = $pdo->query("SELECT id, service_name FROM services")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $user_id = $_POST["user_id"];
    $service_id = $_POST["service_id"];
    $date = $_POST["booking_date"];

    $stmt = $pdo->prepare("
        INSERT INTO bookings (user_id, service_id, booking_date)
        VALUES (?, ?, ?)
    ");

    $stmt->execute([$user_id, $service_id, $date]);

    header("Location: view-bookings.php");
    exit();
}
require_once BASE_PATH . '/includes/header.php';
?>

<div class="page-shell">
    <h2>Create Booking</h2>
    
    <form method="POST">
    
        <select name="user_id">
            <?php foreach ($users as $u): ?>
                <option value="<?= $u['id'] ?>"><?= $u['name'] ?></option>
            <?php endforeach; ?>
        </select>
    
        <select name="service_id">
            <?php foreach ($services as $s): ?>
                <option value="<?= $s['id'] ?>"><?= $s['service_name'] ?></option>
            <?php endforeach; ?>
        </select>
    
        <input type="date" name="booking_date">
    
        <button>Create Booking</button>
    </form>
    <a href="create-user.php">Create User</a> <br>
    <a href="dashboard.php">Back</a>
</div>
<?php 
require_once BASE_PATH . '/includes/footer.php';
?>