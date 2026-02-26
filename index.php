<?php
$path = $_SERVER['REQUEST_URI'];
require("./models/products.php");



switch ($path) {
    case ("/"):
        $page = "index";
        break;

    default:
        $page = "404";
        break;
}

include("./views/layout.phtml");