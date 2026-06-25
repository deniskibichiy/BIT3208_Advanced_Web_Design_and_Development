<?php

session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION["user_name"]; ?></h2>

<p>Role: <?php echo $_SESSION["role"]; ?></p>

<hr>

<?php if ($_SESSION["role"] === "user"): ?>

    <h3>User Dashboard</h3>

    <ul>
        <li>Book Service</li>
        <li>My Bookings</li>
    </ul>

<?php elseif ($_SESSION["role"] === "admin"): ?>

    <h3>Admin Dashboard</h3>

    <ul>
        <li>View Users</li>
        <li>Edit Users</li>
        <li>Delete Users</li>
    </ul>

<?php elseif ($_SESSION["role"] === "super_admin"): ?>

    <h3>Super Admin Dashboard</h3>

    <ul>
        <li>Manage Users</li>
        <li>Manage Admins</li>
        <li>System Overview</li>
    </ul>

<?php endif; ?>

<p>
    <a href="../logout.php">Logout</a>
</p>

</body>
</html>