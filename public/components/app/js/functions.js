$("#btnBuscar").click(function(e) {

  e.preventDefault();
    var idpaciente = $('#paciente').val();
    $.get("../../pacientes/"+idpaciente+"",function(response,state){
          console.log(response);
          $("#idpaciente").val(response.id);
          $("#nombre").val(response.nombrepaciente);
          $("#direccion").val(response.direccionpaciente);
          $("#nacimiento").val(response.nacimiento);
          $("#sexo").val(response.sexo);
          $("#email").val(response.emailpaciente);
          $("#imagenperfil").attr("src","../../img/pacientes/"+response.imagenpaciente);
    });
});

/*** fin de boton buscar cliente - módulo de crear receta***/

$("#btnAdd").click(function(e) {

  e.preventDefault();

  var message = '\n';
  var bandera = false;
    if(!$('#idpaciente').val()) {
      bandera = true;
      message += '* No ha Escogido un Paciente <br>';
        //showMessageAlert('No ha Escogido un paciente');
    }

    if(!$('#diagnostico').val()) {
      bandera = true;
      message += '* Falta Llenar Campo Diagnóstico  <br>'
        //showMessageAlert('Falta llenar campo Diagnóstico');
    }
    if(!$('#dias').val()) {
      bandera = true;
      message += '* Falta Llenar Campo Días  <br>'
        //showMessageAlert('Falta llenar campo Diagnóstico');
    }

    if(bandera){
        showMessageAlert(message);
    }
});
/*** fin de boton agregar medicamento - módulo de crear receta***/



/*** Metodos de Alerta ***/
function showMessageAlert(mensaje){
  $.notify({
  	// options
  	icon: 'icon fa fa-exclamation-triangle',
  	title: '¡Atención! <br>',
  	message: mensaje,
  	target: '_blank'
  },{
  	// settings
  	element: 'body',
  	position: null,
  	type: "danger",
  	allow_dismiss: true,
  	newest_on_top: false,
  	showProgressbar: false,
  	placement: {
  		from: "top",
  		align: "center"
  	},
  	offset: 20,
  	spacing: 10,
  	z_index: 1031,
  	delay: 5000,
  	timer: 1000,
  	url_target: '_blank',
  	mouse_over: null,
  	animate: {
  		enter: 'animated fadeInDown',
  		exit: 'animated fadeOutUp'
  	},
  	onShow: null,
  	onShown: null,
  	onClose: null,
  	onClosed: null,
  	icon_type: 'class',
  	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
  		'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
  		'<span data-notify="icon"></span> ' +
  		'<span data-notify="title">{1}</span> ' +
  		'<span data-notify="message">{2}</span>' +
  		'<div class="progress" data-notify="progressbar">' +
  			'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
  		'</div>' +
  		'<a href="{3}" target="{4}" data-notify="url"></a>' +
  	'</div>'
  });
}
/** Fin de mostrarAlerta **/
