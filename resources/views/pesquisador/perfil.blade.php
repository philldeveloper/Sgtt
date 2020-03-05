@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold">Meu Perfil</span>
</div>

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

<!-- Begin Page Content -->
<div class="row container">
	<div class="col-lg-12">
		<div class="card card-shadow mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h3>Editar Profile</h3>
				<hr>
			</div>
		</div>
		<div class="row container">
			<!-- <div class="col-md-3">
				<img class="img-user rounded-circle" src="https://image.flaticon.com/icons/svg/149/149071.svg">
				<img class="icon-img" src="{{ asset('assets/camera.svg') }}" alt="">
				
				<div>Editar Avatar</div>
			</div> -->
			<div class="col col-md-8">
			<form method="POST" action="{{ route('userUpdate.update', Auth::user()->id) }}">
			{{ csrf_field() }}
            {{ method_field('PUT') }}

                        <!-----------nome------------------->

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{Auth::user()->nome}}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						  <!-----------email------------------->
						<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{Auth::user()->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-----------cpf------------------->

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{Auth::user()->cpf}}" required autofocus>

                                @if ($errors->has('cpf'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-----------telefone------------------->

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="integer" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" name="telefone" value="{{Auth::user()->telefone}}" required autofocus>

                                @if ($errors->has('telefone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--------celular--------------->

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="integer" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{Auth::user()->celular}}" required autofocus>

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
		<div class="row mt-5 ">
			<div class="col-12">
			@if(Session::has('message')) 
				<div class="alert alert-success"> {{Session::get('message')}} </div> 
			@endif
			</div>
		</div>
      </div>
    </div>
    </div>
  </div>
@endsection