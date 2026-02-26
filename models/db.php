<?php
$host = '127.0.0.1';
$db   = 'ecommerce';
$user = 'root';
$pass = 'quentin';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erreur PDO : " . $e->getMessage());
}