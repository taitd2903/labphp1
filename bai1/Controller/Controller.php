<?php
require_once "./Model/productModel.php";

function home() {
    include "./Views/header.php";
    include "./Views/home.php";
    include "./Views/footer.php";
}

function product() {
    $products = getProducts();
    
    include "./Views/header.php";
    include "./Views/product.php";
    include "./Views/footer.php";
}
?>
