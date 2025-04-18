
<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION["user"])){
  header("Location: landing_page.php");
  die();
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="authentication.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>

      <?php 

      require_once 'login-views.php';

      render_message();

      ?>

      <form method="POST" action="login-user.php" autocomplete="off">

        <div class="txt_field">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>

        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>

        <!-- <div class="pass">Forgot Password?</div> -->
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
          <!-- <p>Forgot your Password? <a href="{% url 'reset_password' %}">Reset Password</a></p>  -->
        </div>
      </form>
    </div>

  </body>
</html>
