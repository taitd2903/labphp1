<?php
class SiteController {
    public function home() {
        include "./Views/header.php";
        include "./Views/User/home.php";
        include "./Views/footer.php";
    }

    public function profile() {
        include "./Views/header.php";
        include "./Views/User/profile.php";
        include "./Views/footer.php";
    }

    public function dashboard() {
        include "./Views/header.php";
        include "./Views/Admin/dashboard.php";
        include "./Views/footer.php";
    }

    public function users() {
        include "./Model/UserModel.php";
        include "./Views/header.php";
        include "./Views/Admin/users.php";
        include "./Views/footer.php";
    }
}
?>
