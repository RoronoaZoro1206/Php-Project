<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

require_once 'db.php'; // Database connection
require_once 'user-models.php'; // User-related functions
require_once 'validator.php'; // Optional validation helper

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);

    if (empty($email)) {
        die("Email is required.");
    }

    // Check if user exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if (!$user) {
        die("Email not found.");
    }

    // Generate token and expiry
    $token = bin2hex(random_bytes(16));
    $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

    // Update token and expiry in DB
    $update = $pdo->prepare("UPDATE users SET user_reset_token = ?, user_reset_expiry = ? WHERE user_email = ?");
    $update->execute([$token, $expiry, $email]);

    // Prepare PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lawrenceramirez626@gmail.com';     
        $mail->Password   = 'tkplcrpxsbdrcfbc';         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Email content
        $mail->setFrom('yourgmail@gmail.com', 'Your App Name');
        $mail->addAddress($email, $user['user_name']);

        $resetLink = "http://localhost/your_project/reset-password.php?token=" . $token;

        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body    = "
            <p>Hello <strong>{$user['user_name']}</strong>,</p>
            <p>You requested to reset your password. Click the button below:</p>
            <p><a href='$resetLink' style='padding:10px;background:#007BFF;color:white;text-decoration:none;'>Reset Password</a></p>
            <p>This link will expire in 1 hour.</p>
        ";

        $mail->send();
        echo "Reset link has been sent to your email.";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: forgot-password.php");
    exit();
}
?>
