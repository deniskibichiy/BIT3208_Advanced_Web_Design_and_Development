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
        <li><a href="book-service.php">Book Service</a></li>
        <li><a href="my-bookings.php">My Bookings</a></li>
        <li><a href="profile.php">My Profile</a></li>
    </ul>

<?php elseif ($_SESSION["role"] === "admin"): ?>

    <h3>Admin Dashboard</h3>
    <li><a href="profile.php">My Profile</a></li>
    <li><a href="view-users.php">View Users</a></li>
    <li><a href="view-bookings.php">View Bookings</a></li>

<?php elseif ($_SESSION["role"] === "super_admin"): ?>

    <h3>Super Admin Dashboard</h3>

    <ul>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="view-users.php">Manage Users</a></li>
        <li><a href="manage-admins.php">Manage Admins</a></li>
        <li><a href="manage-services.php">Manage Services</a></li>
        <li><a href="view-bookings.php">View Bookings</a></li>
    </ul>

<?php endif; ?>

<p>
    <a href="../logout.php">Logout</a>
</p>

</body>
</html>