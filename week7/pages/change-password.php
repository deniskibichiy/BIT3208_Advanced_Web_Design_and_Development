<?php

session_start();
require_once '../database/db.php';

if (!isset($_SESSION["logged_in"])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION["user_id"];
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Retrieve current password hash
    $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->execute([$user_id]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {

        $message = "User not found.";

    } elseif (!password_verify($current_password, $user["password"])) {

        $message = "Current password is incorrect.";

    } elseif ($new_password !== $confirm_password) {

        $message = "New passwords do not match.";

    } elseif (strlen($new_password) < 8) {

        $message = "New password must be at least 8 characters.";

    } else {

        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("
            UPDATE users
            SET password = ?
            WHERE id = ?
        ");

        $stmt->execute([$hashed_password, $user_id]);

        $message = "Password changed successfully.";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
</head>
<body>

<h2>Change Password</h2>

<?php if (!empty($message)): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>

<form method="POST">

    <label>Current Password</label><br>
    <input type="password" name="current_password" required>

    <br><br>

    <label>New Password</label><br>
    <input type="password" name="new_password" required>

    <br><br>

    <label>Confirm New Password</label><br>
    <input type="password" name="confirm_password" required>

    <br><br>

    <button type="submit">Change Password</button>

</form>

<br>

<p><a href="dashboard.php">Back to Dashboard</a></p>

</body>
</html>