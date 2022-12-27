<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">
        <div class="form-group">
            <label class="mb-2" for="cars">Loại sản phẩm: </label>
            <select id="" name="MaDM" class="form-control px-3 py-2 mb-3">
                <?php foreach ($data_dm as $row) { ?>
                    <option <?= ($row['MaDM'] == $data['MaDM']) ? 'selected' : '' ?> value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mb-2" for="cars">Loại sản phẩm: </label>
            <select id="" name="MaLSP" class="form-control px-3 py-2 mb-3">
                <?php foreach ($data_lsp as $row) { ?>
                    <option <?= ($row['MaLSP'] == $data['MaLSP']) ? 'selected' : '' ?> value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Tên sản phẩm</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="TenSP" value="<?= $data['TenSP'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Đơn giá</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="DonGia" value="<?= $data['DonGia'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Số lượng</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="SoLuong" value="<?= $data['SoLuong'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Hình ảnh 1</label>
            <img src="../public/<?= $data['HinhAnh1'] ?>" height="200px" width="200px">
            <input type="file" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="HinhAnh1" value="<?= $data['HinhAnh1'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Hình ảnh 2</label>
            <img src="../public/<?= $data['HinhAnh2'] ?>" height="200px" width="200px">
            <input type="file" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="HinhAnh2" value="<?= $data['HinhAnh2'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Hình ảnh 3</label>
            <img src="../public/<?= $data['HinhAnh3'] ?>" height="200px" width="200px">
            <input type="file" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="HinhAnh3" value="<?= $data['HinhAnh3'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="cars">Mã khuyến mãi </label>
            <select id="" name="MaKM" class="form-control px-3 py-2 mb-3">
                <?php foreach ($data_km as $row) { ?>
                    <option <?= ($row['MaKM'] == $data['MaKM']) ? 'selected' : '' ?> value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Màn hình</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="ManHinh" value="<?= $data['ManHinh'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Hệ điều hành</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="HDH" value="<?= $data['HDH'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Camera trước</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="CamTruoc" value="<?= $data['CamTruoc'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Camera sau</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="CamSau" value="<?= $data['CamSau'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">CPU</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="CPU" value="<?= $data['CPU'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Ram</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="Ram" value="<?= $data['Ram'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Rom</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="Rom" value="<?= $data['Rom'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Pin</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="Pin" value="<?= $data['Pin'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">SDCard</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="SDCard" value="<?= $data['SDCard'] ?>">
        </div>
        <label class="mb-2" for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control px-3 py-2 mb-3" id="summernote" placeholder="" name="MoTa"><?= $data['MoTa'] ?></textarea>
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Trạng thái</label>
            <input <?= ($data['TrangThai'] == 1) ? 'checked' : '' ?> type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</table>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>