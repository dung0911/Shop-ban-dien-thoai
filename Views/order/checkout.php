<!-- Start All Title Box -->
<div class="all-title-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Cart</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="?act=home">Home</a></li>
					<li class="breadcrumb-item active">Cart</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
	<div class="container">
		<div class="row my-5">
			<div class="col-lg-8 col-sm-12">
				<section class="vh-100 w-75">
					<h5 class="noo-sh-title-top">CHI TIẾT HÓA ĐƠN</h5>
					<form action="?act=checkout&xuli=save" method="post">
						<div class="form-outline mb-4 d-flex">
							<label class="form-label text-nowrap w-50" for="form2Example17">Tên tài khoản</label>
							<input type="text" name="NguoiNhan" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten']  ?>" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4 d-flex">
							<label class="form-label text-nowrap w-50" for="form2Example27">Email</label>
							<input type="email" name="Email" placeholder="Địa chỉ Email.." required value="<?= $_SESSION['login']['Email'] ?>" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4 d-flex">
							<label class="form-label text-nowrap w-50" for="form2Example17">Số điện thoại</label>
							<input type="text" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?= $_SESSION['login']['SDT'] ?>" class="form-control form-control-lg" />
						</div>
						<div class="form-outline mb-4 d-flex">
							<label class="form-label text-nowrap w-50" for="form2Example17">Địa chỉ giao hàng</label>
							<input type="text" name="DiaChi" placeholder="Đại chỉ giao hàng" required value="<?= $_SESSION['login']['DiaChi'] ?>" class="form-control form-control-lg" />
						</div>
						<div class="pt-1 mb-4">
							<button type="submit" class="btn btn-dark btn-lg btn-block">Thanh toán</button>
						</div>
					</form>
				</section>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="order-box">
					<h5 class="noo-sh-title-top">HÓA ĐƠN</h5>
					<hr class="my-1">
					<?php if (isset($_SESSION['sanpham'])) {
						foreach ($_SESSION['sanpham'] as $value) { ?>
							<div class="d-flex">
								<h4><?= $value['TenSP'] ?></h4>
								<div class="ml-auto font-weight-bold"> <?= number_format($value['ThanhTien']) ?> VNĐ </div>
							</div>
					<?php }
					} ?>
					<hr class="my-1">
					<div class="d-flex">
						<h4>Vận Chuyển</h4>
						<div class="ml-auto font-weight-bold"> 15,000 VNĐ </div>
					</div>
					<div class="d-flex">
						<h4>Tax</h4>
						<div class="ml-auto font-weight-bold"> 0 VNĐ </div>
					</div>
					<hr>
					<div class="d-flex gr-total">
						<h5>Tổng tiền</h5>
						<div class="ml-auto h5"> <?= number_format($count + 15000) ?> VNĐ </div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Cart -->