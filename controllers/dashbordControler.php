<?php

require_once("./models/productsModels.php");

if ($_SESSION["connected"] !== true) {
    header("Location: ../");
    exit;
}
$products = getAllProducts();
