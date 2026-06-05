<?php include 'includes/header.php'; ?>

<div class="auth-wrapper">

    <div class="auth-container">

        <div class="center-div">
            <h2>Create Account to Access our Services</h2>
        </div>

        <form action="includes/signup-handler.php" method="POST">

            <div class="form-row">
                <label>Name</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-row">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-row">
                <label>Phone Number</label>
                <input type="tel" name="phone" required>
            </div>

            <div class="form-row">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-row">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" required>
            </div>

            <div class="center-div"><button type="submit" class="btn-cta">Sign Up</button></div>

        </form>

        <p>Already have an account? <a class="center-div-anchor" href="login.php">Login</a></p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>