@extends('layouts.researcher')

@section('content')

<style>#wrapper #content-wrapper {background-color: #f5f5f5 !important;}
.faq-container{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 72px;
}

.box-shadow{
  -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
}

.col > .card{
  
}

</style>

<!-- Begin Page Content -->
<div class="mb-4 col-md-12 faq-container bg-white box-shadow">
  <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Como podemos ajudar você?</h1>
</div>
<div class="container-fluid pt-5">

  <!-- Page Heading -->

  <!-- Content Row -->
  <div class="row justify-content-center">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col col-sm-12 col-md-4 mt-4 mb-4">
      <div class="card py-2 box-shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-gray-800">Perguntas Frequentes</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-question-circle fa-2x text-danger"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col col-sm-12 col-md-4 mt-4 mb-4">
      <div class="card py-2 box-shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-gray-800">Tutoriais em Vídeo</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="row justify-content-center">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col col-sm-12 col-md-4 mt-4 mb-4">
      <div class="card py-2 box-shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Documentação</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col col-sm-12 col-md-4 mt-4 mb-4">
      <div class="card py-2 box-shadow">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">NIT</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection