@extends('layouts.admin')

<style>
  .icon-main{
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .icon-maker{
    border-radius: 3px;
    position: absolute;
    overflow: visible;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 60px;
    background-image: linear-gradient( 135deg, #81FBB8 10%, #28C76F 100%);
    margin-top: -5px;
  }

  .cr-card-size{
    min-width: 200px;
    width: 100%;
  }
  .icon-maker i {
    color: white;
    font-size: 30px;
  }

  .justify-col-center{
    display: flex;
    justify-content: center;
  }

 .bg-cr-sem{
   padding: 0;
   margin: 0;
  background-color: #28c76f;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%2381fbb8' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%239efbcb'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
 }

 .card-body .subtitle{
  width: auto !important
 }

</style>

@section('content')

<!-- Begin Page Content -->

<div class="container-fluid mt-4 py-4">
    <span class="h3 font-weight-bold">Dados Gerais</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>

<div class="container-fluid my-auto mx-auto">
  <div class="row">

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="h3 font-weight-bold py-3">Contratos Gerados</div>
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="myPieChart" width="451" height="245" class="chartjs-render-monitor" style="display: block; width: 451px; height: 245px;"></canvas>
          </div>
          <div class="mt-4 text-center small">
            <div class="row justify-content-center">
              <span class="mr-2">
                <i class="fas fa-circle text-primary"></i> Direct
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-success"></i> Social
              </span>
              <span class="mr-2">
                <i class="fas fa-circle text-info"></i> Referral
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="h3 font-weight-bold py-3">Gráfico de Crescimento</div>
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="myAreaChart" style="display: block; width: 968px; height: 320px;" width="968" height="320" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
    </div>

  </div><!--row-->
</div>

<div class="container-fluid mt-4 py-4">
  <span class="h3 font-weight-bold">Estatísticas</span>
  <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>

<div class="container-fluid my-auto mx-auto mt-5 mb-5">
  <div class="row justify-content-center mt-5 mb-5">
  @empty($contratos_sr && $contratos_cr)
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size notice notice-info notice-lg">
        <div class="icon-main">
          <div class="icon-maker">
            <i class="fas fa-hand-holding-usd"></i></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark">00</h1>
          <p class="text-center">Contratos com repasse</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size">
        <div class="icon-main">
          <div class="icon-maker" style="background-image: linear-gradient( 135deg, #97ABFF 10%, #123597 100%);">
          <i class="fas fa-handshake"></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark">00</h1>
          <p class="text-center">Contratos sem repasse</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size">
        <div class="icon-main">
          <div class="icon-maker" style="background-image: linear-gradient( 135deg, #97ABFF 10%, #123597 100%);">
            <i class="fas fa-file-medical-alt"></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark">00</h1>
          <p class="text-center">Total</p>
        </div>
      </div>
    </div>
    @else
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size">
        <div class="icon-main">
          <div class="icon-maker">
            <i class="fas fa-hand-holding-usd"></i></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark font-weight-bold display-4">{{$contratos_cr->count()}}</h1>
          <p class="text-center h4 text-dark font-weight-bold">Contratos com repasse</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size">
        <div class="icon-main">
          <div class="icon-maker" style="background-image: linear-gradient( 135deg, #97ABFF 10%, #123597 100%);">
          <i class="fas fa-handshake"></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark font-weight-bold display-4">{{$contratos_sr->count()}}</h1>
          <p class="text-center h4 text-dark font-weight-bold">Contratos sem repasse</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-4 justify-col-center">
      <div class="card card-shadow cr-card-size">
        <div class="icon-main">
          <div class="icon-maker" style="background-image: linear-gradient( 135deg, #FEC163 10%, #DE4313 100%)">
            <i class="fas fa-file-medical-alt"></i>
          </div>
        </div>
        <div class="card-body">
          <h1 class="text-dark font-weight-bold display-4">{{$contratos_sr->count() + $contratos_cr->count()}}</h1>
          <p class="text-center h4 text-dark font-weight-bold">Total</p>
        </div>
      </div>
    </div>
    @endempty 
  </div>
</div>

@endsection

