<?php
require_once(__DIR__ . "/../models/usersModels.php");
var_dump($_POST) ;
if(count($_POST)){
    $username = strtolower(trim(htmlspecialchars($_POST["username"])));
    $password = trim(htmlspecialchars($_POST["password"]));
    $passwordRepeat = trim(htmlspecialchars($_POST["passwordRepeat"]));
    $paswordHash = password_hash($password,PASSWORD_BCRYPT);

    if($password === $passwordRepeat){
        addUser($username,$paswordHash);
        header("Location:../");
    }else{
        header("Location:../");
    }
}

