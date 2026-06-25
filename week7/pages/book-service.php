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
    <title>Book Service</title>
</head>
<body>

<h2>Book a Service</h2>

<form action="../includes/booking-handler.php" method="POST">

    <label>Service</label><br>

    <select name="service" required>
        <option value="Shaving">Shaving</option>
        <option value="Massage">Massage</option>
        <option value="Facial Scrubbing">Facial Scrubbing</option>
    </select>

    <br><br>

    <label>Booking Date</label><br>
    <input type="date" name="booking_date" required>

    <br><br>

    <button type="submit">Book</button>

</form>

</body>
</html>