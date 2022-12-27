<!-- Start All Title Box -->
<div class="all-title-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>ĐĂNG NHẬP VÀ ĐĂNG KÝ</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="?act=home">Home</a></li>
					<li class="breadcrumb-item active">ĐĂNG NHẬP VÀ ĐĂNG KÝ</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End All Title Box -->
<!-- pages-title-end -->
<!-- login content section start -->
<section class="pages login-page section-padding mt-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<section class="vh-100">
					<h5 class="noo-sh-title-top">Đăng nhập tài khoản</h5>
					<?php if (isset($_COOKIE['msg1'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg1'] ?>
						</div>
					<?php } ?>
					<form action="?act=taikhoan&xuli=dangnhap" method="post" id="form1">
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Tên tài khoản</label>
							<input type="text" name="taikhoan" placeholder="Tên tài khoản" class="form-control form-control-lg" />
						</div>

						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example27">Mật khẩu</label>
							<input type="password" name="matkhau" placeholder="Mật khẩu" class="form-control form-control-lg" />
						</div>

						<div class="pt-1 mb-4">
							<button type="submit" class="btn btn-dark btn-lg btn-block">Đăng nhập</button>
						</div>
					</form>
				</section>
			</div>
			<div class="col-sm-6">
				<div class="main-input padding60 new-customer" id="dangky">
					<h5 class="noo-sh-title-top">Khách hàng mới</h5>
					<?php if (isset($_COOKIE['msg'])) { ?>
						<div class="alert alert-success">
							<strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
						</div>
					<?php } ?>
					<form action="?act=taikhoan&xuli=dangky" method="post">
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Họ</label>
							<input type="text" name="Ho" placeholder="Họ" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Tên</label>
							<input type="text" name="Ten" placeholder="Tên" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Tên đăng nhập</label>
							<input type="text" name="TaiKhoan" placeholder="Tên đăng nhập" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Địa chỉ Email</label>
							<input type="email" name="Email" placeholder="Địa chỉ Email" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Số diện thoại</label>
							<input type="number" name="SĐT" placeholder="Số diện thoại" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Mật khẩu</label>
							<input type="password" name="MatKhau" placeholder="Mật khẩu" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4">
							<label class="form-label" for="form2Example17">Xác nhận mật khẩu</label>
							<input type="password" name="check_password" placeholder="Xác nhận mật khẩu" class="form-control form-control-lg" />
						</div>
						<div class="pt-1 mb-4">
							<button class="btn btn-dark btn-lg btn-block" type="submit">Đăng ký</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- login content section end -->