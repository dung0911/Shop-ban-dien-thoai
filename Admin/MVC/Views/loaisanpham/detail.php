<table class="table table-bordered" width="100%" cellspacing="0">
    <div>
        <div class="form-group">
            <label class="mb-2" for="cars">Mã loại sản phẩm: </label>
            <input disabled type="text" class="form-control px-3 py-2 mb-2" name="TenSP" value="<?= $data['MaLSP'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="cars">Mã loại sản phẩm:</label>
            <input disabled type="text" class="form-control px-3 py-2 mb-2" name="TenSP" value="<?= $data['TenLSP'] ?>">

        </div>
        <div class="form-group">
            <label class="mb-2" for="">Hình ảnh</label>
            <h2>Hình ảnh: <img src="../public/img/company/<?= $data['HinhAnh'] ?>" height="60px"></h2>
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Mô tả</label>
            <input disabled type="text" class="form-control px-3 py-2 mb-2" name="TenSP" value="<?= $data['MaLSP'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Mã danh mục</label>
            <input disabled type="text" class="form-control px-3 py-2 mb-2" name="TenSP" value="<?php
                if($data['MaDM'] == 1){
                    echo "Điện thoại";
                }else if($data['MaDM'] == 2){
                    echo "Ốp lưng";
                }else{
                    echo "Phụ kiện";
                }
            ?>">
        </div>
    </div>
</table>