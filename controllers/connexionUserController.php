<?php

require_once __DIR__ . "/../models/usersModels.php";

if(count($_POST)){
    $users = getAllUsers();
    $userConnexion = trim(strtolower($_POST["username"]));
    $passwordConnexion = trim($_POST["password"]);
    
foreach ($users as $user) {
    if ($user["username"] === $userConnexion) {
        $passwordConnexionVerified = password_verify($passwordConnexion,$user["password"]);
        if ($passwordConnexionVerified) {
            session_start();
            $_SESSION["connected"] = true;
            header("Location: ../");
            exit;
        } else {
            header("Location: ../");
            exit;
        }
    }
}
}