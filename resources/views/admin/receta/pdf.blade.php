<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medikaria | Receta PDF</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" type="image/png" href="components/lte/img/medikaria_logo.ico" />

    <link rel="icon" type="image/png" href="components/app/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="components/plugins/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="components/plugins/ionicons/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <right><strong>Dr(a). {{$currentUser->nombre}}</strong><br>
          {{$medico->especialidad}}<br>
          Fecha de expedición: {{$receta->fechaExpedicion}}<br>
          Cédula: {{$medico->cedula}}<br>
        </right>
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Table row -->
    <div class="row">
      <div class="col-xs-8 table-responsive">
        <table class="table table">
            <tr>
              <td>Paciente: {{$paciente->nombrepaciente}}</td>
            </tr>
            <tr>
              <td>Edad: {{DATE('Y-m-d')-$paciente->nacimiento}}</td>
            </tr>
            <tr>
              <td>Sexo: {{$paciente->sexo}}</td>
            </tr>
            <tr>
              <td>Peso: {{$paciente->peso}}</td>
            </tr>
            <tr>
              <td>Estatura: {{$paciente->estatura}}</td>
            </tr>
        </table>
        <table class="table">
            <tr>
              <td>Diagnóstico: {{$receta->diagnostico}}</td>
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
              <tr class="success">
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
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
