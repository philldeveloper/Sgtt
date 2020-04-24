@extends('layouts.admin')

@section('content')

<style>#wrapper #content-wrapper {background-color: #f5f5f5 !important;}
.faq-container{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 72px;
}

.box-shadow{
  -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
}
</style>

<!-- Begin Page Content -->
<div class="mb-4 col-md-12 faq-container bg-white box-shadow">
  <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Como podemos ajudar você?</h1>
</div>

<div class="container p-5">
  <div class="row justify-content-center">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link py-3 mb-4 font-weight-bold active" id="pills-ask-tab" data-toggle="pill" href="#pills-ask" role="tab" aria-controls="pills-ask" aria-selected="true">Perguntas Frequentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-3 mb-4 font-weight-bold" id="pills-tutorials-tab" data-toggle="pill" href="#pills-tutorials" role="tab" aria-controls="pills-tutorials" aria-selected="false">Tutoriais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-3 mb-4 font-weight-bold" id="pills-docs-tab" data-toggle="pill" href="#pills-docs" role="tab" aria-controls="pills-docs" aria-selected="false">Documentação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-3 mb-4 font-weight-bold" id="pills-nit-tab" data-toggle="pill" href="#pills-nit" role="tab" aria-controls="pills-nit" aria-selected="false">Sobre o NIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link py-3 mb-4 font-weight-bold" id="pills-marca-tab" data-toggle="pill" href="#pills-marca" role="tab" aria-controls="pills-marca" aria-selected="false">Manual da Marca</a>
      </li>
    </ul>
  </div>
  <div class="tab-content shadow border border-primary bg-white p-5" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-ask" role="tabpanel" aria-labelledby="pills-ask-tab">
      <h2 class="font-weight-bold text-dark mb-5">Perguntas Frequentes</h2>
      <h4 class="">Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
    </div>

    <div class="tab-pane fade" id="pills-tutorials" role="tabpanel" aria-labelledby="pills-tutorials-tab">
      <h2 class="font-weight-bold text-dark mb-5">Tutoriais</h2>
      <h4 class="">Como gerar um contrato</h4><hr>
      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
      <a href="#" class="btn btn-success btn-lg">Ver PDF</a>
    </div>


    <div class="tab-pane fade" id="pills-docs" role="tabpanel" aria-labelledby="pills-docs-tab">
      <h2 class="font-weight-bold text-dark mb-5">Documentação</h2>
      <h4 class="">Lorem Ipsum</h4><hr>
      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
      <a href="#" class="btn btn-primary btn-lg" target="blank">Abrir Link</a>
    </div>

    <div class="tab-pane fade" id="pills-nit" role="tabpanel" aria-labelledby="pills-nit-tab">
      <h2 class="font-weight-bold text-dark mb-5">Sobre o NIT</h2>
      <h4 class="">Lorem Ipsum</h4><hr>
      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
      <a href="#" class="btn btn-outline-primary btn-lg" target="blank">Abrir Link</a>
    </div>

    <div class="tab-pane fade" id="pills-marca" role="tabpanel" aria-labelledby="pills-marca-tab">
      <h2 class="font-weight-bold text-dark mb-5">Manual da Marca</h2>
      <h4 class="">Lorem Ipsum</h4><hr>
      <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
      <a href="{{asset('assets/manual_sgtt.pdf')}}" class="btn btn-lg btn-success py-3 mt-3" target="blank">Baixar Manual</a>
    </div>
  </div>
</div>


@endsection