<!DOCTYPE html>
@extends('layouts.login')

@section('styles')

@stop

@section('content')
  <p class="login-box-msg">Iniciar Sesión</p>
    @include('partials.errors')
    <form action="{{route('auth_store_path')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember"> Recordar Contraseña
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!--<div class="social-auth-links text-center">
      <p>- Ó -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Iniciar sesión usando Facebook</a>
    </div>-->

    <!-- /.social-auth-links -->
    <a href="{{route('password_show_path')}}">¿Olvidaste tu contraseña?</a><br>
    <a href="{{route('auth_show_register_path')}}" class="text-center">Registrar un nuevo usuario</a>
@stop

@section('scripts')
  <script type="text/javascript">
  $(function () {
    $('#remember').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@stop
