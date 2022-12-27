<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=loaisanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaLSP" value="<?= $data_detail['MaLSP'] ?>">
        <div class="form-group">
            <label for="" class="mb-2">Tên loại sản phẩm</label>
            <input type="text" class="form-control px-3 py-2 mb-2" id="" placeholder="" name="TenLSP" mt value="<?=$data_detail['TenLSP'] ?>">
        </div>
        <div class="form-group">
            <label for="" class="mb-2">Hình ảnh</label>
            <img src="../public/img/company/<?=$data_detail['HinhAnh']?>" height="60px" >
            <input type="file" class="form-control px-3 py-2 mb-2" id="" placeholder="" name="HinhAnh" >
        </div>
        <div class="form-group">
            <label for="" class="mb-2">Mô tả</label>
            <input type="text" class="form-control px-3 py-2 mb-2" id="" placeholder="" name="MoTa"  value="<?=$data_detail['Mota'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2">Danh mục: </label>
            <select id="" name="MaDM" class="form-control px-3 py-2 mb-2">
                <?php foreach ($data as $row) { ?>
                    <option <?= ($data_detail['MaDM'] == $row['MaDM'] ) ? 'selected' : '' ?> value="<?= $row['MaDM'] ?>"> <?=$row['TenDM']?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>