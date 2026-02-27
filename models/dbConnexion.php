<?php

function connexionBDD()
{
    $host = '127.0.0.1';
    $db   = 'ecommerce';
    $user = 'root';
    $pass = 'quentin';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass, []);

        return $pdo;

    } catch (PDOException $e) {
        die("DB error connexion : " . $e->getMessage());
    }
}