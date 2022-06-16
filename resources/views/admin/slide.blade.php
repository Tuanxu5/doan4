<!DOCTYPE html>
<head>
    <title>Quản Lí Slide</title>
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
<body ng-app="myApp" ng-controller="slidecontroller">
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
                                <button  ng-click="showmodal(0)"  type="button" style="border-radius: 5px;width: 130px;margin-bottom: -30px;"  class="btn btn-block btn-success"; data-toggle="modal" data-target="#modal-lg">
                                    Thêm Slide
                                </button>
                                <div class="input-group" style="margin-left: 890px;">
                                    <input ng-model="search" style="width: 200px;height: 35px;margin-top: -7px;" type="text" class="form-control" placeholder="Tìm Kiếm">
                                    <span style="background: #d3d3d3;padding: 9px 11px;margin-top: 3px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" id="basic-addon1"><i class="fas fa-search"></i></span>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Quản Lí Slide
                                    </div>
                                    <div>
                                        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                                            <thead>
                                            <tr style="text-align: center;">
                                                <th style="text-align:center;">#</th>
                                                <th ng-click="sortBy('tensanpham')" style="text-align:center;">Hình Ảnh
                                                    <span class="glyphicon" ng-show="sortColumn=='tensanpham'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('product_price')" style="text-align:left;width: 270px;">Tiêu Đề
                                                    <span class="glyphicon" ng-show="sortColumn=='product_price'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('product_prices')" style="text-align:left;width: 420px;">Mô Tả
                                                    <span class="glyphicon" ng-show="sortColumn=='product_price'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th ng-click="sortBy('khuyenmai')" style="text-align:center;">Trạng Thái
                                                    <span class="glyphicon" ng-show="sortColumn=='khuyenmai'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                </th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr style="text-align: center" ng-repeat="sli in slides | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                                                <td style="vertical-align:middle;">@{{$index+1}}</td>
                                                <td style="vertical-align:middle;"><img src="@{{sli.slide_image}}" width="100px" alt=""></td>
                                                <td style="vertical-align:middle;text-align: left"><b>Tên Slide &nbsp;: </b>@{{sli.slide_name}}<br> <b>Sale Slide : </b>@{{sli.slide_sale}}</td>
                                                <td style="vertical-align:middle;text-align: left;"> @{{ sli.slide_descoration}}</td>
                                                <td style="vertical-align:middle;" ng-if="sli.slide_token=='eye'"><span style="width: 65px;font-size: 12px;background: #25ad25;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Hoạt Động</span></td>
                                                <td style="vertical-align:middle;" ng-if="sli.slide_token=='eye-slash'"><span style="width: 65px;font-size: 12px;background: #a90321;padding: 4px 15px;color: white;font-weight: 600;border-radius: 5px;">Tạm Ẩn</span></td>
                                                <td style="vertical-align: middle;">
                                                    <div class="top-nav1 clearfix">
                                                        <ul class="nav pull-right top-menu">
                                                            <li class="dropdown">
                                                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                    <span class="username">&nbsp;&nbsp;Tùy Chọn</span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <ul class="dropdown-menu extended logout">
                                                                    <li><a href="#"><i class="fas fa-eye"></i>Xem Thông Tin</a></li>
                                                                    <li ng-click="showmodal(sli.id)"data-toggle="modal" data-target="#modal-xl"><a href="#"><i class="far fa-edit"></i>Sửa Thông Tin</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-up"></i> Hoạt Động</a></li>
                                                                    <li><a href="#"><i class="far fa-thumbs-down"></i> Ngừng Hoạt Động</a></li>
                                                                    <li ng-click="deleteClick(sli.id)"><a href="#"><i class="fas fa-eraser"></i>Xóa</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr ng-if="!slides || (slides | filter: search).length == 0">
                                                <td colspan="8" style="text-align: center">
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
                                            <ul style="float:left;font-size: 14px;"  class="pagination" uib-pagination="" total-items="slides.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" action="slide" method="post" style="border-radius: 5px;" class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    @csrf
                                    <div class="modal-dialog modal-xl" style="width: 683px;">
                                        <div class="modal-content" style="border-radius: 20px;">
                                            <div class="modal-header" style="background: #8B5C7E;color: white;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                <h4 class="modal-title">Thêm Slide</h4>
                                            </div>
                                            <div class="modal-body" style="background-image: linear-gradient(to bottom,#FEC49F, #CEA0AB ); ">
                                                <div class="modal-body" style="display: inline-flex">
                                                    <div style="width: 650px;height: 490px;border: 2px solid #CEDED1;background: #EEF9F0;padding : 20px;border-radius: 10px;margin-left: -15px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Tên slide <span style="color: darkred">*</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-chalkboard"></i></span>
                                                                <input type="text" name="slide_name" ng-model="slide.slide_name" style="margin-left: -3px;width: 560px;height: 36px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Slide Sale <span style="color: darkred">*</span></label>
                                                            <label for="exampleInputEmail1" style="font-size: 13px;margin-left: 227px;">Hình Ảnh <span style="color: darkred">*</span></label><br>
                                                            <div style="display: inline-flex;">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                                                                <input type="text" name="slide_sale" ng-model="slide.slide_sale"   style="margin-left: -3px;width: 175px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            </div>
                                                            <label style="display: inline-flex;margin-left: 20px;">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-image"></i></span>
                                                                <input name="slide_image" class="form-control" style=";padding-top:-5px;font-size: 12px;width: 181px;height: 37px;margin-left: -2px;" type="file" ng-model="sli.slide_image" >
                                                            </label>
                                                            <label for="exampleInputEmail1" style="font-size: 13px;margin-left: 20px;">Hiển Thị</label>

                                                            <label class="switch">
                                                                <input  type="checkbox" name="slide_token" ng-model="slide.slide_token" >
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea ck-editor rows="2" name="slide_descoration" ng-model="slide.slide_descoration"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between" style="background: #CEA0AA;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                                                <button style="width: 80px; height: 36px;float: left" type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary" style="background: #8B5C7E;border: 2px solid #8B5C7E" ng-click="savaData()">Thêm Slide</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form enctype="multipart/form-data" style="border-radius: 5px;" class="modal fade" id="modal-xl" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    @csrf
                                    <div class="modal-dialog modal-xl" style="width: 683px;">
                                        <div class="modal-content" style="border-radius: 20px;">
                                            <div class="modal-header" style="background: #8B5C7E;color: white;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                <h4 class="modal-title">Sửa Slide</h4>
                                            </div>
                                            <div class="modal-body" style="background-image: linear-gradient(to bottom,#FEC49F, #CEA0AB ); ">
                                                <div class="modal-body" style="display: inline-flex">
                                                    <div style="width: 650px;height: 490px;border: 2px solid #CEDED1;background: #EEF9F0;padding : 20px;border-radius: 10px;margin-left: -15px;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Tên slide <span style="color: darkred">*</span></label><br>
                                                            <div style="display: inline-flex">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-box-open"></i></span>
                                                                <input type="text" name="slide_name" ng-model="slide.slide_name" style="margin-left: -3px;width: 560px;height: 36px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1" style="font-size: 13px;">Slide Sale <span style="color: darkred">*</span></label>
                                                            <label for="exampleInputEmail1" style="font-size: 13px;margin-left: 227px;">Hình Ảnh <span style="color: darkred">*</span></label><br>
                                                            <div style="display: inline-flex;">
                                                                <span style="width: 48px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                                                                <input type="text" name="slide_sale" ng-model="slide.slide_sale"   style="margin-left: -3px;width: 175px;height: 37px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                            </div>
                                                            <label style="display: inline-flex;margin-left: 20px;">
                                                                <span style="width: 48px;height: 37px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-image"></i></span>
                                                                <input name="slide_image" class="form-control" style=";padding-top:-5px;font-size: 12px;width: 82px;height: 37px;margin-left: -2px;" type="file" value="123" ng-model="slide.slide_image" >
                                                                <img style="margin-left: 10px;margin-top: -5px;" src="@{{slide.slide_image}}" width="100px;" alt="">
                                                            </label>
                                                            <label for="exampleInputEmail1" style="font-size: 13px;margin-left: 20px;">Hiển Thị</label>

                                                            <label class="switch">

                                                                <input ng-if() type="checkbox" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" checked name="slide_token" ng-model="slide.slide_token">
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea ck-editor rows="2" name="slide_descoration" ng-model="slide.slide_descoration"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer justify-content-between" style="background: #CEA0AA;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                                                <button style="width: 80px; height: 36px;float: left" type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary" style="background: #8B5C7E;border: 2px solid #8B5C7E" ng-click="saveData()" value="Upload">Sửa Slide</button>
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
<script src="{!! asset('/angularjs/admin/slidecontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</body>
</html>
