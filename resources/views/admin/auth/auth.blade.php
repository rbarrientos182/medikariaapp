@extends('layout::login')

@section('styles')

@stop

@section('content')
  <p class="login-box-msg">Iniciar Sesión</p>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>¡ Vaya !</strong> tuvimos un problema.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url'=>url('/auth/login'),'class'=>'form-signin']) !!}
        <div class="form-group has-feedback">
            {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email']) !!}
            <span class="fa fa-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            {!! Form::password('password', ['class'=>'form-control','placeholder'=>'Contraseña']) !!}
            <span class="fa fa-lock form-control-feedback"></span>
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

    {!! Form::close() !!}
    <a href="{{ url('/password/email') }}">Olvidaste tu contraseña?</a><br>
@stop

@section('scripts')

@stop
