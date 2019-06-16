<?php $__env->startSection('content'); ?>

<div id="wrapper">

    <?php echo $__env->make('admin.notification', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    <?php echo $__env->make('admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div id="page-wrapper" class="gray-bg dashbard-1">


        <!--content-->

        <?php echo $__env->yieldContent('content-banner'); ?>

        <div class="copy">

            <h1></h1>

        </div>

    </div>

    <div class="clearfix"></div>

</div>

<!---->

<!--scrolling js-->

<script src="<?php echo e(asset('admin/js/jquery.nicescroll.js')); ?>"></script>

<!--//scrolling js-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>