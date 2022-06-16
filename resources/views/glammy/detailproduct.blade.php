
<!DOCTYPE html>
<html lang="zxx" ng-app="myApp" ng-controller="detailproductcontroller">
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
    body{background-color: #ecedee}
    .card{border: none;overflow: hidden}
    .thumbnail_images ul{list-style: none;justify-content: center;display: flex;align-items: center;margin-top:10px}
    .thumbnail_images ul li{margin: 5px;padding: 10px;border: 2px solid #eee;cursor: pointer;transition: all 0.5s}
    .thumbnail_images ul li:hover{border: 2px solid #000}
    .main_image{
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #eee;
        height: 400px;width: 100%;overflow: hidden
    }
    .heart{
        height: 29px;
        width: 29px;
        background-color: #eaeaea;
        border-radius: 50%;
        display: flex;
        justify-content: center;align-items: center}
    .content p{font-size: 12px}
    .ratings span{font-size: 14px;margin-left: 12px}
    .colors{margin-top: 5px}
    .colors ul{list-style: none;display: flex;padding-left: 0px}
    .colors ul li{height: 20px;width: 20px;display: flex;border-radius: 50%;margin-right: 10px;cursor: pointer}
    .colors ul li:nth-child(1){background-color: #6c704d}
    .colors ul li:nth-child(2){background-color: #96918b}
    .colors ul li:nth-child(3){background-color: #68778e}
    .colors ul li:nth-child(4){background-color: #263f55}
    .colors ul li:nth-child(5){background-color: black}
    .right-side{position: relative}
    .search-option{
        position: absolute;
        background-color: #000;
        overflow: hidden;
        align-items: center;
        color: #fff;
        width: 200px;
        height: 200px;
        border-radius: 49% 51% 50% 50% / 68% 69% 31% 32%;
        left: 30%;
        bottom: -250px;
        transition: all 0.5s;cursor: pointer}
    .share{position: absolute;right: 20px;top: 22px}
    .buttons .btn{height: 50px;width: 150px;border-radius: 0px !important}
</style>
</head>
<body class="js" ng-init="detailpro()">
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
    <div class="container mt-5 mb-5"  style="max-width: 980px;">
        <div class="card"  ng-repeat="detailproduct in detailproduct.product">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image" style="padding-left: 17px;">
                            <img src="@{{detailproduct.product_image1}}" id="main_product_image" width="350">
                            <div >
                                <ul id="thumbnail" style="margin-top: -110px;margin-left: 20px;">
                                    <li style="margin-bottom: 15px;"><img onclick="changeImage(this)" src="@{{detailproduct.product_image1}}" width="70"></li>
                                    <li style="margin-bottom: 15px;"><img onclick="changeImage(this)" src="@{{detailproduct.product_image2}}" width="70"></li>
                                    <li><img onclick="changeImage(this)" src="@{{detailproduct.product_image3}}" width="70"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 style="margin-top: 4px;">@{{detailproduct.product_name}}</h3>
                             <span class="heart"><i style="margin-top: 3px;color: #8f0e38" class="fas fa-heart"></i></span>
                        </div>
                        <div class="ratings d-flex flex-row align-items-center" style="font-size: 10px;">
                            <div class="d-flex flex-row" style="color: #F7941D">
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='fas fa-star' ></i>
                                <i class='far fa-star' ></i>
                            </div>
                            <span style="font-size: 12px;">Justin Bieber</span>
                        </div>
                        <h4 style="color: #A00F0F; margin-top: 15px;margin-bottom: 20px;">$@{{detailproduct.product_price| number : 2   }}</h4>

                        <select style="border: 3px solid #333;font-weight: 600;width: 288px;margin-top: 10px;" class="form-control js-example-placeholder-single js-states form-control" ng-model="size" ng-options="size.size_name for size in detailproduct.size">
                            <option style="background: #333;color: white" selected disabled value="">SIZE</option>
                        </select>
                        <input type="hidden" id ="size_name" value="@{{size.size_name}}">
                        <input type="hidden" id="size_productsale" value="@{{size.size_productsale}}">
                        <input type="hidden" id ="product_pricesale" value="@{{detailproduct.product_pricesale}}">
                        <input type="hidden" id="product_quantilysale" value="@{{detailproduct.product_quantilysale}}">
                        <div style="font-size:25px;color:#CCC;display: inline-flex;margin-top: 10px;margin-bottom: 10px;">
                            <input style="width: 35px;height: 35px;background: #333;color: white;border-color: #333;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                            <input style="width: 50px;height: 35px;text-align: center;border: 3px solid #333;margin-left: -3px;" id='quantity' min='1' name='quantity' type='text' value='1' />
                            <input style="width: 35px;height: 35px;background: #333;color: white;margin-left: -2px;border-color: #333;" onclick="var result = document.getElementById('quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                        </div>
                        <div class="mt-3 pr-3 content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <span style="font-size: 11px;">Tags :</span>
                        <div ng-repeat="dtprosizename in detailproduct.tags" style="display: inline-flex">
                            <button style="border-color: #414141;background: #414141;padding: 2px 10px;font-size: 10px;margin-right: 7px;color: white" class="btn-check">@{{dtprosizename.tags_name  }}</button>
                        </div>
                        <br>
                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <a class="add_bag" ng-click="addToCart(detailproduct)" ><button style="margin-top: 0px;width: 200px;height: 53px;background: #333;border:3px solid #333;color: white;font-size: 15px;"><i class="fa fa-shopping-cart"></i> Add To Bag</button></a>
                            <a class="add_lovelist" href="javascript:void(0);" ><button style="margin-top: 0px;margin-left: 20px;background: white;width: 70px;height: 53px;border:3px solid #333;color: black;font-size: 15px;"><i class="fa fa-heart"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Mô tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Đánh giá</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            @{{detailproduct.product_description }}                        </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                Original Levi 501 <br>
                                Button fly<br>
                                Regular fit<br>
                                waist 28"-32 =16"hem<br>
                                waist 33" = 17" hem<br>
                                waist 34"-40"=18" hem<br>
                                Levi's have started to introduce the red tab with just the (R) (registered trade mark) on the red tab<br><br>

                                Size Details:<br>
                                All sizes from 28-40 waist<br>
                                Leg length 30", 32", 34", 36"                        </div>
                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                Day la danh gia
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="product-area section" style="margin-top: -100px;">
    <div class="container" style="max-width: 980px;">
        <div class="row" style="margin-bottom: -50px;">
            <div class="col-12">
                <div class="section-title">
                    <h2>Sản Phẩm Liên Quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="owl-carousel popular-slider">
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12" ng-repeat="splq in detailproduct.product_splq">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="@{{ splq.product_image1 }}" alt="#">
                                                    <img class="hover-img" src="@{{ splq.product_image2 }}" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">@{{ splq.product_name }}</a></h3>
                                                <div class="product-price">
                                                    <span>$@{{ splq.product_price |number:2 }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
                                </div>
                                <div class="single-slider">
                                    <img src="https://via.placeholder.com/569x528" alt="#">
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
@include('glammy.layout.footer')
<script src="{!! asset('/teamplatehome/js/jquery.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/jquery-ui.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/popper.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/bootstrap.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/colors.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/slicknav.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/owl-carousel.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/magnific-popup.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/waypoints.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/finalcountdown.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/nicesellect.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/flex-slider.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/scrollup.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/onepage-nav.min.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/easing.js')!!}"></script>
<script src="{!! asset('/teamplatehome/js/active.js')!!}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{!! asset('/angularjs/angular.min.js')!!}"></script>
<script src="{!! asset('/angularjs/home/detailproductcontroller.js')!!}"></script>
<script src="{!! asset('/angularjs/ui-bootstrap-tpls.min.js')!!}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function changeImage(element) {
        var main_prodcut_image = document.getElementById('main_product_image');
        main_prodcut_image.src = element.src;
    }
</script>
<script>
    $(document).ready(function () {
        $(".cong1").click(function () {
            var amount = $(this).prev().attr("value");
            $(this).prev().attr("value", Number(amount) + 1);
        });
        $(".tru1").click(function () {
            var amount = $(this).next().attr("value");
            if (Number(amount) > 1)
                $(this).next().attr("value", Number(amount) - 1);
        });
    });
</script>
<script>
    $(function(){
        $('select').select2({
            placeholder: {
                id: '-1', // the value of the option
                text: 'Select an option'
            }
        });
    })
</script>
</body>
</html>
