<?php
// reset-password.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }

// Get token from URL
$token = isset($_GET['token']) ? $_GET['token'] : '';
if (empty($token)) {
    $_SESSION['forgot_error'] = "Invalid or missing token.";
    header("Location: forgot-password.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
</head>
<body>
  <h2>Reset Your Password</h2>

  <?php if (isset($_SESSION['reset_error'])): ?>
    <p style="color: red;"><?php echo $_SESSION['reset_error']; unset($_SESSION['reset_error']); ?></p>
  <?php endif; ?>

  <form action="reset-password-handler.php" method="POST">
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
    
    <label for="password">New Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label for="confirm">Confirm Password:</label><br>
    <input type="password" name="confirm" required><br><br>

    <button type="submit">Reset Password</button>
  </form>

  <br>
  <a href="login.php">Back to Login</a>
</body>
</html>
