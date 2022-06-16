
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="cartcontroller">
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
<!-- End Preloader -->

<!-- Header -->
<header class="header shop">
    @if(session()->has('idhome'))
        @include('glammy.layout.headerlogout')
    @else
        @include('glammy.layout.headerlogin')
    @endif
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            @include('glammy.layout.menu')
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>THANH TOÁN TẠI ĐÂY
                    </h2>
                    <p style="font-size: 13px;">Tiến Hành Thanh Toán Những Sản Phẩm Chất Lượng Của Chúng Tôi</p>
                    <!-- Form -->
                    <form class="form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Họ Và Tên<span>*</span></label>
                                    <input type="text" id="bill_fullname" name="name" placeholder="" required="required">
                                </div>
                            </div>
                            <input type="hidden" id="users_id" name="name" value="{{Session::get('idhome')}}" placeholder="" required="required">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Số Điện Thoại<span>*</span></label>
                                    <input type="text" id="bill_phonenumber" name="name" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Địa Chỉ<span>*</span></label>
                                    <input type="email" id="bill_address" name="email" placeholder="" required="required">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <form class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>SẢN PHẨM</h2>
                        <div class="content">
                            <ul  ng-repeat="item in listSP">
                                <li style="margin-bottom: -20px;">@{{item.product_name}}&nbsp; <b>@{{ item.size_name }}</b>
                                        ×&nbsp;@{{item.quantity}}
                                    <span class="price" data-title="Price" ng-if="item.quantity>=item.product_quantilysale">$<span  id="loop">@{{(item.product_price - item.product_pricesale- item.size_productsale) * item.quantity}}</span></span>
                                    <span class="price" data-title="Price" ng-if="item.quantity<item.product_quantilysale">$<span id="loop">@{{(item.product_price - item.size_productsale)*item.quantity}}</span></span></li>
                            </ul>
                            <ul>
                                <li><strong>Sub Total<span id="total"></span></strong></li>
                                <li><strong>(+) Shipping<span>$20</span></strong></li>
                                <li id="" class="last"><strong  style="display: inline-flex">Total<input style="border: none;font-size: 20px;width: 200px;font-weight: 700;margin-left: 210px;" id="total1"></strong></li>
                            </ul>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>Payments</h2>
                        <div class="content">
                            <div class="checkbox" >
                                <span><input id="bill_payment" name="news" value="Giao hàng tiết kiệm" type="radio"> Giao hàng tiết kiệm</span><br>
                                <span><input id="bill_payment" name="news" value="Giao hàng Nhanh" type="radio"> Giao hàng Nhanh</span><br>
                                <span><input id="bill_payment" name="news" value="Viettel Post" type="radio"> Viettel Post</span><br>
                                <span><input id="bill_payment" name="news" value="Chuyển phát nhanh" type="radio"> Chuyển phát nhanh</span>
                            </div>
                        </div>
                    </div>
                    <!--/ End Order Widget -->
                    <!-- Payment Method Widget -->
                    <div class="single-widget payement">
                        <div class="content">
                            <img src="/teamplatehome/images/payment-method.png" alt="#">
                        </div>
                    </div>
                    <!--/ End Payment Method Widget -->
                    <!-- Button Widget -->
                        <div class="single-widget get-button">
                            <div class="content">
                                <div class="button">
                                    <button type="submit" ng-click="CreateHoaDon()" class="btn">TIẾN HÀNH THANH TOÁN</button>
                                </div>
                            </div>
                        </div>
                </form>>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Checkout -->

<!-- Start Shop Services Area  -->
<section class="shop-services section home">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over $100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Peice</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>
</section>
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Newsletter</h4>
                        <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('glammy.layout.footer')
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
<script src="{!! asset('/angularjs/home/cartcontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script type="text/javascript">
    $(function() {
        var TotalValue = 0;
        $("ul #loop").each(function(index,value){
            currentRow = parseFloat($(this).text());
            TotalValue += currentRow
        });
        document.getElementById('total').innerHTML = TotalValue;
        $("#total1").val(((20+TotalValue)));
    });
</script>
</body>
</html>
