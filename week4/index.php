<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "Login request received";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
  <div class="container">

      <main class="main">
        <div>
            <p>Welcome back to RUNI Empire.  
            Sign in to access your dashboard, bookings, and services.</p>
            <h3>Login to get started</h3>
        </div>

        <div>
            <form action="login.php" method="POST" id="loginForm">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-row">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email">
                        <span id="span-email" class="error"></span>
                    </div>
                    <div class="form-row">
                        <label for="password">PASSWORD</label>
                        <input type="password" id="password" name="password">
                        <span id="span-password" class="error"></span>
                    </div>
                </fieldset>
                <section class="instructions-div">
                    <button type="submit" class="btn">Login</button>
                </section>
            </form>
            <?php
            if ($message != "") {
                echo "<p>$message</p>";
                }
                ?>
        </div>
      </main>
     
  </div>

  <script src="./scripts/validation.js"></script>
</body>
</html>