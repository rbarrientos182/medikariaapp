@extends('layouts.login')

@section('styles')

@stop
@section('head-title')
    <title>Medikaria | Cambiar Contraseña</title>
@stop
@section('content')
  <p class="login-box-msg">Introduce tu nueva Contraseña</p>
    @include('partials.errors')
    <form action="{{route('password_change_path')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $email }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="password" class="form-control" name="password" placeholder="Nueva Contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Volver a Escribir Contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cambiar Contraseña</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
@stop

@section('scripts')

@stop
