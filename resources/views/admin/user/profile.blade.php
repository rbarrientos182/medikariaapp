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
          <li class="#"><i class="fa fa-home"></i> Inicio</li>
          <li class="active"><i class="fa fa-user"></i> Perfil</li>
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
                    <img class="profile-user-img img-responsive img-circle" src="{{ asset('components/lte/img/'.$user->foto) }}" alt="User profile picture">
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
                <li class="active"><a href="#settings" data-toggle="tab">Actualizar Perfil</a></li>
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
                      <label for="inputName" class="col-sm-2 control-label">Hospital</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="_method" value="patch">
                        <input type="hidden" name="idmedico" value="{{$medico->id}}">
                        <select class="form-control select2" name="idhospital" id="inputHospital" >
                          @foreach ($hospitales as $hospitals)
                            <option value="{{$hospitals->id}}" @if($hospitals->id==$hospital->id) selected="selected" @endif >{{$hospitals->nombrehospital}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNombre" name="name" placeholder="Nombre" value="{{$user->nombre}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">Contraseña</label>

                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" value="{{$user->password}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword2" class="col-sm-2 control-label">Confirma Contraseña</label>

                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword2" name="password_confirmation" placeholder="Volver a Escribir Contraseña" value="{{$user->password}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCelular" class="col-sm-2 control-label">Celular</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCelular" name="celular" placeholder="Celular" value="{{$medico->celular}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDireccion" name="direccion" placeholder="Dirección" value="{{$medico->direccion}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputCedula" class="col-sm-2 control-label">Cédula Profesional</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputCedula" name="cedula" placeholder="Cédula Profesional" value="{{$medico->cedula}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputRFC" class="col-sm-2 control-label">RFC</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputRFC" name="RFC" placeholder="RFC" value="{{$medico->rfc}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger" value="guardar">Actualizar</button>
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
