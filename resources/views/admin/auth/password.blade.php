<!DOCTYPE html>
@extends('layouts.login')

@section('styles')

@stop
@section('head-title')
    <title>Medikaria | Recuperar Contraseña</title>
@stop
@section('content')
  <p class="login-box-msg">¿Olvidaste tu Contraseña?</p>
    @include('partials.errors')
    @include('partials.alerts')
    <form action="{{route('password_send_path')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Introduce tu Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Enviar Correo</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
    <a href="{{route('auth_show_path')}}">Regresar a Inicio de Sesión</a><br>
@stop

@section('scripts')

@stop
