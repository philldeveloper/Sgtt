@extends('layouts.researcher')

<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

</style>
@section('content')

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Parecer do Contrato <span class="badge badge-primary">{{$contratos_sr->id}}</span></span>
    <div class="badge badge-dark lead  mr-auto float-right">sem repasse</div>
</div>

<div class="card mt-5 color-card">
  <div class="card-body p-3">
  	<div class="badge badge-warning p-3 text-center mx-auto font-weight-bold text-dark">ATENÇÃO: Os seguintes itens devem ser revisados antes de reenviar o contrato para revisão.</div>
  	<br>
  	<p class="mt-5">{{ $cc->correcao }}</p>
  </div>
</div>
@endsection