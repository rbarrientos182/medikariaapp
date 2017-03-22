$(function () {
alert('entro a funciones');
$("#btnBuscar").click(function() {
    alert('dio click en boton');
    var idpaciente = $('#paciente').val();
    alert('el valor del id paciente es '+idpaciente);
});

});
