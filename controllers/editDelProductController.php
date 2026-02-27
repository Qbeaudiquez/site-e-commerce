<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/../models/productsModels.php";
if($_POST["action"] === "edit"){
    $id = (int) $_POST["idProduit"];
    $title = $_POST["newTitle"];
    $description = $_POST["newDescription"];
    $price = (int) $_POST["newPrice"];
    $imgPath = $_POST["newImgPath"];
updateProduct($id, $title,$description, $price, $imgPath);
header("Location: /dashbord");
    exit;
}

if($_POST["action"] === "delete"){
    $id = (int) $_POST["idProduit"];
    deleteProduct($id);
    header("Location: /dashbord");
    exit;
}