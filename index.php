<?php
session_start();
$path = $_SERVER['REQUEST_URI'];

switch ($path) {
    case ("/"):
        $page = "home";
        break;
    case ("/catalogue"):
        $page = "catalogue";
        break;
    case ("/connexion"):
        $page = "connexion";
        break;
    case ("/newUser"):
        $page = "newUser";
        break;
    case ("/dashbord"):
        $page = "dashbord";
        break;
    default:
        $page = "404";
        break;
}

include("./views/layout.phtml");