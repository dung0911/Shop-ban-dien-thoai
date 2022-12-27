<!-- banner-start -->
<?php
require_once("banner.php")
?>
<!-- Start Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Điện thoại & Ốp lưng & Phụ kiện điện thoại</h1>
                    <p>Với việc nhận ra tiềm năng và sự tự tin của một người trong khả năng của một người, người ta có thể xây dựng một thế giới tốt đẹp hơn.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Tất cả</button>
                        <button data-filter=".top-phonecase">Ốp lưng </button>
                        <button data-filter=".best-phukien">Phụ kiện</button>
                        <button data-filter=".best-phone">Điện thoại</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <?php
            if ($data_sanpham1 != NULL) {
                for ($r = 0; $r < 2; $r++) {
            ?>
                    <?php
                    for ($i = $r * 4; $i < (count($data_sanpham1) - 4) * $r + 4; $i++) {
                    ?>
                        <div class="col-lg-3 col-md-6 special-grid best-phone">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="sale">Sale</p>
                                    </div>
                                    <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><img src="public/<?= $data_sanpham1[$i]['HinhAnh1'] ?>" alt="Product Title" class="img-fluid" style="width:255px;height:255px;" /></a>
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        </ul>
                                        <a class="cart" href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><?= $data_sanpham1[$i]['TenSP'] ?></a></h4>
                                    <h5> <?= number_format($data_sanpham1[$i]['DonGia']) ?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php }
            } ?>

            <?php
            if ($data_sanpham2 != NULL) {
                for ($r = 0; $r < 2; $r++) {
            ?>
                    <?php
                    for ($i = $r * 4; $i < (count($data_sanpham2) - 4) * $r + 4; $i++) {
                    ?>
                        <div class="col-lg-3 col-md-6 special-grid top-phonecase">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="new">New</p>
                                    </div>
                                    <a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><img src="public/<?= $data_sanpham2[$i]['HinhAnh1'] ?>" alt="Product Title" class="img-fluid" style="width:255px;height:255px;" /></a>
                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        </ul>
                                        <a class="cart" href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><a href="?act=detail&id=<?= $data_sanpham2[$i]['MaSP'] ?>"><?= $data_sanpham2[$i]['TenSP'] ?></a></h4>
                                    <h5> <?= number_format($data_sanpham2[$i]['DonGia']) ?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php
                }
            } ?>
            <?php
            if ($data_sanpham3 != NULL) {
                for ($r = 0; $r < 2; $r++) {
            ?>
                    <?php
                    for ($i = $r * 4; $i < (count($data_sanpham3) - 4) * $r + 4; $i++) {
                    ?>
                        <div class="col-lg-3 col-md-6 special-grid best-phukien">
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <div class="type-lb">
                                        <p class="sale">Sale</p>
                                    </div>
                                    <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><img src="public/<?= $data_sanpham3[$i]['HinhAnh1'] ?>" alt="Product Title" class="img-fluid" style="width:255px;height:255px;" /></a>

                                    <div class="mask-icon">
                                        <ul>
                                            <li><a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        </ul>
                                        <a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>" class="cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4><a href="?act=detail&id=<?= $data_sanpham3[$i]['MaSP'] ?>"><?= $data_sanpham3[$i]['TenSP'] ?></a></h4>
                                    <h5> <?= number_format($data_sanpham3[$i]['DonGia']) ?> VNĐ</h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php
                }
            } ?>
        </div>
    </div>
</div>
<!-- End Products  -->
<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Sản phẩm mới nhất</h1>
                </div>
            </div>
        </div>
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-6027cde7fab6de63">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <?php
                    if ($data_arr[$i] != null) {
                        foreach ($data_arr[$i] as  $row) { ?>
                            <div class="swiper-slide swiper-slide-active bg-white">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <div class="type-lb">
                                            <p class="sale">Sale</p>
                                        </div>
                                        <a href="?act=detail&id=<?= $data_sanpham1[$i]['MaSP'] ?>"><img src="public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-fluid" style="width: 255px; height:255px;" /></a>
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="?act=detail&id=<?= $row['MaSP'] ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            </ul>
                                            <a class="cart" href="?act=detail&id=<?= $row['MaSP'] ?>">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h4 style="font-size: 16px;font-weight: 700;padding-bottom: 15px;">
                                            <a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenSP'] ?></a>
                                        </h4>
                                        <h5 style='font-size: 18px;font-family: "Poppins", sans-serif;padding: 4px;display: inline-block;background: #b0b435;color: #ffffff;font-weight: 600;'>
                                            <?= number_format($row['DonGia']) ?> VNĐ
                                        </h5>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                <?php } ?>

            </div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-326f134b510b6a6ab"></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-326f134b510b6a6ab"></div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</div>




<!-- End Blog  -->
<?php
include_once("Views/quickview.php");
?>
<!-- quick view end -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>