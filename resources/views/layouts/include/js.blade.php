  <!-- jQuery 2.2.3 -->
  <script src="{{ asset('components/plugins/jQuery/jQuery-2.2.3.min.js') }}" type="text/javascript"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script type="text/javascript">
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{ asset('components/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- DataTables -->
  <script src="{{ asset('components/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('components/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- Morris.js charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js" type="text/javascript"></script>
  <script src="{{ asset('components/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
  <!-- Sparkline -->
  <script src="{{ asset('components/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="{{ asset('components/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('components/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('components/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js" type="text/javascript"></script>
  <script src="{{ asset('components/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ asset('components/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
  <!-- Slimscroll -->
  <script src="{{ asset('components/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="{{ asset('components/plugins/chartjs/Chart.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('components/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="{{ asset('components/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="{{ asset('components/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('components/lte/js/app.min.js') }}" type="text/javascript"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <!--<script src="{{ asset('components/lte/js/pages/dashboard.js') }}" type="text/javascript"></script>-->
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('components/lte/js/demo.js') }}" type="text/javascript"></script>
  <!-- ToasTR Alert -->
  <script src="{{ asset('components/plugins/toastr/toastr.js') }}" type="text/javascript"></script>

  @section('scripts')

  @show
