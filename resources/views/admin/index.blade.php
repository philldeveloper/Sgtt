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
              <button class="btn-lg btn-success"><a href="{{route('contrato_sr.index')}}">Criar Contrato</a></button>
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
              <button class="btn-lg btn-success"><a href="#">Criar Contrato</a></button>
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
                    <th scope="col">Desenv. por</th>
                    <th scope="col">ICT | Parceiro</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Modificado em</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody class="mb-0 font-weight-bold text-dark">
                  @forelse($contratos_sr as $contratos)
                  <tr class="">
                    <td>{{$contratos->id}}</td>
                    <td>{{$contratos->user->nome}}</td>
                    <td>{{$contratos->nome_ict}} e {{$contratos->nome_parceiro}}</td>
                    <td>{{$contratos->created_at->format('d/m/Y H:i:s')}}</td>
                    <td>{{$contratos->updated_at->format('d/m/Y H:i:s')}}</td>
                    <td>
                      <div class="progress mt-2 mr-3">
                        <div class="progress-bar bg-primary pr-3 pl-3" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-outline-secondary font-weight-bold" target="blank">Ver</a>
                        <button type="button" class="btn btn-sm pl-4 pr-4 btn-outline-secondary font-weight-bold">Editar</button>
                        <button type="button" class="btn btn-sm pl-4 pr-4 btn-danger font-weight-bold">Deletar</button>
                      </div>
                    </td>
                  </tr>
                  @empty
                  @endforelse
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