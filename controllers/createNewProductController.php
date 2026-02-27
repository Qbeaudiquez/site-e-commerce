<?php
require_once(__DIR__ . "/../models/productsModels.php");

if(count($_POST)){
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = (int) htmlspecialchars($_POST["price"]);
    $imgPath = htmlspecialchars($_POST["imgPath"]);
    addProduct($title, $description,$price,$imgPath);
    header("Location: /dashbord");
}