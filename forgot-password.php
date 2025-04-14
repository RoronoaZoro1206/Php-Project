<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="authentication.css">
</head>
<body>
    <div class="center">
        <h1>Forgot Password</h1>
        <form action="reset-request-handler.php" method="POST" autocomplete="off">

            <!-- Display session messages -->
            <?php if (isset($_SESSION['forgot_error'])): ?>
                <p style="color: red; text-align: center;"><?php echo $_SESSION['forgot_error']; unset($_SESSION['forgot_error']); ?></p>
            <?php endif; ?>

            <?php if (isset($_SESSION['forgot_success'])): ?>
                <p style="color: green; text-align: center;"><?php echo $_SESSION['forgot_success']; unset($_SESSION['forgot_success']); ?></p>
            <?php endif; ?>

            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Enter your email address</label>
            </div>
            <input type="submit" name="reset_request" value="Send Reset Link">
            <div class="signup_link">
                <a href="login.php">← Back to Login</a>
            </div>
        </form>
    </div>
</body>
</html>
