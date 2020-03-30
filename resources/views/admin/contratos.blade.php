@extends('layouts.admin')

@section('content')

@include('popper::assets')


{{--
<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold text-dark">Novo Contrato</span>
    <span class="font-italic ml-3">Escolha um tipo de contrato antes de prosseguir:.</span>
    <!--img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="8%" class="float-right" style="opacity: 0.2"-->
</div>
<hr>    
<div class="container-fluid py-3">
<div class="row">
  <div class="col-lg-6">
    <div class="notice notice-info notice-lg">
        <span class="h4 font-weight-bold text-dark text-uppercase">Acordo de Cooperação <span class="text-dark">sem repasse</span></span>
        <hr>
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
        <span class="h4 font-weight-bold text-dark text-uppercase">Acordo de Cooperação <span class="text-dark">com repasse</span></span>
        <hr>
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
--}}

<div class="container-fluid mt-5 mb-5">
  <span class="h3 font-weight-bold text-black" wfd-id="41">Contratos</span>
  <span class="font-italic ml-3 mb-3">Visualize informações relacionadas aos contratos gerados.</span>
</div><hr>


<div class="row m-3 py-4">
  <div class="col-12 mt-4 rounded-0">
    <div class="card mb-4 rounded-0 shadow-sm">
      <div class="card-body p-0 pb-5 rounded-0">
        
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="example">
              <thead class="roboto-font font-weight-bold text-dark border-left-success border-bottom shadow-sm" style="font-size: 1.25rem">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Desenv. por</th>
                  <th scope="col">ICT | Parceiro</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Criado em</th>
                  <!--th scope="col">Modificado em</th-->
                  <!--th scope="col">Status</th-->
                  <!--th scope="col">Correções</th-->
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
                  <td><div class="">{{$contratos->user->nome}}</div></td>
                  <td>{{$contratos->nome_ict}} | {{$contratos->nome_parceiro}}</td>
                  <td>{{$contratos->user->email}}</td>
                  <td>{{$contratos->created_at}}</td>
                  <!--td>
                    <div class="progress mt-2 mr-3">
                      <div class="progress-bar bg-primary pr-3 pl-3" role="progressbar" style="width: 70%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Apreciação</div>
                    </div>
                  </td-->
                  
                  {{--
                  <!--@if (count($contratos->correcoes) >=1)
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('contrato_correcoes', $contratos->id)}}" class="btn btn-sm pl-4 pr-4 btn-warning  text-dark font-weight-bold" target="blank">{{$contratos->correcoes->count()}}</a>
                    </div>
                  </td>
                  @else
                  <td>
                    <p class="text-center font-weight-bold text-danger">0</p>
                  </td>
                  @endif-->
                  
                  --}}

                  <td>
                    <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <!-- <a @popper(Baixar) href="{{route('printpdf', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a> -->
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->user->email}}" target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
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
                  <td><div class="">{{$cr->user->nome}}</div></td>
                  <td>{{$cr->nome_ict}} | {{$cr->nome_parceiro}}</td>
                  <td>{{$cr->user->email}}</td>
                  <td>{{$cr->created_at}}</td>
                  <td>
                    <form action="{{route('contrato_cr.destroy',$cr->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-cr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-primary font-weight-bold" href="mailto:{{$cr->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$cr->user->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
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

@include('pdf.modal-cr-loading')
@include('pdf.modal-sr-loading')
@endsection
