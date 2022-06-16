<!DOCTYPE html>
<head>
    <title>Quản Lí Danh Mục Sản Phẩm</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body ng-app="myApp" ng-controller="brandcontroller">
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
                        <span class="username">Lê Hoàng Tuấn</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    @include('admin.layout.slidebar')
    <section id="main-content">
        <section class="wrapper">
            <div class="w3layouts-glyphicon">
                <div class="grid_3 grid_4">
                    <section class="content">
                        <div id="layoutSidenav_content">
                            <main>
                                <button ng-click="showmodal(0)" type="button" style="border-radius: 5px;width: 130px;margin-bottom: -30px;"  class="btn btn-block btn-success"; data-toggle="modal" data-target="#modal-lg">
                                    Thêm Danh Mục
                                </button>
                                <div class="input-group" style="margin-left: 907px;">
                                    <input ng-model="search" style="width: 200px;height: 35px;margin-top: -7px;" type="text" class="form-control" placeholder="Tìm Kiếm">
                                    <span style="background: #d3d3d3;padding: 9px 11px;margin-top: 3px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" id="basic-addon1"><i class="fas fa-search"></i></span>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Danh Mục Sản Phẩm
                                    </div>
                                    <div>
                                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                                            <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align:center;">#</th>
                                                <th ng-click="sortBy('tensanpham')" style="text-align:left;width: 300px;">Tên Danh Mục

                                                    <span class="glyphicon" ng-show="sortColumn=='tensanpham'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th style="text-align:left;width: 300px;">Người Tạo</th>
                                                <th style="text-align: center">Trạng Thái</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody ng-repeat="br in brands | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                                            <tr style="text-align: center;" >
                                                <td style="vertical-align:middle;">@{{$index+1}}</td>
                                                <td style="vertical-align:middle;text-align: left"><b>@{{ br.brand_name }}</b>
                                                </td>
                                                <td style="vertical-align:middle;text-align: left"><i class="fas fa-user-edit"></i> Administrator<br><i class="far fa-clock"></i> @{{ br.created_at }}</td>
                                                <td style="vertical-align:middle;" ng-if="br.brand_stoken=='1'"><span style="font-size: 12px;background: #25ad25;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Hoạt Động</span></td>
                                                <td style="vertical-align:middle;" ng-if="br.brand_stoken=='0'"><span style="font-size: 12px;background: #a90321;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Tạm Ẩn</span></td>
                                                <td style="vertical-align:middle;width: 161px;">

                                                    <div class="top-nav1 clearfix">
                                                        <ul class="nav pull-right top-menu">
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                    <span class="username">&nbsp;&nbsp;Tùy Chọn</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <ul class="dropdown-menu extended logout">
                                                                    <li ng-click="showmodal(br.id)" data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="fas fa-eye"></i>Xem Thông Tin</a></li>
                                                                    <li ng-click="showmodal(br.id)"data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="far fa-edit"></i>Sửa Thông Tin</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-up"></i> Hoạt Động</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-down"></i> Ngừng Hoạt Động</a></li>
                                                                    <li ng-click="deleteClick(br.id)"><a href="#"><i class="fas fa-eraser"></i>Xóa</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr ng-repeat="bran in br.children">
                                                <td style="vertical-align:middle;"></td>
                                                <td style="padding-left: 20px;">&nbsp;&nbsp;&nbsp;<i class="fas fa-indent"></i> <b >@{{ bran.brand_name }}</b><br></td>
                                                <td style="vertical-align:middle;text-align: left"><i class="fas fa-user-edit"></i> Administrator<br><i class="far fa-clock"></i> @{{ br.created_at }}</td>
                                                <td style="vertical-align:middle;text-align: center" ng-if="br.brand_stoken=='1'"><span style="font-size: 12px;background: #25ad25;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Hoạt Động</span></td>
                                                <td style="vertical-align:middle;text-align: center" ng-if="br.brand_stoken=='0'"><span style="font-size: 12px;background: #a90321;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Tạm Ẩn</span></td>
                                                <td style="vertical-align:middle;width: 161px;">

                                                    <div class="top-nav clearfix" style="margin-top: 0px;">
                                                        <ul class="nav pull-right top-menu">
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                    <span class="username">&nbsp;&nbsp;Tùy Chọn</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <ul class="dropdown-menu extended logout">
                                                                    <li ng-click="showmodal(bran.id)" data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="fas fa-eye"></i>Xem Thông Tin</a></li>
                                                                    <li ng-click="showmodal(bran.id)"data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="far fa-edit"></i>Sửa Thông Tin</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-up"></i> Hoạt Động</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-down"></i> Ngừng Hoạt Động</a></li>
                                                                    <li ng-click="deleteClick(bran.id)"><a href="#"><i class="fas fa-eraser"></i>Xóa</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr ng-if="!brands || (brands | filter: search).length == 0">
                                                <td colspan="3" style="text-align: center">
                                                    Không Có Sản Phẩm Nào Để Hiển Thị
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <div class="pull-left" style="width: 100%;margin-left: 15px;">
                                            <ul style="float:left;font-size: 14px;"  class="pagination" uib-pagination="" total-items="brands.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" style="border-radius: 5px;" class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" style="width: 600px;">
                                        <div class="modal-content" style="border-radius: 20px;">
                                            <div class="modal-header" style="background: #8B5C7E;color: white;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                <h4 class="modal-title">@{{modalTitle}}</h4>
                                            </div>
                                            <div class="modal-body" style="background-image: linear-gradient(to bottom,#FEC49F, #CEA0AB ); ">
                                                <div class="modal-body" style="display: inline-flex">
                                                    <div style="width: 568px;border: 2px solid #CEDED1;background: #EEF9F0;margin-left: -15px;padding : 20px;border-radius: 10px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Tên danh mục<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 52px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-signature"></i></span>
                                                                <input type="text" ng-model="brand.brand_name" style="margin-left: -3px;width: 475px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Chọn danh mục cha<span style="color: darkred">*</span></label><br>
                                                            <label style="display: inline-flex">
                                                                <span style="width: 49px;height: 36px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-align-justify"></i></span>
                                                                <select ng-model="brand.brand_parentid" ng-value="brand.brand_parentid" style="width: 480px;height: 36px;border-color: #ccc;font-size: 14px;padding-left: 6px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;" class="js-example-placeholder-single js-states form-control" id="gender2">
                                                                    <option value="0" selected>Chọn danh mục cha</option>
                                                                    {!! $htmlOption !!}
                                                                </select>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between" style="background: #CEA0AA;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                                                <button style="background: #EEF9F0;width: 80px; height: 36px;float: left" type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-primary" style="background: #8B5C7E;border: 2px solid #8B5C7E" ng-click="saveData()">@{{modalTitle}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </main>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        @include('admin.layout.footer')
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
<script src="{!! asset('/angularjs/admin/brandcontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
</body>
<script>
    $(function() {
        $(".js-example-placeholder-single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    });
</script>
</html>
