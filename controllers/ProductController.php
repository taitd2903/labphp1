<?php
require_once "models/ProductModel.php";

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function userIndex() {
        $products = $this->productModel->getAll();
        include "views/user/index.php";
    }

    public function detail($id) {
        $product = $this->productModel->getById($id);
        if (!$product) {
            die("Sản phẩm không tồn tại!");
        }
        include "views/user/detail.php";
    }

    public function adminIndex() {
        $products = $this->productModel->getAll();
        include "views/admin/index.php";
    }
    private function uploadImage() {
        if (!isset($_FILES['image']) || $_FILES['image']['error'] != 0) {
            return null; 
        }

        $uploadDir = "uploads/";
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        $fileTmp = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $fileType = mime_content_type($fileTmp);
        $targetFile = $uploadDir . time() . "_" . $fileName;

      
        if (!in_array($fileType, $allowedTypes)) {
            die("Chỉ chấp nhận các tệp ảnh JPG, PNG, GIF!");
        }


        if (move_uploaded_file($fileTmp, $targetFile)) {
            return $targetFile;
        } else {
            return null;
        }
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            
     
            $image = $this->uploadImage();

            if (!$image) {
                die("Lỗi khi tải ảnh lên!");
            }

            $this->productModel->create($name, $description, $price, $image);
            header("Location: index.php?action=admin");
        }
        include "views/admin/create.php";
    }

    public function edit($id) {
        $product = $this->productModel->getById($id);
        if (!$product) {
            die("Sản phẩm không tồn tại!");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $image = $this->uploadImage();
            if (!$image) {
                $image = $product['image']; 
            }

            $this->productModel->update($id, $name, $description, $price, $image);
            header("Location: index.php?action=admin");
        }

        include "views/admin/edit.php";
    }
    public function delete($id) {
        $this->productModel->delete($id);
        header("Location: index.php?action=admin");
    }
    public function checkout($id) {
        $product = $this->productModel->getById($id);
    
        if (!$product) {
            $error = "Sản phẩm không tồn tại!";
            include "views/user/checkout.php";
            return;
        }
    
        include "views/user/checkout.php";
    }
    



}
?>
