<?php

require_once './models/db.php';

$stmt = $pdo->query("SELECT * FROM products"); 
$products = $stmt->fetchAll();