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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
<body ng-app="myApp" ng-controller="userscontroller">
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
                                <button ng-click="showmodal(0)" type="button" style="border-radius: 5px;width: 150px;margin-bottom: -30px;"  class="btn btn-block btn-success"; data-toggle="modal" data-target="#modal-lg">
                                    Thêm Khách Hàng
                                </button>
                                <div class="input-group" style="margin-left: 907px;">
                                    <input ng-model="search" style="width: 200px;height: 35px;margin-top: -7px;" type="text" class="form-control" placeholder="Tìm Kiếm">
                                    <span style="background: #d3d3d3;padding: 9px 11px;margin-top: 3px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" id="basic-addon1"><i class="fas fa-search"></i></span>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Quản Lí Khách Hàng
                                    </div>
                                    <div>
                                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                                            <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align:center;">#</th>
                                                <th ng-click="sortBy('tensanpham')" style="text-align:left;width: 300px;">Khách Hàng
                                                    <span class="glyphicon" ng-show="sortColumn=='tensanpham'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('product_price')" style="text-align:center;">Mã Khách Hàng
                                                    <span class="glyphicon" ng-show="sortColumn=='product_price'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('product_price')" style="text-align:center;">Tài Khoản
                                                    <span class="glyphicon" ng-show="sortColumn=='product_price'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('soluong')" style="text-align:center;">Địa Chỉ
                                                    <span class="glyphicon" ng-show="sortColumn=='soluong'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('khuyenmai')" style="text-align:center;">Trạng Thái
                                                    <span class="glyphicon" ng-show="sortColumn=='khuyenmai'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="text-align: center;" ng-repeat="us in userss | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                                                <td style="vertical-align:middle;">@{{$index+1}}</td>
                                                <td style="vertical-align:middle;text-align: left;margin-left: 20px;"><b>Họ Tên : </b>@{{us.users_fullname}}<br><b>Số Điện Thoại : </b>@{{us.users_numberphone}}<br><b>Email : </b>@{{us.user_email}}</td>
                                                <td style="vertical-align:middle;"><b><i class="fas fa-stream"></i> @{{us.users_usersid}}</b></td>
                                                <td style="vertical-align:middle;" ng-if="us.users_username == NULL"><b style="color: #c40404;">Chưa Thiết Lập</b></td>
                                                <td style="vertical-align:middle;" ng-if="us.users_username != NULL"><b>@{{ us.users_username }}</b></td>
                                                <td style="vertical-align:middle;">@{{us.users_adress}}</td>
                                                <td style="vertical-align:middle;" ng-if="us.users_status == 1"><span style="font-size: 12px;background: #25ad25;padding: 4px 25px;color: white;font-weight: 600;border-radius: 5px;">Hoạt Động</span></td>
                                                <td style="vertical-align:middle;" ng-if="us.users_status != 1"><span style="font-size: 12px;background: #a90321;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Ngừng Hoạt Động</span></td>
                                                <td style="width: 161px;">
{{--                                                    <button ng-click="showmodal(us.id)"  style="border-radius: 5px;background: #3B6F7C" class="btn-info" data-toggle="modal" data-target="#modal-xl"><i class="far fa-eye"></i></button>--}}
{{--                                                    <button ng-click="showmodal(us.id)" type="button" style="border-radius: 5px;background: #DB860F"  class="btn-warning"; data-toggle="modal" data-target="#modal-lg">--}}
{{--                                                        <i class="fas fa-edit"></i>--}}
{{--                                                    </button>--}}
{{--                                                    <button style="border-radius: 5px;background: #A03131" class="btn-danger" ng-click="deleteClick(us.id)"><i class="fas fa-trash-alt"></i></button>--}}
                                                    <div class="top-nav clearfix" style="margin-top: 14px;">
                                                        <ul class="nav pull-right top-menu">
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                    <span class="username">&nbsp;&nbsp;Tùy Chọn</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <ul class="dropdown-menu extended logout">
                                                                    <li><a href="#"><i class="fas fa-eye"></i>Xem Thông Tin</a></li>
                                                                    <li ng-click="showmodal(us.id)"data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="fas fa-user-plus"></i>Cấp Tài Khoản</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-up"></i>Hoạt Động</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-down"></i>Ngừng Hoạt Động</a></li>
                                                                    <li ng-click="deleteClick(us.id)"><a href="#"><i class="fas fa-eraser"></i>Xóa</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr ng-if="!userss || (userss | filter: search).length == 0">
                                                <td colspan="6" style="text-align: center">
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
                                            <ul style="float:left;font-size: 14px;"  class="pagination" uib-pagination="" total-items="userss.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li>
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
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Tên Khách Hàng<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-signature"></i></span>
                                                                <input type="text" ng-model="users.users_fullname" style="margin-left: -3px;width: 480px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Tên Tài Khoản<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-user-edit"></i></span>
                                                                <input type="text" ng-model="users.users_username" style="margin-left: -3px;width: 480px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Email<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-at"></i></span>
                                                                <input type="text" ng-model="users.user_email" style="margin-left: -3px;width: 480px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Số Điện Thoại<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
                                                                <input type="text" ng-model="users.users_numberphone" style="margin-left: -3px;width: 480px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Địa Chỉ<span style="color: darkred"> *</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
                                                                <input type="text" ng-model="users.users_adress" style="margin-left: -3px;width: 480px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                            </div>
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
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2022 Visitors. All rights reserved | Design by <a href="https://www.facebook.com/tunxu01/">TuanXu</a></p>
            </div>
        </div>
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
<script src="{!! asset('/angularjs/admin/userscontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    $('select').select2({
        createTag: function (params) {
            var term = $.trim(params.term);
            if (term === '') {
                return null;
            }
            return {
                id: term,
                text: term,
                newTag: true // add additional parameters
            }
        }
    });
</script>
<script>
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })
</script>
<script>
    $(".js-example-tags").select2({
        tags: true
    });
</script>
</body>
</html>
