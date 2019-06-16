<?php $__env->startSection('content-bill'); ?>

<div class="table" style="padding: 10px 55px 10px 10px; margin-left: 15px; background-color: #e9e9e9;">

    <h3 class="title">Danh sách các sản phẩm</h3>

    <table class="table table-bordered">

        <thead>

        <tr>

            <th scope="col">#</th>

            <th scope="col">Ngày bán</th>

            <th scope="col">Tên Khách hàng</th>

            <th scope="col">Số sản phẩm</th>

            <th scope="col">Tổng tiền</th>

            <th scope="col">Tình trạng</th>

            <th scope="col">Cập nhật</th>

        </tr>

        </thead>

        <tbody>

        <?php $__currentLoopData = $bills;
        $__env->addLoop($__currentLoopData);
        foreach ($__currentLoopData

        as $index => $bill):
        $__env->incrementLoopIndices();
        $loop = $__env->getLastLoop(); ?>

        <tr>

            <th scope="row"><?php echo e($index + 1); ?></th>

            <th scope="row"><a
                        href="<?php echo e(route('admin.bill.show', $bill->id)); ?>"><?php echo e($bill->date_order); ?></a>
            </th>

            <th scope="row"><?php echo e($bill->customer->name); ?></th>

            <th scope="row"><?php echo e($bill->billdetail->count()); ?></th>

            <th scope="row"><?php echo e($bill->total); ?></th>

            <th scope="row"><?php echo e($bill->status); ?></th>

            <th scope="row">

                <form action="<?php echo e(route('admin.bill.edit', $bill->id)); ?>" method="post">

                    <?php echo csrf_field(); ?>

                    <button class="btn btn-success" type="submit">update</button>

                </form>

            </th>

            <?php endforeach;
            $__env->popLoop();
            $loop = $__env->getLastLoop(); ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.bill.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>