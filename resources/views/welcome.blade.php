<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
    
        </style>
    </head>
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="black-text" href="{{ url('/home') }}">Home</a>
                        <a class="black-text" href="{{ url('/pesquisador') }}">Pesquisador</a>
                        <a class="black-text" href="{{ url('/admin') }}">Admin</a>
                    @else
                        <a class="black-text" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="black-text" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title"><img src="{{ asset('assets/Groupsgtt.svg') }}" alt="sgtt" ></div>
                <span class="subtitle black-text">Bem vindo ao sistema de gerenciamento e 
                    transferência de tecnologia, densenvolvido para facilitar sua vida.
                    <br/>
                    Faça login ou cadastra-se.
                </span>
               
            
            </div>
        </div>
    </body>
</html>