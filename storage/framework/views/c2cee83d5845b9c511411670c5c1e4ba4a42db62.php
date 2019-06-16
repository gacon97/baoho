<?php $__env->startSection('content-banner'); ?>

<div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">

    <h3 class="title">Danh sách các Banner</h3>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th scope="col">#</th>

            <th scope="col">Ảnh</th>

            <th scope="col">Tiêu đề chính</th>

            <th scope="col">Tiêu đề nhỏ</th>

            <th scope="col">Tiêu đề phụ</th>

            <th scope="col">Xóa</th>

            <th scope="col">Sửa</th>

        </tr>

        </thead>

        <tbody>

        <?php $__currentLoopData = $banners;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $index => $banner): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop(); ?>

            <tr>

                <th scope="row"><?php echo e($index + 1); ?></th>

                <th scope="row" class="table-image"><img src="<?php echo e(asset($banner->image)); ?>" class="img"></th>

                <th scope="row"><?php echo e($banner->title); ?></th>

                <th scope="row"><?php echo e($banner->discount); ?></th>

                <th scope="row"><?php echo e($banner->sub_title); ?></th>

                <th scope="row">

                    <form action="<?php echo e(route('admin.banner.delete', $banner->id)); ?>" method="post">

                        <?php echo csrf_field(); ?>

                        <?php echo method_field('delete'); ?>

                        <button class="btn btn-danger" type="submit">Xóa</button>

                    </form>

                </th>

                <th scope="row"><a href="<?php echo e(route('admin.banner.edit', $banner->id)); ?>"
                                   class="btn btn-primary">Sửa</a></th>

            </tr>

        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.banner.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>