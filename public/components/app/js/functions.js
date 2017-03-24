$("#btnBuscar").click(function(e) {

  e.preventDefault();
    var idpaciente = $('#paciente').val();
    $.get("../../pacientes/"+idpaciente+"",function(response,state){
          console.log(response);
          $("#nombre").val(response.nombrepaciente);
          $("#direccion").val(response.direccionpaciente);
          $("#nacimiento").val(response.nacimiento);
          $("#sexo").val(response.sexo);
          $("#email").val(response.emailpaciente);
    });
});
