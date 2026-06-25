<?php

session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

echo "<h2>Welcome " . $_SESSION["user_name"] . "</h2>";