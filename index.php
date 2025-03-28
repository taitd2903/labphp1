<?php
require_once "controllers/ProductController.php";

$controller = new ProductController();
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'home': 
        $controller->userIndex();
        break;
    case 'detail': 
        if (isset($_GET['id'])) {
            $controller->detail($_GET['id']);
        } else {
            echo "Không tìm thấy sản phẩm!";
        }
        break;
        case 'checkout':
            if (isset($_GET['id'])) {
                $controller->checkout($_GET['id']);
            } else {
                echo "Không có sản phẩm để thanh toán!";
            }
            break;
        
    case 'admin':
        $controller->adminIndex();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $controller->edit($_GET['id']);
        }
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $controller->delete($_GET['id']);
        }
        break;
    default:
        echo "Trang không tồn tại!";
        break;
}
?>
