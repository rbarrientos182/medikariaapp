<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/png" href="{{ asset('components/lte/img/medikaria_logo.ico') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @section('head-title')<title>Medikaria App</title>@show
      <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    @include('layouts.include.css')
</head>
<body class="skin-blue-light">
    <div class="wrapper">
        @include('layouts.include.menu-top')
        <!-- =============================================== -->
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
                    <li class="active"><i class="fa fa-dashboard"></i> Inicio</li>
                </ol>
            </section>
            @show

            <!-- Main content -->
            <section class="content">
                @if($currentUser)
                  Hola {{$currentUser->email}}
                  <a href="{{route('auth_destroy_path')}}"></a>
                @else
                  <a href="{{route('auth_show_path')}}"> Iniciar Sesión</a>
                @endif
                @yield('content')

            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versión</b> 1.0
            </div>
            <strong>Copyright © 2015-2016 </strong> Todos los Derechos Reservados
        </footer>

    </div>
    <!-- Scripts -->
    @include('layouts.include.js')
    {{-- Scripts con todas las alerta posibles --}}
    @include('layouts.include.noti')
</body>
</html>
