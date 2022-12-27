<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic with Icons -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Mã Admin</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input disabled class="form-control px-4" id="basic-icon-default-fullname" value="<?= $data['MaND'] ?>" aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Họ</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input disabled class="form-control px-4" id="basic-icon-default-fullname" value="<?= $data['Ho'] ?>" aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tên</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input disabled class="form-control px-4" id="basic-icon-default-fullname" value="<?= $data['Ten'] ?>" aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input disabled type="text" id="basic-icon-default-company" class="form-control px-4" value="<?= $data['Email'] ?>" aria-describedby="basic-icon-default-company2" />
                                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Số điện thoại</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input disabled type="text" id="basic-icon-default-company" class="form-control px-4" value="<?= $data['SDT'] ?>" aria-describedby="basic-icon-default-company2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Địa chỉ</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input disabled type="text" id="basic-icon-default-company" class="form-control px-4" value="<?= $data['DiaChi'] ?>" aria-describedby="basic-icon-default-company2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Giới tính</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input disabled type="text" id="basic-icon-default-company" class="form-control px-4" value="<?= $data['GioiTinh'] ?>" aria-describedby="basic-icon-default-company2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Mã quyền</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <input disabled type="text" id="basic-icon-default-company" class="form-control px-4" value="<?= $data['MaQuyen'] ?>" aria-describedby="basic-icon-default-company2" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Trạng thái</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                                <?php
                                if ($data['TrangThai'] == 1) {
                                    echo '<input disabled type="text" class="form-control px-4" value="Admin"';
                                } else if ($data['TrangThai'] == 2) {
                                    echo '<input disabled type="text" class="form-control px-4" value="Customer"';
                                } else {
                                    echo '<input disabled type="text" class="form-control px-4" value="Personal"';
                                }
                                ?>
                                <input disabled type="text" class="form-control px-4" value="<?= $data['TrangThai'] ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>