<?php
require_once "./Controller/SiteController.php";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";
$controller = new SiteController();

switch ($page) {
    case "profile":
        $controller->profile();
        break;
    case "dashboard":
        $controller->dashboard();
        break;
    case "users":
        $controller->users();
        break;
    default:
        $controller->home();
        break;
}
?>
