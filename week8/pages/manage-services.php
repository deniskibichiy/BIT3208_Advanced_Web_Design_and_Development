<?php
require_once __DIR__ . '/../config.php';
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}
require_once BASE_PATH . '/includes/header.php';
?>
<div class="page-shell">
    
    <h2>Service Management</h2>
    
    <ul>
        <li><a href="add-service.php">Add Service</a></li>
        <li><a href="view-services.php">View Services</a></li>
    </ul>
    
    <a href="dashboard.php">Back to Dashboard</a>
</div>

<?php 
require_once BASE_PATH . '/includes/footer.php';
?>