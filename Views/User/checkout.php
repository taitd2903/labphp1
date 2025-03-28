<?php include "templates/header.php"; ?>

<div class="container my-5">
    <h2 class="text-center text-success">Bạn đã chọn mua sản phẩm!</h2>
    
    <div class="row">
        <div class="col-md-6">
            <h4>Thông tin khách hàng</h4>
            <form action="index.php?action=process_checkout" method="POST">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']) ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="note" class="form-label">Nội dung ghi chú</label>
                    <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Xác nhận mua hàng</button>
            </form>
        </div>
        <div class="col-md-6 text-center">
            <h4>Thông tin sản phẩm</h4>
            <div class="card mx-auto" style="width: 18rem;">
                <img src="<?= htmlspecialchars($product['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                    <p class="card-text text-danger fw-bold"><?= number_format($product['price']) ?> VNĐ</p>
                    <p class="card-text"><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-primary">Về trang chủ</a>
    </div>
</div>

<?php include "templates/footer.php"; ?>
