<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
  <a href="?mod=loaisanpham&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
      <th scope="col">Mã LSP</th>
      <th scope="col">Tên LSP</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Mô tả</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;
    foreach ($data as $row) { ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $row['TenLSP'] ?></td>
        <td>
          <img src="../public/img/company/<?= $row['HinhAnh'] ?>" height="60px">
        </td>
        <td><?= $row['Mota'] ?></td>
        <td>
          <a href="?mod=loaisanpham&act=detail&id=<?= $row['MaLSP'] ?>" class="btn btn-success">
            <i class="fa fa-eye"></i>
          </a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
            <a href="?mod=loaisanpham&act=edit&id=<?= $row['MaLSP'] ?>" class="btn btn-warning">
              <i class="fa fa-edit"></i>
            </a>
            <a href="?mod=loaisanpham&act=delete&id=<?= $row['MaLSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">
              <i class="fa fa-close"></i>
            </a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>