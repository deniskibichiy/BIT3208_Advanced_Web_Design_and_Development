<?php

session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

if (!in_array($_SESSION["role"], ["admin", "super_admin"])) {
    die("Access denied");
}

$id = (int) $_GET["id"];

// Prevent self deletion
if ($_SESSION["user_id"] === $id) {
    die("You cannot delete your own account.");
}

// Get target user
$stmt = $pdo->prepare("SELECT id, role FROM users WHERE id = ?");
$stmt->execute([$id]);

$target = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$target) {
    die("User not found.");
}

// Admin restrictions
if ($_SESSION["role"] === "admin") {

    if ($target["role"] === "admin") {
        die("Admins cannot delete other admins.");
    }

    if ($target["role"] === "super_admin") {
        die("Admins cannot delete the super administrator.");
    }
}

// Super admin protection
if ($target["role"] === "super_admin") {
    die("The super administrator account cannot be deleted.");
}

// Delete user
$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$id]);

header("Location: view-users.php?success=deleted");
exit();