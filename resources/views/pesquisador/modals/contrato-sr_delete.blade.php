<!-- Modal sr delete -->
<div class="modal fade" id="contrato-sr_delete--{{$contratos->id}}" tabindex="-1" role="dialog" aria-labelledby="contrato-sr_delete" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="contrato-sr_delete">AVISO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="p-2 text-justify">Você quer deletar o contrato do tipo <b>SEM REPASSE?</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark font-weight-bold" data-dismiss="modal">Não.</button>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger font-weight-bold">SIM, confirmar.</button>
      </div>
    </div>
  </div>
</div>