@extends('layouts.admin')
<style>
.img-user{
	width: 84px;
}


.icon-img{
	width: 35px;
	height: 35px;
	position: absolute;
	left: 0;
}
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

@section('content')
<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold text-dark">Meu Perfil</span>
    <span class="font-italic ml-3">Lorem Ipsum.</span>
</div>
<hr> 

<div class="container-fluid mt-5 mb-5">
    <div class="">
    @if(Session::has('message')) 
        <div class="alert alert-success"> {{Session::get('message')}} </div> 
    @endif
    </div>
</div>

<div class="container col-12 row m-2">
<div class="card card-shadow mb-4 col-lg-9 col-md-12 col-sm-12">
<div class="card-body">
    <h3>Editar Profile</h3>
    <hr class="mb-5">
    <form method="POST" action="{{ route('userUpdate.update', Auth::user()->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group row py-2">
            <label for="nome" class="col-sm-4 col-md-5 col-lg-3 col-xl-3 col-form-label col-form-label-lg font-weight-bold">{{ __('Nome') }}</label>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }} form-control-lg" name="nome" value="{{Auth::user()->nome}}" required autofocus>

                @if ($errors->has('nome'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nome') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row py-2">
            <label for="email" class="col-sm-4 col-md-5 col-lg-3 col-xl-3 col-form-label col-form-label-lg font-weight-bold">{{ __('Email') }}</label>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-lg" name="email" value="{{Auth::user()->email}}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row py-2">
            <label for="cpf" class="col-sm-4 col-md-5 col-lg-3 col-xl-3 col-form-label col-form-label-lg font-weight-bold">{{ __('CPF') }}</label>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }} form-control-lg" name="cpf" value="{{Auth::user()->cpf}}" required autofocus>

                @if ($errors->has('cpf'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row py-2">
            <label for="telefone" class="col-sm-4 col-md-5 col-lg-3 col-xl-3 col-form-label col-form-label-lg font-weight-bold">{{ __('Telefone') }}</label>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <input id="telefone" type="integer" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }} form-control-lg" name="telefone" value="{{Auth::user()->telefone}}" required autofocus>

                @if ($errors->has('telefone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('telefone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row py-2 mb-5">
            <label for="celular" class="col-sm-4 col-md-5 col-lg-3 col-xl-3 col-form-label col-form-label-lg font-weight-bold">{{ __('Celular') }}</label>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }} form-control-lg" name="celular" value="{{Auth::user()->celular}}" required autofocus>

                @if ($errors->has('celular'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-md btn-lg btn-icon-split">
            <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Salvar</span>
        </button>
    </form>
</div>
</div>
</div>
@endsection