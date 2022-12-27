<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <form action="?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaND" value="<?= $data['MaND']?>">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Họ</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input name="Ho" class="form-control px-4" value="<?= $data['Ho'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tên</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input name="Ten" class="form-control px-4" value="<?= $data['Ten'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tài khoản</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-user"></i></span>
                                    <input name="TaiKhoan" class="form-control px-4" value="<?= $data['TaiKhoan'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                    <input name="Email" type="text" class="form-control px-4" value="<?= $data['Email'] ?>" />
                                    <span class="input-group-text">@example.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Số điện thoại</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input name="SDT" type="text" class="form-control px-4" value="<?= $data['SDT'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Mật khẩu</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input name="MatKhau" type="password" class="form-control px-4" value="<?= $data['MatKhau'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Địa chỉ</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-phone"></i></span>
                                    <input name="DiaChi" type="text" class="form-control px-4" value="<?= $data['DiaChi'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Giới tính</label>
                            <div class="col-sm-10">
                                <select id="" name="GioiTinh" class="form-control">
                                    <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
                                    <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
                                    <option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Trạng thái</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <select id="" name="MaQuyen" class="form-control">
                                        <option <?= ($data['MaQuyen'] == '1') ? 'selected' : '' ?> value="1"> Khách hàng</option>
                                        <option <?= ($data['MaQuyen'] == '2') ? 'selected' : '' ?> value="2"> Quản trị viên</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>