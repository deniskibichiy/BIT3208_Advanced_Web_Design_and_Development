<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

if ($_SESSION["role"] !== "super_admin") {
    die("Access denied");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Services</title>
</head>
<body>

<h2>Service Management</h2>

<ul>
    <li><a href="add-service.php">Add Service</a></li>
    <li><a href="view-services.php">View Services</a></li>
</ul>

<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>