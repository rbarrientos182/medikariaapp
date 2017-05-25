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

$("#medicamento").change(function(){
  console.log('entro a medicamento');

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
            //showMessageAlert("La cantidad de medicamento es: "+datos.mensaje);
            //showMessageAlert("medicamento: "+datos.nombre+" dosis: "+datos.dosis+" perio: "+datos.periodicidad+" dias: "+datos.dias+" total: "+datos.total);
            var trs=$("#tablaMedicamento tr").length;
              if(!searchNameTable(datos)){
                $('#tablaMedicamento tr:last').after('<tr><td>'+datos.id+'.</td><td>'+datos.nombre+'</td><td><span class="badge bg-green">'+datos.dosis+'</span></td><td><span class="badge bg-light-blue">'+datos.periodicidad+' hrs</span></td><td><span class="badge bg-yellow">'+datos.dias+'</span></td><td><span class="badge bg-red">'+datos.total+'</span></td><td><button type="button" id="delete" class="btn btn-block btn-danger btn-xs">Eliminar</button></td></tr>');
              }
          }
        },
        error:function(obj,error,objerror){
          showMessageAlert('obj: '+obj+' error: '+error+' objerror: '+objerror);
        }
      });
    //}
});

$(document).on('click', '#delete', function (event) {
    //alert('dio click');
    event.preventDefault();
    $(this).closest('tr').remove();
});

function searchNameTable(datos) {
  //obtenemos el valor insertado a buscar
 console.log('id a buscar es: '+datos.id);
 var id = datos.id;
  //utilizamos esta variable solo de ayuda y mostrar que se encontro
  var encontradoResultado = false;
  //realizamos el recorrido solo por las celdas que contienen el código, que es la primera
  $("#tablaMedicamento tr").find('td:eq(0)').each(function () {
      //obtenemos el codigo de la celda
        var codigo = $(this).html();
         //comparamos para ver si el código es igual a la busqueda
         if(codigo == id){
              //aqui ya que tenemos el td que contiene el codigo utilizaremos parent para obtener el tr.
              var trDelResultado=$(this).parent();
              //ya que tenemos el tr seleccionado ahora podemos navegar a las otras celdas con find
              var nombre = trDelResultado.find("td:eq(1)").html();
              var dosis = trDelResultado.find("td:eq(2)").html();
              //mostramos el resultado en el div
              console.log('El nombre es: '+nombre+', la dosis es: '+dosis);
              showMessageAlert('Ya ingreso ese Medicamento <br> si desea actualizarlo primero borre el Medicamento');
              encontradoResultado = true;

         }

  })

  //si no se encontro resultado mostramos que no existe.
  if(!encontradoResultado){
      console.log('No existe el código: '+id);
      return false;
  }
  else{
    return true;
  }
}
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
