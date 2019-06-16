<!-- header-bot -->

<div class="header-bot" id="search-vue">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="<?php echo e(route('search')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="search" name="key" placeholder="Tìm kiếm..." required="" id="search" @keyup="searchComplete" v-model="keySearch">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
            <div class="row search-box">
                <div class="col-md-4 search-box-right">
                    <div class="search-box-key">
                        <span >Từ khóa gợi ý</span>
                    </div>
                    <p>Lorem ipsum distincti</p>
                    <p>Lorem ipsum distincti</p>
                    <p>Lorem ipsum distincti</p>
                    <p>Lorem ipsum distincti</p>
                </div>
                <div class="col-md-8">
                    <div class="search-box-product">
                        <span>Sản phẩm gợi ý</span>
                    </div>
                    <div class="row search-box-product-row">

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><span>BHLĐ</span> Đức Sơn<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <marquee class="chu-chay">Công ty Bảo hộ lao động Đức Sơn</marquee>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php if(session('alert')): ?>
    <div class="alert alert-success" role="alert" style="    position: fixed;
    top: 0;
    margin-left: 600px; z-index:100000;"><?php echo e(session('alert')); ?></div>
<?php endif; ?>

<!-- //header-bot -->