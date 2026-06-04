<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// fake user
if ($email === "admin@test.com" && $password === "1234") {
    $_SESSION['user'] = $email;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid credentials";
}
?>