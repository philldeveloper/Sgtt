<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SGTT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title mb-5">
                    <img src="{{ asset('assets/Grouplogo.svg') }}" alt="sgtt" width="70%" style="opacity: 95%">
                </div>

                <span class="subtitle text-dark mt-5 h1">Bem vindo ao sistema de gerenciamento e 
                    transferência de tecnologia, densenvolvido para facilitar sua vida.
                    <br><br><br>
                    
                </span>
                @if (Auth::check())
                <a href="{{asset('home')}}" class="btn teste btn-dark btn-lg font-weight-bold p-3 pl-5 pr-5 m-2" style="background-color: black !important; border-color: black !important;">Ir para Início</a>
                @else
                <a href="{{asset('login')}}" class="btn teste btn-dark btn-lg font-weight-bold p-3 pl-5 pr-5 m-2" style="background-color: black !important; border-color: black !important;">Fazer login</a> 

                <a href="{{asset('register')}}" class="btn teste btn-outline-primary btn-lg p-3 pl-5 pr-5 m-2" style="font-weight: bolder">Cadastre-se</a>
                @endif
            </div>
        </div>
    </body>
</html>