<!DOCTYPE html>
@extends('layouts.default')
    @section('styles')
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('components/plugins/iCheck/all.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('components/plugins/colorpicker/bootstrap-colorpicker.min.css')}}">
      <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset('components/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    @stop
@section('head-title')<title>Medikaria | Agregar Pacientes</title>@stop
@section('section-title')
  <section class="content-header">
      <h1>
          Pacientes
          <small>Agregar Pacientes</small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i><a href="{{route('home_show_path')}}"> Inicio</a></li>
          <li class="active"><i class="fa fa-user"></i> Agregar Pacientes</li>
      </ol>
  </section>
@stop

@section('content')
     <div class="row">
       <!-- /.col (left) -->
       <div class="col-md-10">
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Agregar Paciente</h3>
           </div>
           <!-- form start -->
           <form class="form-horizontal">
           <div class="box-body">
             <div class="form-group">
               <label class="col-sm-2 control-label">Nombre:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="nombre" placeholder="Nombre" id="nombre">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dirección:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="direccion" placeholder="Dirección" id="direccion">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Estatura:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="estatura" placeholder="Estatura" id="estatura">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Peso:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="peso" placeholder="Peso" id="peso">
               </div>
             </div>
             <!-- Date -->
             <div class="form-group">
               <label class="col-sm-2 control-label">Nacimiento:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="nacimiento" placeholder="Nacimiento" id="nacimiento" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Celular:</label>
               <div class="col-sm-6">
                 <input type="text" class="form-control pull-right" name="celular" placeholder="Celular" id="celular">
               </div>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-primary" value="guardar">Agregar</button>
               </div>
             </div>
           </div>
           <!-- /.box-body -->
         </form>
         <!-- /.form -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col (right) -->
     </div>
     <!-- /.row -->
@stop
@section('scripts')
  <!-- InputMask -->
<script src="{{ asset('components/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('components/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('components/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<!-- bootstrap time picker -->
<script src="{{asset('components/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('components/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('components/plugins/datepicker/locales/bootstrap-datepicker.es.js')}}" charset="UTF-8"></script>
<script type="text/javascript">
$(function () {

  //Datemask dd/mm/yyyy
  $("#nacimiento").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
  //Date picker
  $('#nacimiento').datepicker({
    language: 'es',
    autoclose: true,
  });
});
</script>
@stop
