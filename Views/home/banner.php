<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <?php
        foreach ($data_banner as $key =>  $value) {
        ?>
            <li class="text-center">
                <img src="public/<?= $value['HinhAnh'] ?>" alt="main slider" title="#htmlcaption" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> PhoneStore</strong></h1>
                            <p class="m-b-40">Nothing will work unless you do.</p>
                            <p><a class="btn hvr-hover" href="?act=shop">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="offer-box-products">
                    <img class="img-fluid" style="width:540px; height:306px;" src="./public/images/boxproduct.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="offer-box-products">
                    <img class="img-fluid" style="width:540px; height:306px;" src="./public/images/boxproduct1.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>