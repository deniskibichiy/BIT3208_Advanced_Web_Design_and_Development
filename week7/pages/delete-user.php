<?php
session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$id = $_GET['id'];

// prevent self-deletion
if ($_SESSION["user_id"] == $id) {
    die("You cannot delete your own account");
}

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$id]);

if ($_SESSION["user_id"] == $id) {
    header("Location: view-users.php?error=self_delete");
    exit();
}