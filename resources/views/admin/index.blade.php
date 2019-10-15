@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold">Novo Contrato</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <h3 class="mt-2 font-weight-bold ml-auto">Acordo de Cooperação <span class="text-dark">sem repasse</span></h3>
            <hr>
            <div class="img-category mb-4 float-left mr-3">
              <img src="https://www.flaticon.com/premium-icon/icons/svg/2081/2081811.svg" alt="Shield">
            </div>

            <p class="subtitle pt-2 mr-auto">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-lg btn-success"><a href="{{route('semrepasse')}}">Criar Contrato</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card card-shadow mb-4">
          <div class="card-body">
            <h3 class="mt-2 font-weight-bold ml-auto">Acordo de Cooperação <span class="text-dark">com repasse</span></h3>
            <hr>
            <div class="img-category mb-4 float-left mr-3">
              <img src="https://image.flaticon.com/icons/svg/747/747001.svg" alt="Shield">
            </div>

            <p class="subtitle pt-2 mr-auto">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
            <div class="container-button">
              <button class="btn-lg btn-success"><a href="{{route('repasse')}}">Criar Contrato</a></button>
            </div>
          </div>
        </div>
      </div>

<div class="container-fluid mt-4">
    <span class="h3 font-weight-bold">Contratos</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<div class="col-12 mt-5">
  <div class="card card-shadow mb-4">
    <div class="card-body p-3 mb-5">
      
      <div class="table-responsive">
          <table class="table table-hover mb-0">
                <thead class="roboto-font font-weight-bold text-dark border-left-success bg-light" style="font-size: 1.25rem">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Andamento</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody class="mb-0 font-weight-bold text-dark">
                  <tr class="">
                    <th scope="row">1</th>
                    <td>Contrato Sindical</td>
                    <td>Transferencia de Tecnologia</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold">Editar</button>
                        <button type="button" class="btn btn-sm btn-danger font-weight-bold">Deletar</button>
                      </div>
                    </td>
                  </tr>
                  <tr class="">
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Otto</td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Recepção</div>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold">Ver</button>
                        <button type="button" class="btn btn-sm btn-outline-primary font-weight-bold">Editar</button>
                        <button type="button" class="btn btn-sm btn-danger font-weight-bold">Deletar</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
@endsection