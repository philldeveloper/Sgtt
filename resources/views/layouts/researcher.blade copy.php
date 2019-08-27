<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SGTT') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/researcher.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #29487d !important;">

      <a class="sidebar-brand d-flex align-items-center justify-content-center mb-5" href="/">
        <div class="sidebar-brand-icon">
          <i class="fab fa-windows fa-5x"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SGTT</div>
      </a>
      

      <div class="d-xl-block d-none">
        <!-- Heading -->
        <div class="sidebar-heading mb-2">
          Dados Pessoais
        </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link">
            <span class="font-weight-bold text-white">BEM VINDO,
              <span class="font-italic text-warning">Philip Santos</span>
            </span>
          </a>
        </li>
        <div class="container-fluid form-group row align-items-left justify-content-between mb-5">
            <div class="btn btn-outline-light font-weight-bold rounded-0">Meu Perfil</div>
            <div class="btn btn-outline-light font-weight-bold rounded-0">Sair</div>
        </div>
      </div>


      <div class="d-xl-none d-md-block d-none">
        <!-- Heading -->
        <div class="sidebar-heading mb-2">
          Dados Pessoais
        </div>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link">
            <span class="font-weight-bold text-white">BEM VINDO,
              <span class="font-italic text-warning">Philip Santos</span>
            </span>
          </a>
        </li>
        <div class="container-fluid form-group row justify-content-center mb-5">
            <div class="btn btn-outline-light font-weight-bold rounded-0">1</div>
            <div class="btn btn-dark font-weight-bold rounded-0">2</div>
        </div>
      </div>

      <!-- Heading -->
      <div class="sidebar-heading mb-2">
        Documentos
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active border-left-light">
        <a class="nav-link" href="{{route('pesquisador')}}">
          <i class="fas fa-fw fa-hands-helping"></i>
          <span>Contratos</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item border-left-success">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Contábil</span></a>
      </li>
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item border-left-warning">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>Faq</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a class="collapse-item" href="{{asset('faq')}}">Principal</a>
            <a class="collapse-item" href="#">Tutoriais</a>
            <a class="collapse-item" href="#">Documentação</a>
          </div>
        </div>
      </li>

      <br><br><br>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="d-lg-none d-md-none d-block pt-3 navbar navbar-expand navbar-light topbar static-top border-bottom border-light" style="background-color: #f7f7f7 !important;">

          
          <div class="float-left">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <a class="nav-link dropdown-toggle d-md-none float-right rounded-circle mr-3" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-md-inline font-weight-bold text-gray-800">Philip</span>
          </a>

          <div class="float-right pt-0 pb-0 mr-3 dropdown-menu dropdown-menu-right rounded-0 border-left-primary border-primary shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item font-weight-bold p-2 rounded-0" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-dark"></i>
              Meu Perfil
            </a>
            <a class="dropdown-item font-weight-bold p-2 rounded-0" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-primary"></i>
              Sair
            </a>
          </div>

          <div class="text-center">
            <a href="{{route('pesquisador')}}">
              <i class="fab fa-connectdevelop text-primary fa-2x mx-auto d-md-none"></i>
            </a>
          </div>
        </nav>
        <!-- End of Topbar -->

    @yield('content')


    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->


  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>
</html>
