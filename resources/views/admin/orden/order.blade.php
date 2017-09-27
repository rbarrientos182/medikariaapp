<!DOCTYPE html>
@extends('layouts.default')
@section('styles')
  <!-- app -->
  <link rel="stylesheet" href="{{asset('components/app/css/styles.css')}}">
@stop
@section('head-title')<title>Medikaria | Orden</title>@stop
@section('section-title')
  <section class="content-header">
      <h1>
          Orden
          <small>#{{$orden->id}}</small>
      </h1>
      <ol class="breadcrumb">
          <li class="#"><i class="fa fa-home"></i><a href="{{route('home_show_path')}}"> Inicio</a></li>
          <li class="#"><i class="fa fa-edit"></i><a href="{{route('diagnostico_show_receta_path',[$currentUser->id,$receta->id])}}"> Receta</a></li>
          <li class="active"><i class="fa fa-edit"></i> Orden</li>
      </ol>
  </section>
@stop

@section('content')
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-file-text-o"></i>Medikaria
          <small class="pull-right">Fecha: {{date('Y-m-d')}}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Admin, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (804) 123-5432<br>
          Email: info@almasaeedstudio.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>{{$paciente->nombrepaciente.' '.$paciente->apellidopacientep. $paciente->apellidopacientem}}</strong><br>
          {{$paciente->direccionpaciente}}<br>
          {{$paciente->coloniapaciente.', CP '.$paciente->cppaciente}}<br>
          Celular: {{$paciente->celular}}<br>
          Email: {{$paciente->emailpaciente}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Orden ID:</b> {{$orden->id}}<br>
        <b>Fecha de Pago:</b> {{$orden->fechapago}}<br>
        <!--<b>Factura #007612</b><br>
        <br>-->
        <!--<b>Cuenta:</b> 968-34567-->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Serial #</th>
            <!--<th>Descripción</th>-->
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
            @foreach($orden->medicamentos as $detalleOrden)
              <tr>
                <td>{{$detalleOrden->pivot->cantidad_or}}</td>
                <td>{{$detalleOrden->nombremedicamento.' '.$detalleOrden->contenidomedida.' '.$detalleOrden->contenidodescripcion}}</td>
                <td>{{$detalleOrden->pivot->medicamentos_id}}</td>
                <td>$ {{$detalleOrden->pivot->subtotal_or}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Métodos de Pago:</p>
        <img src="{{asset('components/lte/img/credit/visa.png')}}" alt="Visa">
        <img src="{{asset('components/lte/img/credit/mastercard.png')}}" alt="Mastercard">
        <img src="{{asset('components/lte/img/credit/american-express.png')}}" alt="American Express">
        <img src="{{asset('components/lte/img/credit/paypal2.png')}}" alt="Paypal">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
          dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Cantidad a Pagar</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>$ {{number_format($orden->subtotal,2)}}</td>
            </tr>
            <tr>
              <th>Comisión</th>
              <td>$ {{number_format($orden->comision,2)}}</td>
            </tr>
            <tr>
              <th>Envío:</th>
              <td>$ 0.00</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>$ {{number_format($orden->subtotal+$orden->comision,2)}}</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href="{{route('diagnostico_show_print_path',[$currentUser->id,$receta->id])}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
        <a href="{{route('payment',[$orden->id])}}" class="btn btn-success pull-right" target="_blank"><i class="fa fa-credit-card"></i> Enviar Pago
        </a>
        <a href="{{route('diagnostico_show_pdf_path',[$currentUser->id,$receta->id])}}" target="_blank" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generar PDF
        </a>
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
