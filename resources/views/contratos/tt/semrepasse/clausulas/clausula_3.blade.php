<div class="container-fluid p-0 mt-0 m-0">
    <div class="text-justify text-black">
        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">3. CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h4><hr><br>
        <!-- <div class="alert alert-warning mb-5 mt-5" role="alert">      
        <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
        NOTAS EXPLICATIVAS!
        <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_atribuicoes">Saiba mais</button>
        </div> -->
        <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
        
        <p class="mt-3 roboto-font text-left"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" value="{{$contratos_sr->nome_ict}}" id="handle_ict" placeholder="Instituição" disabled></p>
        <hr>      
        <b>A) </b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução:
        
        <div class="form-group row pt-2">
            <label for="" class="col col-form-label font-weight-bold text-left">Nome do Coordenador ICT/Público:</label>
            <div class="col-md-7 col-sm-12 col-lg-7 col-xl-7">
            <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" value="{{$contratos_sr->nome_coordenador_ict}}" disabled>
            </div>
        </div>

        <p class=""><b>B) </b>{!! $contratos_sr->clausula_edit_3_1_b !!}</p>
        <p class=""><b>C) </b>{!! $contratos_sr->clausula_edit_3_1_c !!}</p>

        <p class="mb-3 roboto-font text-left"><b>3.1.2.  Do(a) PARCEIRO PRIVADO: <input  class="myform-control" type="text" value="{{$contratos_sr->nome_parceiro}}" id="handle_parceiro" disabled=""></b></p>
        <hr>
        
        <b>A) </b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;
        
        <div class="form-group row pt-2">
            <label for="" class="col col-form-label font-weight-bold text-left">Nome do Coordenador ICT/Público:</label>
            <div class="col-md-7 col-sm-12 col-lg-7 col-xl-7">
            <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" value="{{$contratos_sr->nome_coordenador_privado}}" disabled>
            </div>
        </div>

        <p><b>B) </b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos:</p>

        <p><b>C) </b>{!! $contratos_sr->clausula_edit_3_1_2_c !!}</p>
        
        <p><b>3.2. </b><span id="coord_ict"></span><span id="coord_privado"></span>poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.</p>

        <p><b>3.3 </b>{!! $contratos_sr->clausula_edit_3_3 !!}</p>

    </div>
</div>