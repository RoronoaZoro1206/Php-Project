<?php
// reset-password-handler.php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  
require_once 'db.php';
require_once 'user-models.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if (empty($token) || empty($password) || empty($confirm)) {
        $_SESSION['reset_error'] = "All fields are required.";
        header("Location: reset-password.php?token=" . urlencode($token));
        exit;
    }

    if ($password !== $confirm) {
        $_SESSION['reset_error'] = "Passwords do not match.";
        header("Location: reset-password.php?token=" . urlencode($token));
        exit;
    }

    // Validate token
    $user = getUserByToken($conn, $token);
    if (!$user) {
        $_SESSION['reset_error'] = "Invalid or expired reset token.";
        header("Location: forgot-password.php");
        exit;
    }

    // Check token expiry
    if (strtotime($user['token_expiry']) < time()) {
        $_SESSION['reset_error'] = "Reset token has expired.";
        header("Location: forgot-password.php");
        exit;
    }

    // Hash new password and update
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    if (!updateUserPassword($conn, $user['id'], $hashedPassword)) {
        $_SESSION['reset_error'] = "Failed to update password.";
        header("Location: reset-password.php?token=" . urlencode($token));
        exit;
    }

    $_SESSION['forgot_success'] = "Password reset successful. You can now log in.";
    header("Location: login.php");
    exit;
}
