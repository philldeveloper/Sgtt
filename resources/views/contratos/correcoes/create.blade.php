@extends('layouts.admin')

<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

</style>
@section('content')

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Inserir Nova Correção</span>
    <div class="badge badge-dark lead  mr-auto float-right">sem repasse</div>
</div>

<div class="card mt-5 color-card">
  <div class="card-body p-3">
  	<div class="badge badge-warning p-3 text-center mx-auto font-weight-bold text-dark">ATENÇÃO: Os seguintes itens devem ser revisados antes de reenviar o contrato para revisão.</div>
  	
  	<!--deverá conter um select com os contratos, para o admin escolher qual inserir a correção.-->

  </div>
</div>
@endsection