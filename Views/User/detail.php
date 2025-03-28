<?php include "templates/header.php"; ?>

<div class="container my-5">
    <div class="row">
  
        <div class="col-md-6 text-center">
            <img src="<?= htmlspecialchars($product['image']) ?>" class="img-fluid rounded shadow" alt="<?= htmlspecialchars($product['name']) ?>" style="max-height: 400px; object-fit: cover;">
        </div>


        <div class="col-md-6">
            <h2 class="text-primary"><?= htmlspecialchars($product['name']) ?></h2>
            <p class="fs-4 text-danger fw-bold"><?= number_format($product['price']) ?> VNĐ</p>
            <p class="text-muted"><?= nl2br(htmlspecialchars($product['description'])) ?></p>

  
            <a href="index.php" class="btn btn-outline-secondary mt-3">Quay lại danh sách</a>
            <a href="index.php?action=checkout&id=<?= $product['id'] ?>" class="btn btn-success mt-3">Mua ngay</a>
        </div>
    </div>
</div>

<?php include "templates/footer.php"; ?>
