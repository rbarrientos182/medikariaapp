<!DOCTYPE html>
@extends('layouts.default')
@section('styles')
  <!-- app -->
  <link rel="stylesheet" href="{{asset('components/app/css/styles.css')}}">
@stop
@section('head-title')<title>Medikaria | Receta</title>@stop
@section('section-title')
  <section class="content-header">
      <h1>
          Receta
          <small>#{{$receta->id}}</small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i><a href="{{route('home_show_path')}}"> Inicio</a></li>
          <li class="active"><i class="fa fa-edit"></i> Receta</li>
      </ol>
  </section>
@stop

@section('content')
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-file-text-o"></i>Receta
          <small class="pull-right">Fecha de expedición: {{$receta->fechaExpedicion}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <!--<address>
          <strong>Admin, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>-->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          <center><strong>Dr(a). {{$currentUser->nombre}}</strong><br>
          {{$medico->especialidad}}<br>
          Cédula: {{$medico->cedula}}<br>
        </center>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <!--<b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567-->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
            <tr>
              <td>Paciente: {{$paciente->nombrepaciente}}</td>
              <td>Edad: {{DATE('Y-m-d')-$paciente->nacimiento}}</td>
              <td>Sexo: {{$paciente->sexo}}</td>
              <td>Peso: {{$paciente->peso}}</td>
              <td>Estatura: {{$paciente->estatura}}</td>
            </tr>
            <tr>
              <td colspan="5">Diagnóstico: {{$receta->diagnostico}}</td>
            </tr>
        </table>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Médicamento</th>
            <th>Dosis</th>
            <th>Periodicidad hrs</th>
            <th>Días</th>
            <th>Cantidad</th>
          </tr>
          </thead>
          <tbody>
            @foreach($receta->medicamentos as $medicamento)
              <tr>
                <td>{{$medicamento->nombremedicamento.' '.$medicamento->contenidomedida.' '.$medicamento->contenidodescripcion}}</td>
                <td>{{$medicamento->pivot->dosis}}</td>
                <td>{{$medicamento->pivot->periodicidad}}</td>
                <td>{{$medicamento->pivot->dias}}</td>
                <td>{{$medicamento->pivot->cantidad}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href="{{route('diagnostico_show_print_path',[$currentUser->id,$receta->id])}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
        <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Enviar Cotización
        </button>
        <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generar PDF
        </button>
      </div>
    </div>
  </section>
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
