<!-- Modal -->
<div class="modal fade" id="modal-cr-loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contrato Com Repasse</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <div class="row justify-content-center p-3">
        <i class="far fa-5x fa-file-pdf py-3 mb-1 text-success"></i>    
      </div>
      <div class="row justify-content-center">
        <img src="{{asset('assets/preloader.gif')}}" alt="" width="40px" height="40px" class="text-center">
      </div>
      <h5 class="font-weight-bold text-dark py-3">Clique em Baixar e aguarde enquanto seu contrato está sendo gerado.</h5>
      <a href="{{route('repassepdf', $cr->id)}}" class="btn btn-success font-weight-bold btn-block py-3 mb-4">Baixar PDF</a>
      </div>
    </div>
  </div>
</div>


