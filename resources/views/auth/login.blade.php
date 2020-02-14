@extends('layouts.app')


<style type="text/css">
    .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}
</style>
@section('content')

<div class="flex-center position-ref full-height">


<div class="container mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mx-auto">
                <div class="card-body">

                    <div class="title text-center mb-5">
                        <img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="70%" style="opacity: 95%">
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 content-form">
                                <input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn teste btn-block mt-3 btn-success btn-lg font-weight-bold p-3">{{ __('Login') }}</button>
                        </div>

                        <div class="form-group row justify-content-center d-fluid mt-5">
                            <div class="col-md-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-danger font-weight-bold btn-block" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua Senha?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-6">
                                 <a class="btn btn-outline-primary font-weight-bold btn-block" href="{{ route('register') }}">{{ __('Registre-se') }}-se</a>
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>


</div><!--full-height-->
@endsection