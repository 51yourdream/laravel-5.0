<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content','这是content的默认值')
</div>
</body>
</html>
