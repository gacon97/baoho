<?php $__env->startSection('content'); ?>


<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3> Danh sách đơn hàng

                    <small></small>

                </h3>

            </div>


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

                        <h2>Danh sách đơn hàng</h2>

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


                    <div class="x_content">

                        <div class="table-responsive">

                            <table class="table table-striped jambo_table bulk_action">

                                <thead>

                                <tr class="headings">


                                    <th class="column-title">#</th>

                                    <th class="column-title">Ngày đặt hàng</th>

                                    <th class="column-title">Tên khách hàng</th>

                                    <th class="column-title">Tổng tiền</th>

                                    <th class="column-title">Trạng thái</th>

                                </tr>

                                </thead>


                                <tbody>

                                <?php $__currentLoopData = $bills;
                                $__env->addLoop($__currentLoopData);
                                foreach ($__currentLoopData as $index => $bill): $__env->incrementLoopIndices();
                                    $loop = $__env->getLastLoop(); ?>

                                    <tr class="even pointer">


                                        <td class=" "><?php echo e($index + 1); ?></td>

                                        <td class=" "><a
                                                    href="<?php echo e(route('admin.bill.show', $bill->id)); ?>"><?php echo e($bill->date_order); ?></a>
                                        </td>

                                        <td class=" "><?php echo e($bill->customer->name); ?></td>

                                        <td class=" "><?php echo e(number_format($bill->total)); ?> </td>

                                        <td class=" "><?php echo e($bill->status); ?></td>

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