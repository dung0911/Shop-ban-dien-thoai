<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=danhmuc&act=update" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label class="mb-2" for="">Mã danh mục</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="MaDM" value="<?= $data['MaDM'] ?>">
        </div>
        <div class="form-group">
            <label class="mb-2" for="">Tên danh mục</label>
            <input type="text" class="form-control px-3 py-2 mb-3" id="" placeholder="" name="TenDM" value="<?= $data['TenDM'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>