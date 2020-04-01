<div class="container-fluid p-0 mt-0 m-0">
    <div class="text-justify text-black">
        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">3. CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h4><hr><br>
        <!-- <div class="alert alert-warning mb-5 mt-5" role="alert">      
        <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
        NOTAS EXPLICATIVAS!
        <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_atribuicoes">Saiba mais</button>
        </div> -->
        <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
        
        <p class="mt-3 roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" name="nome_inst_ict" id="handle_ict" placeholder="Instituição" disabled></p>
        <hr>      
        <b>A) </b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução:
        
        <div class="form-group row p-2">
            <label for="" class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-form-label font-weight-bold">Nome do Coordenador ICT/Público:</label>
            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" placeholder="Nome coordenador ICT/Publico" disabled="" value="{{$contratos_sr->nome_coordenador_ict}}">
            </div>
        </div>

        <p class=""><b>B) </b>{!! $contratos_sr->clausula_edit_3_1_b !!}</p>
        <p class=""><b>C) </b>{!! $contratos_sr->clausula_edit_3_1_c !!}</p>

        <p class="mt-5 mb-3 roboto-font"><b>3.1.2.  Do(a) <input  class="myform-control" type="text" name="nome_inst_privado" id="handle_parceiro" placeholder="Instituição" disabled>:(PARCEIRO PRIVADO)</b></p>
        <hr>
        
        <b>A) </b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;
        
        <div class="form-group row p-2">
            <label for="" class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-form-label font-weight-bold">Nome do Coordenador Parceiro Privado:</label>
            <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
            <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" id="nome_coordenador_privado" class="form-control" placeholder="Nome do coordenador parceiro privado" disabled value="{{$contratos_sr->nome_coordenador_privado}}">
            </div>
        </div>

        <p><b>B) </b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos:</p>

        <p><b>C) </b>{!! $contratos_sr->clausula_edit_3_2_c !!}</p>
        
        <p><b>3.2. </b><span id="coord_ict"></span><span id="coord_privado"></span>poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.</p>

        <p><b>3.3 </b>{!! $contratos_sr->clausula_edit_3 !!}</p>

    </div>
</div>