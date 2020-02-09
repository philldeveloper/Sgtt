@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->

<div class="container-fluid mt-4 py-4">
    <span class="h3 font-weight-bold">Dados Gerais</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>


<div class="container">
    <div class="row py-5">
        <div class="col-md-4 py-1 rounded-0">
            <span class="h3 font-weight-bold">Contratos Gerados</span>
            <div class="card mt-3">
                <div class="card-body">
                    @if (count($contratos_sr) >=1)
                    <h4 class="font-weight-bold">Sem Repasse: {{$contratos_sr->count()}}</h4>
                    @else
                    <h4 class="font-weight-bold">Sem Repasse: 0</h4>
                    @endif
                    @if (count($contratos_cr) >=1)
                    <h4 class="font-weight-bold">Com Repasse: {{$contratos_cr->count()}}</h4>
                    @else
                    <h4 class="font-weight-bold">Com Repasse: 0</h4>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1 rounded-0">
            <span class="h3 font-weight-bold">Pareceres Emitidos</span>
            <div class="card mt-3">
                <div class="card-body">
                    @if (count($contratos_sr) >=1)
                        @foreach($contratos_sr as $csr) 
                          <h4 class="font-weight-bold">Sem Repasse: {{$csr->correcoes->count()}}</h4>
                        @endforeach
                        @else
                            <h4 class="font-weight-bold">Sem Repasse: 0</h4>
                    @endif

                    @if (count($contratos_cr) >=1)
                        @foreach($contratos_cr as $ccr) 
                          <h4 class="font-weight-bold">Com Repasse: {{$ccr->correcoes->count()}}</h4>
                        @endforeach
                        @else
                          <h4 class="font-weight-bold">Com Repasse: 0</h4>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1 rounded-0">
            <span class="h3 font-weight-bold">Usuários cadastrados</span>
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="font-weight-bold">{{Auth::user()->count()}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid mt-4 py-4">
    <span class="h3 font-weight-bold">Estatísticas</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<hr>


<div class="container">
    <div class="row py-5">
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut3"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

