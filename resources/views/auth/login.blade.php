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

.password-container{
    display: flex;
    flex-direction: column;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.align-end{
    display: flex;
    flex-direction: column;
    align-items: flex-end
}

.lost_password{
    font-size: 16px;
    padding-bottom: 20px;
}

.lost_password:hover{
    text-decoration: none;
}

.logo{
    margin: 0 auto;
    display: block;
}
.no-account{
    border-radius: 500px !important; 
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
                    <img class="logo" src="{{ asset('assets/new_sgtt.svg') }}" alt="sgtt" width="80%" style="opacity: 95%">
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
                        <div class="text-center align-end">
                            <button type="submit" class="btn teste btn-block mt-3 btn-success btn-lg font-weight-bold p-3">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                    <a class="p-2 lost_password" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="form-group password-container container">
                                <span class="font-weight-bold text-dark no-account">Não possui conta?</span>
                                 <a class="btn px-5 mt-3 btn-dark btn-md no-account" href="{{ route('register') }}">{{ __('Registre-se') }}</a>
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