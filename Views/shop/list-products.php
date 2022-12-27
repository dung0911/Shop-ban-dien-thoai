<div class="product-categorie-box">
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade show active" id="grid-view">
			<div class="row">
				<?php
				if (isset($data) and $data != NULL) {
					foreach ($data as  $value) {
				?>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
							<div class="products-single fix">
								<div class="box-img-hover">
									<div class="type-lb">
										<p class="sale">Sale</p>
									</div>
									<a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public/<?= $value['HinhAnh1'] ?>" style="widtd:255px; height:255px;" alt="Product Title" class="img-fluid" /></a>

									<div class="mask-icon">
										<ul>
											<li><a href="?act=detail&id=<?= $value['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
										</ul>
										<a class="cart" href="?act=detail&id=<?= $value['MaSP'] ?>">Add to Cart</a>
									</div>
								</div>
								<div class="why-text">
									<h4><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h4>
									<h5> <?= number_format($value['DonGia']) ?> VNĐ</h5>
								</div>
							</div>
						</div>
				<?php }
				} else {
					echo '<p> KHÔNG CÓ DỮ LIỆU </p>';
				} ?>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="list-view">
			<div class="list-view-box">
				<?php
				if (isset($data) and $data != NULL) {
					foreach ($data as  $value) {
				?>
						<div class="row mb-4">
							<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
								<div class="products-single fix">
									<div class="box-img-hover">
										<div class="type-lb">
											<p class="new">New</p>
										</div>
										<a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="public/<?= $value['HinhAnh1'] ?>" alt="Product Title" class="img-fluid" /></a>
										<div class="mask-icon">
											<ul>
												<li><a href="?act=detail&id=<?= $value['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
								<div class="why-text full-width">
									<h4><?= $value['TenSP'] ?></h4>
									<h5 class="mb-4"> <?= number_format($value['DonGia']) ?> VNĐ</h5>
									<p><?= $value['MoTa'] ?></p>
									<a class="btn hvr-hover" href="?act=detail&id=<?= $value['MaSP'] ?>">Add to Cart</a>
								</div>
							</div>
						</div>
				<?php }
				} else {
					echo '<p> KHÔNG CÓ DỮ LIỆU </p>';
				} ?>
			</div>
		</div>
	</div>
</div>