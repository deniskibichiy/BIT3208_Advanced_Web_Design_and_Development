
<?php
require_once __DIR__ . '/../config.php';
session_start();
require_once '../database/db.php';

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["service_name"];
    $price = $_POST["price"];
    $desc = $_POST["description"];

    $stmt = $pdo->prepare("
        INSERT INTO services (service_name, price, description)
        VALUES (?, ?, ?)
    ");

    $stmt->execute([$name, $price, $desc]);

    header("Location: manage-services.php");
    exit();
}
require_once BASE_PATH . '/includes/header.php';
?>
<div class="page-shell">
    
    <h2>Add Service</h2>
    
    <form method="POST">
        <label style="margin-top: 20px; margin-bottom: 20px" for="service_name">Service Name</label> <br>
        <input style="margin-top: 20px; margin-bottom: 20px" type="text" id="service_name" name="service_name"> <br>
        <label style="margin-top: 20px; margin-bottom: 20px" for="price">Price</label> <br>
        <input style="margin-top: 20px; margin-bottom: 20px" type="number" id="price" name="price"> <br>
        <label style="margin-top: 20px; margin-bottom: 20px" for="description">Description</label> <br>
        <textarea style="margin-top: 10px; margin-bottom: 20px" id="description" name="description"></textarea> <br>
        <button style="margin-top: 20px; margin-bottom: 20px" type="submit">Add Service</button>
    </form>
    <a href="manage-services.php">Back</a>
</div>
<?php 
require_once BASE_PATH . '/includes/footer.php';
?>