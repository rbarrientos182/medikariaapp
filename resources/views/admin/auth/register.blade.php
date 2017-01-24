@extends('layouts.login')

@section('styles')

@stop

@section('head-title')
    <title>Medikaria | Registro</title>
@stop
@section('content')
  <p class="login-box-msg">Registrar un Nuevo Usuario</p>
    @include('partials.errors')
    <form action="{{route('auth_create_path')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Nombre Completo">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Volver a Escribir Contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="accept" id="remember"> Acepto los <a href="#">Terminos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!--<div class="social-auth-links text-center">
      <p>- Ó -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Registrate  Usando Facebook</a>
    </div>-->

    <!-- /.social-auth-links -->
    <a href="{{route('auth_show_path')}}" class="text-center">Ya tengo un usuario</a>
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
