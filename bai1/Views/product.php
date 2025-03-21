<h2>Danh sách sản phẩm</h2>
<ul>
    <?php foreach ($products as $product): ?>
        <li><?php echo $product["name"] . " - " . number_format($product["price"]) . " VND"; ?></li>
    <?php endforeach; ?>
</ul>
