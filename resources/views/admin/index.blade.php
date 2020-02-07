@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
<div class="row">


<div class="container-fluid mt-4">
    <span class="h3 font-weight-bold">Contratos</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>


<div class="col-4 mt-5 col-md-4 col-sm-12">
  <div class="card rounded-0 shadow bg-white text-dark mb-4">
    <div class="card-header text-text-justify text-dark">
      <span class="h5 font-weight-bold text-text-justify">Contratos gerados</span>
    </div>
    <div class="card-body p-3 mx-auto">
      <h4 class="font-weight-bold">Sem Repasse: {{$contratos_sr->count()}}</h4>
      <h4 class="font-weight-bold">Com Repasse: {{$contratos_cr->count()}}</h4>
    </div>
  </div>
</div>

<div class="col-4 mt-5 col-md-4 col-sm-12">
  <div class="card rounded-0 shadow bg-white text-dark mb-4">
    <div class="card-header text-text-justify text-dark">
      <span class="h5 font-weight-bold text-text-justify">Pareceres emitidos:</span>
    </div>
    <div class="card-body p-3 mx-auto">
      @foreach($contratos_sr as $csr) 
      <h4 class="font-weight-bold">Sem Repasse: {{$csr->correcoes->count()}}</h4>
      @endforeach
      @foreach($contratos_cr as $ccr) 
      <h4 class="font-weight-bold">Com Repasse: {{$ccr->correcoes->count()}}</h4>
      @endforeach
    </div>
  </div>
</div>

<div class="col-4 mt-5 col-md-4 col-sm-12">
  <div class="card rounded-0 shadow bg-white text-dark mb-4">
    <div class="card-header text-text-justify text-dark">
      <span class="h5 font-weight-bold text-text-justify">Usuários cadastrados</span>
    </div>
    <div class="card-body p-3 mx-auto">
      <h4 class="font-weight-bold">{{Auth::user()->count()}}</h4>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold">Contábil</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

</div>
</div>

@endsection