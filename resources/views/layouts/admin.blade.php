@include('layouts.header')
@include('layouts.aside')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>
  <!-- Main content -->
  <section class="content container-fluid">

    @yield('contenido')
    <!--------------------------
    | Your Page Content Here |
    -------------------------->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('layouts.footer')
