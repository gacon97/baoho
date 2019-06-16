<?php $__env->startSection('content'); ?>


<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3> Chi tiết đơn hàng ngày <?php echo e($bill->date_order); ?>


                    <small></small>

                </h3>

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

                        <h2>Thông tin chi tiết đơn hàng</h2>

                        <ul class="nav navbar-right panel_toolbox">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                <!-- <ul class="dropdown-menu" role="menu">

                                  <li><a href="#">Settings 1</a>

                                  </li>

                                  <li><a href="#">Settings 2</a>

                                  </li>

                                </ul> -->

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

                        <div class="clearfix"></div>

                    </div>

                    <div class="x_content" style="margin-bottom: 30px;

    margin-top: 30px;

    font-size: 15px;">

                        <div class="row show-grid">

                            <div class="col-md-1"></div>

                            <div class="col-md-5">

                                <h4>Tên khách hàng: <?php echo e($customer->name); ?></h4>


                                <ul class="ul-bill">

                                    <li class="li-bill">Địa chỉ:<span><?php echo e($customer->address); ?></span></li>

                                    <li class="li-bill">Số điện thoại:<span><?php echo e($customer->phone); ?></span>
                                    </li>

                                    <li class="li-bill">Lưu ý:<span><?php echo e($customer->note); ?></span></li>

                                </ul>

                            </div>

                            <div class="col-md-5">

                                <h4>Thông tin hóa đơn</h4>

                                <ul class="ul-bill">

                                    <li class="li-bill">Ngày đặt hàng:<span><?php echo e($bill->date_order); ?></span>
                                    </li>

                                    <li class="li-bill">Tổng tiền:<span><?php echo e(number_format($bill->total)); ?> vnđ</span>
                                    </li>

                                    <li class="li-bill">Trạng thái:<span><?php echo e($bill->status); ?></span></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="x_content">

                        <div class="table-responsive">

                            <table class="table table-striped jambo_table bulk_action">

                                <thead>


                                <th class="column-title">#</th>

                                <th class="column-title">Ảnh</th>

                                <th class="column-title">Tên sản phẩm</th>

                                <th class="column-title">Số lượng</th>

                                <th class="column-title">Giá</th>

                                <th class="column-title">Tổng tiền</th>

                                </tr>

                                </thead>


                                <tbody style="vertical-align: middle;">


                                <?php $__currentLoopData = $billDetails;
                                $__env->addLoop($__currentLoopData);
                                foreach ($__currentLoopData as $index => $billDetail): $__env->incrementLoopIndices();
                                    $loop = $__env->getLastLoop(); ?>

                                    <tr class="even pointer">


                                        <td class=" " style="vertical-align: middle;"><?php echo e($index + 1); ?></td>

                                        <td class=" " style="vertical-align: middle;">

                                            <div style="background-image: url('<?php echo e($billDetail->product->images[0]->image); ?>'); width: 100px;height: 100px;background-position: center;background-size: cover;"></div>
                                        </td>

                                        <td class=" "
                                            style="vertical-align: middle;"><?php echo e($billDetail->product->name); ?></td>

                                        <td class=" "
                                            style="vertical-align: middle;"><?php echo e($billDetail->qty); ?> </td>

                                        <td class=" "
                                            style="vertical-align: middle;"><?php echo e(number_format($billDetail->product->price)); ?>
                                            vnđ
                                        </td>

                                        <td class=" "
                                            style="vertical-align: middle;"><?php echo e(number_format($billDetail->product->price * $billDetail->qty)); ?>
                                            vnđ
                                        </td>

                                        <!--  -->

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

            </div>

        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('production.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>