<!-- Start All Title Box -->
<div class="all-title-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>My Account</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="?act=home">Home</a></li>
					<li class="breadcrumb-item active">My Account</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End All Title Box -->
<!-- Start My Account  -->

<div class="products-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title-all text-center">
					<h4 class="noo-sh-title-top">Profile Settings</h4>
					<p>Chỉnh sửa thông tin</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".top-profile" class="">Chỉnh sửa thông tin cá nhân</button>
						<button data-filter=".best-password" class="">Đổi mật khẩu</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row special-list" style="position: relative; height: 365.013px;">
			<div class="col-lg-12 col-md-6 special-grid best-password" style="position: absolute; left: 0px; top: 0px;">
				<div class="products-single fix">
					<form action="?act=taikhoan&xuli=update" method="post">
						<div class="p-3 w-100">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<h4 class="noo-sh-title-top">Đổi mật khẩu</h4>
							</div>
							<div class="row mt-3">
								<div class="col-md-12"><label class="labels">Mật khẩu cũ</label><input type="password" class="form-control" name="MatKhau" placeholder="Mật khẩu hiện tại .. " value=""></div>
								<div class="col-md-12"><label class="labels">Mật khẩu mới</label><input type="password" class="form-control" name="MatKhauMoi" placeholder="Mật khẩu mới .. " value=""></div>
								<div class="col-md-12"><label class="labels">Nhập lại mật khẩu</label><input type="password" class="form-control" name="MatKhauXN" placeholder="Xác nhận lại mật khẩu .." value=""></div>
							</div>
							<div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save</button></div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-12 col-md-6 special-grid top-profile" style="position: absolute; left: 0px; top: 0px; ">
				<div class="products-single fix">
					<?php if (isset($_COOKIE['doimk'])) {
						echo $_COOKIE['doimk'];
					} ?>
					<form action="?act=taikhoan&xuli=update" method="post">
						<div class="p-3 w-100">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<h4 class="noo-sh-title-top">Chỉnh sửa thông tin cá nhân</h4>
							</div>
							<div class="row mt-2">
								<div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" name="Ho" required placeholder="first name" value="<?= $data['Ho'] ?>"></div>
								<div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="Ten" required value="<?= $data['Ten'] ?>" placeholder="surname"></div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12"><label class="labels">Giới tính</label>
									<select class="form-control" name="GioiTinh" title="Giới tính">
										<option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Nam</option>
										<option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Nữ</option>
										<option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Khác</option>
									</select>
								</div>
								<div class="col-md-12"><label class="labels">Email</label><input type="text" name="Email" class="form-control" required value="<?= $data['Email'] ?>"></div>
							</div>
							<div class="row mt-3">
								<div class="col-md-6"><label class="labels">Số điện thoại</label><input type="text" name="SĐT" class="form-control" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?= $data['SDT'] ?>"></div>
								<div class="col-md-6"><label class="labels">Địa chỉ</label><input type="text" class="form-control" name="DiaChi" placeholder="Địa chỉ.." required value="<?= $data['DiaChi'] ?>"></div>
							</div>
							<div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End My Account -->

</div>