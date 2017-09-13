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
  var idmedicamento = $("#medicamento").val();
  console.log('el medicamento es: '+idmedicamento);
  $.get("../../medicamentos/"+idmedicamento+"",function(response,state){
        console.log(response.tipo);
        if(response.tipo==1){
            $("#dosis").empty();
            $("#dosis").append('<option value="2.5">2.5 ml</option>');
            $("#dosis").append('<option value="5">5 ml</option>');
            $("#dosis").append('<option value="7.5">7.5 ml</option>');
            $("#dosis").append('<option value="12.5">12.5 ml</option>');
            $("#dosis").append('<option value="15">15 ml</option>');
        }
        else if (response.tipo==2){
          $("#dosis").empty();
          $("#dosis").append('<option value="0.25">1/4</option>');
          $("#dosis").append('<option value="0.5">1/2</option>');
          $("#dosis").append('<option value="1">1</option>');
          $("#dosis").append('<option value="1.25">1 1/4</option>');
          $("#dosis").append('<option value="1.5">1 1/2</option>');
          $("#dosis").append('<option value="2">2</option>');
        }
        else {
            $("#dosis").empty();
            for(var i = 1; i <= 10; i++) {
              $("#dosis").append('<option value="'+i+'">'+i+'</option>');
            }
        }
  });
  /*$.ajax({
    url: "medicamento_ajax_path",
    data: "idmedicamento="+idmedicamento,
    type: "POST",
    dataType: 'json',
    success:function(datos){
        showMessageAlert(datos.id);

    },
    error:function(obj,error,objerror){
      showMessageAlert('obj: '+obj+' error: '+error+' objerror: '+objerror);
    }
  });*/

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
            var trs=$("#tablaMedicamento  tr").length;
              if(!searchNameTable(datos)){
                $('#tablaMedicamento  tr:last').after('<tr><td>'+datos.id+'.</td><td>'+datos.nombre+'</td><td><span class="badge bg-green">'+datos.dosis+'</span></td><td><span class="badge bg-light-blue">'+datos.periodicidad+' hrs</span></td><td><span class="badge bg-yellow">'+datos.dias+'</span></td><td><span class="badge bg-red">'+datos.total+'</span></td><td><button type="button" id="delete" class="btn btn-block btn-danger btn-xs">Eliminar</button></td></tr>');
              }
          }
        },
        error:function(obj,error,objerror){
          showMessageAlert('obj: '+obj+' error: '+error+' objerror: '+objerror);
        }
      });
    //}
});

$("#btnSave").click(function(e){
  e.preventDefault();
  var bandera = 0;
  var contadortr = 0;
  var cadena = null;
  var paciente = $("#paciente").val();
  var diagnostico = $("#diagnostico").val();
  var medico = $("#idmedico").val();
  console.log("medico es "+medico);

  $("#tablaMedicamento  tr").each(function(index) {
    if(bandera!=0){
      var campo1, campo2, campo3, campo4, campo5, campo6;
      $(this).children("td").each(function(index2) {
          switch (index2) {
            case 0:
              campo1 = $(this).text();
              break;
            case 1:
              campo2 = $(this).text();
              break;
            case 2:
              campo3 = $(this).text();
              break;
            case 3:
              campo4 = $(this).text();
              break;
            case 4:
              campo5 = $(this).text();
              break;
            case 5:
              campo6 = $(this).text();
              break;
          }
          $(this).css("background-color","#ECF8E0");
      })
    }
    else {
      bandera=1;
    }
    if(contadortr>0){
        if(contadortr==1) {
            //console.log(id+'-'+campo1+'-'+campo2+'-'+campo3+'-'+campo4);
            cadena = campo1+','+campo2+','+campo3+','+campo4+','+campo5+','+campo6+';';
        }
        else{
            //console.log(id+'-'+campo1+'-'+campo2+'-'+campo3+'-'+campo4);
            cadena += campo1+','+campo2+','+campo3+','+campo4+','+campo5+','+campo6+';';
        }
    }
    contadortr++;
  })
  console.log(cadena);
  if (cadena!=null) {
    guardarReceta(cadena,paciente,diagnostico,medico);
  }
  else {
    showMessageAlert('No es posible guardar receta vacía');
  }

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
  $("#tablaMedicamento  tr").find('td:eq(0)').each(function () {
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
function guardarReceta(cadena,paciente,diagnostico,medico) {

  console.log("el paciente es "+paciente+" el diagnostico es "+diagnostico+" y la cadena es "+cadena+" y el medico es "+medico);

  var notify = $.notify('<strong>Guardando</strong> No cierre la página...', {
      allow_dismiss: false,
      showProgressbar: true
  });

  $.ajax({
    url: "../../recetas/save",
    data: "cadena="+cadena+"&paciente="+paciente+"&diagnostico="+diagnostico+"&medico="+medico,
    type: "GET",
    dataType: 'json',
    success:function(datos){
        console.log("el mensaje es "+datos.mensaje+" y el idreceta es "+datos.idreceta+' y el usuario es '+datos.usuario);
        setTimeout(function() {
      	notify.update({'type': 'success', 'message': '<strong>Éxito</strong> '+datos.mensaje, 'progress': 25});
        }, 4500);

      if (datos.mensaje=='Datos guardados correctamente') {
        setTimeout(function() {
          window.location.href = '../../home/diagnostico/'+datos.usuario+'/receta/'+datos.idreceta;
        }, 10000);

      }
    },
    error:function(obj,error,objerror){
      showMessageAlert('obj: '+obj+' error: '+error+' objerror: '+objerror);
    },
  });


}


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
