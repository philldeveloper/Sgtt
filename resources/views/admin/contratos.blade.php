@extends('layouts.admin')

@section('content')

<style>
  body#page-top #wrapper #content-wrapper{
    background-color: white !important;
    color: black !important;
  }
  .btn{
    margin: 1px !important;
  }
  .bd-example {
    position: relative;
    padding: 1rem;
    /* margin: 1rem -15px 0; */
    /* border: solid #f8f9fa;
    border-width: .2rem 0 0; */
  }
  @media (min-width: 576px){
  .bd-example {
    padding: 1.5rem;
    margin-right: 0;
    margin-left: 0;
    border-width: .2rem;
    }
  }
</style>
@include('popper::assets')

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

<div class="container-fluid mt-5 mb-5">
  <span class="h3 font-weight-bold text-black" wfd-id="41">Contratos</span>
  <span class="font-italic ml-3">Visualize informações relacionadas aos contratos gerados.</span>
</div><hr>

<div class="m-2">
<div class="bd-example bg-white table-responsive">
  <table class="table table-stripped table-hover">
  <caption class="p-2">Lista de Contratos</caption>
    <thead class="border-bottom border-dark text-dark">
      <tr classa="">
        <th scope="col">#</th>
        <th scope="col">Tipo</th>
        <th scope="col">Solicitante</th>
        <th scope="col" colspan="2"><span class="text-left">Parceiros</span></th>
        <th scope="col">Email</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    @forelse($contratos_sr as $contratos) 
      <tr class="text-dark">
        <th scope="row">{{$contratos->id}}</th>
        <td>{{$contratos->tipo}}</td>
        <td>{{$contratos->user->nome}}</td>
        <td class="">{{$contratos->nome_ict}}</td>
        <td class="">{{$contratos->nome_parceiro}}</td>
        <td class="">{{$contratos->user->email}}</td>
        <td class="d-inline-flex">
          <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
            @include('pesquisador.modals.contrato-sr_delete')
            <div class="d-inline-flex">
              <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-eye"></i></a>
              <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-pen"></i></a>
              <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading--{{$contratos->id}}" class="d-inline-flex btn btn-outline-primary border-0" target="blank"><i class="fas fa-download"></i></a>
              <a @popper(Enviar Email) href="mailto:{{$contratos->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$contratos->user->nome}}," class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-paper-plane"></i></a>
              <a @popper(Deletar) href="#" data-toggle="modal" data-target="#contrato-sr_delete--{{$contratos->id}}" class="d-inline-flex btn btn-outline-danger border-0" target="blank"><i class="fas fa-trash"></i></a>
            </div>
          </form>
        </td>
      </tr>
      <!-- Modal SEM REPASSE-->
      <div class="modal fade" id="modal-sr-loading--{{$contratos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contrato sem repasse</h5>
              <button type="button" class="close" data-dismiss="modal" onclick="modaltoDefaultSR()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <div class="row justify-content-center p-3">
                <i class="fas fa-5x fa-file-download py-3 mb-1 text-primary"></i>    
              </div>
              <div class="row justify-content-center">
                <img id="gif-loading-sr" style="display: none;" src="{{asset('assets/preloader.gif')}}" alt="loading" width="40px" height="40px" class="text-center">
                <img id="success-icon-sr" style="display: none" src="{{asset('assets/success.svg')}}" alt="correct" width="80px" height="80px" >
              </div>
              <h5 id="user-message-sr" class="font-weight-bold text-dark py-3">Clique em Baixar para fazer o download.</h5>
              <div style="display:flex; flex-direction: row; align-items: center;justify-content:center;">
                <a href="{{route('printpdf', $contratos->id)}}" onclick="loadingDownloadSR(event)" class="btn btn-primary font-weight-bold mr-4 py-3 mb-4"><i class="fas fa-file-pdf"></i> Baixar PDF</a>
                <a href="{{route('semrepassedoc', $contratos->id)}}" class="btn btn-primary font-weight-bold mr-4 py-3 mb-4"><i class="fas fa-file-word"></i> Baixar DOC</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @empty
    @endforelse

    @forelse($contratos_cr as $cr)
    <tr class="text-dark">
        <th scope="row">{{$cr->id}}</th>
        <td>{{$cr->tipo}}</td>
        <td>{{$cr->user->nome}}</td>
        <td class="">{{$cr->nome_ict}}</td>
        <td class="">{{$cr->nome_parceiro}}</td>
        <td class="">{{$cr->user->email}}</td>
        <td class="d-inline-flex">
          <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
            @include('pesquisador.modals.contrato-cr_delete')
            <div class="d-inline-flex">
              <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-eye"></i></a>
              <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-pen"></i></a>
              <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-cr-loading--{{$cr->id}}" class="d-inline-flex btn btn-outline-primary border-0" target="blank"><i class="fas fa-download"></i></a>
              <a @popper(Enviar Email) href="mailto:{{$cr->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$contratos->user->nome}}," class="d-inline-flex btn btn-outline-dark border-0" target="blank"><i class="fas fa-paper-plane"></i></a>
              <a @popper(Deletar) href="#" data-toggle="modal" data-target="#contrato-cr_delete--{{$cr->id}}" class="d-inline-flex btn btn-outline-danger border-0" target="blank"><i class="fas fa-trash"></i></a>
            </div>
          </form>
        </td>
      </tr>
      <!-- Modal COM REPASSE -->
      <div class="modal fade" id="modal-cr-loading--{{$cr->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Contrato com Repasse</h5>
              <button type="button" class="close" data-dismiss="modal" onclick="modaltoDefaultCR()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <div class="row justify-content-center p-3">
                <i class="fas fa-5x fa-file-download py-3 mb-1 text-primary"></i>    
              </div>
              <div class="row justify-content-center">
                <img id="gif-loading-cr" style="display: none;" src="{{asset('assets/preloader.gif')}}" alt="loading" width="40px" height="40px" class="text-center">
                <img id="success-icon-cr" style="display: none" src="{{asset('assets/success.svg')}}" alt="correct" width="80px" height="80px" >
              </div>
              <h5 id="user-message-cr" class="font-weight-bold text-dark py-3">Clique em Baixar para fazer o download.</h5>
              <div style="display:flex; flex-direction: row; align-items: center;justify-content:center;">
                <a href="{{route('repassepdf', $cr->id)}}" onclick="loadingDownloadCR(event)" class="mr-4 btn btn-primary font-weight-bold py-3 mb-4"><i class="fas fa-file-pdf"></i> Baixar PDF</a>
                <a href="{{route('repassedoc', $cr->id)}}" class="mr-4 btn btn-primary font-weight-bold py-3 mb-4"><i class="fas fa-file-word"></i> Baixar DOC</a>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    @empty
    @endforelse 
    </tbody>
  </table>
