<!DOCTYPE html>
@extends('layouts.default')
@section('styles')
  <!-- app -->
  <link rel="stylesheet" href="{{asset('components/app/css/styles.css')}}">
@stop
@section('head-title')<title>Medikaria | Realizar Diagnóstico</title>@stop
@section('section-title')
  <section class="content-header">
      <h1>
          Diagnóstico
          <small>Crear Receta</small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i><a href="{{route('home_show_path')}}"> Inicio</a></li>
          <li class="active"><i class="fa fa-edit"></i> Diagnóstico</li>
      </ol>
  </section>
@stop

@section('content')
     <div class="row">
       <!-- /.col (left) -->
       <div class="col-md-10">
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Crear Receta</h3>
             <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
             </div>
           </div>
           <!-- form start -->
           <form class="form-horizontal" method="post" action="{{route('receta_ajax_path',$medico->id)}}" id="form-receta-ajax">
            {{ csrf_field() }}
           <div class="box-body">
             <div class="col-md-10">
               <div class="form-group">
                 <label class="col-sm-2 control-label">Paciente:</label>
                 <div class="col-sm-10">
                   <select class="form-control select2" name="paciente" id="paciente">
                     <<option value="">Selecciona un Paciente</option>
                     @foreach ($paciente as $pacientes)
                       <option value="{{$pacientes->id}}">{{$pacientes->nombrepaciente.' '.$pacientes->apellidopacientep.' '.$pacientes->apellidopacientem}}</option>
                     @endforeach
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Diagnóstico:</label>
                 <div class="col-sm-10">
                   <textarea class="form-control pull-right" name="diagnostico"
                   placeholder="Diagnostico" id="diagnostico"  rows="5" cols="80"></textarea>
                 </div>
               </div>
               <div class="alert alert-info">
                   Añadir Medicamento
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Medicamento:</label>
                 <div class="col-sm-10">
                   <select class="form-control select2" name="medicamento" id="medicamento">
                     @foreach ($categoria as $categorias)
                       @if(COUNT($categorias->medicamentos)>0)
                         <optgroup label="{{$categorias->categoria}}">
                           @foreach ($categorias->medicamentos as $medicamentos)
                               <option value="{{$medicamentos->id}}">
                                 {{$medicamentos->nombremedicamento.' '.$medicamentos->contenidomedida.' '.$medicamentos->contenidodescripcion}}
                               </option>
                           @endforeach
                         </optgroup>
                       @endif
                     @endforeach
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Dosis:</label>
                 <div class="col-sm-4">
                   <!--<input type="text" class="form-control pull-right" name="dosis"
                   id="dosis" placeholder="Dosis">-->
                   <select class="form-control pull-right" name="dosis" id="dosis" >
                     @for ($i=1; $i <=10 ; $i++)
                       <option value="{{$i}}">
                         {{$i}}
                       </option>
                     @endfor
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Periodicidad:</label>
                 <div class="col-sm-4">
                   <select class="form-control pull-right" name="perio" id="perio" >
                     @for ($i=1; $i <=24 ; $i++)
                       <option value="{{$i}}">
                         {{$i}} Hrs
                       </option>
                     @endfor
                   </select>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Días:</label>
                 <div class="col-sm-4">
                   <input type="text" class="form-control pull-right" name="dias"
                   placeholder="Días" id="dias"  value="">
                 </div>
               </div>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-6">
                 <button type="button" id="btnAdd" class="btn btn-primary" value="guardar">
                   Agregar
                 </button>
               </div>
             </div>
             </div>
             <!-- /.box-body -->
           </form>
           <!-- /.form -->
           </div>
           <!-- /.box -->
           <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tabla de Medicamentos</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table id="tablaMedicamento" class="table table-striped">
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Nombre</th>
                    <th style="width: 40px">Dosis</th>
                    <th style="width: 40px">Periodicidad</th>
                    <th style="width: 40px">Días</th>
                    <th style="width: 40px">Cantidad</th>
                    <th style="width: 40px">Acción</th>
                  </tr>
                </table>
                <div class="col-xs-12">
                  <div class="form-group">
                      <button type="button" id="btnAdd" class="btn btn-success" value="guardar">
                        Guardar
                      </button>
                  </div>
              <div>
            <!-- /.box-body -->
          </div>
       </div>
       <!-- /.col (right) -->
     </div>

     <!-- /.row -->
@stop
@section('scripts')
<!-- Bootstrap Notify-->
<script src="{{ asset('components/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('components/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.regex.extensions.js')}}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script type="text/javascript">
$(function () {
   $(".select2").select2();

   //$("#dosis").inputmask("99");
   $("#dias").inputmask('Regex', {
    regex: "^[1-9]{1}[0-9]{1,2}$"
});
});
</script>
<script src="{{asset('components/app/js/functions.js')}}"></script>
@stop
