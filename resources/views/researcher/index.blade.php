@extends('layouts.researcher')

@section('content')
<style>
  body{
    font-family: 'Roboto', sans-serif;
    font-weight: 400 !important;
  }
  .nav-tabs .nav-link:hover{
    background-color: white !important;
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
    border: 1px solid #224abe !important;
    color: black !important;    
  }
</style>


<h4 class="mb-4 text-secondary lead m-4">
  	<span class="h3 font-weight-bold">Contratos</span>
  	<span class="font-italic">Para iniciar um novo contrato, escolha uma opção abaixo:</span>
</h4>
<hr class="mt-3">

<div class="container-fluid mt-4">
  <ul class="nav nav-tabs rounded-0 mb-2" id="myTab" role="tablist">
    <li class="nav-item rounded-0">
      <a class="nav-link mb-2 active" id="cooperacao-tab" data-toggle="tab" href="#cooperacao" role="tab" aria-controls="cooperacao" aria-selected="true">
      <i class="fas fa-hands-helping float-left text-primary mr-4"></i>
      Acordo de Cooperação
    </a>
    </li>
    <li class="nav-item rounded-0">
      <a class="nav-link mb-2" id="tecnologia-tab" data-toggle="tab" href="#tecnologia" role="tab" aria-controls="tecnologia" aria-selected="false">
      <i class="fas fa-chalkboard-teacher float-left text-primary mr-4"></i>
      Transferência de Tecnologia
      </a>
    </li>
    <li class="nav-item rounded-0">
      <a class="nav-link mb-2" id="patentes-tab" data-toggle="tab" href="#patentes" role="tab" aria-controls="patentes" aria-selected="false">
        <i class="fas fa-chalkboard-teacher float-left text-primary mr-4"></i>
        Patentes
      </a>
    </li>
    <li class="nav-item rounded-0">
      <a class="nav-link mb-2" id="lorem-tab" data-toggle="tab" href="#lorem" role="tab" aria-controls="lorem" aria-selected="false">
      <i class="fas fa-search-location float-left text-primary mr-4"></i>
      Lorem Ipsum
      </a>
    </li>
    <li class="nav-item rounded-0">
      <a class="nav-link mb-2" id="outros-tab" data-toggle="tab" href="#outros" role="tab" aria-controls="outros" aria-selected="false">
      <i class="fas fa-search-location float-left text-primary mr-4"></i>
      Transferência de Tecn.
      </a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">
  <!-- cooperação -->      
    <div class="tab-pane fade show active" id="cooperacao" role="tabpanel" aria-labelledby="cooperacao-tab">
      <div class="container-fluid bg-white border-left-primary border-primary border shadow p-4 mt-3 m-0">
        <h3 class="font-weight-bold text-primary">Acordo de Cooperação</h3><hr>
        <p class="ml-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolorum pariatur dolores repudiandae consectetur iste eos voluptates, libero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="text-right">
          <a href="{{asset('/contratos')}}" class="btn btn-lg btn-success rounded-0">Novo contrato</a>
        </div>
      </div>
    </div>

    <!-- tecnologia -->
    <div class="tab-pane fade" id="tecnologia" role="tabpanel" aria-labelledby="tecnologia-tab">
      <div class="container-fluid bg-white border-left-primary border-primary border shadow p-4 mt-3 m-0">
        <h3 class="font-weight-bold text-primary">Transferência de Tecnologia</h3><hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolorum pariatur dolores repudiandae consectetur iste eos voluptates, libero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="text-right">
          <a href="{{asset('/contratos')}}" class="btn btn-lg btn-success rounded-0">Novo contrato</a>
        </div>
      </div>
    </div>

    <!-- patentes -->
    <div class="tab-pane fade" id="patentes" role="tabpanel" aria-labelledby="patentes-tab">
      <div class="container-fluid bg-white border-left-primary border-primary border shadow p-4 mt-3 m-0">
        <h3 class="font-weight-bold text-primary">Patentes</h3><hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolorum pariatur dolores repudiandae consectetur iste eos voluptates, libero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="text-right">
          <a href="{{asset('/contratos')}}" class="btn btn-lg btn-success rounded-0">Novo contrato</a>
        </div>
      </div>
    </div>

    <!-- Lorem -->
    <div class="tab-pane fade" id="lorem" role="tabpanel" aria-labelledby="lorem-tab">
      <div class="container-fluid bg-white border-left-primary border-primary border shadow p-4 mt-3 m-0">
        <h3 class="font-weight-bold text-primary">Lorem Ipsum</h3><hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolorum pariatur dolores repudiandae consectetur iste eos voluptates, libero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="text-right">
          <a href="{{asset('/contratos')}}" class="btn btn-lg btn-success rounded-0">Novo contrato</a>
        </div>
      </div>
    </div>

    <!-- teste -->
    <div class="tab-pane fade" id="outros" role="tabpanel" aria-labelledby="outros-tab">
      <div class="container-fluid bg-white border-left-primary border-primary border shadow p-4 mt-3 m-0">
        <h3 class="font-weight-bold text-primary">Outros</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dolorum pariatur dolores repudiandae consectetur iste eos voluptates, libero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="text-right">
          <a href="{{asset('/contratos')}}" class="btn btn-lg btn-success rounded-0">Novo contrato</a>
        </div>
      </div>
    </div>

  </div><!--end of tab-content-->
</div><!--container-fluid-->


<!-- Begin Page Content -->
<div class="container-fluid bg-white mt-5">
  
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 font-weight-bold pb-3 text-primary">Meus Contratos</h1>
    <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
  </div>


  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">

      <div class="card rounded-0 p-0 mb-3">
        <!-- Card Body -->
        <div class="card-body p-0 m-0 rounded-0 border-primary border shadow">
          <div class="table-responsive rounded-0">
            <table class="table table-hover mb-0 rounded-0">
              <thead class="roboto-font font-weight-bold text-dark rounded-0 border-left-primary  bg-light" style="font-size: 1.25rem">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Andamento</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody class="mb-0 font-weight-bold text-dark rounded-0">
                <tr class="">
                  <th scope="row">1</th>
                  <td>Contrato Sindical</td>
                  <td>Transferencia de Tecnologia</td>
                  <td>
                    <div class="progress rounded-0">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Editar</button>
                      <button type="button" class="btn btn-sm btn-danger font-weight-bold rounded-0">Deletar</button>
                    </div>
                  </td>
                </tr>
                <tr class="">
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Otto</td>
                  <td>
                    <div class="progress rounded-0">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Recepção</div>
                    </div>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Ver</button>
                      <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold rounded-0">Editar</button>
                      <button type="button" class="btn btn-sm btn-danger font-weight-bold rounded-0">Deletar</button>
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