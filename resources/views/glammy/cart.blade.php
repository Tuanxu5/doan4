
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
                            @include('glammy.layout.menu')
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                    <tr class="main-hading">
                        <th></th>
                        <th style="margin-left: -20px;">PRODUCT</th>
                        <th class="text-center">UNIT PRICE</th>
                        <th class="text-center">QUANTITY</th>
                        <th class="text-center">TOTAL</th>
                        <th class="text-center"></th>
                    </tr>
                    </thead>
                    <tbody ng-repeat="item in filtereds = listSP">
                    <tr >
                        <td class="image" data-title="No"><img  src="@{{item.product_image1}}" alt="#"></td>
                        <td class="product-des" data-title="Description">
                            <p class="product-name"><a href="#">@{{item.product_name }}</a></p>
                            <p class="product-des">Size : @{{item.size_name }}</p>
                        </td>
                        <td class="price" data-title="Price" ng-if="item.quantity>=item.product_quantilysale"><span>@{{item.product_price - item.product_pricesale- item.size_productsale|number:2}}</span></td>
                        <td class="price" data-title="Price" ng-if="item.quantity<item.product_quantilysale"><span>@{{item.product_price - item.size_productsale|number:2}}</span></td>
                        <td style="text-align: center" class="qty" data-title="Qty">@{{item.quantity}}</td>
                        <td class="price" data-title="Price"   ng-if="item.quantity>=item.product_quantilysale">$<span id="loop">@{{(item.product_price - item.product_pricesale- item.size_productsale) * item.quantity}}</span>.00</td>
                        <td class="price" data-title="Price" ng-if="item.quantity<item.product_quantilysale">$<span id="loop">@{{(item.product_price - item.size_productsale)*item.quantity}}</span>.00</td>
                        <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <button class="btn">Áp Dụng</button>
                                    </form>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <table style="font-size: 15px;">
                                    <tbody >
                                    <tr>
                                        <th style="width: 280px;">TotalProduct</th>
                                        <th id="total"></th>
                                    </tr>
                                    <tr>
                                        <th style="width: 280px;">Shipping</th>
                                        <th>$20.00</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 280px;">Total</th>
                                        <th id="total1"></th>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="button5">
                                    <a href="/glammy/checkout" class="btn">Thanh Toán</a>
                                    <a href="/glammy/" class="btn">Tiếp Tục Mua Sắm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop-services section">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        var TotalValue = 0;
        $("tr #loop").each(function(index,value){
            currentRow = parseFloat($(this).text());
            TotalValue += currentRow
        });
        document.getElementById('total').innerHTML ="$"+TotalValue +".00";
        document.getElementById('total1').innerHTML = "$"+(TotalValue+20)+".00";
    });
</script>
</body>
</html>
