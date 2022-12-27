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
		<div class="row">
			<div class="col-lg-12">
				<div class="table-main table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Images</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (isset($_SESSION['sanpham'])) {
								foreach ($_SESSION['sanpham'] as $value) { ?>
									<tr>
										<td class="thumbnail-img">
											<a href="?act=detail&id=<?= $value['MaSP'] ?>">
												<img class="img-fluid" src="public/<?= $value['HinhAnh1'] ?>" alt="" />
											</a>
										</td>
										<td class="name-pr">
											<a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a>
										</td>
										<td class="price-pr">
											<p><?= number_format($value['DonGia']) ?> VNĐ</p>
										</td>
										<td class="quantity-box">
											<form action="" method="POST">
												<div class="plus-minus">
													<a href="?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>" class="dec qtybutton" type="button">-</a>
													<b class="plus-minus-box"><?= $value['SoLuong'] ?></b>
													<a href="?act=cart&xuli=update&id=<?= $value['MaSP'] ?>" class="inc qtybutton" type="button">+</a>
												</div>
											</form>
										</td>
										<td class="total-pr">
											<p><?= number_format($value['ThanhTien']) ?> VNĐ</p>
										</td>
										<td class="remove-pr">
											<a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>">
												<i class="fas fa-times"></i>
											</a>
										</td>
									</tr>
							<?php }
							} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<form action="?act=checkout" method="post">
			<div class="row my-5">
				<div class="col-lg-8 col-sm-12"></div>
				<div class="col-lg-4 col-sm-12">
					<div class="order-box">
						<h3>Order summary</h3>
						<div class="d-flex">
							<h4>Tổng Giỏ Hàng</h4>
							<div class="ml-auto font-weight-bold"> <?= number_format($count) ?> VNĐ </div>
						</div>
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
				<div class="col-12 d-flex shopping-box">
					<button type="submit" class="ml-auto btn hvr-hover text-white">Đặt hàng</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- End Cart -->