<?php $__env->startSection('content-product'); ?>

<div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">

    <h3 class="title">Danh sách các sản phẩm</h3>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th scope="col">#</th>

            <th scope="col">Ảnh</th>

            <th scope="col">Tên sản phẩm</th>

            <th scope="col">Giá sản phẩm</th>

            <th scope="col">Danh mục</th>

            <th scope="col">Danh mục con</th>

            <th scope="col">Nhà sản xuất</th>

            <th scope="col">Bảo hành</th>

            <th scope="col">Xóa</th>

            <th scope="col">Sửa</th>

        </tr>

        </thead>

        <tbody>

        <?php $__currentLoopData = $products;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData as $index => $product): $__env->incrementLoopIndices();
            $loop = $__env->getLastLoop(); ?>

            <tr>

                <th scope="row"><?php echo e($index + 1); ?></th>

                <th scope="row" class="table-image"><img
                            src="<?php echo e(asset($product->images->first->image->image)); ?>" class="img"></th>

                <th scope="row"><?php echo e($product->name); ?></th>

                <th scope="row"><?php echo e($product->price); ?></th>

                <th scope="row"><?php echo e($product->category->name); ?></th>

                <th scope="row"><?php echo e($product->subCategory->name); ?></th>

                <th scope="row"><?php echo e($product->producer); ?></th>

                <th scope="row"><?php echo e($product->warranties); ?></th>

                <th scope="row">

                    <form action="<?php echo e(route('admin.product.delete', $product->id)); ?>" method="post">

                        <?php echo csrf_field(); ?>


                        <button class="btn btn-danger" type="submit">Xóa</button>

                    </form>

                </th>

                <th scope="row"><a href="<?php echo e(route('admin.product.edit', $product->id)); ?>"
                                   class="btn btn-primary">Sửa</a></th>

            </tr>

        <?php endforeach;
        $__env->popLoop();
        $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.list-product.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>