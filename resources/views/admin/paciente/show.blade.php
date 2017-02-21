<!DOCTYPE html>
@extends('layouts.default')
@section('styles')

@stop
@section('head-title')<title>Medikaria | Pacientes</title>@stop
@section('section-title')
  <section class="content-header">
      <h1>
          Pacientes
          <small>Tabla Pacientes</small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i><a href="{{route('home_show_path')}}"> Inicio</a></li>
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
                <th>Acciones</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Estatura</th>
                <th>Peso</th>
                <th>Fecha de Nacimiento</th>
                <th>Celular</th>
              </tr>
            </thead>
            <tbody>
            @if($paciente)
              @foreach($paciente as $pacientes)
              <tr>
                <td><a class="btn btn-block btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a></td>
                <td>{{$pacientes->nombrepaciente}}</td>
                <td>{{$pacientes->direccionpaciente}}</td>
                <td>{{$pacientes->estatura}}</td>
                <td>{{$pacientes->peso}}</td>
                <td>{{$pacientes->nacimiento}}</td>
                <td>{{$pacientes->celular}}</td>
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
  <script type="text/javascript">
    $(function () {
      $("#tablaPacientes").DataTable({
          "language":{"url": "../../components/plugins/datatables/Spanish.json"}
      });
    });
  </script>
@stop
