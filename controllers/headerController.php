<?php

if ($_SESSION["connected"] === true) {
    $btnConnexionDisplay = "Déconnexion";
    $linkConnectionLink = "./controllers/deconnexionController.php";
} else {
    $btnConnexionDisplay = "Connexion";
    $linkConnectionLink = "/connexion";
}

