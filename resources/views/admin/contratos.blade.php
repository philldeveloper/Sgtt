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
              <thead class="roboto-font font-weight-bold text-dark border-left-success border-bottom shadow-sm" style="font-size: 1.25rem">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tipo</th>
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
                <tr class="">
                  <td>{{$contratos->id}}</td>
                  <td><div class="badge badge-info">{{$contratos->tipo}}</div></td>
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
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-sr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$contratos->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$contratos->user->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 btn-outline-danger font-weight-bold" type="submit"><i class="fa fa-trash"></i></button>
                      </div>
                  </form>
                  </td>
                </tr>
                @empty
                @endforelse
                <!--- end of contrato sr-->
              
            
                @forelse($contratos_cr as $cr) 
                <tr class="">
                  <td>{{$cr->id}}</td>
                  <td><div class="badge badge-success">{{$cr->tipo}}</div></td>
                  <td><!--a class="" href="{{route('perfil', $contratos->id)}}"-->{{$cr->user->nome}}<!--/a--></td>
                  <td>{{$cr->nome_ict}} | {{$cr->nome_parceiro}}</td>
                  <td>{{$cr->user->email}}</td>
                  <td>{{$cr->created_at}}</td>
                  <td>
                    <form action="{{route('contrato_cr.destroy',$cr->id) }}" method="POST">
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a class="btn btn-dark text-light" id="lock-cr-tabs"><i class="fas fa-lock"></i></a>
                        <a @popper(Ver) href="{{route('contratocr_show', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-eye"></i></a>
                        <a @popper(Editar) href="{{route('contratocr_edit', $cr->id)}}" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-pen"></i></a>
                        <a @popper(Baixar) href="#" data-toggle="modal" data-target="#modal-cr-loading" class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" target="blank"><i class="fas fa-download"></i></a>
                        <a @popper(Enviar Email) class="btn btn-sm pl-3 pr-3 btn-outline-dark font-weight-bold" href="mailto:{{$cr->user->email}}?subject= SGTT - Informações sobre Contrato&body=Caro {{$cr->user->nome}}, " target="blank"><i class="fas fa-paper-plane"></i></a>
                        @csrf
                        @method('DELETE')
                        <button @popper(Excluir) class="btn btn-sm pl-3 pr-3 btn-outline-danger font-weight-bold" type="submit"><i class="fa fa-trash"></i></button>
                      </div>
                  </form>
                  </td>
                </tr>
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
<script>
function loadingDownload(event){
  event.preventDefault();
  const button = event.target
  const requestUrl = event.target.href
  var userMessage = document.getElementById('user-message')
  const gif = document.getElementById('gif-loading')
  const iconSuccess = document.getElementById('success-icon')
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
      userMessage.innerHTML = 'Aguarde um pouco! seu contrato está sendo gerado...'
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


