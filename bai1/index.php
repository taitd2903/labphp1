<?php
require_once "./Controller/controller.php";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

if ($page === "product") {
    product();
} else {
    home();
}
?>
