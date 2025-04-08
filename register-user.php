<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $timezone = $_POST["timezone"] ?? 'UTC'; 

    // Get current datetime in user's timezone
    try {
        $dt = new DateTime("now", new DateTimeZone($timezone));
        $user_created = $dt->format('Y-m-d H:i:sP'); 
    } catch (Exception $e) {
        $user_created = date('Y-m-d H:i:sP');
    }

    try {
        require_once 'db.php';
        require_once 'user-models.php';
        require_once 'validator.php';

        $validate_user_data = new RegisterValidator($username, $email, $password, $confirm_password, $pdo);
        $validate_user_data->validate_data();

        create_user($pdo, $username, $email, $password, $timezone, $user_created);

        $_SESSION["signup_success"] = "Signup succfessful. Procced to login";

        header("Location: login.php");
        die();
    } catch (PDOException $e) {
        die("Sql query failed: " . $e->getMessage());
    }

} else {
    header("Location: register.php");
    die();
}
