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
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <div class="flex-center position-ref full-height" style="flex-direction: column;">

            <div class="content">
                <div class="title mb-3">
                    <img src="{{ asset('assets/new_sgtt.svg') }}" alt="sgtt" style="opacity: 95%">
                </div>

                <div class="subtitle mb-5 py-4 h1">
                    <p class="text-secondary">Sistema para Gestão de Processos de Acordos e Contratos de Transferência de Tecnologia</p>
                </div>

                @if (Auth::check())
                <a href="{{asset('home')}}" class="btn teste btn-dark btn-lg font-weight-bold p-3 pl-5 pr-5 m-2" style="background-color: black !important; border-color: black !important;">Ir para Início</a>
                @else
                <a href="{{asset('login')}}" class="btn teste btn-dark btn-lg font-weight-bold p-3 pl-5 pr-5 m-2" style="background-color: black !important; border-color: black !important;">Fazer login</a> 

                <a href="{{asset('register')}}" class="btn teste btn-outline-primary btn-lg p-3 pl-5 pr-5 m-2" style="font-weight: bolder">Cadastre-se</a>
                @endif
            </div>
            <div>
            <div class="dropdown-divider"></div>
        
            <div class="footer" style="display: flex; align-items:center; justify-content: space-around; width: 100vw;">
                <div class="contato" style="display: flex; align-items:center">
                    <span class="text-center font-weight-bold mr-2">
                    <i class="far fa-envelope" style="font-size: 18px;"></i>
                    </span>
                    <span class="d-block text-center mr-2 font-weight-regular" style="font-weight: 400;">nit@univasf.edu.br - </span>
                     <span class="d-block text-center mr-2 font-weight-regular" style="font-weight: 400;">nit@ifsertao-pe.edu.br</span>
                </div>
                <div class="contato" style="display: flex; align-items:center; flex-direction: column;">
                    <span class="text-center font-weight-bold" style="text-transform: uppercase; font-weight: 400; letter-spacing: 0.6px;">Parceria
                    </span>
                    <div style="display: flex;">
                        <a href="https://www.ifsertao-pe.edu.br/" target="_blank">
                        <img class="px-2" src="{{ asset('assets/logo-if.png') }}" alt="Ifsertão" style="width: 150px;">
                        </a>
                        <a href="http://www.univasf.edu.br/" target="_blank">
                            <img class="px-2" src="{{ asset('assets/logo-univasf.png') }}" alt="Univasf" style="width: 150px;">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>