@extends('layouts.default')
@section('head-title')<title>Medikaria | Error 500</title>@stop
@section('section-title')
  <section class="content-header">
    <h1>
      Página de error 500
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Error 500 </li>
    </ol>
  </section>
@stop

@section('content')
  <div class="error-page">
          <h2 class="headline text-red">500</h2>

          <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! Algo salió mal.</h3>

            <p>
              Vamos a trabajar en la solución de inmediato.
              Mientras tanto, usted puede <a href="#">volver al tablero</a> o intenta usar el formulario de búsqueda.
            </p>

            <!--<form class="search-form">
              <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" name="submit" class="btn btn-danger btn-flat"><i class="fa fa-search"></i>
                  </button>
                </div>
              </div>-->
              <!-- /.input-group -->
            <!--</form>-->
          </div>
        </div>
        <!-- /.error-page -->
@stop
