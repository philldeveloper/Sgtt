@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->

<div class="container-fluid mt-4 py-4">
    <span class="h3 font-weight-bold">Dados Gerais</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>

<div class="container my-auto mx-auto">
<div class="row">
<!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
    <div class="h3 font-weight-bold py-3">Lorem Ipsum</div>

      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <!--div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div-->
        <!-- Card Body -->
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
        <div class="h3 font-weight-bold py-3">Lorem Ipsum</div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <!--div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div-->
        <!-- Card Body -->
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
    <span class="h3 font-weight-bold">Lorem Ipsum</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>

<div class="container">
    <div class="row py-5">
        <div class="col-md-6 py-1 rounded-0">
            <span class="h3 font-weight-bold">Lorem Ipsum</span>
            <div class="card mt-3">
                <div class="card-body">
                    {{--@if (count($contratos_sr) >=1)
                    <h4 class="font-weight-bold">Sem Repasse: {{$contratos_sr->count()}}</h4>
                    @else
                    <h4 class="font-weight-bold">Sem Repasse: 0</h4>
                    @endif
                    @if (count($contratos_cr) >=1)
                    <h4 class="font-weight-bold">Com Repasse: {{$contratos_cr->count()}}</h4>
                    @else
                    <h4 class="font-weight-bold">Com Repasse: 0</h4>
                    @endif--}}
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1 rounded-0">
            <span class="h3 font-weight-bold">Lorem Ipsum</span>
            <div class="card mt-3">
                <div class="card-body">
                    {{--<h4 class="font-weight-bold">{{Auth::user()->count()}}</h4>--}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

