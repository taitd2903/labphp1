<?php
require_once "./Model/ProductModel.php";

class ProductController {
    public function index() {
        $products = ProductModel::getProducts();
        
        include "./Views/header.php";
        include "./Views/product.php";
        include "./Views/footer.php";
    }
}
?>
