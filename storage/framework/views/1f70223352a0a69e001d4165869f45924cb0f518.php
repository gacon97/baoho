<?php $__env->startSection('content'); ?>


<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3> Danh sách khách hàng

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

                        <h2>Danh sách khách hàng

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

                        <p class="text-muted font-13 m-b-30">

                            Bạn có thể tìm khách hàng theo bất kỳ thuộc tính nào (vd như tên, số điện thoại, địa chỉ...)

                        </p>

                        <table id="customers" class="table table-striped table-bordered">

                            <thead>

                            <tr>

                                <th>STT</th>

                                <th>Tên</th>

                                <th>Địa chỉ</th>

                                <th>Số điện thoại</th>

                                <th>Lưu ý</th>

                            </tr>

                            </thead>


                            <tbody>


                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>

<style type="text/css">

    .image-table {

        height: 100px !important;

        background-position: center;

        width: 100%;

        background-size: cover;

    }

    table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {

        vertical-align: middle;

        text-align: center;

    }

</style>

<link href="/newAdmin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

<link href="/newAdmin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

<link href="/newAdmin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">

<link href="/newAdmin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

<link href="/newAdmin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>

<script src="/newAdmin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<script src="/newAdmin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>

<script src="/newAdmin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

<script src="/newAdmin/vendors/jszip/dist/jszip.min.js"></script>

<script src="/newAdmin/vendors/pdfmake/build/pdfmake.min.js"></script>

<script src="/newAdmin/vendors/pdfmake/build/vfs_fonts.js"></script>

<script type="text/javascript">

    $.extend(true, $.fn.dataTable.defaults, {

        "language": {

            "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Vietnamese.json"

        },

        "pageLength": 15

    });

    $(document).ready(function () {

        var table = $('#customers').DataTable({

            "ajax": '/dashboard/ajax/customers',


            "columns": [

                {"data": "id"},

                {"data": "name"},

                {"data": "address"},

                {"data": "phone"},

                {"data": "phone"},


            ],

            // "columnDefs": [{

            //     "targets": 1,

            //     "data": "image",

            //     "render": function (data, type, row, meta) {

            //         return '<div class="image-table" style="background-image: url('+row.image+')"></div>';

            //     }

            // },{

            //     "targets": 3,

            //     "data": "name",

            //     "render": function (data, type, row, meta) {

            //         return '<a href="/dashboard/products/' + row.id + '/show/">' + data + '</a>';

            //     }

            // },{

            //     "targets": 6,

            //     "data": "name",

            //     "render": function (data, type, row, meta) {

            //         // '<a href="/admin.product.edit', $product->id) }}"><i class="fa fa-pencil"></i></a>';

            //         return '<a href="/dashboard/products/' + row.id + '/edit"> <i class="fa fa-pencil"></i> </a>';

            //     }

            // },


            // ]


        });

    });

</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('production.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>