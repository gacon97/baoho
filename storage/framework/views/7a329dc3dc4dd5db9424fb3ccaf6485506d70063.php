<!DOCTYPE html>

<html lang="<?php echo e(app()->getLocale()); ?>">

<head>

    <link href="<?php echo e(asset('web/images/banner/matna.jpg')); ?>" rel="shortcut icon" type="image/x-icon"/>


    <title>Cửa hàng bảo hộ lao động Đức Sơn| đồ bảo hộ chất lượng cao, đồ bảo hộ uy tín</title>

    <!--/tags -->

    <meta HTTP-EQUIV="Content-Language" content="vi">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="description"
          content="Đồ Bảo Hộ chất lượng cao số lượng lớn,  triết khấu lên tới 10% cho tất cả Đồ Bảo Hộ, Đồ Bảo Hộ uy tín nhất trên thị trường, Đồ bảo hộ Đức Sơn luôn đặt chất lượng và uy tín lên hàng đầu"/>

    <meta name="keywords"
          content="Đồ bảo hộ chất lượng cao, đồ bảo hộ uy tín, đồ bảo hộ lao động, bảo hộ lao động đức sơn, <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($category->name); ?>, <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($sub_category->name); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>"/>

    <meta name="robots" content="noodp,index,follow"/>

    <meta name='revisit-after' content='1 days'/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <script type="application/x-javascript"> addEventListener("load", function () {

            setTimeout(hideURLbar, 0);

        }, false);


        function hideURLbar() {

            window.scrollTo(0, 1);

        } </script>

    <!--//tags -->

    <link href="<?php echo e(asset('web/css/bootstrap.css')); ?>" rel="stylesheet" type="text/css" media="all"/>

    <link href="/web/css/team.css" rel="stylesheet" type="text/css" media="all"/>


    <link href="<?php echo e(asset('web/css/style.css')); ?>" rel="stylesheet" type="text/css" media="all"/>

    <link href="<?php echo e(asset('web/css/font-awesome.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('web/css/easy-responsive-tabs.css')); ?>" rel='stylesheet' type='text/css'/>

    <!-- //for bootstrap working -->

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'

          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
<?php echo $__env->make('web.detail.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body>

<!-- Load Facebook SDK for JavaScript -->

<!-- <div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script> -->


<!-- Your customer chat code -->

<!-- <div class="fb-customerchat"

  attribution="setup_tool"

  page_id="177187782943702"

  theme_color="#fa3c4c"

  logged_in_greeting="Chào bạn!"

  logged_out_greeting="Chào bạn!">

</div> -->


<?php echo $__env->make('web.detail.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('web.detail.header-bot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('web.detail.model1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('web.detail.model2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('web.detail.banner-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php echo $__env->make('web.detail.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div id="app">


    <?php echo $__env->make('web.detail.new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <?php echo $__env->make('web.detail.grids', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('web.detail.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('web.detail.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php echo $__env->make('web.detail.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</body>

</html>