<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

echo "Welcome " . $_SESSION['user'];
?>

<br>
<a href="logout.php">Logout</a>