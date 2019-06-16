<?php $__env->startSection('content'); ?>

<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3>Thông tin sản phẩm</h3>

            </div>


            <div class="title_right">

                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">


                </div>

            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                    <div class="x_title">

                        <h2><?php echo e($product->name); ?></h2>

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


                        <div class="col-md-7 col-sm-7 col-xs-12">

                            <div class="product-image">

                                <img src="<?php echo e($product->images->first->image->image); ?>" alt="..."/>

                            </div>


                            <div class="product_gallery">

                                <?php $__currentLoopData = $product->images;
                                $__env->addLoop($__currentLoopData);
                                foreach ($__currentLoopData as $image): $__env->incrementLoopIndices();
                                    $loop = $__env->getLastLoop(); ?>

                                    <a>

                                        <img src="<?php echo e(asset($image->image)); ?>" alt="..."/>

                                    </a>


                                <?php endforeach;
                                $__env->popLoop();
                                $loop = $__env->getLastLoop(); ?>


                            </div>

                        </div>


                        <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">


                            <h3 class="prod_title">Loại sản phẩm: <?php echo e($product->category->name); ?></h3>

                            <h3 class="prod_title">Dòng sản phẩm: <?php echo e($product->subCategory->name); ?></h3>


                            <br/>


                            <div class="">


                                <h2>Kích cỡ :</h2>

                                <ul class="list-inline prod_color">

                                    <?php $__currentLoopData = $product->colors;
                                    $__env->addLoop($__currentLoopData);
                                    foreach ($__currentLoopData as $key => $color): $__env->incrementLoopIndices();
                                        $loop = $__env->getLastLoop(); ?>

                                        <li>

                                            <div class="color"
                                                 style="background-color: <?php echo e($color->color); ?>;"></div>

                                        </li>


                                    <?php endforeach;
                                    $__env->popLoop();
                                    $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>

                            <br/>


                            <div class="">

                                <h2>Kích cỡ :


                                </h2>

                                <ul class="list-inline prod_size">

                                    <?php $__currentLoopData = $product->sizes;
                                    $__env->addLoop($__currentLoopData);
                                    foreach ($__currentLoopData as $key => $size): $__env->incrementLoopIndices();
                                        $loop = $__env->getLastLoop(); ?>

                                        <li>

                                            <button type="button"
                                                    class="btn btn-default btn-xs"><?php echo e($size->size); ?></button>

                                        </li>


                                    <?php endforeach;
                                    $__env->popLoop();
                                    $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>

                            <br/>


                            <div class="">

                                <div class="product_price">

                                    <h1 class="price"><?php echo e(number_format($product->price, 0, ',', ',')); ?>
                                        VNĐ</h1>

                                    <span class="price-tax"><?php echo e(number_format($product->discount, 0, ',', ',')); ?>VNĐ</span>

                                    <br>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-12">


                            <div class="" role="tabpanel" data-example-id="togglable-tabs">

                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">

                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab"

                                                                              role="tab" data-toggle="tab"

                                                                              aria-expanded="true">Mô tả sản phẩm</a>

                                    </li>


                                </ul>

                                <div id="myTabContent" class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"

                                         aria-labelledby="home-tab">

                                        <p><?php echo $product->description; ?></p>

                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


</div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('production.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>