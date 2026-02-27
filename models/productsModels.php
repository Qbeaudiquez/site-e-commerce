<?php

require_once __DIR__ . '/../models/dbConnexion.php';



function getAllProducts(){
$connectionBDD = connexionBDD();
$sql = "SELECT * FROM products";
$stmt = $connectionBDD->query($sql); 
$products = $stmt->fetchAll();
return $products;

}

function getProductById($id)
{
    $connectionBDD = connexionBDD();
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id
    ]);
    $product = $stmt->fetch();
    return $product;
}

function addProduct($title, $description,$price,$imgPath)
{
    $connectionBDD = connexionBDD();
    $sql = "INSERT INTO products (title,description,price,imgPath) VALUES(:title,:description,:price,:imgPath)";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":title" => $title,
        ":description" => $description,
        ":price" => $price,
        ":imgPath" => $imgPath
    ]);
}

function updateProduct($id, $title, $description,$price,$imgPath)
{
    $connectionBDD = connexionBDD();
    $sql = "UPDATE products SET title=:title,description=:description,price=:price,imgPath=:imgPath WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id,
        ":title" => $title,
        ":description" => $description,
        ":price" => $price,
        ":imgPath" => $imgPath
    ]);
}

function deleteProduct($id)
{
    $connectionBDD = connexionBDD();
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id
    ]);
}