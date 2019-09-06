@extends('layouts.researcher')

@section('content')

<style>#wrapper #content-wrapper {background-color: white !important;}
.faq-container{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.col > .card-res-hover{
  width: 300px;
  min-width: 250px;
  -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
}



</style>

<!-- Begin Page Content -->
<div class="container-fluid bg-white pt-5">

  <!-- Page Heading -->
  <div class="mb-4 col-md-12 faq-container">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Como podemos ajudar você?</h1>
    <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe, repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?</p>
  </div>

  <!-- Content Row -->
  <div class="row justify-content-center">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col col-sm-12 col-md-4 mt-4 mb-4">
      <div class="card card-res-hover h-100 py-2 border border-success">
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
      <div class="card card-res-hover h-100 py-2 border border-success">
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
      <div class="card card-res-hover h-100 py-2 border border-success">
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
      <div class="card card-res-hover h-100 py-2 border border-success">
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