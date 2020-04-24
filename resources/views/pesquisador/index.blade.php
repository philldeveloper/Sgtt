@extends('layouts.admin')

@include('popper::assets')

@section('content')


<style>
  body{
    font-family: 'Roboto', sans-serif;
    font-weight: 400 !important;
  }
  .nav-tabs .nav-link:hover{
    background-color: white !important;
    box-shadow: 0 .125rem .25rem 0 rgba(58,59,69,.2)!important;
    border: 1px solid #224abe !important;
    color: black !important;    
  }
  .nav-tabs .nav-link{
    border: 1px solid transparent !important;
    color: black !important;   
    background-color: #fefefe !important; 
    border-top-right-radius: 8px !important;
    border-top-left-radius: 8px !important;
    border-radius: 8px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }

  .card-shadow {
    -webkit-box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 4px 2px rgba(0, 0, 0, 0.04);
  }
  

  .card-shadow:hover{
    border: 1px solid #fafafa;
    cursor: pointer;
  }

  .img-category{
    display: flex;
    align-items: flex-start;
  }

  .img-category img {
    width: 64px;
    height: auto;
  }

  .card-body > .title{
    font-weight: bold;
    font-size: 18px;
    color: #212529 !important;
    height: 48px;
  }

  .card-body .subtitle{
    font-size: 15px;
    width: auto !important;
  }

  .card-body .container-button{
    display: flex;
    justify-content: flex-end;
  }

  .card-body button {
    border-radius: 1;
    
  }

  .adjust-center{
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carrousel-item .active{
    margin: 0 auto !important;
    display: flex;
    align-items: center;
  }

  .container-button button a{
    text-decoration: none;
    color: white;
  }

  /* Section Documents */
  
  .title-container{
    height: 73px;
    background-color: #fff;
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 10px 20px;
    -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  }

  .disabled{
    cursor: not-allowed;
  }
</style>
@include('popper::assets')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<div class="container-fluid mt-5 mb-5">
    <span class="h3 font-weight-bold text-dark">Novo Contrato</span>
    <span class="font-italic ml-3">Escolha um tipo de contrato antes de prosseguir:.</span>
</div>
<hr>    
<div class="container-fluid py-3">
<div class="row">
  <div class="col-lg-6">
    <div class="notice notice-info notice-lg">
        <span class="h4 font-weight-bold text-dark text-uppercase">Acordo de Cooperação <span class="text-dark">sem repasse</span>
          <a class="float-right" data-toggle="modal" data-target="#semrepasseModal" href=""><i class="fas fa-exclamation-circle text-warning"></i></a>
        </span>
        <hr>
        <p class="subtitle pt-3 text-justify" style="padding-bottom: 2.7rem!important;">
          Esta minuta deve ser utilizada para acordos de parceria para PD&I quando não houver repasse de recursos entre os parceiros.
        </p>

        <div class="container-button text-right">
          <a href="{{route('contrato_sr.index')}}" class="btn btn-success btn-lg btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Criar Contrato</span>
          </a>
        </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="notice notice-success notice-lg">
        <span class="h4 font-weight-bold text-dark text-uppercase">Acordo de Cooperação <span class="text-dark">com repasse</span>
          <a class="float-right" data-toggle="modal" data-target="#repasseModal" href=""><i class="fas fa-exclamation-circle text-warning"></i></a>
        </span>
        <hr>
        <p class="subtitle pt-3 pb-3 text-justify">
          Esta minuta deve ser utilizada para acordos de parceria para PD&I quando houver repasse de recursos privados para o projeto de pesquisa.
        </p>
        <div class="container-button text-right">
          <a href="{{route('contrato_cr.index')}}" class="btn btn-success btn-lg btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Criar Contrato</span>
          </a>
        </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid mt-5 mb-5">
<span class="h3 font-weight-bold text-dark">Meus Contratos</span>
    <span class="font-italic ml-3">Visualizar todos os contratos cadastrados.</span>
</div>
<hr> 

@if (session('status'))
<div class="alert alert-success border-0 m-2 mr-4 ml-4 border-0 alert-dismissible fade show" role="alert">
  <i class="fas fa-check-circle text-success mr-3"></i>
  <strong class="mr-5 text-uppercase">{{ session('status') }}</strong> Clique abaixo para ver mais.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="container-fluid">
<div class="row">

<div class="col-12 mt-4 rounded-0">
  <div class="card mb-4 rounded-0 shadow-sm">
    <div class="card-body p-0 pb-5 rounded-0">
      
      <div class="table-responsive">
          <table class="table table-hover mb-0" id="example">
            <thead class="roboto-font font-weight-bold text-dark border-left-success bg-light shadow-sm" style="font-size: 1.25rem">
              <tr>
                <!-- <th scope="col">#</th> -->
                
                <th scope="col">Desenv. por</th>
                <th scope="col">Tipo</th>
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
              <tr class="">
                <!-- <td>{{$contratos->id}}</td> -->
                <td><div class="badge badge-dark">{{$contratos->nome}}</div></td>
                <td><div class="badge badge-info">{{$contratos->tipo}}</div></td>
                <td>{{$contratos->nome_ict}} e {{$contratos->nome_parceiro}}</td>
                <td>{{$contratos->email}}</td>
                <td>{{date('d/m/Y', strtotime($contratos->created_at))}}</td>
                
                <td>
                    <form action="{{route('contrato_sr.destroy',$contratos->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratosr_show', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratosr_edit', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading--{{$contratos->id}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <!-- <a @popper(Baixar) href="{{route('printpdf', $contratos->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a> -->
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->email}}?subject= SGTT - Informações sobre Contrato SEM Repasse&body=Caro {{$contratos->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
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
                      <button type="button" class="close" data-dismiss="modal" onclick="modaltoDefault()" aria-label="Close">
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
                <!-- <td>{{$cr->id}}</td> -->
                <td><div class="badge badge-dark">{{$cr->nome}}</div></td>
                <td><div class="badge badge-success">{{$cr->tipo}}</div></td>
                <td>{{$cr->nome_ict}} e {{$cr->nome_parceiro}}</td>
                <td>{{$cr->email}}</td>
                <td>{{date('d/m/Y', strtotime($cr->created_at))}}</td>
                
                <td>
                    <form action="{{route('contrato_cr.destroy', $cr->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-cr-loading--{{$cr->id}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <!-- <a @popper(Baixar) href="{{route('printpdf', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a> -->
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$cr->email}}?subject= SGTT - Informações sobre Contrato COM Repasse&body=Caro {{$cr->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 bg-danger text-light font-weight-bold" type="submit"><i class="fa fa-trash text-light"></i></button>
                      </div>
                  </form>
                </td>
                <!-- Modal COM REPASSE -->
                <div class="modal fade" id="modal-cr-loading--{{$cr->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contrato com Repasse</h5>
                        <button type="button" class="close" data-dismiss="modal" onclick="modaltoDefault()" aria-label="Close">
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
</div><!--container-fluid-->

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="semrepasseModal" tabindex="-1" role="dialog" aria-labelledby="semrepasseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="semrepasseModalLabel">ACORDO DE COOPERAÇÃO SEM REPASSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="p-2 text-justify">Este tipo de Acordo é apropriado para ser utilizado na construção de ambientes inovadores (como parques tecnológico, co-working, entre outras possibilidades), servindo como instrumento que estabelece as regras de interação entre os parceiros. Pode tanto ser usado em relações bilaterais como multilaterais.</p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="repasseModal" tabindex="-1" role="dialog" aria-labelledby="repasseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="repasseModalLabel">ACORDO DE COOPERAÇÃO COM REPASSE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="p-2 text-justify">Este repasse tanto pode ser feito diretamente à ICT ou Agência de Fomento, com ou sem por intermédio de Fundação de Apoio (Lei nº 8.958/94) – nas cláusulas abaixo serão contempladas estas duas hipóteses (cabe a cada entidade verificar qual é a sua situação e adequar o instrumento jurídico. Base Legal: §§ 6º e 7º do Artigo 35 do Decreto nº 9.283/18.</p>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>

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
var userMessage = document.getElementById('user-message-sr')
var iconSuccess = document.getElementById('success-icon-sr')

function modaltoDefault(){
  iconSuccess.style.display = 'none'
  userMessage.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.'

}

function loadingDownloadSR(event){
  event.preventDefault();

  const button = event.target
  const requestUrl = event.target.href
  const gif = document.getElementById('gif-loading-sr')
  
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
var userMessage = document.getElementById('user-message-cr')
var iconSuccess = document.getElementById('success-icon-cr')

function modaltoDefault(){
  iconSuccess.style.display = 'none'
  userMessage.innerHTML = 'Clique em Baixar para fazer o download do seu PDF.'

}

function loadingDownloadCR(event){
  event.preventDefault();

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