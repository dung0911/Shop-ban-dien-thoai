<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
  <a href="?mod=sanpham&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success mt-3">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tài sản phẩm</th>
      <th scope="col">Giá thành</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Trạng thái</th>
      <th>#</th>footer
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $row['TenSP'] ?></td>
        <td><?= $row['DonGia'] ?> VNĐ</td>
        <td><?= $row['SoLuong'] ?></td>
        <td><?= $row['TrangThai'] ?></td>
        <td>
          <a href="../index.php?act=detail&id=<?= $row['MaSP'] ?>" type="button" class="btn btn-success" target="_blank">
            <i class="fa fa-eye"></i>
          </a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
            <a href="?mod=sanpham&act=edit&id=<?= $row['MaSP'] ?>" type="button" class="btn btn-warning">
              <i class="fa fa-edit"></i>
            </a>
            <a href="?mod=sanpham&act=delete&id=<?= $row['MaSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">
              <i class="fa fa-close"></i>
            </a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>