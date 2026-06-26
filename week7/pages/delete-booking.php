<?php

session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$id = (int) $_GET["id"];

/*
Fetch booking details (needed for ownership check)
*/
$stmt = $pdo->prepare("SELECT user_id FROM bookings WHERE id = ?");
$stmt->execute([$id]);

$booking = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$booking) {
    die("Booking not found.");
}

/*
RULES:
- user: can only delete own booking
- admin: can delete any booking
- super_admin: can delete any booking
*/

if ($_SESSION["role"] === "user") {

    if ($booking["user_id"] != $_SESSION["user_id"]) {
        die("Access denied.");
    }

} elseif (!in_array($_SESSION["role"], ["admin", "super_admin"])) {

    die("Access denied.");
}

/*
Delete booking
*/
$stmt = $pdo->prepare("DELETE FROM bookings WHERE id = ?");
$stmt->execute([$id]);

/*
Redirect based on role
*/
if ($_SESSION["role"] === "user") {
    header("Location: my-bookings.php");
} else {
    header("Location: view-bookings.php");
}

exit();