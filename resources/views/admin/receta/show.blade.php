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
           </div>
           <!-- form start -->
           <form class="form-horizontal" method="get">
            {{ csrf_field() }}
           <div class="box-body">
            <div class="form-group">
               <label class="col-sm-2 control-label">Paciente:</label>
            <div class="col-sm-8">
             <div class="input-group">
               <select class="form-control select2" name="paciente" id="paciente">
                 @foreach ($paciente as $pacientes)
                   <option value="{{$pacientes->id}}">{{$pacientes->nombrepaciente}}</option>
                 @endforeach
               </select>
                    <div class="input-group-btn">
                      <button type="button" id="btnBuscar" class="btn btn-info btn-flat btn-olive">Buscar</button>
                    </div>
              </div>
            </div>
          </div>
            <div class="col-md-2">
               <div class="form-group">
                    <img id="imagenperfil" class="profile-user-img  img-responsive" src="{{ asset('img/pacientes/default.png') }}" alt="imagen del paciente">
               </div>
           </div>

           <div class="col-md-10">
             <div class="form-group">
               <label class="col-sm-2 control-label">Nombre:</label>
               <div class="col-sm-10">
                 <input type="hidden" name="idpaciente" id="idpaciente">
                 <input type="text" class="form-control pull-right"
                 name="nombre" placeholder="Nombre" id="nombre" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dirección:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right"
                 name="direccion" placeholder="Dirección" id="direccion" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha de Nacimiento:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right"
                 name="nacimiento" placeholder="Fecha de Nacimiento"
                 id="nacimiento" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo:</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control pull-right" name="sexo"
                 placeholder="Sexo" id="sexo" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Email:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right" name="email"
                 placeholder="Email" id="email" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Diagnóstico:</label>
               <div class="col-sm-10">
                 <textarea class="form-control pull-right" name="diagnostico"
                 placeholder="Diagnostico" id="diagnostico"  rows="5" cols="80"></textarea>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Medicamento:</label>
               <div class="col-sm-10">
                 <select class="form-control select2" name="medicamento" id="medicamento">
                   @foreach ($medicamento as $medicamentos)
                     <option value="{{$medicamentos->id}}">
                       {{$medicamentos->nombremedicamento}}
                     </option>
                   @endforeach
                 </select>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Cantidad:</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control pull-right" name="cant"
                 placeholder="Cantidad" id="cant"   value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dosis:</label>
               <div class="col-sm-10">
                 <textarea class="form-control pull-right" name="dosis"
                placeholder="Dosis" id="dosis"  rows="5" cols="80"></textarea>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Días:</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control pull-right" name="cant"
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
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script type="text/javascript">
$(function () {
   $(".select2").select2();

   $("#cant").inputmask("99");
   $("#dias").inputmask("999");
});
</script>
<script src="{{asset('components/app/js/functions.js')}}"></script>
@stop
