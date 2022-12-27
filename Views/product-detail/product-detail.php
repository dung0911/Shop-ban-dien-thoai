<?php if ($data != null) { ?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="?act=shop">Shop</a></li>
                        <li class="breadcrumb-item active"><?= $data['TenSP'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php if ($data['HinhAnh2'] !=  null) { ?>
                                <div class="carousel-item active"> <img class="d-block w-100" style="width:415px; height:490px;" src="public/<?= $data['HinhAnh2'] ?>" alt="First slide"> </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh1'] != null) { ?>
                                <div class="carousel-item"> <img class="d-block w-100" style="width:415px; height:490px;" src="public/<?= $data['HinhAnh1'] ?>" alt="Second slide"> </div>
                            <?php } ?>
                            <?php if ($data['HinhAnh3'] != null) { ?>
                                <div class="carousel-item"> <img class="d-block w-100" style="width:415px; height:490px;" src="public/<?= $data['HinhAnh3'] ?>" alt="Third slide"> </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <?php if ($data['HinhAnh2'] != null) { ?>
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" style="width:87px; height:108px;" src="public/<?= $data['HinhAnh2'] ?>" alt="" />
                                </li>
                            <?php } ?>
                            <?php if ($data['HinhAnh1'] != null) { ?>
                                <li data-target="#carousel-example-1" data-slide-to="1">
                                    <img class="d-block w-100 img-fluid" style="width:87px; height:108px;" src="public/<?= $data['HinhAnh1'] ?>" alt="" />
                                </li>
                            <?php } ?>
                            <?php if ($data['HinhAnh3'] != null) { ?>
                                <li data-target="#carousel-example-1" data-slide-to="2">
                                    <img class="d-block w-100 img-fluid" style="width:87px; height:108px;" src="public/<?= $data['HinhAnh3'] ?>" alt="" />
                                </li>
                            <?php } ?>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?= $data['TenSP'] ?></h2>
                        <h5> <?= number_format($data['DonGia']) ?> VNĐ</h5>
                        <p>
                        <h4>Short Description:</h4>
                        <?php if ($data['MaDM'] == 1) { ?>
                            <p><?= $data['MoTa'] ?></p>
                        <?php } ?>
                        </p>

                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <a class="btn hvr-hover" data-fancybox-close="" href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>">Add to cart</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="card card-outline-secondary my-4 w-100">
                    <div class="card-header">
                        <h2>Product Reviews</h2>
                    </div>
                    <div class="card-body">
                        <table class="w-100">
                            <thead>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <th class="text-lg">THÔNG SỐ KỸ THUẬT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Màn hình</td>
                                    <td><?= $data['ManHinh'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Chip</td>
                                    <td><?= $data['CPU'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Ram</td>
                                    <td><?= $data['Ram'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Bộ nhớ trong</td>
                                    <td><?= $data['Rom'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Pin</td>
                                    <td><?= $data['Pin'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Camera trước</td>
                                    <td><?= $data['CamTruoc'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Camera sau</td>
                                    <td><?= $data['CamSau'] ?></td>
                                </tr>
                                <tr class="border-bottom" style="line-height: 45px;">
                                    <td>Thẻ nhớ</td>
                                    <td><?= $data['SDCard'] ?></td>
                                </tr>
                                <tr style="line-height: 45px;">
                                    <td>Hệ điều hành</td>
                                    <td><?= $data['HDH'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Sản Phẩm Tương Tự</h1>
                        <p>Enthusiasm is the great hill-climber.</p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        <?php foreach ($data_lq as $row) { ?>
                            <div class="item">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <a href="?act=detail&id=<?= $row['MaSP'] ?>"><img src="public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-fluid"  style="height:266.255px;"/></a>
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            </ul>
                                            <a class="cart" href="?act=detail&id=<?= $row['MaSP'] ?>">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4><a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenSP'] ?></a></h4>
                                        <h5><?= number_format($row['DonGia']) ?> VNĐ</h5>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
<?php } else {
    require_once("Views/error-404.php");
} ?>
<?php
require_once("Views/quickview.php")
?>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '2652621865018691',
            xfbml: true,
            version: 'v7.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- quick view end -->