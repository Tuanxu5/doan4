<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <!-- Top Left -->
                <div class="top-left">
                    <ul class="list-main">
                        <li style="padding-left: 3px;"><i class="ti-headphone-alt"></i> 0386426150</li>
                        <li style="margin-left: -10px;"><i class="ti-email"></i> support@shophub.com</li>
                    </ul>
                </div>
                <!--/ End Top Left -->
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <!-- Top Right -->
                <div class="right-content">
                    <ul class="list-main">
                        <li><i class="ti-alarm-clock"></i> <a href="/glammy/historycheckout">Lịch sử mua hàng</a></li>
                        <li style="display: inline-flex;"><i class="ti-user"></i>Xin Chào : @if ($users_fullname = Session::get('users_fullnamehome'))<p> &nbsp;{{ $users_fullname }}</p>@endif
                        <li><i class="ti-power-off"></i><a href="{{URL::to('/glammy/logout')}}">Đăng Xuất</a></li>
                    </ul>
                </div>
                <!-- End Top Right -->
            </div>
        </div>
    </div>
</div>
<!-- End Topbar -->
<div class="middle-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="/teamplatehome/images/logo.png" alt="logo"></a>
                </div>
                <!--/ End Logo -->
                <!-- Search Form -->
                <div class="search-top">
                    <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                    <!-- Search Form -->
                    <div class="search-top">
                        <form class="search-form">
                            <input type="text" placeholder="Search here..." name="search">
                            <button value="search" type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <!--/ End Search Form -->
                </div>
                <!--/ End Search Form -->
                <div class="mobile-nav"></div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="search-bar-top">
                    <div class="search-bar">
                        <form>
                            <input name="search" placeholder="Search Products Here....." type="search">
                            <button class="btnn"><i class="ti-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="right-bar">
                    <!-- Search Form -->
                    <div class="sinlge-bar">
                        <a href="#" class="single-icon"><i class="far fa-heart"></i></a>
                    </div>
                    <div class="sinlge-bar">
                        <a href="#" class="single-icon"><i class="far fa-user-circle"></i></a>
                    </div>
                    <div class="sinlge-bar shopping">
                        <a href="{{URL::to('/glammy/cart')}}" class="single-icon"><i class="ti-bag"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
