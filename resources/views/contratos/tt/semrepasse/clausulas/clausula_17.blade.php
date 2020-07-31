
<div class="container-fluid p-0 mt-0 m-0">
    <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">17. CLÁUSULA DÉCIMA SÉTIMA - DO FORO</h4><hr>
    <br>
    <div class="text-justify text-black">
        <p><b>17.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de <input class="myform-control text-black"  type="text" name="estado_foro" placeholder="{{$contratos_sr->estado_foro}}" disabled="">, cidade de <input  class="myform-control" type="text" name="cidade_foro" placeholder="{{$contratos_sr->cidade_foro}}" disabled="">, para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109 da Constituição Federal. {{$contratos_sr->clausula_edit_17_1}}</p>
        <br>
        <div class="form-row mt-3">
        <div class="form-group col-md-3">
            <label for="data_foro" class="font-weight-bold text-black">Data:</label>
            <input type="string" 
            class="form-control text-black font-weight-bold" 
            name="data_foro"
            id="data_foro" 
            placeholder="{{$contratos_sr->data_foro}}"
            disabled="">
        </div>
        </div><!-- /.row-->

        <div class="form-row mt-3">
        <div class="form-group col-md-3">
            <label for="ict_inst_foro" class="font-weight-bold text-black">ICT:</label>
            <input type="text" 
            class="form-control text-black font-weight-bold"
            name="ict_inst_foro" 
            id="ict_inst_foro" 
            placeholder="{{$contratos_sr->ict_inst_foro}}"
            disabled="">
        </div>
        <div class="form-group col-md-3">
            <label for="nome_rep_foro" class="font-weight-bold text-black">Representante:</label>
            <input type="text" 
            class="form-control text-black font-weight-bold" 
            name="nome_rep_foro" id="nome_rep_foro" 
            placeholder="{{$contratos_sr->nome_rep_foro}}"
            disabled="">
        </div>
        <div class="form-group col-md-3">
            <label for="cargo_rep_foro" class="font-weight-bold text-black">Cargo</label>
            <input type="email" 
            class="form-control text-black font-weight-bold"
            name="cargo_rep_foro" 
            id="cargo_rep_foro" 
            placeholder="{{$contratos_sr->cargo_rep_foro}}"
            disabled="">
        </div>
        </div><!-- /.row-->

        <div class="form-row mt-3">
        <div class="form-group col-md-3">
            <label for="nome_inst_privado_foro" class="font-weight-bold text-black">Parceiro Privado:</label>
            <input type="text" 
            class="form-control text-black font-weight-bold"
            name="nome_inst_privado_foro" 
            id="nome_inst_privado_foro" 
            placeholder="{{$contratos_sr->nome_inst_privado_foro}}"
            disabled="">
        </div>
        <div class="form-group col-md-3">
            <label for="nome_rep_privado_foro" class="font-weight-bold text-black">Representante:</label>
            <input type="text" 
            class="form-control text-black font-weight-bold" 
            name="nome_rep_privado_foro" id="nome_rep_privado_foro" 
            placeholder="{{$contratos_sr->nome_rep_privado_foro}}"
            disabled="">
        </div>
        <div class="form-group col-md-3">
            <label for="cargo_rep_privado_foro" class="font-weight-bold text-black">Cargo</label>
            <input type="email" 
            class="form-control text-black font-weight-bold"
            name="cargo_rep_privado_foro" 
            id="cargo_rep_privado_foro" 
            placeholder="{{$contratos_sr->cargo_rep_privado_foro}}"
            disabled="">
        </div>
        </div><!-- /.row-->
        <div class="form-row mt-5">
            <div class="form-group col-md-3">
              <label for="nome_testemunha_1" class="font-weight-bold text-black">Testemunha 1:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="nome_testemunha_1" id="nome_testemunha_1" 
                placeholder="{{$contratos_sr->nome_testemunha_1}}"
                disabled="">
            </div>
            <div class="form-group col-md-3">
              <label for="nome_testemunha_2" class="font-weight-bold text-black">Testemunha 2:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="nome_testemunha_2" 
                id="nome_testemunha_2" 
                placeholder="{{$contratos_sr->nome_testemunha_2}}"
                disabled="">
            </div>
        </div><!-- /.row-->
    </div>
</div>