<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Glyphicons :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="/teamplateadmin/css/bootstrap.min.css">
    <link href="/teamplateadmin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/teamplateadmin/css/style-responsive.css" rel="stylesheet"/>
    <link href="/teamplateadmin/css/font-awesome.css" rel="stylesheet">
    <script src="/teamplateadmin/js/jquery2.0.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 22px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 19px;
            width: 19px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-image: linear-gradient(to left,#FDC39F,#CEA0AB);
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(18px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>
<body ng-app="myApp" ng-controller="detailordercontroller" ng-init="ordered()">
<section id="container">
    <header class="header fixed-top clearfix">
        <div class="brand">
            <a href="index.html" class="logo">
                VAns ADmin
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <div class="nav notify-row" id="top_menu">
            <ul class="nav top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">8</span>
                    </a>
                </li>
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="far fa-envelope"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                </li>
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="top-nav clearfix">
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/teamplateadmin/images/2.png" style="width:30px; height:30px;">
                        <span class="username">John Doe</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    @include('admin.layout.slidebar')
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="top-nav clearfix">
                    <div style="margin-top: -20px;font-size: 13px;"><a  href="{{URL::to('admin/order')}}"><i class="fas fa-hand-point-left"></i> Back</a></div>
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown" style="margin-top: -22px;margin-bottom: 30px;margin-right: -15px;">
                            <a style="font-size: 12px;" data-toggle="dropdown" class="" href="#">
                                <i style="padding: 5px;" class="fas fa-indent"></i>
                                <span >Xuất Hóa Đơn</span>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <li><a target="_blank" href="{{url('/admin/pdfll')}}"><i class="fas fa-file-pdf"></i>Xuất PDF</a></li>
                                <li><a href="#"><i class="fas fa-file-excel"></i>Xuất ra Excel</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thông Tin Vận Chuyển
                    </div>
                    <div>
                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                            <thead>
                            <tr>
                                <th style="text-align: center;" data-breakpoints="xs sm md" data-title="DOB">Trạng Thái</th>
                                <th style="text-align: left;">Mã Vận Đơn</th>
                                <th style="text-align: center;">Nguồn Đơn Hàng</th>
                                <th style="text-align: center;" data-breakpoints="xs">Nhân Viên Chăm Sóc</th>
                                <th style="text-align: center;">Phương Thức Vận Chuyển</th>

                                <th style="text-align: center;">Ghi Chú</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-expanded="true" ng-repeat="kh in products.bill" style="text-align: center">
                                <td style="vertical-align:middle;" ng-if="kh.bill_status==0"><button style="border-radius: 5px;border-color: #cb2222;padding: 2px;background: #cb2222;color: white">Chờ xác nhận</button></td>
                                <td style="vertical-align:middle;" ng-if="kh.bill_status==1">Đã Duyệt</td>
                                <td style="vertical-align:middle;" ng-if="kh.bill_status==2">Đóng Gói</td>
                                <td style="vertical-align:middle;" ng-if="kh.bill_status==3">Xuất Kho</td>
                                <td style="vertical-align:middle;" ng-if="kh.bill_status==4"><button style="padding: 5px;background: #1ba80a">Hoàn Thành</button></td>
                                <td style="text-align: left"><b><i class="fas fa-qrcode"></i> @{{ kh.bill_orderid }}<br><i class="far fa-clock"></i> @{{ kh.bill_datesend }}</b></td>
                                <td style="vertical-align:middle;">Website</td>
                                <td style="vertical-align:middle;">Admin</td>
                                <td style="vertical-align:middle;">@{{ kh.bill_payment }}</td>


                                <td style="vertical-align:middle;">Không có ghi chú gì cả</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 50px;">
                    <div class="panel-heading">
                        Thông Tin Khách Hàng
                    </div>
                    <div>
                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                            <thead>
                            <tr>
                                <th style="text-align: center;">Họ Và Tên</th>
                                <th style="text-align: center;">Địa Chỉ</th>
                                <th style="text-align: center;" data-breakpoints="xs">Số Điện Thoại</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-expanded="true" ng-repeat="kh in products.bill" style="text-align: center">
                                <td>@{{ kh.bill_fullname }}</td>
                                <td>@{{ kh.bill_address }}</td>
                                <td>@{{ kh.bill_phonenumber }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 50px;">
                    <div class="panel-heading">
                        Chi Tiết Đơn Hàng
                    </div>
                    <div>
                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                            <thead>
                            <tr>
                                <th style="text-align: center;" data-breakpoints="xs">#</th>
                                <th style="text-align: center;">Mã Vận Đơn</th>
                                <th style="text-align: center;">Tên Sản Phẩm</th>
                                <th style="text-align: center;" data-breakpoints="xs sm md" data-title="DOB">Đơn Giá</th>
                                <th style="text-align: center;" data-breakpoints="xs">Số Lượng</th>
                                <th style="text-align: center;" data-breakpoints="xs sm md" data-title="DOB">Tổng Tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr  style="text-align: center;" ng-repeat="dh in filtereds = products.billdetail" data-expanded="true">
                                <td>@{{$index+1}}</td>
                                <td>@{{ dh.bill_orderid }}</td>
                                <td>@{{ dh.product_name }}</td>
                                <td>$@{{ dh.dongia |number :2 }}</td>
                                <td>@{{ dh.quatily }}</td>
                                <td>$@{{ dh.tongtien |number:2}}</td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                            <tr  style="text-align: center;" data-expanded="true">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td ><b>Tổng</b></td>
                                <td></td>
                                <td><b>$@{{ filtereds|total:'tongtien'|number :2}}</b></td>
                            </tr>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
</section>
<script src="/teamplateadmin/js/bootstrap.js"></script>
<script src="/teamplateadmin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/teamplateadmin/js/scripts.js"></script>
<script src="/teamplateadmin/js/jquery.slimscroll.js"></script>
<script src="/teamplateadmin/js/jquery.nicescroll.js"></script>
<script language="javascript" type="text/javascript" src="/teamplateadmin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/teamplateadmin/js/jquery.scrollTo.js"></script>
<script src="{!! asset('/angularjs/angular.min.js')!!}"></script>
<script src="{!! asset('/angularjs/admin/detailordercontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

