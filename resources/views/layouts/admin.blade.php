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

    
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mySidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/researcher.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/step-form.css') }}" rel="stylesheet">
</head>

<style>
  a#teste:hover{color:white !important;}
  #wrapper #content-wrapper {background-color: #f5f5f5}
</style>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
   <div class="my-sidebar">
   <img class="py-4" src="{{asset('assets/new_sgtt.svg')}}" width="50%">
     <div class="container-profile">
       <div class="info-user">
         <span class="name-desc text-white">{{Auth::user()->nome}}</span>
         <span class="email-desc">{{Auth::user()->email}}</span>
       </div>
      </div>
      <div class="dropdown-divider"></div>
      <ul class="mt-5 navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-home" style="color: white !important"></i>
            <span>Inicio</span></a>
        </li>

        @if(Auth::user()->admin == 1)
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('contratos-index')}}">
            <i class="fas fa-fw fa-hands-helping" style="color: white !important"></i>
            <span>Contratos</span></a>
        </li>
        @else
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="{{asset('faq')}}">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>Faq</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{asset('meuperfil')}}">
            <i class="fas fa-tools"></i>
              <span>Meu Perfil</span></a>  
        </li>
        @endif

        <!-- Nav Item - Dashboard -->
        <!--li class="nav-item">
          <a class="nav-link" href="{{route('correcoes.create')}}">
            <i class="fas fa-fw fa-edit" style="color: white !important"></i>
            <span>Correções</span></a>
        </li-->
        <div class="dropdown-divider" style="margin: 15px;"></div>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt" style="color: white !important"></i>
              <span>Sair</span></a>
          </li>
      </ul>
   </div>


<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
     
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
          <h5 class="modal-title font-weight-bold text-center" id="exampleModalLabel">Deseja Sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body text-center">Selecione "Logout" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>
      </div>
    </div>
  </div>

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

  <script src="{{asset('js/chart.js')}}"></script>
  


</body>
</html>
