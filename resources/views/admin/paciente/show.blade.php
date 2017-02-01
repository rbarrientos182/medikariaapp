@extends('layouts.default')
@section('styles')

@stop
@section('head-title')<title>Medikaria | Pacientes</title>@show
@section('section-title')
  <section class="content-header">
      <h1>
          Pacientes
          <small></small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i> Inicio</li>
          <li class="active"><i class="fa fa-user"></i> Pacientes</li>
      </ol>
  </section>


@stop
@section('content')
<div class="row">
  <div class="col-xs-12">
     <div class="box">
       <div class="box-header">
         <h3 class="box-title">Tabla de Pacientes</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <table id="tablaPacientes" class="table table-bordered table-striped">
           <thead>
             <tr>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Estatura</th>
              <th>Peso</th>
              <th>Fecha de Nacimiento</th>
              <th>Celular</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          @if($paciente)
            @foreach ($paciente as $pacientes)
            <tr>
              <td>{{$pacientes->nombrepaciente}}</td>
              <td>{{$pacientes->direccionpaciente}}</td>
              <td>{{$pacientes->estatura}}</td>
              <td>{{$pacientes->peso}}</td>
              <td>{{$pacientes->nacimiento}}</td>
              <td>{{$pacientes->celular}}</td>
              <td></td>
            </tr>
            @endforeach
          @endif
          </tbody>
          <tfoot>
            <tr>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Estatura</th>
              <th>Peso</th>
              <th>Fecha de Nacimiento</th>
              <th>Celular</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
         </table>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
@stop
@section('scripts')
  <script>
    $(function () {
      $("#tablaPacientes").DataTable({
          "language":{
             //"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
             "url": "../../components/plugins/datatables/Spanish.json"
          }
      });
    });
  </script>
@stop
