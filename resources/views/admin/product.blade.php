<!DOCTYPE html>
<head>
    <title>Quản Lí Sản Phẩm</title>
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        #cke_1_contents .cke_contents cke_reset {
            max-height: 100px;
        }
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
<body ng-app="myApp" ng-controller="productcontroller">
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
                                        Thêm Sản Phẩm
                                    </button>
                                    <div class="input-group" style="margin-left: 907px;">
                                        <input ng-model="search" style="width: 200px;height: 35px;margin-top: -7px;" type="text" class="form-control" placeholder="Tìm Kiếm">
                                        <span style="background: #d3d3d3;padding: 9px 11px;margin-top: 3px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;" id="basic-addon1"><i class="fas fa-search"></i></span>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Quản Lí Sản Phẩm
                                        </div>
                                        <div>
                                            <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true},"filtering": {"enabled": true},"sorting": {"enabled": true}}'>
                                                <thead>
                                                <tr style="text-align: center;">
                                                    <th style="text-align:center;">#</th>
                                                    <th style="text-align:center;width: 100px;">Hình Ảnh</th>
                                                    <th ng-click="sortBy('tensanpham')" style="text-align:center;">Tên Sản Phẩm
                                                        <span class="glyphicon" ng-show="sortColumn=='tensanpham'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                    </th>
                                                    <th ng-click="sortBy('product_price')" style="text-align:center;">Giá Sản Phẩm
                                                        <span class="glyphicon" ng-show="sortColumn=='product_price'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                    </th>
                                                    <th ng-click="sortBy('soluong')" style="text-align:center;width: 140px;">Tags
                                                        <span class="glyphicon" ng-show="sortColumn=='soluong'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                    </th>
                                                    <th ng-click="sortBy('khuyenmai')" style="text-align:center;width: 180px;">Size
                                                        <span class="glyphicon" ng-show="sortColumn=='khuyenmai'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                    </th>
                                                    <th ng-click="sortBy('khuyenmai')" style="text-align:center;">Loại Sản Phẩm
                                                        <span class="glyphicon" ng-show="sortColumn=='khuyenmai'" ng-class="{'glyphicon-triangle-top': !reverse, 'glyphicon-triangle-bottom': reverse}"></span>
                                                    </th>
                                                    <th style="text-align:center;">Trạng Thái</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr style="text-align: center;" ng-repeat="pro in products | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                                                    <td style="vertical-align:middle;">@{{$index+1}}</td>
                                                    <td style="vertical-align:middle;"><img src="@{{pro.product_image1}}" style='width:70px' width="70px;" alt=""></td>
                                                    <td style="vertical-align:middle;">@{{pro.product_name}}</td>
                                                    <td style="vertical-align:middle;">$@{{ pro.product_price | number : 2 }}</td>
                                                    <td style="text-align: center;line-height: initial;vertical-align:middle;">
                                                        <small ng-repeat="prod in pro.tags" style="margin-bottom: 10px;">
                                                                <span  style="padding: 7px;background:#b599b6;color: white;border-radius: 5px;">@{{prod.tags_name}}
                                                                </span><br><br>
                                                        </small>

                                                    </td>
                                                    <td style="text-align: center;line-height: initial;vertical-align:middle;">
                                                        <small ng-repeat="pros in pro.size" style="margin-bottom: 10px;">
                                                                <span  style="text-align: center;padding: 5px;background: #b599b6;color: white;border-radius: 5px;"> &nbsp;@{{pros.size_name}}
                                                                </span>&nbsp;
                                                        </small>

                                                    </td>
                                                    <td style="vertical-align:middle;">@{{pro.brand.brand_name}}</td>
                                                    <td style="vertical-align:middle;" ng-if="pro.product_token=='eye'"><span style="font-size: 12px;background: #25ad25;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Hoạt Động</span></td>
                                                    <td style="vertical-align:middle;" ng-if="pro.product_token=='eye-slash'"><span style="font-size: 12px;background: #a90321;padding: 4px;color: white;font-weight: 600;border-radius: 5px;">Tạm Ẩn</span></td>
                                                    <td style="vertical-align:middle;width: 161px;">
                                                        <div class="top-nav1 clearfix">
                                                            <ul class="nav pull-right top-menu">
                                                                <li class="dropdown">
                                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                                        <span class="username">&nbsp;&nbsp;Tùy Chọn</span>
                                                                        <b class="caret"></b>
                                                                    </a>
                                                                    <ul class="dropdown-menu extended logout">
                                                                        <li ng-click="showmodal(pro.id)" data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="fas fa-eye"></i>Xem Thông Tin</a></li>
                                                                        <li ng-click="showmodal(pro.id)"data-toggle="modal" data-target="#modal-lg"><a href="#"><i class="far fa-edit"></i>Sửa Thông Tin</a></li>
                                                                        <li><a href="#"><i class="far fa-thumbs-up"></i>Hoạt Động</a></li>
                                                                        <li><a href="#"><i class="far fa-thumbs-down"></i>Ngừng Hoạt Động</a></li>
                                                                        <li ng-click="deleteClick(pro.id)"><a href="#"><i class="fas fa-eraser"></i>Xóa Sản Phẩm</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr ng-if="!products || (products | filter: search).length == 0">
                                                    <td colspan="9" style="text-align: center">
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
                                                <ul style="float:left;font-size: 14px;"  class="pagination" uib-pagination="" total-items="products.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="product" method="post" enctype="multipart/form-data" style="border-radius: 5px;" class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        @csrf
                                        <div class="modal-dialog modal-xl" style="width: 1400px;">
                                            <div class="modal-content" style="border-radius: 20px;">
                                                <div class="modal-header" style="background: #8B5C7E;color: white;border-top-left-radius: 10px;border-top-right-radius: 10px;">
                                                    <h4 class="modal-title">@{{modalTitle}}</h4>
                                                </div>
                                                <div class="modal-body" style="background-image: linear-gradient(to bottom,#FEC49F, #CEA0AB );height: 550px; ">
                                                    <div class="modal-body" style="display: inline-flex">
                                                        <div style="width: 400px;height: 510px;border: 2px solid #CEDED1;background: #EEF9F0;padding : 20px;border-radius: 10px;margin-left: -15px;">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" style="font-size: 12px;">Tên sản phẩm</label><br>
                                                                <div style="display: inline-flex">
                                                                    <span style="width: 48px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-box-open"></i></span>
                                                                    <input type="text" style="margin-left: -3px;width: 310px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" name="product_name" ng-model="product.product_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group" style="margin-top: -8px;">
                                                                <label for="exampleInputEmail1" style="font-size: 12px;">Hình ảnh sản phẩm <span style="color: darkred">*</span></label><br>
                                                                <label style="display: inline-flex">
                                                                    <span style="width: 48px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-image"></i></span>
                                                                    <input type="file" name="product_image1" placeholder="product.product_image1" style="margin-left: -3px;width: 310px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control">
                                                                    <span style="margin-top: 10px;font-size: 12px;margin-left: 10px;">@{{ product.product_imagename1 }}</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group" style="margin-top: -8px;">
                                                                <label for="exampleInputEmail1" style="font-size: 12px;">Hình ảnh đính kèm <span style="color: darkred">*</span></label><br>
                                                                <label style="display: inline-flex">
                                                                    <span style="width: 48px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-image"></i></span>
                                                                    <input type="file" name="product_image2" placeholder="product.product_image2"  style="margin-left: -3px;width: 310px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                                    <span style="margin-top: 10px;font-size: 12px;margin-left: 10px;">@{{ product.product_imagename2 }}</span>

                                                                </label>
                                                                <label style="display: inline-flex;margin-top: 11px;margin-bottom: 11px;">
                                                                    <span style="width: 48px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-image"></i></span>
                                                                    <input type="file" name="product_image3" placeholder="product.product_image3"  style="margin-left: -3px;width: 310px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                                    <span style="margin-top: 10px;font-size: 12px;margin-left: 10px;">@{{ product.product_imagename3 }}</span>

                                                                </label>
                                                            </div>
                                                            <div class="form-group" style="margin-top: -20px;">
                                                                <div class="form-group" style="">
                                                                    <label for="exampleInputEmail1" style="font-size: 12px;">Giá Sản Phẩm</label><br>
                                                                    <div style="display: inline-flex">
                                                                        <span style="width: 48px;height: 35px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-dollar-sign"></i></span>
                                                                        <input type="text" name="product_price" ng-model="product.product_price" style="margin-left: -3px;width: 180px;height: 35px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;  " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                                    </div>
                                                                    <label for="exampleInputEmail1" style="font-size: 13px;margin-left: 20px;">Hiển Thị</label>
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="product_token" ng-model="product.product_token">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="form-group" style="margin-top: -7px;">
                                                                    <label for="exampleInputEmail1" style="font-size: 12px;">Mua từ (sp)</label>
                                                                    <label for="exampleInputEmail1" style="font-size: 12px;margin-left: 105px;">Đơn giá (vnđ)</label><br>
                                                                    <div style="display: inline-flex">
                                                                        <input type="text" name="product_quantilysale" ng-model="product.product_quantilysale" style="width: 180px;" class="form-control">
                                                                        <input type="text" name="product_pricesale" ng-model="product.product_pricesale" style="width: 180px;" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: 10px;width: 322px;height: 510px;border: 2px solid #CEDED1;background: #EEF9F0;padding : 20px;border-radius: 10px;">


                                                            <div class="form-group" >
                                                                <div >
                                                                    <table>
                                                                        <tr>
                                                                            <label for="exampleInputEmail1" style="font-size: 12px;margin-top: 5px;">Chọn size sản phẩm </label>
                                                                            <button style="margin-left: 120px;border-radius: 3px;width: 20px;height: 20px;padding: 0;background:#7ab919;color: white" type="button" class="btn btn-sm" onclick="addRows()"><i class="far fa-plus-square"></i></button>
                                                                            <button style="margin-left:5px;border-radius: 3px;width: 20px;height: 20px;padding: 0;background:#881010 " type="button" class="btn btn-sm btn-danger" onclick="deleteRows()"><i class="fas fa-minus-circle"></i></button>
                                                                        </tr>
                                                                    </table>
                                                                    <table id="emptbl" style="margin-top: 10px;">
                                                                        <td id="col0">
                                                                            <label style="font-size: 12px;">Size</label>
                                                                            <select style="width: 100px;" class="form-control" name="size_name[]" required>
                                                                                <option selected disabled>-- Size --</option>
                                                                                <option value="S">S</option>
                                                                                <option value="M">M</option>
                                                                                <option value="L">L</option>
                                                                                <option value="XL">XL</option>
                                                                                <option value="OverSize">OverSize</option>
                                                                            </select>
                                                                        </td>
                                                                        <td id="col1">
                                                                            <label style="font-size: 12px;margin-left: 10px;">Số lượng</label>
                                                                            <input style="width: 80px;margin-left: 10px;" type="text" class="form-control" placeholder="Số Lượng" name="size_productprice[]"></td>
                                                                        <td id="col2">
                                                                            <label style="font-size: 12px;margin-left: 10px;">Sale</label>
                                                                            <input type="text" style="width: 80px;margin-left: 10px;" class="form-control" placeholder="Sale" name="size_productsale[]"></td>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="margin-left: 10px;width: 625px;height: 160px;border: 2px solid #CEDED1;background: #EEF9F0;padding : 20px;border-radius: 10px;">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1" style="font-size: 13px;">Nhập tag sản phẩm</label><br>
                                                                <div>
                                                                    <select name="product_tags[]"  class="form-control tags_select_choose" multiple="multiple" style="width: 582px;">
                                                                        <option selected disabled>Tags</option></select>
                                                                </div>
                                                                <div style="margin-top: 5px;">
                                                                    <label for="exampleInputEmail1" style="font-size: 13px;">Chọn danh mục <span style="color: darkred">*</span></label><br>
                                                                    <label style="display: inline-flex">
                                                                        <span style="width: 47px;height: 36px;" class="input-group-addon" id="basic-addon1"><i class="fas fa-align-justify"></i></span>
                                                                        <select ng-value="product.brand_id" ng-model="product.brand_id" name="brand_id" style="width: 582px;height: 36px;border-color: #ccc;font-size: 14px;padding-left: 6px;border-bottom-right-radius: 5px;border-top-right-radius: 5px;" class="custom-select" id="gender2">
                                                                            {!! $htmlOption !!}
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div style="margin-left: -22px;margin-top: 25px;width: 625px;height: 340px;border: 2px solid #CEDED1;background: #EEF9F0;padding :20px;border-radius: 10px;">
                                                                <div class="form-group">
                                                                    <textarea ck-editor rows="2" style="padding: 0;" name="product_description" ng-model="product.product_description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between" style="background: #CEA0AA;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;">
                                                    <button style="width: 80px; height: 36px;float: left;background: #EEF9F0" type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-primary" style="background: #8B5C7E;border: 2px solid #8B5C7E" ng-click="saveData()">@{{modalTitle}}</button>
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
        <!-- footer -->
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
<script src="{!! asset('/angularjs/admin/productcontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.6.0/angular-locale_de-de.js"></script>

