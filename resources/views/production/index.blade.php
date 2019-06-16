@extends('production.layout')

@section('content')

    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng số khách hàng</span>
                <div class="count">{{ $customers }}</div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số đơn hàng</span>
                <div class="count">{{ $bill }}</div>

            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng số sản phẩm</span>
                <div class="count green">{{ $products }}</div>

            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i>Tổng số lượt truy cập trang</span>
                <div class="count">567</div>

            </div>


        </div>
        <!-- /top tiles -->

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
                            @foreach($bills as $index => $bill)
                                <tr class="even pointer">

                                    <td class=" ">{{ $index+1 }}</td>
                                    <td class=" "><a
                                                href="{{ route('admin.bill.show', $bill->id) }}">{{$bill->date_order}}</a>
                                    </td>
                                    <td class=" ">{{ $bill->customer->name }}</td>
                                    <td class=" ">{{ number_format($bill->total) }} </td>
                                    <td class=" ">{{ $bill->status  }}</td>
                                    <!--  -->
                                    </td>
                                </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <br/>

    </div>

@endsection
@push('css')
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
@endpush
@push('script')
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

@endpush