<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">
    Diseños Web a Medida
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; {{ date('Y') }} <a href="www.wimax51.com.ve">Wimax51 CA</a>.</strong> All rights reserved.
</footer>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
@toastr_render
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<!-- bootstrap select -->
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<script src="{{ asset('js/adminlte.min.js') }}"></script>

<!-- formularios -->
{{-- <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script> --}}
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/jquery.stepyform.js') }}"></script>



@stack('scripts')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. -->
</body>
</html>


