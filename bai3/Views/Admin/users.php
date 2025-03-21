<h2>Danh sách người dùng</h2>
<ul>
    <?php foreach (UserModel::getUsers() as $user): ?>
        <li><?php echo $user["name"] . " - " . $user["email"]; ?></li>
    <?php endforeach; ?>
</ul>
