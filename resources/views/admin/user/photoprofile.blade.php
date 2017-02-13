<!DOCTYPE html>
@extends('layouts.default')
@section('styles')
<style type="text/css">
    .contenedor-img {
				width: 100px;
        height: 100px;
				text-align: center;
				margin: 0 auto;
				position:static;

			}
    .img1{
      float: left;
      z-index: 0;
    }
    .img2{
      display: none;
      height: 100px;
      width: 100px;
      position: absolute;
      z-index: 1;
      color: #FFFFFF;
      background-color: rgb(124,124,127); opacity: 0.7;
    }
		.contenedor-img:hover .img2{

				display: block;
		}


			/* La parte magica */
			.image_holder:hover .image_info {
				display: block;
			}

</style>
@stop

  @section('head-title')<title>Medikaria | Perfil de Usuario</title>@show
@section('section-title')
  <section class="content-header">
      <h1>
          Perfil
          <small></small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i> <a href="{{route('home_show_path')}}">Inicio</a></li>
          <li class="#"><i class="fa fa-user"></i> <a href="{{route('user_show_profile_path',$user->id)}}">Perfil</a></li>
          <li class="active"><i class="fa fa-camera"></i>Imagen de Perfil</li>
      </ol>
  </section>


@stop
@section('content')

        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <div class="contenedor-img">
                  <div class="img1">
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset('components/lte/img/'.$user->foto) }}" alt="Imagen-Usuario">
                  </div>
                  <a href="{{route('user_show_photoedit_path',$user->id)}}">
                  <div class="img2 img-responsive img-circle">
                    <p></p>
                    <strong><i class="fa fa-camera margin-r-5"></i>
                      <p>Cambiar Imagen</p></strong>
                  </div>
                  </a>
                </div>

                <h3 class="profile-username text-center">{{ $user->nombre }}</h3>

                <p class="text-muted text-center">{{ $user->email }}</p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>No de Pacientes</b> <a class="pull-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Consultas</b> <a class="pull-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Recetas Expedidas</b> <a class="pull-right">13,287</a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Acerca de mí</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong><i class="fa fa-hospital-o margin-r-5"></i> Hospital</strong>

                <p class="text-muted">{{ $hospital->nombrehospital }}</p>

                <hr>
                <strong><i class="fa fa-mobile margin-r-5"></i> Celular</strong>

                <p class="text-muted">
                  {{ $medico->celular }}
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>

                <p class="text-muted">{{ $medico->direccion }}</p>

                <hr>

                <strong><i class="fa fa-file-text margin-r-5"></i> Cédula Profesional</strong>

                <p class="text-muted">{{ $medico->cedula }}</p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> RFC</strong>

                <p "text-muted">{{ $medico->rfc }}</p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Imagen de Perfil</a></li>
              </ul>
              <div class="tab-content">
                <div class="ab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                  </div>
                  <!-- /.post -->
                </div>
                <div class="active tab-pane" id="settings">
                  @include('partials.errors')
                  <form class="form-horizontal" action="{{route('user_patch_path',$user->id)}}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <div class="col-sm-10">
                        <img class="profile-user-img img-responsive" src="{{ asset('components/lte/img/'.$user->foto) }}" alt="imagen-perfil">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile" class="col-sm-2 control-label">Nombre del Archivo</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="_method" value="patch">
                        <input type="hidden" name="idmedico" value="{{$medico->id}}">
                        <input type="file" id="exampleInputFile" class="form-control">
                        <p class="help-block">sube una fotografía de tu rostro, sin gafas ni pañuelos.</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" value="guardar">Actualizar Imagen</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
@stop
