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
               <label class="col-sm-2 control-label">Paciente:</label>
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
                 <input type="text" class="form-control pull-right"
                 name="nombre" placeholder="Nombre" value="" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dirección:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right"
                 name="direccion" placeholder="Dirección" value="" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Fecha de Nacimiento:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right"
                 name="nacimiento" placeholder="Fecha de Nacimiento" value="" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo:</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control pull-right"
                 name="sexo" placeholder="Sexo" value="" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Email:</label>
               <div class="col-sm-10">
                 <input type="text" class="form-control pull-right"
                 name="email" placeholder="Email" value="" disabled>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Diagnóstico:</label>
               <div class="col-sm-10">
                 <textarea class="form-control pull-right" name="diagnostico"
                 placeholder="Diagnóstico" rows="5" cols="80" ></textarea>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Medicamento:</label>
               <div class="col-sm-10">
                 <select class="form-control select2" name="medicamento">
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
                 id="cant" placeholder="Cantidad" value="">
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Dosis:</label>
               <div class="col-sm-10">
                 <textarea class="form-control pull-right" name="dosis"
                placeholder="Dosis"  rows="5" cols="80"></textarea>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Días:</label>
               <div class="col-sm-4">
                 <input type="text" class="form-control pull-right" name="cant"
                 id="dias" placeholder="Días" value="">
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
<!-- InputMask -->
<script src="{{ asset('components/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('components/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
<script type="text/javascript">
$(function () {
   $(".select2").select2();

   $("#cant").inputmask("99");
   $("#dias").inputmask("99");
});
</script>
<script src="{{asset('components/app/js/functions.js')}}"></script>
@stop
