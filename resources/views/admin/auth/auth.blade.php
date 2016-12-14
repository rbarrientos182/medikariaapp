@extends('layouts.login')

@section('styles')

@stop

@section('content')
  <p class="login-box-msg">Iniciar Sesión</p>
    @if($errors->has())
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          <ul class="list-unstyled">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
    <form action="#" method="post">
        {{ csrf_field()}}
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember" id="remember"> Recordarme
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            </div><!-- /.col -->
        </div>
        </form>
    <div class="social-auth-links text-center">
      <p>- Ó -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Iniciar sesión usando</a>
    </div>

    <!-- /.social-auth-links -->
    <a href="{{ url('/password/email') }}">¿Olvidaste tu contraseña?</a><br>
    <a href="#" class="text-center">Registrar un nuevo usuario</a>
@stop

@section('scripts')
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
@stop
