<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Blog Post</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('backend/dist/image/favicon.png') }}">
 <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend') }}/dist/css/adminlte.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/jqvmap/jqvmap.min.css">
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.css">
 
  <!-------datatable-------->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  {{-- <script src="{{ asset('backend') }}/plugins/jquery/jquery.min.js"></script> --}}
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <!------notify---->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <!-----sweetalert------>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style type="text/css">
    .notify-corner
    {
      z-index:10000;
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#FFFBF5;">
<div class="wrapper" >

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
   <img class="animation__shake" src="{{ asset('backend/dist/image/favicon.png') }}" alt="logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
   <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
     <a href="{{ route('home') }}" class="nav-link text-dark">Home</a>
    </li>
   </ul>

   <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
     <a class="nav-link" data-toggle="dropdown" href="#">
      <span class=""><i class="fas fa-cog text-dark"></i> Setting </span>
     </a>
     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right rounded-0">
      <a class="dropdown-item">{{ Auth::User()->name }}</a>
     
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       @csrf
      </form>
     </div>
    </li>
   </ul>

  </nav>


  <!-- Main Sidebar Container -->
   @include('backend.layouts.sideber')
   @yield('content')

   <!----notification script---->
   @if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top right',className:'sucess'});
      })
    </script>
   @endif

   @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('error')}}",{globalPosition:'top right',className:'error'});
      })
    </script>
   @endif


  <footer class="main-footer">

    <small><strong>Copyright &copy; {{ date('Y') }} <a href="#">Shatu Chandra Das</a>.</strong>
    All rights reserved.</small>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  
</div>

<script>
 $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('backend') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('backend') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('backend') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('backend') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('backend') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend') }}/dist/js/pages/dashboard.js"></script>
<!-----data table------>
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- jquery-validation -->
<script src="{{ asset('backend') }}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jquery-validation/additional-methods.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-----image show script------->
<script type="text/javascript">
 $(document).ready(function(){
  $('#image').change(function(e){
  var reader = new FileReader();
  reader.onload=function(e){
   $('#showImage').attr('src',e.target.result);
  } 
  reader.readAsDataURL(e.target.files['0']);
  });
 });
</script>

<!--------delete-------->
<script type="text/javascript">
 $(function(){
  $(document).on('click','#delete',function(e){
   e.preventDefault();
   var link = $(this).attr("href");
   Swal.fire({
   title: 'Are you sure?',
   text: "Delete this data !",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
   if (result.isConfirmed){
   window.location.href = link;
   Swal.fire(
    'Deleted!',
    'Your file has been deleted.',
    'success')
   }
   })
  });
 });
</script>

<!-----select input----->
<script>
 $(function () {
  $('.select2').select2()
  $('.select2bs4').select2({
   theme: 'bootstrap4'
  })
 });
</script>

<!-------summernote---->
<script>
 $(function () {
  $('#summernote').summernote()
  CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
  mode: "htmlmixed",
  theme: "monokai"
  });
 })
</script>



</body>
</html>
