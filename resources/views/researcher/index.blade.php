@extends('layouts.researcher')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid bg-white pt-5">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Novo Contrato</h1>
    <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
  </div>

  <!-- Content Row -->
  <div class="row justify-content-left p-2">

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-danger border border-danger rounded-0">
          <h6 class="text-right text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x text-danger float-left"></i>
            Acordo de Cooperação
          </h6>
        </div>
      </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-info border border-info rounded-0 text-right">
          <h6 class="text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x text-info float-left"></i>
            Transf. de Tecnologia
          </h6>
        </div>
      </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-dark border border-dark rounded-0">
          <h6 class="text-right text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x float-left text-dark"></i>
            Acordo de Cooperação
          </h6>
        </div>
      </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-dark border border-dark rounded-0">
          <h6 class="text-right text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x float-left text-dark"></i>
            Lorem Ipsum
          </h6>
        </div>
      </a>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-dark border border-dark rounded-0">
          <h6 class="text-right text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x float-left text-dark"></i>
            Lorem Dormu
          </h6>
        </div>
      </a>
    </div>

    <div class="mb-4 col-lg-4 col-md-6 col-sm-12">
      <a href="{{route('ctt.create')}}" style="text-decoration: none !important">
        <div style="background-color: white !important" class="p-3 card-footer border-left-dark border border-dark rounded-0">
          <h6 class="text-right text-uppercase font-weight-bold roboto-font text-black">
            <i class="fas fa-hands-helping fa-2x float-left text-danger"></i>
            Acordo de Cooperação
          </h6>
        </div>
      </a>
    </div>

  </div><!--row-->

  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mt-2 mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold pb-3">Meus Contratos</h1>
    <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
  </div>


  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">

    

      <div class="card rounded-0 p-0 mb-3">
        <!-- Card Header - Dropdown -->
        
        <!-- Card Body -->
        <div class="card-body p-0 m-0 rounded-0">
          <div class="table-responsive rounded-0">
            <table class="table table-hover mb-0 rounded-0">
              <thead class="font-weight-bold text-dark rounded-0 bg-light" style="font-size: 1.25rem">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Andamento</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody class="mb-0 font-weight-bold text-dark rounded-0">
                <tr>
                  <th scope="row">1</th>
                  <td>Contrato Sindical</td>
                  <td>Transferencia de Tecnologia</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-primary font-weight-bold rounded-0">Ver</button>
                      <button type="button" class="btn btn-dark font-weight-bold rounded-0">Editar</button>
                      <button type="button" class="btn btn-danger font-weight-bold rounded-0">Deletar</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Otto</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 59%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">59%</div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-primary font-weight-bold rounded-0">Ver</button>
                      <button type="button" class="btn btn-dark font-weight-bold rounded-0">Editar</button>
                      <button type="button" class="btn btn-danger font-weight-bold rounded-0">Deletar</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Otto</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 59%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">59%</div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-outline-primary font-weight-bold rounded-0">Ver</button>
                      <button type="button" class="btn btn-dark font-weight-bold rounded-0">Editar</button>
                      <button type="button" class="btn btn-danger font-weight-bold rounded-0">Deletar</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.row -->
</div>

@endsection