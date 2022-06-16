<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="/teamplateadmin/css/bootstrap.min.css" >
    <link href="/teamplateadmin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/teamplateadmin/css/style-responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/teamplateadmin/css/font.css" type="text/css"/>
    <link href="/teamplateadmin/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/teamplateadmin/css/morris.css" type="text/css"/>
    <link rel="stylesheet" href="/teamplateadmin/css/monthly.css">
    <script src="/teamplateadmin/js/jquery2.0.3.min.js"></script>
    <script src="/teamplateadmin/js/raphael-min.js"></script>
    <script src="/teamplateadmin/js/morris.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        #datepicker1{
            width:180px;
            margin: 0 20px 20px 20px;
        }
        #datepicker1 > span:hover{
            cursor: pointer;
        }
        #datepicker{
            width:180px;
            margin: 0 20px 20px 20px;
        }
        #datepicker > span:hover{
            cursor: pointer;
        }</style>
    </style>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="index.html" class="logo">
                VISITORS
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success">1000</span>
                    </a>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-important">4</span>
                    </a>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">3</span>
                    </a>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="/teamplateadmin/images/2.png" style="width:30px; height:30px;">
                        <span class="username">Lê Hoàng Tuấn</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/admin/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    @include('admin.layout.slidebar')
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-eye"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Thống Kê Truy Cập</h4>
                            <h3 style="display: inline-flex">{{$visitor_count}}<p style="font-size: 14px;margin-top: 11px;">&nbsp;(Online)</p></h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users" ></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Thống Kê Khách Hàng</h4>
                            <h3 style="display: inline-flex">{{$thongkenguoidung}}<p style="font-size: 14px;margin-top: 11px;">&nbsp;(Thành Viên)</p></h3>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-4 market-update-right">
                            <i style="font-size: 3em;color: white;" class="fa fa-box"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Thống Kê Sản Phẩm</h4>
                            <h3 style="display: inline-flex">{{$thongkesanpham}}<p style="font-size: 14px;margin-top: 11px;">&nbsp</p></h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4 style="color: white">Thống Kê Đơn Hàng</h4>
                            <h3 style="display: inline-flex">{{$thongkedonhang}}<p style="font-size: 14px;margin-top: 11px;">&nbsp;(Đơn Hàng)</p></h3>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- //market-->
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        <!--agileinfo-grap-->
                        <div class="agileinfo-grap">
                            <div class="agileits-box">
                                <header class="agileits-box-header clearfix">
                                    <h3>Thống Kê Doanh Thu</h3>
                                    <form autocomplete="off">
                                        @csrf
                                        <div style="display: inline-flex;">
                                            <label>Từ: </label>
                                            <div style="margin-top: -5px;margin-left: 1px;"  class="input-group date">
                                                <input style="margin: 0;" class="form-control" id="datepicker1"  data-date-format="yyyy-mm-dd" readonly="" type="text">
                                                <span class="input-group-addon" style="padding: 4px 12px;">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </span>
                                            </div>
                                        </div>
                                        <div style="display: inline-flex;width: 700px;margin-left: 30px;">
                                            <label>Đến: </label>
                                            <div style="margin-top: -5px;margin-left: 1px;"  class="input-group date" data-date-format="yyyy-mm-dd">
                                                <input  style="margin: 0;"  class="form-control" id="datepicker"  data-date-format="yyyy-mm-dd" readonly="" type="text">
                                                <span class="input-group-addon" style="padding: 4px 12px;">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </span>
                                            </div>
                                            <input style="margin-left: 30px;width: 90px;background: #0c525d;color: white;margin-top: -6px;" type="button" id="locthongke" class="form-control" value="Lọc">
                                        </div>
                                    </form>
                                    <div class="toolbar">
                                    </div>
                                </header>
                                <div class="agileits-box-body clearfix">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>
                        <!--//agileinfo-grap-->

                    </div>
                </div>
            </div>
            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-4 stats-info widget">
                    <div class="stats-info-agileits">
                        <div class="stats-title">
                            <h4 class="title">Browser Stats</h4>
                        </div>
                        <div class="stats-body">
                            <ul class="list-unstyled">
                                <li>GoogleChrome <span class="pull-right">85%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar green" style="width:85%;"></div>
                                    </div>
                                </li>
                                <li>Firefox <span class="pull-right">35%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar yellow" style="width:35%;"></div>
                                    </div>
                                </li>
                                <li>Internet Explorer <span class="pull-right">78%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar red" style="width:78%;"></div>
                                    </div>
                                </li>
                                <li>Safari <span class="pull-right">50%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar blue" style="width:50%;"></div>
                                    </div>
                                </li>
                                <li>Opera <span class="pull-right">80%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar light-blue" style="width:80%;"></div>
                                    </div>
                                </li>
                                <li class="last">Others <span class="pull-right">60%</span>
                                    <div class="progress progress-striped active progress-right">
                                        <div class="bar orange" style="width:60%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>PRODUCT</th>
                                <th>STATUS</th>
                                <th>PROGRESS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-danger">Overdue</span></td>
                                <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Aliquam</td>
                                <td><span class="label label-info">Out of stock</span></td>
                                <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Lorem ipsum</td>
                                <td><span class="label label-success">In progress</span></td>
                                <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Aliquam</td>
                                <td><span class="label label-warning">New</span></td>
                                <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
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
    <!--main content end-->
</section>
<script src="/teamplateadmin/js/bootstrap.js"></script>
<script src="/teamplateadmin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/teamplateadmin/js/scripts.js"></script>
<script src="/teamplateadmin/js/jquery.slimscroll.js"></script>
<script src="/teamplateadmin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/teamplateadmin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/teamplateadmin/js/jquery.scrollTo.js"></script>
<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script>
    $('#locthongke').click(function (){
        var _token = $('input[name="_token"]').val();
        var from_date = $('#datepicker1').val();
        var to_date = $('#datepicker').val();
            // alert(from_date);
            // alert(to_date);
        $.ajax({
            url: "{{url('/filter-by-date')}}",
            method: "POST",
            dataType:"JSON",
            data: {from_date:from_date,to_date:to_date,_token:_token},
            success:function(data)
            {
                chart.setData(data);
            }
        })
        });
</script>
<script>
    $(document).ready(function() {
        chart = new Morris.Area({
            element: 'chart',
            lineColors:['#eb6f6f'],
            parseTime: false,
            hideHover:'auto',
            xkey: 'haha',
            ykeys: ['bill_doanhthu'],
            labels: ['Doanh Thu'],
        });
    });
</script>
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',
        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });
        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#datepicker1").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());
    });
</script>
<!-- //calendar -->
</body>
</html>
