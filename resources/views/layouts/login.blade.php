<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="{{asset('components/lte/img/medikaria_logo.ico')}}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @section('head-title')<title>Medikaria | Log in</title>@show
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    @include('layouts.include.logincss')
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
      <img src="http://i.imgur.com/YggWOH4.png" alt="login">
    </div>
    <div class="login-box-body">
        @yield('content')
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- Scripts -->
@include('layouts.include.loginjs')
</body>
</html>
