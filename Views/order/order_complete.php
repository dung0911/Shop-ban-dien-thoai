<div class="all-title-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Order Complete</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="?act=home">Home</a></li>
					<li class="breadcrumb-item active">HOÀN THÀNH ĐƠN HÀNG</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<div class="text-center">
	<img src="https://uploads-ssl.webflow.com/5ef0df6b9272f7410180a013/60c0e28575cd7c21701806fd_q1cunpuhbdreMPFRSFLyfUXNzpqv_I5fz_plwv6gV3sMNXwUSPrq88pC2iJijEV7wERnKXtdTA0eE4HvdnntGo9AHAWn-IcMPKV-rZw1v75vlTEoLF4OdNqsRb7C6r7Mvzrm7fe4.png" alt="">
	<div class="container">
		<div class="row my-5">
			<div class="col-lg-8 col-sm-12 border-right pr-5">
				<div class="order-box">
					<h5 class="noo-sh-title-top">CHI TIẾT KHÁCH HÀNG</h5>
					<hr class="my-1">
					<div class="d-flex">
						<h4>Tên khách hàng</h4>
						<div class="ml-auto font-weight-bold"> <?php echo $_SESSION['login']['Ho'] . " " . $_SESSION['login']['Ten'] ?> </div>
					</div>
					<hr>
					<div class="d-flex">
						<h4>Email</h4>
						<div class="ml-auto font-weight-bold"> <?= $_SESSION['login']['Email'] ?> </div>
					</div>
					<hr>
					<div class="d-flex">
						<h4>Số điện thoại</h4>
						<div class="ml-auto font-weight-bold"> <?= $_SESSION['login']['SDT'] ?> </div>
					</div>
					<hr>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="order-box">
					<h5 class="noo-sh-title-top">ĐƠN HÀNG CỦA BẠN</h5>
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
			<div class="col-lg-8 col-sm-12 pr-5">
				<h5 class="noo-sh-title-top">ĐỊA CHỈ THANH TOÁN</h5>
				<hr>
				<div class="d-flex">
					<h4>Số điện thoại</h4>
					<div class="ml-auto font-weight-bold"> <?= $_SESSION['login']['SDT'] ?> </div>
				</div>
				<hr>
				<div class="d-flex">
					<h4>Email</h4>
					<div class="ml-auto font-weight-bold"> <?= $_SESSION['login']['Email'] ?> </div>
				</div>
				<hr>
			</div>
		</div>
	</div>
</div>