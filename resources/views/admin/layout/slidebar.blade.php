<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/admin/')}}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Trang Quản Trị</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-box-open"></i>
                        <span>Quản Lí Sản Phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Thêm sản phẩm</a></li>
                        <li><a href="{{URL::to('/admin/product')}}">Danh sách sản phẩm</a></li>
                        <li><a href="{{URL::to('/admin/brand')}}">Danh mục sản phẩm</a></li>
                        <li><a href="#">Thương hiệu sản phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-basket"></i>
                        <span>Đơn Hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/order')}}">Danh sách</a></li>
                        <li><a href="#">Vận đơn</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('/admin/users')}}">
                        <i class="fa fa-users"></i>
                        <span>Quản Lí Khách Hàng</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/admin/slide')}}">
                        <i class="fas fa-sliders-h"></i>
                        <span>Slide</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <span>Quản Lí Tác Vụ</span>
                    </a>
                </li>
                <li>
                    <a href="#">

                        <i class="fas fa-bars"></i>
                        <span>Quản Lí Menu</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
