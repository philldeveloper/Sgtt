@extends('layouts.admin')

@section('content')

@include('popper::assets')

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
<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold text-dark">Novo Contrato</span>
    <span class="font-italic ml-3">Escolha um tipo de contrato antes de prosseguir:.</span>
    <!--img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="8%" class="float-right" style="opacity: 0.2"-->
</div>
    
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

<div class="container-fluid mt-5 mb-5">
<span class="h3 font-weight-bold text-dark" wfd-id="41">Estatísticas sobre Contratos</span>
<span class="font-italic ml-3 mb-3">Visualize informações relacionadas aos contratos gerados.</span>
  <div class="row justify-content-center mt-3">
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
          <h1 class="text-dark">{{$contratos_cr->count()}}</h1>
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
          <h1 class="text-dark">{{$contratos_sr->count()}}</h1>
          <p class="text-center">Contratos sem repasse</p>
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
          <h1 class="text-dark">{{$contratos_sr->count() + $contratos_cr->count()}}</h1>
          <p class="text-center">Total</p>
        </div>
      </div>
    </div>
    @endempty 
  </div>
{{--   @empty($contratos_sr && $contratos_cr)
  <span class="h3 font-weight-bold">Todos os Contratos <div class="badge badge-dark">0</div></span>
    <div class="bg-secondary text-light p-3 mt-4 mb-0 pb-0 h5 font-weight-bold">Contratos sem repasse: 0 | Contratos com repasse: 0</div>
  @else
    <span class="h3 font-weight-bold">Todos os Contratos 
      <div class="badge badge-dark">{{$contratos_sr->count() + $contratos_cr->count()}}</div></span>
    <div class="bg-secondary text-light p-3 mt-4 mb-0 pb-0 h5 font-weight-bold">
      Contratos sem repasse: {{ $contratos_sr->count() }} | Contratos com repasse: {{ $contratos_cr->count() }}</div>
  @endempty --}}
</div>



<div class="container-fluid">

<span class="h3 font-weight-bold text-dark" wfd-id="41">Todos os Contratos</span>
<span class="font-italic ml-3 mb-3">Edite informações relacionadas aos contratos gerados.</span>

<div class="row">
<div class="col-12 mt-4 rounded-0">
  <div class="card mb-4 rounded-0 shadow-sm">
    <div class="card-body p-0 pb-5 rounded-0">
      
      <div class="table-responsive">
          <table class="table table-hover mb-0" id="example">
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
                <td><div class="">{{$contratos->user->nome}}</div></td>
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
                      <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                      <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                      <a @popper(Baixar) href="{{route('printpdf', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>

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
                <td>{{$cr->nome_ict}} e {{$cr->nome_parceiro}}</td>
                <td>{{$cr->user->email}}</td>
                <td>
                  <form action="{{route('contrato_cr.destroy',$cr->id) }}" method="POST">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                      <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                      <a @popper(Baixar) href="{{route('repassepdf', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>

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
</div><!--container-fluid-->

@endsection