<script>
    $(document).on('ready', function() {
        $(document).on('click', '.tag', function() {
            var tagsInput = $('input[data-role="tagsinput"]');
            var valuesStr = tagsInput.val();
            var values = valuesStr.split(',');
            var bootstrapTagsInput = $('.bootstrap-tagsinput');
            var input = bootstrapTagsInput.find('input');
            var index = bootstrapTagsInput.children().index($(this));
            value = values[index];
            var htmlStr = 	'<span class="tag label label-info" id="js-edit-container">' +
                '<input type="text" class="form-control" id="js-edit-input" style="background-color: white">' +
                '</span>'
            $(this).after(htmlStr);
            $(this).hide();
            input.hide();
            var editContainer = $('#js-edit-container');
            var editInput = $('#js-edit-input');
            editContainer.data('value', value);
            editInput.val(value);
            editInput.focus();
        });
        $(document).on('focusout', '#js-edit-input', function() {
            var bootstrapTagsInput = $('.bootstrap-tagsinput');
            var editContainer = $('#js-edit-container');
            var tags = bootstrapTagsInput.children();
            var index = tags.index(editContainer);
            var tagsInput = $('input[data-role="tagsinput"]');
            var values = tagsInput.val().split(',');
            var value = $(this).val();
            var defaultValue = editContainer.data('value');
            var value = value || defaultValue;
            var input = bootstrapTagsInput.find('input');
            editContainer.remove();
            values[index - 1] = value;
            tagsInput.tagsinput('removeAll');
            for (var i = 0; i < values.length; i++) {
                tagsInput.tagsinput('add', values[i]);
            }
            input.show();
            input.focus();
        });
    });
