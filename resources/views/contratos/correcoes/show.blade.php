@extends('layouts.researcher')

<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

</style>

@section('content')
<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Exibir Correções</span>
</div>

<div class="card mt-5 color-card">
  <div class="card-body p-3">
      <div class="form-group">
        <div class="h3 ml-3 font-weight-bold text-dark mb-2 py-4">Correções:</div>
        <textarea class="form-control" name="correcao" readonly="">{{$cc->descricao}}</textarea>
      </div>
  </div>
</div>
@endsection