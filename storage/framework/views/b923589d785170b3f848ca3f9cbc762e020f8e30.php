<?php $__env->startSection('content'); ?>

<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3>Thêm loại sản phẩm</h3>

            </div>

            <?php if ($errors->any()): ?>

                <div class="alert alert-danger">

                    <ul>

                        <?php $__currentLoopData = $errors->all();
                        $__env->addLoop($__currentLoopData);
                        foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                            $loop = $__env->getLastLoop(); ?>

                            <li><?php echo e($error); ?></li>

                        <?php endforeach;
                        $__env->popLoop();
                        $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>

            <?php endif; ?>


            <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search for...">

                        <span class="input-group-btn">

              <button class="btn btn-default" type="button">Go!</button>

            </span>

                    </div>

                </div>

            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                    <div class="x_title">

                        <h2>Thêm loại sản phẩm

                            <small></small>

                        </h2>

                        <ul class="nav navbar-right panel_toolbox">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"

                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="#">Settings 1</a>

                                    </li>

                                    <li><a href="#">Settings 2</a>

                                    </li>

                                </ul>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content">

                        <div class="row">

                            <div class="col-md-6 col-xs-12">

                                <div class="x_panel">

                                    <div class="x_title">

                                        <h2>Thêm loại sản phẩm chính

                                            <small></small>

                                        </h2>

                                        <ul class="nav navbar-right panel_toolbox">

                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                                            </li>

                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                                                   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="#">Settings 1</a>

                                                    </li>

                                                    <li><a href="#">Settings 2</a>

                                                    </li>

                                                </ul>

                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                                            </li>

                                        </ul>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="x_content">

                                        <br/>

                                        <form class="form-horizontal form-label-left input_mask" method="post"

                                              action="<?php echo e(route('admin.category.store')); ?>">

                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm loại

                                                    sản phẩm<span class="required">*</span>

                                                </label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">

                                                    <input class="date-picker form-control col-md-7 col-xs-12"

                                                           required="required" type="text" name="name">

                                                </div>

                                            </div>

                                            <div class="ln_solid"></div>

                                            <div class="form-group">

                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                    <button type="button" class="btn btn-primary">Cancel</button>

                                                    <button class="btn btn-primary" type="reset">Reset</button>

                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                </div>

                                            </div>

                                        </form>

                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Tên</th>

                                                <th>Tác vụ</th>

                                            </tr>

                                            </thead>

                                            <tbody>

                                            <?php $__currentLoopData = $categories;
                                            $__env->addLoop($__currentLoopData);
                                            foreach ($__currentLoopData as $index => $category): $__env->incrementLoopIndices();
                                                $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <th scope="row"><?php echo e($index + 1); ?></th>

                                                    <td><?php echo e($category->name); ?></td>

                                                    <td>

                                                        <form action="<?php echo e(route('admin.category.delete', $category->id)); ?>"

                                                              method="post">

                                                            <?php echo csrf_field(); ?>


                                                            <button class="btn btn-danger" type="submit">Xóa

                                                            </button>

                                                        </form>

                                                    </td>

                                                </tr>

                                            <?php endforeach;
                                            $__env->popLoop();
                                            $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                    </div>


                                    <div class="x_title">

                                        <h2>màu sắc

                                            <small></small>

                                        </h2>

                                        <ul class="nav navbar-right panel_toolbox">

                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                                            </li>

                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                                                   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="#">Settings 1</a>

                                                    </li>

                                                    <li><a href="#">Settings 2</a>

                                                    </li>

                                                </ul>

                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                                            </li>

                                        </ul>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="x_content">

                                        <br/>

                                        <form class="form-horizontal form-label-left input_mask" method="POST"

                                              action="<?php echo e(route('admin.color.store')); ?>">

                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm màu

                                                    cho sản phẩm<span class="required">*</span>

                                                </label>

                                                <div class="form-group">

                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>

                                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                                        <div class="input-group demo2">

                                                            <input type="text" class="form-control" name="color"

                                                                   required=""/>

                                                            <span class="input-group-addon"><i></i></span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ln_solid"></div>

                                            <div class="form-group">

                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                    <button type="button" class="btn btn-primary">Cancel</button>

                                                    <button class="btn btn-primary" type="reset">Reset</button>

                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                </div>

                                            </div>

                                        </form>

                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Tên</th>

                                                <th>Tác vụ</th>

                                            </tr>

                                            </thead>

                                            <tbody>

                                            <?php $__currentLoopData = $colors;
                                            $__env->addLoop($__currentLoopData);
                                            foreach ($__currentLoopData as $index => $color): $__env->incrementLoopIndices();
                                                $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <th scope="row"><?php echo e($index + 1); ?></th>

                                                    <td>

                                                        <div style="width: 30px; height: 30px;background-color: <?php echo e($color->color); ?>;"></div>

                                                    </td>

                                                    <td>

                                                        <form action="<?php echo e(route('admin.color.delete', $color->id)); ?>"

                                                              method="post">

                                                            <?php echo csrf_field(); ?>


                                                            <button class="btn btn-danger" type="submit">Xóa

                                                            </button>

                                                        </form>

                                                    </td>

                                                </tr>

                                            <?php endforeach;
                                            $__env->popLoop();
                                            $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                    </div>


                                    <div class="x_title">

                                        <h2>kích cỡ

                                            <small></small>

                                        </h2>

                                        <ul class="nav navbar-right panel_toolbox">

                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                                            </li>

                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                                                   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="#">Settings 1</a>

                                                    </li>

                                                    <li><a href="#">Settings 2</a>

                                                    </li>

                                                </ul>

                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                                            </li>

                                        </ul>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="x_content">

                                        <br/>

                                        <form class="form-horizontal form-label-left input_mask" method="post"

                                              action="<?php echo e(route('admin.size.store')); ?>">

                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm kích

                                                    cỡ sản phẩm<span class="required">*</span>

                                                </label>

                                                <div class="form-group">

                                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                                        <div class="">

                                                            <input class=" form-control col-md-7 col-xs-12"

                                                                   required="required" type="text" name="size">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ln_solid"></div>

                                            <div class="form-group">

                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                    <button type="button" class="btn btn-primary">Cancel</button>

                                                    <button class="btn btn-primary" type="reset">Reset</button>

                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                </div>

                                            </div>

                                        </form>

                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Tên</th>

                                                <th>Tác vụ</th>

                                            </tr>

                                            </thead>

                                            <tbody>

                                            <?php $__currentLoopData = $sizes;
                                            $__env->addLoop($__currentLoopData);
                                            foreach ($__currentLoopData as $index => $size): $__env->incrementLoopIndices();
                                                $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <th scope="row"><?php echo e($index + 1); ?></th>

                                                    <td><?php echo e($size->size); ?></td>

                                                    <td>

                                                        <form action="<?php echo e(route('admin.size.delete', $size->id)); ?>"

                                                              method="post">

                                                            <?php echo csrf_field(); ?>


                                                            <button class="btn btn-danger" type="submit">Xóa

                                                            </button>

                                                        </form>

                                                    </td>

                                                </tr>

                                            <?php endforeach;
                                            $__env->popLoop();
                                            $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                    </div>


                                    <div class="x_title">

                                        <h2>Chất liệu

                                            <small></small>

                                        </h2>

                                        <ul class="nav navbar-right panel_toolbox">

                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                                            </li>

                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                                                   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="#">Settings 1</a>

                                                    </li>

                                                    <li><a href="#">Settings 2</a>

                                                    </li>

                                                </ul>

                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                                            </li>

                                        </ul>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="x_content">

                                        <br/>

                                        <form class="form-horizontal form-label-left input_mask" method="post"

                                              action="<?php echo e(route('admin.material.store')); ?>">

                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Thêm chất

                                                    liệu sản phẩm<span class="required">*</span>

                                                </label>

                                                <div class="form-group">

                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Styled</label>

                                                    <div class="col-md-9 col-sm-9 col-xs-12">

                                                        <div class="">

                                                            <input class="form-control col-md-7 col-xs-12"

                                                                   required="required" type="text" name="material">

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="ln_solid"></div>

                                            <div class="form-group">

                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                    <button type="button" class="btn btn-primary">Cancel</button>

                                                    <button class="btn btn-primary" type="reset">Reset</button>

                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                </div>

                                            </div>

                                        </form>

                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Tên</th>

                                                <th>Tác vụ</th>

                                            </tr>

                                            </thead>

                                            <tbody>

                                            <?php $__currentLoopData = $materials;
                                            $__env->addLoop($__currentLoopData);
                                            foreach ($__currentLoopData as $index => $material): $__env->incrementLoopIndices();
                                                $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <th scope="row"><?php echo e($index + 1); ?></th>

                                                    <td><?php echo e($material->name); ?></td>

                                                    <td>

                                                        <form action="<?php echo e(route('admin.material.delete', $material->id)); ?>"

                                                              method="post">

                                                            <?php echo csrf_field(); ?>


                                                            <button class="btn btn-danger" type="submit">Xóa

                                                            </button>

                                                        </form>

                                                    </td>

                                                </tr>

                                            <?php endforeach;
                                            $__env->popLoop();
                                            $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                    </div>


                                </div>

                            </div>

                            <div class="col-md-6 col-xs-12">

                                <div class="x_panel">

                                    <div class="x_title">

                                        <h2>Thêm danh mục sản phẩm con

                                            <small></small>

                                        </h2>

                                        <ul class="nav navbar-right panel_toolbox">

                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                                            </li>

                                            <li class="dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"

                                                   role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="#">Settings 1</a>

                                                    </li>

                                                    <li><a href="#">Settings 2</a>

                                                    </li>

                                                </ul>

                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                                            </li>

                                        </ul>

                                        <div class="clearfix"></div>

                                    </div>

                                    <div class="x_content">

                                        <br/>

                                        <form class="form-horizontal form-label-left input_mask"

                                              action="<?php echo e(route('admin.subCategory.store')); ?>" method="post">

                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">


                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Chọn loại

                                                    sản phẩm chính</label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">

                                                    <select class="select2_single form-control" tabindex="-1"

                                                            name="category_id">

                                                        <option value="" selected disabled>loại chính</option>

                                                        <?php $__currentLoopData = $categories;
                                                        $__env->addLoop($__currentLoopData);
                                                        foreach ($__currentLoopData as $category): $__env->incrementLoopIndices();
                                                            $loop = $__env->getLastLoop(); ?>

                                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>

                                                        <?php endforeach;
                                                        $__env->popLoop();
                                                        $loop = $__env->getLastLoop(); ?>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="form-group">

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">

                                                    <input class="date-picker form-control col-md-7 col-xs-12"

                                                           required="required" type="text" name="subCategory">

                                                </div>

                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                                                    <button type="button" class="btn btn-primary">Cancel</button>

                                                    <button class="btn btn-primary" type="reset">Reset</button>

                                                    <button type="submit" class="btn btn-success">Submit</button>

                                                </div>

                                            </div>

                                        </form>

                                        <table class="table">

                                            <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Tên</th>

                                                <th>Tác vụ</th>

                                            </tr>

                                            </thead>

                                            <tbody>

                                            <?php $__currentLoopData = $categories;
                                            $__env->addLoop($__currentLoopData);
                                            foreach ($__currentLoopData as $index => $category): $__env->incrementLoopIndices();
                                                $loop = $__env->getLastLoop(); ?>

                                                <tr>

                                                    <th scope="row"><?php echo e($index + 1); ?></th>

                                                    <td style="font-weight: 600;font-size: 15px;">

                                                        <?php echo e($category->name); ?></td>

                                                </tr>

                                                <?php $__currentLoopData = $category->subCategories;
                                                $__env->addLoop($__currentLoopData);
                                                foreach ($__currentLoopData as $key => $subCategory): $__env->incrementLoopIndices();
                                                    $loop = $__env->getLastLoop(); ?>

                                                    <tr>

                                                        <th scope="row"><?php echo e($index + 1); ?>
                                                            .<?php echo e($key + 1); ?></th>

                                                        <td><?php echo e($subCategory->name); ?></td>

                                                        <td>

                                                            <form action="<?php echo e(route('admin.subCategory.delete', $subCategory->id)); ?>"

                                                                  method="post">

                                                                <?php echo csrf_field(); ?>


                                                                <button class="btn btn-danger" type="submit">Xóa

                                                                </button>

                                                            </form>

                                                        </td>

                                                    </tr>

                                                <?php endforeach;
                                                $__env->popLoop();
                                                $loop = $__env->getLastLoop(); ?>

                                            <?php endforeach;
                                            $__env->popLoop();
                                            $loop = $__env->getLastLoop(); ?>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>

        </div>


    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('production.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>