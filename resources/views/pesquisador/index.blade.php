@extends('layouts.admin')

@include('popper::assets')

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
    width: auto !important;
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
    padding: 10px 20px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }

  .disabled{
    cursor: not-allowed;
  }
</style>
@include('popper::assets')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold text-dark">Novo Contrato</span>
    <span class="font-italic ml-3">Escolha um tipo de contrato antes de prosseguir:.</span>
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

<div class="container-fluid mt-5 mb-5">
<span class="h3 font-weight-bold text-dark">Meus Contratos</span>
    <span class="font-italic ml-3">Visualizar todos os contratos cadastrados.</span>
</div>
<hr> 

<div class="container-fluid">
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
                <th scope="col">Criado em</th>
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
                <td><div class="badge badge-dark">{{$contratos->nome}}</div></td>
                <td>{{$contratos->nome_ict}} e {{$contratos->nome_parceiro}}</td>
                <td>{{$contratos->email}}</td>
                <td>{{$contratos->created_at}}</td>
                
                <td>
                    <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <!-- <a @popper(Baixar) href="{{route('printpdf', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a> -->
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->email}}" target="blank"><i class="fas fa-paper-plane"></i></a>
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
                <td><div class="badge badge-dark">{{$cr->nome}}</div></td>
                <td>{{$cr->nome_ict}} e {{$cr->nome_parceiro}}</td>
                <td>{{$cr->email}}</td>
                <td>{{$cr->created_at}}</td>
                
                <td>
                    <form action="{{route('contrato_sr.destroy',$cr->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratosr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratosr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <!-- <a @popper(Baixar) href="{{route('printpdf', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a> -->
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->email}}" target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
                      </div>
                  </form>
                </td>
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

</div>
</div>
</div>

@if(count($contratos_sr) > 0)
  @extends('pdf.modal-sr-loading')
@endif

@if(count($contratos_cr) > 0)
  @extends('pdf.modal-cr-loading')
@endif
@endsection