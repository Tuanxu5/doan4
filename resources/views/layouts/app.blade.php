<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show
@section('main-content')
    <div class="container">
        @yield('content')
    </div>
@endsection
</body>
</html>
