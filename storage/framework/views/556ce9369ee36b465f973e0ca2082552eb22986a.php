<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="<?php echo e(route('search')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="search" name="key" placeholder="Tìm kiếm ...." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
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
<?php if (session('alert')): ?>
    <div class="alert alert-success" role="alert" style="    position: fixed;
    top: 0;
    margin-left: 600px; z-index:100000;"><?php echo e(session('alert')); ?></div>
<?php endif; ?>

<!-- //header-bot -->