<!-- Modal -->
<div class="modal fade" id="modal-sr-loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script>
 
</script>