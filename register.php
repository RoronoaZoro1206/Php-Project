<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
  
if (isset($_SESSION["user"])){
  header("Location: index.php");
  die();
}
  
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="authentication.css">
  </head>
  <body>
    <div class="center">
      <h1>Register</h1>

      <?php 

      require_once 'register-views.php';
      
      render_errors();

      ?>
        
      <form method="post" action="register-user.php" autocomplete="off">
      
        <div class="txt_field">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="text" required name="email">
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" required name="confirm_password">
          <span></span>
          <label>Confirm Password</label>
        </div>
        
        <input type="hidden" name="timezone" id="timezone">

        <input type="submit" value="Register">
        <div class="signup_link">
          Already have an account? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="register.js"></script>
  </body>
</html>

