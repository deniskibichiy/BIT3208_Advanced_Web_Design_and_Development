<?php

session_start();
require_once "../database/db.php";

if (!isset($_SESSION["logged_in"]) || !isset($_SESSION["user_id"])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$service_id = $_POST["service_id"];
$booking_date = $_POST["booking_date"];

$stmt = $pdo->prepare("
    INSERT INTO bookings (user_id, service_id, booking_date)
    VALUES (?, ?, ?)
");

$stmt->execute([$user_id, $service_id, $booking_date]);

header("Location: ../pages/dashboard.php");
exit();