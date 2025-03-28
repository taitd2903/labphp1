<?php include "templates/header.php"; ?>

<div class="container my-5">
    <h2 class="text-primary text-center mb-4">Thêm sản phẩm mới</h2>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post"  enctype="multipart/form-data" class="p-4 border rounded shadow bg-light">
              
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Nhập mô tả sản phẩm"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Giá (VNĐ):</label>
                    <input type="number" name="price" class="form-control" placeholder="Nhập giá" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Chọn ảnh sản phẩm:</label>
                    <input type="file" name="image" class="form-control" id="imageInput" required>
                </div>

                <div class="text-center mb-3">
                    <img id="imagePreview" src="uploads/default.jpg" class="img-thumbnail shadow-sm" width="150" alt="Xem trước ảnh">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Thêm sản phẩm</button>
                    <a href="index.php?action=admin" class="btn btn-outline-secondary mt-2">Quay lại danh sách</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Xem trước ảnh khi chọn file
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('imagePreview').src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    });
</script>

<?php include "templates/footer.php"; ?>
