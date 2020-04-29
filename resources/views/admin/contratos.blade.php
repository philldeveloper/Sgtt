@extends('layouts.admin')

@section('content')

@include('popper::assets')

<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

<div class="container-fluid mt-5 mb-5">
  <span class="h3 font-weight-bold text-black" wfd-id="41">Contratos</span>
  <span class="font-italic ml-3 mb-3">Visualize informações relacionadas aos contratos gerados.</span>
</div><hr>

<div class="row m-3 py-4">
  <div class="col-12 mt-4 rounded-0">
    <div class="card mb-4 rounded-0 shadow-sm">
      <div class="card-body p-0 pb-5 rounded-0" style="min-height: 300px">
        
        <div class="table-responsive">
            <table class="table table-hover mb-0" id="example">
              <thead class="roboto-font font-weight-bold text-dark border-left-success border-bottom shadow-sm" style="font-size: 1.05rem">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Perfil</th>
                  <th scope="col">Desenv. por</th>
                  <th scope="col">ICT | Parceiro</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">Criado em</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody class="mb-0 font-weight-bold text-dark">
                <tr>
                  <td></td>
                </tr>
                
                @forelse($contratos_sr as $contratos) 
                <tr class="border-bottom">
                  <td>{{$contratos->id}}</td>
                  <td><div class="badge badge-info">{{$contratos->tipo}}</div></td>
                  <td>
                  @if($contratos->user->admin == 1)
                  <div class="badge badge-dark">Administrador</div>
                  @else
                  <div class="badge badge-secondary">Pesquisador</div>
                  @endif
                  </td>
                  <td><!--a class="" href="{{route('perfil', $contratos->id)}}"-->{{$contratos->user->nome}}<!--/a--></td>
                  <td>{{$contratos->nome_ict}} | {{$contratos->nome_parceiro}}</td>
                  <td>{{$contratos->user->email}}</td>
                  <td>{{$contratos->created_at}}</td>
                  <td>
                    <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-dark text-light" id="lock-sr-tabs"><i class="fas fa-lock"></i></a>
                        <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading--{{$contratos->id}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$contratos->user->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        
                        @include('pesquisador.modals.contrato-sr_delete') 
                        
                        <a @popper(Deletar) href="#" data-toggle="modal" data-target="#contrato-sr_delete--{{$contratos->id}}" class="btn btn-sm pl-3 pr-3 btn-danger font-weight-bold" target="blank"><i class="fas fa-trash text-light"></i></a>
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
                        <i class="far fa-5x fa-file-pdf py-3 mb-1 text-primary"></i>    
                      </div>
                      <div class="row justify-content-center">
                        <img id="gif-loading-sr" style="display: none;" src="{{asset('assets/preloader.gif')}}" alt="loading" width="40px" height="40px" class="text-center">
                        <img id="success-icon-sr" style="display: none" src="{{asset('assets/success.svg')}}" alt="correct" width="80px" height="80px" >
                      </div>
                      <h5 id="user-message-sr" class="font-weight-bold text-dark py-3">Clique em Baixar para fazer o download do seu PDF.</h5>
                    
                      <a href="{{route('printpdf', $contratos->id)}}" onclick="loadingDownloadSR(event)" class="btn btn-primary font-weight-bold btn-block py-3 mb-4">Baixar PDF</a>
                
                    </div>
                  </div>
                </div>
              </div>
                @empty
                @endforelse
                <!--- end of contrato sr-->
              
            
                @forelse($contratos_cr as $cr) 
                <tr class="">
                  <td>{{$cr->id}}</td>
                  <td><div class="badge badge-success">{{$cr->tipo}}</div></td>
                  <td>
                  @if($cr->user->admin == 1)
                  <div class="badge badge-dark">Administrador</div>
                  @else
                  <div class="badge badge-secondary">Pesquisador</div>
                  @endif
                  </td>
                  <td>{{$cr->user->nome}}</td>
                  <td>{{$cr->nome_ict}} | {{$cr->nome_parceiro}}</td>
                  <td>{{$cr->user->email}}</td>
                  <td>{{$cr->created_at}}</td>
                  <td>
                    <form action="{{route('contrato_cr.destroy',$cr->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-dark text-light" id="lock-cr-tabs"><i class="fas fa-lock"></i></a>
                        <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-cr-loading--{{$cr->id}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$cr->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$cr->user->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        
                        @include('pesquisador.modals.contrato-cr_delete') 
                        
                        <a @popper(Deletar) href="#" data-toggle="modal" data-target="#contrato-cr_delete--{{$cr->id}}" class="btn btn-sm pl-3 pr-3 btn-danger font-weight-bold" target="blank"><i class="fas fa-trash text-light"></i></a>
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
                        <i class="far fa-5x fa-file-pdf py-3 mb-1 text-primary"></i>    
                      </div>
                      <div class="row justify-content-center">
                        <img id="gif-loading-cr" style="display: none;" src="{{asset('assets/preloader.gif')}}" alt="loading" width="40px" height="40px" class="text-center">
                        <img id="success-icon-cr" style="display: none" src="{{asset('assets/success.svg')}}" alt="correct" width="80px" height="80px" >
                      </div>
                      <h5 id="user-message-cr" class="font-weight-bold text-dark py-3">Clique em Baixar para fazer o download do seu PDF.</h5>
                    
                          <a href="{{route('repassepdf', $cr->id)}}" onclick="loadingDownloadCR(event)" class="btn btn-primary font-weight-bold btn-block py-3 mb-4">Baixar PDF</a>
                
                    </div>
                  </div>
                </div>
              </div>
                @empty
                @endforelse

                <!--- end of contrato cr-->

              </tbody>
            </table>
          </div>
      </div>
    </div>
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

function modaltoDefaultSR(){
  
  var userMessage = document.getElementById('user-message-sr')
  var iconSuccess = document.getElementById('success-icon-sr')
  iconSuccess.style.display = 'none'
  userMessage.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.'

}

function loadingDownloadSR(event){
  event.preventDefault();

  var userMessage = document.getElementById('user-message-sr')
  var iconSuccess = document.getElementById('success-icon-sr')
  var button = event.target
  var requestUrl = event.target.href
  var gif = document.getElementById('gif-loading-sr')
  
  $.ajax({
    url: requestUrl,
    type: 'GET',
    xhrFields : {
			responseType : 'arraybuffer'
		},
    dataType : 'binary',
    success: function(data,textStatus, request) {
      var MyBlob = new Blob([data], {type: "application/pdf"});
      var title = request.getResponseHeader('Content-Disposition').match(/filename="(.+)"/)[1]; 
      title = parseFileName(title);
      var link = document.createElement('a');
         link.href= window.URL.createObjectURL(MyBlob);
         link.download= title;
         link.click();
    },
    beforeSend: function (){
      
      gif.style.display = 'block'
      userMessage.innerHTML = 'Aguarde um pouco!<br> seu contrato está sendo gerado...'
      button.setAttribute("disabled", true)
    },
    complete: function(){
   
      gif.style.display = 'none'
      iconSuccess.style.display = 'block'
      userMessage.innerHTML = 'Download do contrato realizado com sucesso!'
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


<!-- SCRIPT COM REPASSE -->
<script>

function modaltoDefaultCR(){
  var userMessage = document.getElementById('user-message-cr')
  var iconSuccess = document.getElementById('success-icon-cr')
  iconSuccess.style.display = 'none'
  userMessage.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.'

}

function loadingDownloadCR(event){
  event.preventDefault();

  var userMessage = document.getElementById('user-message-cr')
  var iconSuccess = document.getElementById('success-icon-cr')
  const button = event.target
  const requestUrl = event.target.href
  const gif = document.getElementById('gif-loading-cr')
  
  $.ajax({
    url: requestUrl,
    type: 'GET',
    xhrFields : {
			responseType : 'arraybuffer'
		},
    dataType : 'binary',
    success: function(data,textStatus, request) {
      var MyBlob = new Blob([data], {type: "application/pdf"});
      var title = request.getResponseHeader('Content-Disposition').match(/filename="(.+)"/)[1]; 
      title = parseFileName(title);
      var link = document.createElement('a');
         link.href= window.URL.createObjectURL(MyBlob);
         link.download= title;
         link.click();
    },
    beforeSend: function (){
      gif.style.display = 'block'
      userMessage.innerHTML = 'Aguarde um pouco!<br> seu contrato está sendo gerado...'
      button.setAttribute("disabled", true)
    },
    complete: function(){
      gif.style.display = 'none'
      iconSuccess.style.display = 'block'
      userMessage.innerHTML = 'Download do contrato realizado com sucesso!'
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


