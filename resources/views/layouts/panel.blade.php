<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="n">
  <meta name="author" content="clinica">
  <title>Appcitas | @yield('title')</title>
  <!-- Favicon -->
  <link href="{{ asset('img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <link href="{{ asset('plugin/sweetalert/sweetalert.css') }}" rel="stylesheet">

  <!-- Data  Table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css"
  integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

  <!-- Argon CSS -->
  <link href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('plugin/sweetalert/sweetalert2.all.js') }}"></script>
  <script src="{{ asset('js/angel.js') }}"></script>

  @yield('styles')
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="{{ url('/') }}">
        <img src="{{ asset('img/brand/git.GIF') }}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
          @include('includes.user')
      </ul>
      

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="{{ url('/') }}">
                <img src="{{ asset('img/brand/') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Navigation -->
        @include('includes.menu')
      </div>
    </div>
  </nav>

   
  <!-- Main content -->

  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="javascript:void(0)">@yield('subtitle') </a>
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        @include('includes.user')
        </ul>
      </div>
    </nav>
    <!-- Header -->
    
    <!-- Page content -->
  @yield('content')
  
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  
  <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
  @yield('scripts')
  <!-- Argon JS -->
  <script src="{{ asset('js/argon.js?v=1.0.0') }}"></script>

  <!-- Data table -->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   {{--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
   {{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

   <!-- PDF -->
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>


   <!-- Aqui es donde le damos estilos a la tabla -->
   <script>
    $(document).ready(function() {
     $('#example').DataTable( {
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'print',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-primary border:none; btn-sm mb-0">Imprimir <i class="fas fa-print"></i></button>'
             },

             {
                 extend: 'pdf',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-danger border:none; btn-sm mb-0">PDF <i class="fas fa-file-pdf"></i></button>'
             },

             {
                 extend: 'excel',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">EXCEL <i class="fas fa-file-excel"></i></button>'
             },

             {
                 extend: 'csv',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">CSV <i class="fas fa-file-csv"></i></button>'
             },

             {
                 extend: 'colvis',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text:  '<button class="btn btn-outline-warning border:none; btn-sm mb-0">Acciones  <i class="fas fa-arrow-circle-down"></i></button>'
             },
             
         ],
         columnDefs: [ {
             targets: -1,
             visible: false
         } ],
         "language": {
             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
         },
 
         "lengthMenu": [[5,10,50], [5,10,50]]
     } );
 } );
     </script>
</body>

</html>