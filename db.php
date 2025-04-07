<?php

session_start();

date_default_timezone_set('Asia/Manila');

$host = "localhost";     
$dbname = "Integrative_Programming"; 
$dbusername = "postgres"; 
$dbpassword = "!*Lawrence1206"; 

try {
    $pdo = new PDO ("pgsql:host=$host;dbname=$dbname", $dbusername, $dbpassword );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed with error: ". $e->getMessage());
}

?>