</script>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
    });
</script>
<script>
    $(function(){
        $(".tags_select_choose").select2({
            tags: true,
            tokenSeparators: [',']
        })
    })
</script>
<script type="text/javascript">
    $(function() {
        $("#sizes").on("click",function() {
            $(".nhapsizes").toggle(this.checked);
        });
        $("#sizem").on("click",function() {
            $(".nhapsizem").toggle(this.checked);
        });
        $("#sizel").on("click",function() {
            $(".nhapsizel").toggle(this.checked);
        });
        $("#sizexl").on("click",function() {
            $(".nhapsizexl").toggle(this.checked);
        });
        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();
    });
</script>
<script>
    function addRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        var cellCount = table.rows[0].cells.length;
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++)
        {
            var cell = 'cell'+i;
            cell = row.insertCell(i);
            var copycel = document.getElementById('col'+i).innerHTML;
            cell.innerHTML=copycel;
            if(i == 2)
            {
                var radioinput = document.getElementById('col2').getElementsByTagName('input');
                for(var j = 0; j <= radioinput.length; j++)
                {
                    if(radioinput[j].type == 'radio')
                    {
                        var rownum = rowCount;
                        radioinput[j].name = 'gender['+rownum+']';
                    }
                }
            }
        }
    }

    function deleteRows()
    {
        var table = document.getElementById('emptbl');
        var rowCount = table.rows.length;
        if(rowCount > '2')
        {
            var row = table.deleteRow(rowCount-1);
            rowCount--;
        }else{
            alert('There should be atleast one row');
        }
    }
</script>
<!-- alert blink text -->
<script>
    function blink_text()
    {
        $('#message_error').fadeOut(700);
        $('#message_error').fadeIn(700);
    }
    setInterval(blink_text,1000);
</script>
<!-- script validate form -->
<script>
    $('#validate').validate({
        reles: {
            'empname[]': {
                required: true,
            },
            'phone[]': {
                required:true,
            },
            'department[]': {
                required:true,
            },
        },
        messages: {
            'empname[]' : "Please input file*",
            'phone[]' : "Please input file*",
            'department[]' : "Please input file*",
        },
    });
</script>
</body>
</html>
