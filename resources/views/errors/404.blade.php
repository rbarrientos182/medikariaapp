@extends('layouts.default')
@section('head-title')<title>Medikaria | Error 400 </title>@stop
@section('section-title')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Página de error 404
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Error 404</li>
    </ol>
  </section>
@stop

@section('content')
  <div class="error-page">
    <h2 class="headline text-yellow">404</h2>

    <div class="error-content">
      <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

      <p>
        No pudimos encontrar la página que buscabas.
        Mientras tanto, usted puede <a href="#">Volver al tablero</a> o intente usar el formulario de búsqueda.
      </p>

      <!--<form class="search-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
            </button>
          </div>
        </div>-->
        <!-- /.input-group -->
      <!--</form>-->
    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
@stop
