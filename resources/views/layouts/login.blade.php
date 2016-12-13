<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invoice App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    @include('layout::include.css')
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-box-body">
        @yield('content')
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- Scripts -->
@include('layout::include.js')
</body>
</html>
