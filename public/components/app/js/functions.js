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
      var formId = '#form-receta-ajax';
      var datos_formulario = $(formId).serialize();
      //alert(datos_formulario);
      $.ajax({
        url: $(formId).attr('action'),
        data: datos_formulario,
        type: $(formId).attr('method'),
        dataType: 'json',
        success:function(datos){
          if (datos.errors){
            var errors = '';
            for(var i in datos.errors) {
                errors += datos.errors[i]+"<br>";
                console.log(datos.errors[i]);
            }
            showMessageAlert(errors);
          }
          else {
            showMessageAlert("La cantidad de medicamento es: "+datos.mensaje);
          }
        },
        error:function(obj,error,objerror){
          showMessageAlert('obj: '+obj+' error: '+error+' objerror: '+objerror);
        }
      });
    //}
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
