<?php
require_once "./Controller/HomeController.php";
require_once "./Controller/ProductController.php";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

switch ($page) {
    case "product":
        $controller = new ProductController();
        $controller->index();
        break;
    default:
        $controller = new HomeController();
        $controller->index();
        break;
}
?>
