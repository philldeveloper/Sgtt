@extends('layouts.admin')

<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.12/dist/css/bootstrap-select.min.css">
 
<!-- Latest compiled and minified JavaScript -->


@section('content')

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Inserir Nova Correção</span>
    <div class="badge badge-dark lead  mr-auto float-right">sem repasse</div>
</div>

<div class="card mt-5 color-card">
  <div class="card-body p-3">
    
    <form id="" class="form-horizontal" method="POST" action="{{ route('correcoes.store') }}">
          {{ csrf_field() }}
      <div class="form-group">
        <div class="h3 ml-3 font-weight-bold text-dark mb-3 py-4">Escolha um contrato abaixo:</div>
        <select class="form-control" id="exampleFormControlSelect2" required="" name="contrato_sr_id">
          @forelse ($contratos_sr as $contratos)
          <option class="text-uppercase" value="{{$contratos->id}}">{{$contratos->nome_ict}} e {{$contratos->nome_parceiro}}</option>
          @empty
          <option class="text-uppercase" value="">Não há contratos ainda.</option>
          @endforelse
        </select>
      </div>
      <div class="form-group">
        <div class="h3 ml-3 font-weight-bold text-dark mb-2 py-4">Escreva o Parecer:</div>
        <textarea class="form-control" name="descricao" required=""></textarea>
      </div>
      <button class="btn btn-primary btn-lg py-2 mt-5" type="submit">Registrar</button>
    </form>
  </div>
</div>
@endsection
