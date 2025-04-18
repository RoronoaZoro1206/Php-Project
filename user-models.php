<?php

declare(strict_types=1);

function get_user_username(object $pdo, string $username) {

    $query = "SELECT * FROM users WHERE user_username = :username;";
    $statement = $pdo->prepare($query);

    $statement->bindParam(":username", $username);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC); 
    
    return $result;
}

function get_user_email(object $pdo, string $email) {

    $query = "SELECT * FROM users WHERE user_email = :email;";
    $statement = $pdo->prepare($query);

    $statement->bindParam(":email", $email);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC); 
    
    return $result;
}

function create_user(object $pdo, string $username, string $email, string $password, string $timezone, string $user_created) {

    $query = "INSERT INTO users (user_username, user_email, user_pwd, user_timezone, user_created)
              VALUES (:username, :email, :pwd, :timezone, :created);";

    $statement = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

    $statement->bindParam(":username", $username);
    $statement->bindParam(":email", $email);
    $statement->bindParam(":pwd", $hashed_password);
    $statement->bindParam(":timezone", $timezone);
    $statement->bindParam(":created", $user_created);

    try {
        $statement->execute();
    } catch (PDOException $e) {
        die("Failed to insert user: " . $e->getMessage());
    }
}
