<?php include "templates/header.php"; ?>

<h2 class="text-center my-4">Danh sách sản phẩm</h2>

<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="<?= htmlspecialchars($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text fw-bold text-danger"><?= number_format($product['price']) ?> VNĐ</p>
                    <a href="index.php?action=detail&id=<?= $product['id'] ?>" class="btn btn-primary">Chi tiết</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include "templates/footer.php"; ?>
