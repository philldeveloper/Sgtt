@extends('layouts.researcher')

<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

</style>
@section('content')

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Correções</span>
</div>

<div class="card mt-5 color-card">
  <div class="container-fluid mt-4 py-4">
    <span class="h3 font-weight-bold">Contrato {{$contratos_sr->id}}</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
    <div class="badge badge-dark lead  mr-auto float-right">sem repasse</div>
  </div>
  <hr>
  <div class="card-body p-3 pt-5">
  <table class="table table-hover">
      <tr>
        <th>#</th>
        <th> Descrição</th>
        <th> Data de Modificação</th>
        <th> Data de Solicitação</th>
        <th> Lorem</th>
      </tr>
    @foreach($contratos_sr->correcoes as $correcao)
    <tr>
      <td>{{$correcao->id}}</td>
      <td>{{$correcao->descricao}}</td>
      <td>{{$correcao->created_at->format('d/m/Y')}}</td>
      <td>{{$correcao->updated_at}}</td>
      <td>
          <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{route('correcoes.show', $correcao->id)}}" class="btn btn-sm pl-4 pr-4 btn-primary font-weight-bold" target="blank"><i class="fa fa-arrow-right"></i></a>
          </div>
      </td>
    </tr>
    @endforeach
      </table>
  </div>
</div>
@endsection