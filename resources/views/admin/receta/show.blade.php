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
            <div class="col-sm-8">
             <div class="input-group">
               <select class="form-control select2" name="paciente">
                 @foreach ($paciente as $pacientes)
                   <option value="{{$pacientes->id}}">{{$pacientes->nombrepaciente}}</option>
                 @endforeach
               </select>
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat btn-olive">Buscar</button>
                    </div>
              </div>
            </div>
          </div>
            <div class="col-md-2">
               <div class="form-group">
                    <img class="profile-user-img  img-responsive" src="{{{ asset('img/pacientes/default.png') }}}" alt="imagen del paciente">
               </div>
           </div>

           <div class="col-md-10">
             <div class="form-group">
               <label class="col-sm-2 control-label">Nombre:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="nombre" placeholder="Nombre" value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dirección:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="direccion" placeholder="Dirección" value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha de Nacimiento:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="nacimiento" placeholder="Fecha de Nacimiento" value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="sexo" placeholder="Sexo" value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Email:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="email" placeholder="Email" value="">
               </div>
             </div>
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
