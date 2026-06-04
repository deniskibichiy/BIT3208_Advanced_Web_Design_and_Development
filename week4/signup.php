<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Sign-up Page</title>
    <style>
                @font-face {
            font-family: 'Norse';
            src: url('./fonts/Norse-Bold.woff2') format('woff2');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
                } 
                @font-face {                
                    font-family: 'Montserrat';
                    src: url('./fonts/montserrat/Montserrat-Regular.woff2') format('woff2');
                    font-weight: normal;
                    font-style: normal;
                    font-display: swap;
                }

                @font-face {
                    font-family: 'Montserrat';
                    src: url('./fonts/montserrat/Montserrat-Italic.woff2') format('woff2');
                    font-weight: normal;
                    font-style: italic;
                    font-display: swap;
                }

                @font-face {
                        font-family: 'Montserrat';
                        src: url('./fonts/montserrat/Montserrat-Bold.woff2') format('woff2');
                        font-weight: bold;
                        font-style: normal;
                        font-display: swap;
                                    }
        .logo p {
                color: #ffffff;
                font-family: 'Norse', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                font-size: 32px;
                line-height: 3px;
                display: inline-block;
                transform: scale(1.5,3);
                padding-left: 20px;
            }
        .main {
            font-family: 'Montserrat', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 18px;
        }

        form label {
            font-size: 14px;
        }
    </style>
</head>
<body>
  <div class="container">
      <aside>
        <div class="aside">
            <div class="logo">
                <img src="./assets/images/odin-lined.png" alt="Odin-Logo">
                <p>RUNI</p>
            </div>
        </div>
      </aside>
      <main class="main">
        <div>
            <p>Welcome to RUNI Empire.  
        Create your account to become part of our system and access services, updates, and member features.<br> Sign up now to get started.</p>
            <h3>Step in. Stay connected.</h3>
        </div>
        <div>
            <form action="submit.php" method="POST">
                <fieldset>
                    <legend>Let's do this</legend>
                    <div class="form-row">
                        <label for="first-name">FIRST NAME:</label>
                        <input type="text" name="first_name" id="first-name">
                    </div>
                    <div class="form-row">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last-name" name="last_name">
                    </div>
                    <div class="form-row">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="form-row">
                        <label for="phone-number">PHONE NUMBER</label>
                        <input type="tel" id="phone-number"
                        required
                        name="phone_number">
                    </div>
                    <div class="form-row">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-row">
                        <label for="password_confirm">CONFIRM PASSWORD</label>
                        <input type="password" name="password_confirm" id="password_confirm">
                    </div>
                </fieldset>
                <section class="instructions-div">
                    <button type="submit" class="btn">Create Account</button>
                    <p class="instructions">Already have and account? <span><a href="#">Log in</a></span></p>
                </section>
            </form>
        </div>
      </main>
  </div>
</body>
</html>