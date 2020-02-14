@extends('layouts.admin')

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
  .nav-tabs .nav-link{
    border: 1px solid transparent !important;
    color: black !important;   
    background-color: #fefefe !important; 
    border-top-right-radius: 8px !important;
    border-top-left-radius: 8px !important;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }

  .card-shadow {
    -webkit-box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
  }
  

  .card-shadow:hover{
    border: 1px solid #fafafa;
    cursor: pointer;
  }

  .img-category{
    display: flex;
    align-items: flex-start;
  }

  .img-category img {
    width: 64px;
    height: auto;
  }

  .card-body > .title{
    font-weight: bold;
    font-size: 18px;
    color: #212529 !important;
    height: 48px;
  }

  .card-body .subtitle{
    font-size: 15px;
  }

  .card-body .container-button{
    display: flex;
    justify-content: flex-end;
  }

  .card-body button {
    border-radius: 1;
    
  }

  .adjust-center{
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carrousel-item .active{
    margin: 0 auto !important;
    display: flex;
    align-items: center;
  }

  .container-button button a{
    text-decoration: none;
    color: white;
  }

  /* Section Documents */
  
  .title-container{
    height: 73px;
    background-color: #fff;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 10px; 20px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }
</style>

<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold">Novo Contrato</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
    
    <a href="{{route('home')}}">
      <img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="8%" class="float-right" style="opacity: 70%">
    </a>
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
              <a href="{{route('contrato_sr.index')}}" class="btn-lg btn btn-success">Criar Contrato</a>
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
              <a href="{{route('contrato_cr.index')}}" class="btn-lg btn btn-success">Criar Contrato</a>
            </div>
          </div>
        </div>
      </div>

<div class="container-fluid mt-5">
    <span class="h3 font-weight-bold">Meus Contratos</span>
    <span class="font-italic ml-3">Visualizar todos os contratos cadastrados.</span>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-12 mt-5 rounded-0">
  <div class="card mb-4 rounded-0">
    <div class="card-body p-0 pb-5 rounded-0">
      
      <div class="table-responsive">
          <table class="table table-hover mb-0" id="example">
            <thead class="roboto-font font-weight-bold text-dark border-left-success bg-light shadow-sm" style="font-size: 1.25rem">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
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
              @forelse($contratos_sr as $contratos) 
              <tr class="">
                <td>{{$contratos->id}}</td>
                <td>Sem Repasse</td>
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
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>

</div>
</div>

</div>
</div>
</div>
@endsection