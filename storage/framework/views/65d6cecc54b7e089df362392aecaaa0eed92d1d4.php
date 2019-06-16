<?php $__env->startSection('content-product'); ?>

<div class="title-block">

    <h3 class="inline-form">Chỉnh sửa sản phẩm</h3>

    <a href="" class="btn btn-info">Chỉnh sửa</a>

    <form action="" class="inline-form">

        <button type="submit" class="btn btn-danger">Xóa sản phẩm</button>

    </form>

</div>

<table class="table table-bordered">

    <thead>

    <tr>

        <th scope="col">#</th>

        <th scope="col">First</th>

        <th scope="col">Last</th>

        <th scope="col">Handle</th>

    </tr>

    </thead>

    <tbody>

    <tr>

        <th scope="row">1</th>

        <td>Mark</td>

        <td>Otto</td>

        <td>@mdo</td>

    </tr>

    <tr>

        <th scope="row">2</th>

        <td>Jacob</td>

        <td>Thornton</td>

        <td>@fat</td>

    </tr>

    <tr>

        <th scope="row">3</th>

        <td colspan="2">Larry the Bird</td>

        <td>@twitter</td>

    </tr>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.list-product.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>