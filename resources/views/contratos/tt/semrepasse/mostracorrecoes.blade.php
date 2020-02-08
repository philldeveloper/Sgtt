@extends('layouts.admin')

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
    <div class="table-responsive">
  <table class="table border table-hover shadow-sm">
      <tr class="bg-light">
        <th>#</th>
        <th> Descrição</th>
        <th> Data de Modificação</th>
        <th> Data de Solicitação</th>
        <th> Status</th>
        <th> Ações</th>
      </tr>
    @foreach($contratos_sr->correcoes as $correcao)
    <tr>
      <td class="font-weight-bold">{{$correcao->id}}</td>
      <td class="font-weight-bold">{{$correcao->descricao}}</td>
      <td>{{$correcao->created_at->format('d/m/Y')}}</td>
      <td>{{$correcao->updated_at}}</td>
      <td>Resolvida</td>
      <td>
        <form action="{{route('correcoes.destroy',$correcao->id) }}" method="POST">
          <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{route('correcoes.show', $correcao->id)}}" class="btn btn-sm pl-4 pr-4 btn-light font-weight-bold" target="blank"><i class="fa fa-eye"></i></a>
              <a href="{{route('correcoes.edit', $correcao->id)}}" class="btn btn-sm pl-4 pr-4 btn-light font-weight-bold" target="blank"><i class="fa fa-edit"></i></a>
            @csrf
            @method('DELETE')
            <button class="btn btn-sm pl-4 pr-4 btn-danger font-weight-bold" type="submit">Deletar</button>
          </div>
          </form>
      </td>
    </tr>
    @endforeach
      </table>
    </div><!--table-responsive-->
  </div>
</div>
@endsection