<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
    <div class="product-categori">
        <div class="search-product">
            <form action="index.php?act=shop" method="post">
                <input type="search" class="form-control" id="amount" readonly placeholder="Search here..." type="text">
                <button type="submit"> <i class="fa fa-search"></i> </button>
            </form>
        </div>
        <div class="filter-sidebar-left">
            <div class="title-left">
                <h3>Categories</h3>
            </div>
            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                <?php $i = 1;
                $j = 1;
                $h = 1;
                foreach ($data_chitietDM as $row) { ?>
                    <div class="list-group-collapse sub-men">
                        <p class="list-group-item list-group-item-action" href="#sub-men<?php echo $j++ ?>" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1"><?= $data_danhmuc[$i - 1]['TenDM'] ?></p>
                        <div class="collapse show" id="sub-men<?php echo $h++ ?>" data-parent="#list-group-men">
                            <div class="list-group">
                                <?php foreach ($row as $value) { ?>
                                    <a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>" class="list-group-item list-group-item-action active"><?= $value['TenLSP'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
        </div>
    </div>
</div>