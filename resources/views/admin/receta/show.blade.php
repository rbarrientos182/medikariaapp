<!DOCTYPE html>
@extends('layouts.default')
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
           </div>
           <!-- form start -->
           <form class="form-horizontal" method="post">
            {{ csrf_field() }}
           <div class="box-body">
             <div class="form-group">
               <label class="col-sm-2 control-label">Pacientes:</label>
               <div class="col-sm-6">
                 <input type="hidden" name="idmedico" value="{{$medico->id}}">
                 <select class="form-control select2" name="paciente">
                   @foreach ($paciente as $pacientes)
                     <option value="{{$pacientes->id}}">{{$pacientes->nombrepaciente}}</option>
                   @endforeach
                 </select>
               </div>
               <button type="button" class="btn bg-olive"  name="button">Buscar</button>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-6">
                 <button type="button" class="btn btn-primary" value="guardar">Agregar</button>
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
<script type="text/javascript">
$(function () {
   $(".select2").select2();
});
</script>
@stop
