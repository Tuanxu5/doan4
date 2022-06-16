<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="/teamplateadmin/css/bootstrap.min.css" >
    <link href="/teamplateadmin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/teamplateadmin/css/style-responsive.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/teamplateadmin/css/font.css" type="text/css"/>
    <link href="/teamplateadmin/css/font-awesome.css" rel="stylesheet">
    <script src="/teamplateadmin/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>Đăng Nhập Ngay</h2>
        <?php
        $message =Session::get('message');
        if($message)
        {
            echo '<span style="color: red;width: 100%;text-align: center;">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        <form action="{{ URL::to('/glammy-login') }}" method="post">
            {{ csrf_field() }}
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <input type="text" class="ggg" name="users_username" placeholder="Tài Khoản" required="">
            <input type="password" class="ggg" name="users_password" placeholder="Mật Khẩu" required="">

            <span><input type="checkbox" style="font-size: 15px;margin-right:5px;"/>Nhớ tài khoản</span>
            <h6><a style="font-size: 15px;display: inline-block;width: 300px;margin-left: -5px;" href="#">Quên mật khẩu ?</a></h6>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng Nhập" name="login">
        </form>
        <p>Bạn chưa có tài khoản ?<a href="/glammy/signin">Đăng kí ngay</a></p>
    </div>
</div>
<script src="/teamplateadmin/js/bootstrap.js"></script>
<script src="/teamplateadmin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/teamplateadmin/js/scripts.js"></script>
<script src="/teamplateadmin/js/jquery.slimscroll.js"></script>
<script src="/teamplateadmin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/teamplateadmin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/teamplateadmin/js/jquery.scrollTo.js"></script>
</body>
</html>
