<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @section('head-title')<title>Medikaria | Home</title>@show
      <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/png" href="{{ asset('components/lte/img/medikaria_logo.ico') }}" />
    @include('layouts.include.css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('layouts.include.menu-top')
        <!-- =============================================== -->
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.include.menu-left')
        <!-- =============================================== -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @section('section-title')
            <section class="content-header">
                <h1>
                    Inicio
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-home"></i> Inicio</li>
                </ol>
            </section>
            @show

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versión</b> 1.0
            </div>
            <strong>Copyright © 2015-2016 </strong> Todos los Derechos Reservados
        </footer>

    </div>
    <!-- ./wrapper -->
    @include('layouts.include.js')
    <!-- Scripts -->
</body>
</html>
