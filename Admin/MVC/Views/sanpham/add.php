<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">
    <div class="form-group">
      <label class="mb-2" for="cars">Danh mục: </label>
      <select id="" name="MaDM" class="form-control px-3 py-2 mb-2">
        <?php foreach ($data_dm as $row) { ?>
          <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label class="mb-2" for="cars">Loại sản phẩm: </label>
      <select id="" name="MaLSP" class="form-control px-3 py-2 mb-2">
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Tên sản phẩm</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="TenSP">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Đơn giá</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="DonGia">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Số lượng</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="SoLuong">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Hình ảnh 1 </label>
      <input type="file" class="form-control px-3 py-2 mb-2" name="HinhAnh1">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Hình ảnh 2</label>
      <input type="file" class="form-control px-3 py-2 mb-2" name="HinhAnh2">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Hình ảnh 3</label>
      <input type="file" class="form-control px-3 py-2 mb-2" name="HinhAnh3">
    </div>
    <div class="form-group">
      <label class="mb-2" for="cars">Mã khuyến mãi </label>
      <select id="" name="MaKM" class="form-control px-3 py-2 mb-2">
        <?php foreach ($data_km as $row) { ?>
          <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Màn hình</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="ManHinh">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Hệ điều hành</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="HDH">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Camera trước</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="CamTruoc">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Camera sau</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="CamSau">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">CPU</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="CPU">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Ram</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="Ram">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Rom</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="Rom">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Pin</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="Pin">
    </div>
    <div class="form-group">
      <label class="mb-2" for="">SDCard</label>
      <input type="text" class="form-control px-3 py-2 mb-2" name="SDCard">
    </div>
    <label class="mb-2" for="">Mô tả</label>
    <div class="form-group">
      <textarea class="form-control px-3 py-2 mb-2" id="summernote" placeholder="" name="MoTa"></textarea>
    </div>
    <div class="form-group">
      <label class="mb-2" for="">Trạng thái</label>
      <input type="checkbox" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</table>