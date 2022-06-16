
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="historycheckoutcontroller">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eshop - eCommerce HTML5 Template.</title>
    <link rel="icon" type="image/png" href="/teamplatehome/images/favicon.png">
    <link rel="stylesheet" href="/teamplatehome/css/bootstrap.css">
    <link rel="stylesheet" href="/teamplatehome/css/magnific-popup.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/font-awesome.css">
    <link rel="stylesheet" href="/teamplatehome/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/themify-icons.css">
    <link rel="stylesheet" href="/teamplatehome/css/niceselect.css">
    <link rel="stylesheet" href="/teamplatehome/css/animate.css">
    <link rel="stylesheet" href="/teamplatehome/css/flex-slider.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/owl-carousel.css">
    <link rel="stylesheet" href="/teamplatehome/css/slicknav.min.css">
    <link rel="stylesheet" href="/teamplatehome/css/reset.css">
    <link rel="stylesheet" href="/teamplatehome/style.css">
    <link rel="stylesheet" href="/teamplatehome/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<header class="header shop">
    <!-- Topbar -->
    @if(session()->has('idhome'))
        @include('glammy.layout.headerlogout')
    @else
        @include('glammy.layout.headerlogin')
    @endif
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav" style="margin-left: -50px;">
                                            <li class="active"><a href="/glammy">Home</a></li>
                                            <li ><a href="#">All Catagories<i class="ti-angle-down"></i></a>
                                                <ul class="dropdown" >
                                                    <li ng-repeat="br in brands"><a href="/glammy/brand/@{{br.id}}">Danh mục @{{br.brand_name}}</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Lịch Sử Mua Sắm</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Chờ Xác Nhận</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Đang Giao</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Đã Giao</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Đã Hủy</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Hoàn Trả</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="shopping-cart section" style="margin-top: 30px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Shopping Summery -->
                                                <table class="table shopping-summery">
                                                    <thead>
                                                    <tr class="main-hading">
                                                        <th>Mã Vận Đơn</th>
                                                        <th>Khách Hàng</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Địa Chỉ</th>
                                                        <th class="text-center">Phương Thức Vận Chuyển</th>
                                                        <th class="text-center" style="width: 175px;">Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                    @foreach($choxacnhan as $cxn)
                                                        <tr style="text-align: center;">
                                                            <td><i class="fas fa-qrcode"></i> {{$cxn->bill_orderid}}<br><i class="fas fa-clock"></i> {{$cxn->bill_datesend}}</td>
                                                            <td>{{$cxn->bill_fullname   }}</td>
                                                            <td>{{$cxn->bill_phonenumber}}</td>
                                                            <td>{{$cxn->bill_address}}</td>
                                                            <td>{{$cxn->bill_payment}}</td>
                                                            @if($cxn->bill_status ==0)
                                                                <td ><span style="border-radius: 5px;border-color: #cb2222;padding: 2px;background: #cb2222;color: white">Chờ Xác Nhận</span></td>
                                                            @endif
                                                            <td style="cursor: pointer;">
                                                                <form action="{{URL::to('dahuy',['id'=>$cxn->id])}}" method="post">@csrf<input style="padding: 4px;border-radius: 5px;background: #2e2e2e;border-color: #2e2e2e;color: white;" type="submit" value="Hủy Đơn"></form></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kids" role="tabpanel">
                            <div class="tab-single">
                                <div class="shopping-cart section" style="margin-top: 30px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Shopping Summery -->
                                                <table class="table shopping-summery">
                                                    <thead>
                                                    <tr class="main-hading">
                                                        <th>Mã Vận Đơn</th>
                                                        <th>Khách Hàng</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Địa Chỉ</th>
                                                        <th class="text-center">Phương Thức Vận Chuyển</th>
                                                        <th class="text-center">Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                    @foreach($danggiao as $dgiao)
                                                        <tr style="text-align: center;">
                                                            <td><i class="fas fa-qrcode"></i> {{$dgiao->bill_orderid}}<br><i class="fas fa-clock"></i> {{$dgiao->bill_datesend}}</td>
                                                            <td>{{$dgiao->bill_fullname   }}</td>
                                                            <td>{{$dgiao->bill_phonenumber}}</td>
                                                            <td>{{$dgiao->bill_address}}</td>
                                                            <td>{{$dgiao->bill_payment}}</td>
                                                            @if($dgiao->bill_status ==2)
                                                                <td style="width: 138px;"><span style="border-radius: 5px;border-color: #e38e2f;padding: 2px;background: #e38e2f;color: white">Đang Giao</span></td>
                                                            @endif
                                                            <td style="cursor: pointer;">
                                                                <form action="{{URL::to('xacnhannhanhang',['id'=>$dgiao->id])}}" method="post">@csrf<input style="padding: 4px;border-radius: 5px;background: #40ad14;border-color: #40ad14;color: white;" type="submit" value="Xác Nhận"></form></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="accessories" role="tabpanel">
                            <div class="tab-single">
                                <div class="shopping-cart section" style="margin-top: 30px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Shopping Summery -->
                                                <table class="table shopping-summery">
                                                    <thead>
                                                    <tr class="main-hading">
                                                        <th>Mã Vận Đơn</th>
                                                        <th>Khách Hàng</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Địa Chỉ</th>
                                                        <th class="text-center">Phương Thức Vận Chuyển</th>
                                                        <th class="text-center">Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                    @foreach($dagiao as $dagiao)
                                                        <tr style="text-align: center;">
                                                            <td><i class="fas fa-qrcode"></i> {{$dagiao->bill_orderid}}<br><i class="fas fa-clock"></i> {{$dagiao->bill_datesend}}</td>
                                                            <td>{{$dagiao->bill_fullname   }}</td>
                                                            <td>{{$dagiao->bill_phonenumber}}</td>
                                                            <td>{{$dagiao->bill_address}}</td>
                                                            <td>{{$dagiao->bill_payment}}</td>
                                                            @if($dagiao->bill_status ==3)
                                                                <td ><span style="border-radius: 5px;border-color: #1ce02b;padding: 2px;background: #1ce02b;color: white">Hoàn Thành</span></td>
                                                            @endif
                                                            <td style="cursor: pointer;">
                                                                <form action="{{URL::to('hoantra',['id'=>$dagiao->id])}}" method="post">@csrf<input style="padding: 4px;border-radius: 5px;background: #eae71e;border-color: #eae71e;color: white;" type="submit" value="Hoàn Trả"></form></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="essential" role="tabpanel">
                            <div class="tab-single">
                                <div class="shopping-cart section" style="margin-top: 30px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Shopping Summery -->
                                                <table class="table shopping-summery">
                                                    <thead>
                                                    <tr class="main-hading">
                                                        <th>Mã Vận Đơn</th>
                                                        <th>Khách Hàng</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Địa Chỉ</th>
                                                        <th class="text-center">Phương Thức Vận Chuyển</th>
                                                        <th class="text-center">Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                    @foreach($dahuy as $dahuy)
                                                        <tr style="text-align: center;">
                                                            <td><i class="fas fa-qrcode"></i>{{$dahuy->bill_orderid}}<br><i class="fas fa-clock"></i> {{$dahuy->bill_datesend}}</td>
                                                            <td>{{$dahuy->bill_fullname   }}</td>
                                                            <td>{{$dahuy->bill_phonenumber}}</td>
                                                            <td>{{$dahuy->bill_address}}</td>
                                                            <td>{{$dahuy->bill_payment}}</td>
                                                            @if($dahuy->bill_status ==4)
                                                                <td ><span style="border-radius: 5px;border-color: #cb2222;padding: 2px;background: #cb2222;color: white">Đã Hủy</span></td>
                                                            @endif
                                                            <td style="cursor: pointer;">Mua Lại</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="prices" role="tabpanel">
                            <div class="tab-single">
                                <div class="shopping-cart section" style="margin-top: 30px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Shopping Summery -->
                                                <table class="table shopping-summery">
                                                    <thead>
                                                    <tr class="main-hading">
                                                        <th>Mã Vận Đơn</th>
                                                        <th>Khách Hàng</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Địa Chỉ</th>
                                                        <th class="text-center">Phương Thức Vận Chuyển</th>
                                                        <th class="text-center">Trạng Thái</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody >
                                                    @foreach($hoantra as $hoantra)
                                                        <tr style="text-align: center;">
                                                            <td><i class="fas fa-qrcode"></i> {{$hoantra->bill_orderid}}<br><i class="fas fa-clock"></i> {{$hoantra->bill_datesend}}</td>
                                                            <td>{{$hoantra->bill_fullname   }}</td>
                                                            <td>{{$hoantra->bill_phonenumber}}</td>
                                                            <td>{{$hoantra->bill_address}}</td>
                                                            <td>{{$hoantra->bill_payment}}</td>
                                                            @if($hoantra->bill_status ==5)
                                                                <td ><span style="border-radius: 5px;border-color: #4b4b4b;padding: 3px;background: #4b4b4b;color: white">Hoàn Trả</span></td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <!-- Product Slider -->
                        <div class="product-gallery">
                            <div class="quickview-slider-active">
                                <div class="single-slider">
                                    <img src="images/modal1.jpg" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="images/modal2.jpg" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="images/modal3.jpg" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="images/modal4.jpg" alt="#">
                                </div>
                            </div>
                        </div>
                        <!-- End Product slider -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-content">
                            <h2>Flared Shift Dress</h2>
                            <div class="quickview-ratting-review">
                                <div class="quickview-ratting-wrap">
                                    <div class="quickview-ratting">
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="yellow fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <a href="#"> (1 customer review)</a>
                                </div>
                                <div class="quickview-stock">
                                    <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                </div>
                            </div>
                            <h3>$29.00</h3>
                            <div class="quickview-peragraph">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                            </div>
                            <div class="size">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Size</h5>
                                        <select>
                                            <option selected="selected">s</option>
                                            <option>m</option>
                                            <option>l</option>
                                            <option>xl</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <h5 class="title">Color</h5>
                                        <select>
                                            <option selected="selected">orange</option>
                                            <option>purple</option>
                                            <option>black</option>
                                            <option>pink</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="quantity">
                                <!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="btn">Add to cart</a>
                                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                            </div>
                            <div class="default-social">
                                <h4 class="share-now">Share:</h4>
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="/teamplatehome/images/logo2.png" style="height: 50px;" alt="#"></a>
                        </div>
                        <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                        <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer links">
                        <h4>Customer Service</h4>
                        <ul>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer social">
                        <h4>Get In Tuch</h4>
                        <!-- Single Widget -->
                        <div class="contact">
                            <ul>
                                <li>NO. 342 - London Oxford Street.</li>
                                <li>012 United Kingdom.</li>
                                <li>info@eshop.com</li>
                                <li>+032 3456 7890</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-flickr"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="images/payments.png" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="/teamplatehome/js/jquery.min.js"></script>
<script src="/teamplatehome/js/jquery-ui.min.js"></script>
<script src="/teamplatehome/js/popper.min.js"></script>
<script src="/teamplatehome/js/bootstrap.min.js"></script>
<script src="/teamplatehome/js/colors.js"></script>
<script src="/teamplatehome/js/slicknav.min.js"></script>
<script src="/teamplatehome/js/owl-carousel.js"></script>
<script src="/teamplatehome/js/magnific-popup.js"></script>
<script src="/teamplatehome/js/waypoints.min.js"></script>
<script src="/teamplatehome/js/finalcountdown.min.js"></script>
<script src="/teamplatehome/js/nicesellect.js"></script>
<script src="/teamplatehome/js/flex-slider.js"></script>
<script src="/teamplatehome/js/scrollup.js"></script>
<script src="/teamplatehome/js/onepage-nav.min.js"></script>
<script src="/teamplatehome/js/easing.js"></script>
<script src="/teamplatehome/js/active.js"></script>
<script src="{!! asset('/angularjs/angular.min.js')!!}"></script>
<script src="{!! asset('/angularjs/home/historycheckoutcontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
