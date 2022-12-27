    <!-- Start All Title Box -->
    <div class="all-title-box">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<h2>Shop</h2>
    				<ul class="breadcrumb">
    					<li class="breadcrumb-item"><a href="?act=home">Home</a></li>
    					<li class="breadcrumb-item active">Shop</li>
    				</ul>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
    	<div class="container">
    		<div class="row">
    			<div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
    				<div class="right-product-box">
    					<div class="product-item-filter row">
    						<div class="col-12 col-sm-8 text-center text-sm-left">
    							<div class="toolbar-sorter-right">
    								<span>Sort by </span>
    								<select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
    									<option data-display="Select">Nothing</option>
    									<option value="1">Popularity</option>
    									<option value="2">High Price → High Price</option>
    									<option value="3">Low Price → High Price</option>
    									<option value="4">Best Selling</option>
    								</select>
    							</div>
    							<p>Showing all <?= $data_tong ?> results</p>
    						</div>
    						<div class="col-12 col-sm-4 text-center text-sm-right">
    							<ul class="nav nav-tabs ml-auto">
    								<li>
    									<a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
    								</li>
    								<li>
    									<a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
    								</li>
    							</ul>
    						</div>
    					</div>

    					<?php include_once 'list-products.php' ?>
    					<nav aria-label="Page navigation example">
    						<ul class="pagination justify-content-center">
    							<?php if ($data_tong > 9 and isset($test)) {
									for ($i = 1; $i <= $data_tong / 9; $i++) { ?>
    									<li class="page-item"><a class="page-link" href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
    							<?php }
								}
								?>
    						</ul>
    					</nav>
    				</div>
    			</div>
    			<!-- Category -->
    			<?php include_once 'category.php' ?>
    		</div>
    	</div>
    </div>
    <!-- End Shop Page -->