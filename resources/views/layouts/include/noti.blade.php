<script type="application/javascript">
        // configuracion de las alertas
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-full-width",
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "300",
            "timeOut": "10000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
</script>
@if(Session::has('error'))
    <script type="application/javascript">
        toastr["error"]("Error. Tuvimos problemas para procesar tu solicitud, favor de intentar mas tarde", "Error")
    </script>
@endif

@if(Session::has('success'))
    <script type="application/javascript">
        toastr["success"]("La información se guardo correctamente", " Enhorabuena ")
    </script>
@endif

@if(Session::has('info'))
    <script type="application/javascript">
        toastr["info"]("{{ Session::get('info') }}", "¡ Atención ¡")
    </script>
@endif

@if(Session::has('warning'))
    <script type="application/javascript">
        toastr["warning"]("{{ Session::get('warning') }}", "! Advertencia !")
    </script>
@endif
