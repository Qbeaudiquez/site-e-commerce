<?php

require_once __DIR__ . '/../models/dbConnexion.php';

function getAllUsers()
{
    $connectionBDD = connexionBDD();
    $sql = "SELECT * FROM users";
    $stmt = $connectionBDD->query($sql);
    $users = $stmt->fetchAll();
    return $users;
}

function getUserById($id)
{
    $connectionBDD = connexionBDD();
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id
    ]);
    $user = $stmt->fetch();
    return $user;
}

function addUser($username, $password)
{
    $connectionBDD = connexionBDD();
    $sql = "INSERT INTO users (username,password) VALUES(:username,:password)";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":username" => $username,
        ":password" => $password
    ]);
}

function updateUser($id, $username, $password)
{
    $connectionBDD = connexionBDD();
    $sql = "UPDATE users SET username=:username,password=:password WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id,
        ":username" => $username,
        ":password" => $password
    ]);
}

function deleteUser($id)
{
    $connectionBDD = connexionBDD();
    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $connectionBDD->prepare($sql);
    $stmt->execute([
        ":id" => $id
    ]);
}