</div>
</div>

@if(count($contratos_sr) > 0)
  @include('pdf.modal-sr-loading')
@endif

@if(count($contratos_cr) > 0)
  @include('pdf.modal-cr-loading')
@endif

<script>
  $('#lock-sr-tabs').click(function(){
    $(this).find('i').toggleClass('fa-lock fa-lock-open')
  });
  $('#lock-cr-tabs').click(function(){
    $(this).find('i').toggleClass('fa-lock fa-lock-open')
  });
</script>

<!-- SCRIPT PARA SEM REPASSE -->
<script>

var userMessageSR = document.querySelectorAll('#user-message-sr')
var iconSuccessSR = document.querySelectorAll('#success-icon-sr')
var gifSR = document.querySelectorAll('#gif-loading-sr')

function modaltoDefaultSR(){
  iconSuccessSR.forEach((item) => item.style.display = 'none')
  userMessageSR.forEach((item) => item.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.')
}

async function loadingDownloadSR(event){
  event.preventDefault();
  const button = event.target
  const requestUrl = event.target.href

  $.ajax({
    url: requestUrl,
    type: 'GET',
    xhrFields : {
			responseType : 'arraybuffer'
		},
    dataType : 'binary',
    success: await function(data,textStatus, request) {
      var MyBlob = new Blob([data], {type: "application/pdf"});
      var title = request.getResponseHeader('Content-Disposition').match(/filename="(.+)"/)[1]; 
      title = parseFileName(title);
      var link = document.createElement('a');
         link.href= window.URL.createObjectURL(MyBlob);
         link.download= title;
         link.click();
    },
    beforeSend: await function (){
      gifSR.forEach((item) => item.style.display = 'block' )
      userMessageSR.forEach((item) => item.innerHTML = 'Aguarde um pouco!<br> seu contrato está sendo gerado...')
      button.setAttribute("disabled", true)
    },
    complete: await function(){
      gifSR.forEach((item) => item.style.display = 'none' )
      iconSuccessSR.forEach((item) => item.style.display = 'block')
      userMessageSR.forEach((item) => item.innerHTML = 'Download do contrato realizado com sucesso!')
      button.setAttribute("disabled", false)
    }
  })
  .catch((err) => console.log(err))
  
}

function parseFileName(name){
  let title = name
  while(title.includes('_')){
    title = title.replace('_', '')
  }
  return title
}
</script>

<!-- SCRIPT COM REPASSE -->
<script>

  var userMessage = document.querySelectorAll('#user-message-cr')
  var iconSuccess = document.querySelectorAll('#success-icon-cr')
  var gif = document.querySelectorAll('#gif-loading-cr')

function modaltoDefaultCR(){
  iconSuccess.forEach((item) => item.style.display = 'none' )
  userMessage.forEach((item) => item.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.')
}

function loadingDownloadCR(event){
  event.preventDefault();

  const button = event.target
  const requestUrl = event.target.href
  
  $.ajax({
    url: requestUrl,
    type: 'GET',
    xhrFields : {
			responseType : 'arraybuffer'
		},
    dataType : 'binary',
    success: function(data,textStatus, request) {
      let MyBlob = new Blob([data], {type: "application/pdf"});
      let title = request.getResponseHeader('Content-Disposition').match(/filename="(.+)"/)[1]; 
      title = parseFileName(title);
      let link = document.createElement('a');
         link.href= window.URL.createObjectURL(MyBlob);
         link.download= title;
         link.click();
    },
    beforeSend: function (){
      gif.forEach((item) => item .style.display = 'block')
      userMessage.forEach((item) => item.innerHTML = 'Aguarde um pouco!<br> seu contrato está sendo gerado...')
      button.setAttribute("disabled", true)
    },
    complete: function(){
      gif.forEach((item) => item.style.display = 'none')
      iconSuccess.forEach((item) => item.style.display = 'block')
      userMessage.forEach((item) => item.innerHTML = 'Download do contrato realizado com sucesso!')
      button.setAttribute("disabled", false)
    }
  })
  .catch((err) => console.log(err))
  
}

function parseFileName(name){
  var title = name
  while(title.includes('_')){
    title = title.replace('_', '')
  }
  return title
}

</script>
@endsection


