<?php include "templates/header.php"; ?>

<div class="container my-5">
    <h2 class="text-primary text-center mb-4">Quản lý sản phẩm</h2>


    <div class="text-end mb-3">
        <a href="index.php?action=create" class="btn btn-success">
            <i class="fas fa-plus"></i> Thêm sản phẩm
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= htmlspecialchars($product['name']) ?></td>
                        <td class="text-danger fw-bold"><?= number_format($product['price']) ?> VNĐ</td>
                        <td>
                            <img src="<?= htmlspecialchars($product['image']) ?>" class="img-thumbnail" width="60" height="60">
                        </td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $product['id'] ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Sửa
                            </a>
                            <a href="index.php?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger btn-sm" 
                               onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                                <i class="fas fa-trash"></i> Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "templates/footer.php"; ?>
