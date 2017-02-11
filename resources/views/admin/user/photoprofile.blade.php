<!DOCTYPE html>
@extends('layouts.default')
@section('styles')

@stop

  @section('head-title')<title>Medikaria | Cambiar Foto de Perfil</title>@show
@section('section-title')
  <section class="content-header">
      <h1>
          Perfil
          <small></small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i>Inicio</li>
          <li class="#" class="fa fa-user"></i>Perfil</li>
          <li class="active"><i class="fa fa-camera"></i>Foto de Perfil</li>
      </ol>
  </section>
@stop
@section('content')
<!--<div class="row">-->
  <!-- right column -->
  <!--<div class="col-md-12">-->
    <!-- Horizontal Form -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
                <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                <input type="file" id="exampleInputFile"  class="col-sm-2 control-label">

                <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
    <!-- /.box -->
  <!--</div>-->
  <!--/.col (right) -->
<!--</div>-->
<!-- /.row -->
@stop
