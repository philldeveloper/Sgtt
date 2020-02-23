@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold">Novo Contrato</span>
    <span class="font-italic ml-3">Escolha um tipo de contrato antes de prosseguir:.</span>
    
    <img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="8%" class="float-right" style="opacity: 0.2">
</div>

<div class="container-fluid py-3">
<div class="row">
  <div class="col-lg-6">
    <div class="notice notice-info notice-lg">
        <span class="h4 font-weight-bold text-black">Acordo de Cooperação <span class="text-dark">sem repasse</span></span>
        <p class="subtitle pt-2 mr-auto">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        
        <div class="container-button text-right">
          <a href="{{route('contrato_sr.index')}}" class="btn btn-success btn-lg btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Criar Contrato</span>
          </a>
        </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="notice notice-success notice-lg">
        <span class="h4 font-weight-bold text-black">Acordo de Cooperação <span class="text-dark">com repasse</span></span>
        <p class="subtitle pt-2 mr-auto">Lero voluptatem fugiat, incidunt id quibusdam quis odit, expedita molestiae dolorem animi. Provident.</p>
        <div class="container-button text-right">
          <a href="{{route('contrato_cr.index')}}" class="btn btn-success btn-lg btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Criar Contrato</span>
          </a>
        </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid mt-5">
  @empty($contratos_sr && $contratos_cr)
  <span class="h3 font-weight-bold">Todos os Contratos <div class="badge badge-dark">0</div></span>
    <div class="bg-secondary text-light p-3 mt-4 mb-0 pb-0 h5 font-weight-bold">Contratos sem repasse: 0 | Contratos com repasse: 0</div>
  @else
    <span class="h3 font-weight-bold">Todos os Contratos <div class="badge badge-dark">{{$contratos_sr->count() + $contratos_cr->count()}}</div></span>
    <div class="bg-secondary text-light p-3 mt-4 mb-0 pb-0 h5 font-weight-bold">Contratos sem repasse: {{ $contratos_sr->count() }} | Contratos com repasse: {{ $contratos_cr->count() }}</div>
  @endempty
</div>

<div class="container-fluid">
<div class="row">

<div class="col-12 mt-4 rounded-0">
  <div class="card mb-4 rounded-0">
    <div class="card-body p-0 pb-5 rounded-0">
      
      <div class="table-responsive">
          <table class="table table-bordered mb-0" id="example">
            <thead class="roboto-font font-weight-bold text-dark border-left-success bg-light shadow-sm" style="font-size: 1.25rem">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Desenv. por</th>
                <th scope="col">ICT | Parceiro</th>
                <th scope="col">E-mail</th>
                <!--th scope="col">Criado em</th>
                <th scope="col">Modificado em</th>
                <th scope="col">Status</th>
                <th scope="col">Correções</th-->
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody class="mb-0 font-weight-bold text-dark">
              <tr>
                <td></td>
              </tr>
              @forelse($contratos_sr as $contratos) 
              <tr class="">
                <td>{{$contratos->id}}</td>
                <td><div class="badge badge-info">{{$contratos->tipo}}</div></td>
                <td><div class="badge badge-dark">{{$contratos->user->nome}}</div></td>
                <td>{{$contratos->nome_ict}} e {{$contratos->nome_parceiro}}</td>
                <td>{{$contratos->user->email}}</td>
                <!--td>
                  <div class="progress mt-2 mr-3">
                    <div class="progress-bar bg-primary pr-3 pl-3" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                  </div>
                </td-->
                
                {{--

                @if (count($contratos->correcoes) >=1)
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('contrato_correcoes', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-warning  text-dark font-weight-bold" target="blank">{{$contratos->correcoes->count()}}</a>
                  </div>
                </td>
                @else
                <td>
                  <p class="text-center font-weight-bold text-danger">0</p>
                </td>
                @endif
                
                --}}

                <td>
                  <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-outline-dark font-weight-bold" target="blank">Ver</a>
                      <a href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-dark font-weight-bold" target="blank">Editar</a>

                      <a href="{{route('printpdf', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-success font-weight-bold" target="blank">Baixar</a>

                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm pl-4 pr-4 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
                    </div>
                 </form>
                </td>
              </tr>
              @empty
              @endforelse
              <!--- end of contrato sr-->

              @forelse($contratos_cr as $cr) 
              <tr class="">
                <td>{{$cr->id}}</td>
                <td><div class="badge badge-success">{{$cr->tipo}}</div></td>
                <td><div class="badge badge-dark">{{$cr->user->nome}}</div></td>
                <td>{{$cr->nome_ict}} e {{$cr->nome_parceiro}}</td>
                <td>{{$cr->user->email}}</td>
                <td>
                  <form action="{{route('contrato_sr.destroy',$cr->id) }}" method="POST">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="" class="btn btn-sm pl-4 pr-4 btn-outline-dark font-weight-bold" target="blank">Ver</a>
                      <a href="" class="btn btn-sm pl-4 pr-4 btn-dark font-weight-bold" target="blank">Editar</a>
                      <a href="{{route('repassepdf', $cr->id)}}" class="btn btn-sm pl-4 pr-4 btn-success font-weight-bold" target="blank">Baixar</a>

                      @csrf
                      @method('DELETE')
                      <button class="btn btn-sm pl-4 pr-4 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
                    </div>
                 </form>
                </td>
              </tr>
              @empty
              @endforelse

              <!--- end of contrato cr-->

            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

</div>
</div>

@endsection
