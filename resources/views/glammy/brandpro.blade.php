
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="brandprocontroller">
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
    <style>
        @media all and (min-width: 992px) {

            .sidebar li{ position: relative; }
            .sidebar li .submenu{
                display: none;
                position: absolute;
                left:100%; top:-7px;
                min-width: 240px;
            }
            .sidebar li:hover > .submenu{ display: block; }
        }
        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .sidebar .submenu, .sidebar .dropdown-menu{
                position: static!important;
                margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
            }

        }
        .pagination {
            margin: 0;
            margin-left: 15px;
            margin-top: 40px;
        }
        .pagination li {
            display: inline-block;
            vertical-align: top;
            margin: 0 7px 0 0;
        }
        .pagination li a {
            display: block;
            width: auto;
            height: 40px;
            padding-left: 17px;
            padding-right: 17px;
            font-weight: 400;
            text-align: center;
            line-height: 38px;
            font-size: 11px;
            color: #333;
            border: 1px solid #333;
            border-radius: 0 !important;
            transition: border-color 0.3s ease-in-out, color 0.3s ease-in-out;
            -webkit-transition: border-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }
        .pagination li a:hover,
        .pagination li.active a {
            font-weight: 400;
            line-height: 38px;
            font-size: 11px;
            color: white;
            background: #333;
            border: 1px solid #333;
        }
        .pagination li.active a:hover {
            color: #fff;
            border-color: #333;
            background-color: #333;
        }
        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
            color: #fff;
            border-color: #333;
            background-color: #333;
        }
    </style>
</head>
<body class="js" ng-init="cata()">
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
                        <li><a href="">All Catagorie</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section" style="background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">All Catagorie</h3>
                        <nav class="sidebar">
                            <ul class="nav flex-column">

                                <li class="nav-item"ng-repeat="bra in brands">
                                    <a  class="nav-link" href="/glammy/brand/@{{bra.id}}"> @{{ bra.brand_name}}</a>
                                    <ul class="submenu dropdown-menu" style="margin-top: 6px; background: #f6f7fb;font-size: 12px;margin-left: -50px;" >
                                        <li ng-repeat="bran in bra.children"><a class="nav-link" href="/glammy/brand/@{{bran.id}}">@{{ bran.brand_name}}</a></li>
                                    </ul>

                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Shop By Price -->
                    <div class="single-widget range">
                        <h3 class="title">Shop by Price</h3>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <div class="label-input">
                                        <span>Range:</span><input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="check-box-list">
                            <li>
                                <label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
                            </li>
                            <li>
                                <label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
                            </li>
                        </ul>
                    </div>
                    <!--/ End Shop By Price -->
                    <!-- Single Widget -->
                    <div class="single-widget recent-post">
                        <h3 class="title">Recent post</h3>
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Girls Dress</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Women Clothings</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                        <!-- Single Post -->
                        <div class="single-post first">
                            <div class="image">
                                <img src="https://via.placeholder.com/75x75" alt="#">
                            </div>
                            <div class="content">
                                <h5><a href="#">Man Tshirt</a></h5>
                                <p class="price">$99.50</p>
                                <ul class="reviews">
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                    <li class="yellow"><i class="ti-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Post -->
                    </div>
                    <!--/ End Single Widget -->
                    <!-- Single Widget -->
                    <div class="single-widget category">
                        <h3 class="title">Manufacturers</h3>
                        <ul class="categor-list">
                            <li><a href="#">Forever</a></li>
                            <li><a href="#">giordano</a></li>
                            <li><a href="#">abercrombie</a></li>
                            <li><a href="#">ecko united</a></li>
                            <li><a href="#">zara</a></li>
                        </ul>
                    </div>
                    <!--/ End Single Widget -->
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        <div class="shop-top">
                            <div class="shop-shorter">
                                <div class="single-shorter">
                                    <label>Show :</label>
                                    <select class="form-select" style="width: 80px;height: 33px;">
                                        <option ng-value="1">3</option>
                                        <option ng-value="2">6</option>
                                        <option selected="selected" ng-value="5">9</option>
                                        <option ng-value="10">12</option>
                                        <option ng-value="25">15</option>
                                    </select>
                                </div>
                                <div class="single-shorter">
                                    <label>Sort By :</label>
                                    <select style="width: 120px;height: 33px;">
                                        <option selected="selected">Name</option>
                                        <option>Price</option>
                                        <option>Size</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="view-mode">
                                <li class="active"><a href="#"><i class="fa fa-th-large"></i></a></li>
                                <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12"ng-repeat="pro in products | filter:search | limitTo: itemsPerPage: (currentPage - 1) * itemsPerPage| orderBy: sortColumn: reverse ">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="@{{pro.product_image1}}" alt="#">
                                    <img class="hover-img" src="@{{pro.product_image2}}" alt="#">
                                </a>
                                <div class="button-head">
                                    <div class="product-action">
                                        <a title="Wishlist" href="#"><i class="fas fa-shopping-cart"></i><span>Add to cartt</span></a>
                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                    </div>
                                    <div class="product-action-2">
                                        <a title="Chi Tiết Sản Phẩm" href="/glammy/detaiproduct/@{{pro.id}}"> <i class="fas fa-eye"></i> Chi Tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a  href="/glammy/detaiproduct/@{{pro.id}}">@{{pro.product_name}}</a></h3>
                                <div class="product-price">
                                    <span>$@{{pro.product_price|number:0}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <div>
                            <ul style="float:right; "  class="pagination" uib-pagination="" total-items="products.length" items-per-page="itemsPerPage" ng-model="currentPage" max-size="4" boundary-links="true" num-pages="numPages" class="ng-untouched ng-valid ng-isolate-scope pagination ng-not-empty ng-dirty ng-valid-parse" role="menu"><li role="menuitem" ng-if="::boundaryLinks" ng-class="{disabled: noPrevious()||ngDisabled}" class="pagination-first ng-scope"><a href="" ng-click="selectPage(1, $event)" ng-disabled="noPrevious()||ngDisabled" uib-tabindex-toggle="" class="ng-binding">First</a></li></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Product Style 1  -->

<!-- Start Shop Newsletter  -->
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
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter -->



<!-- Modal -->





<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Single Widget -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="/teamplatehome/images/logo2.png" alt="#"></a>
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
                            <img src="/teamplatehome/images/payments.png" alt="#">
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
    <script src="{!! asset('/angularjs/home/brandprocontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

                element.addEventListener('click', function (e) {

                    let nextEl = element.nextElementSibling;
                    let parentEl  = element.parentElement;
                    let allSubmenus_array =	parentEl.querySelectorAll('.submenu');

                    if(nextEl && nextEl.classList.contains('submenu')) {
                        e.preventDefault();
                        if(nextEl.style.display == 'block'){
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }
                    }
                });
            })
        }
// end if innerWidth
    });
</script>
</body>
</html>
