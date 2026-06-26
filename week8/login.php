<?php include 'includes/header.php'; ?>

<div class="auth-wrapper">

    <div class="auth-container">

        <div class="center-div">
            <h2>Login to access our services</h2>
        </div>

        <form action="includes/login-handler.php" method="POST">

            <div class="form-row">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-row">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="center-div"><button type="submit" class="btn-cta">Login</button></div>

        </form>

        <p>Don't have an account? <a class="center-div-anchor" href="./signup.php">Sign Up</a></p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>