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


<div class="col-12">
  <div class="card m-3 p-5">
    <div class="bd-example bd-example-tabs">
  <div class="row">
    <div class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link font-weight-bold p-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Perguntas Frequentes</a>
        <a class="nav-link font-weight-bold p-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tutoriais</a>
        <a class="nav-link font-weight-bold p-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Documentação</a>
        <a class="nav-link font-weight-bold p-4" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sobre o NIT</a>
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content ml-5" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <h2 class="font-weight-bold text-dark bg-light mb-5">Perguntas Frequentes</h2>

          <h4 class="font-weight-bold font-italic">Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
          <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          </p>
          <br>
          <h4 class="font-weight-bold font-italic">Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
          <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.</p>
          <br>
          <h4 class="font-weight-bold font-italic">Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
          <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          </p>
          <br>
          <h4 class="font-weight-bold font-italic">Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
          <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint.Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          </p>
          <br>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <h2 class="font-weight-bold text-dark bg-light mb-5">Tutoriais</h2>
          <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.</p>
          <br>
          <iframe width="100%" height="500px" src="" class="bg-light"></iframe>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <h2 class="font-weight-bold text-dark bg-light mb-5">Documentação</h2>
          <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <h2 class="font-weight-bold text-dark bg-light mb-5">Sobre o NIT</h2>
          <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<div class="container m-5">


</div>


@endsection