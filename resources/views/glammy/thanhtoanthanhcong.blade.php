
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="cartcontroller">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thanh Toán Thành Công.</title>
    <link rel="icon" type="image/png" style="color: white" href="/teamplatehome/images/favicon.png">
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
<section class="shop checkout section" style="margin-top: 50px;margin-bottom: 50px;">
        <div class="container">
            <div style="text-align: center;">
                <img style="width:250px;" src="/image/thanhtoanthanhcong/muahangthanhcong.jpg" />
                <h2 style="text-align:center;">THANH TOÁN THÀNH CÔNG</h2><br>
                <p style="text-align:center;">CẢM ƠN BẠN ĐÃ QUAN TÂM VÀ MUA SẮM SẢN PHẨM TẠI CỦA HÀNG CỦA CHÚNG TÔI</p><br><br>
                <a style="text-align:center;color: white" class="btn"  href="/glammy/">TIẾP TỤC MUA SẮM</a>
            </div>
        </div><!-- //CONTAINER -->
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
        $("#total1").val((TotalValue+20));
    });
</script>
</body>
</html>
