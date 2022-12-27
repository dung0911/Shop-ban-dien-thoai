<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">

                </div>
                <div class="right-phone-box">
                    <p>Call US :- <a> +84 259 7170</a></p>
                </div>
                <div class="our-link">
                    <ul>
                        <?php if (isset($_SESSION['login'])) { ?>
                            <li><a href="?act=taikhoan&xuli=account"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <?php
                            if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
                                <li><a href="admin/?mod=login">Admin Page</a></li>
                            <?php }
                        } else { ?>
                            <li><a href="?act=taikhoan">Login</a></li>
                        <?php } ?>
                        <li><a href="?act=contact"><i class="fas fa-headset"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box" style="width:33%;">
                    <ul class="d-xl-flex text-white">
                        <?php if (isset($_SESSION['login'])) { ?>
                            <li><b>Hello <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></b></li>
                            <div class="d-none d-xl-block border ml-2 mr-2 bg-white"></div>
                            <li><a class=" text-white" href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                            <?php
                            if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
                                <li><a href="admin/?mod=login">Admin Page</a></li>
                            <?php }
                        } else { ?>
                            <li><b>Customer</b></li>
                            <li><a href="?act=taikhoan">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="?act=home"><img src="./public/images/images.jpg" style="width:190px; height:60px;" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="?act=home">home</a></li>
                    <li class="dropdown">
                        <a href="?act=shop" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">shop</a>
                        <ul class="dropdown-menu" style="height: 200px; overflow:auto; width:100%;">
                            <li class="banner"></li>
                            <?php $i = 1;
                            foreach ($data_chitietDM as $row) { ?>
                                <li>
                                    <a href="?act=shop&sp=<?= $i ?>">
                                        <h5 style="color: #fff!important;"><?= $data_danhmuc[$i - 1]['TenDM'] ?></h5>
                                    </a>
                                    <ul>
                                        <?php foreach ($row as $value) { ?>
                                            <li><a style="color: #fff!important;" href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php $i++;
                            } ?>
                            <li class="banner"></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="?act=about">about us</a></li>
                    <li class="nav-item"><a class="nav-link" href="?act=checkout">Checkout</a></li>
                    <?php if (isset($_SESSION['login'])) { ?>
                        <li class="nav-item"><a class="nav-link" href="?act=order_complete">Order</a></li>
                    <?php
                    }  ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <?php
                            $soluong = 0;
                            $thanhtien = 0;
                            if (isset($_SESSION['sanpham'])) {
                                foreach ($_SESSION['sanpham'] as $value) {
                                    $soluong += 1;
                                    $thanhtien += $value['ThanhTien'];
                                }
                            }
                            ?>
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge"><?= $soluong ?></span>
                            <p>My Cart</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <?php if (isset($_SESSION['sanpham'])) {
                        foreach ($_SESSION['sanpham'] as $value) { ?>
                            <li>
                                <a class="photo" href="?act=cart"><img src="public/<?= $value['HinhAnh1'] ?>" class="cart-thumb" alt="" /></a>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class=" mr-3"><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h6>
                                        <p>Số lượng - <span class="price"><?= $value['SoLuong'] ?></span></p>
                                        <p><?= number_format($value['ThanhTien']) ?> VNĐ</p>
                                    </div>
                                    <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </li>
                    <?php }
                    } ?>
                    <li class="total">
                        <a href="index.php?act=cart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: <?= number_format($thanhtien) ?> VNĐ</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->