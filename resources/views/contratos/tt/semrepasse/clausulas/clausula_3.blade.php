<div class="container-fluid p-0 mt-0 m-0">
    <div class="text-justify text-black">
    <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5>
    <div class="alert alert-warning" role="alert">      
        <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
        NOTAS EXPLICATIVAS!
        <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_atribuicoes">Saiba mais</button>
    </div>
    <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
            
    <p class="ml-2 bg-light roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" name="nome_inst_ict" placeholder="{{$contratos_sr->nome_inst_ict}}" disabled=""></p>
        <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a>
        <div class="form-group col-md-6">
            <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" class="form-control" id="nome_coordenador_privado" disabled value="{{$contratos_sr->nome_coordenador_privado}}" placeholder="Nome do coordenador parceiro privado"> <br>
        </div>
        <p class="">{!! $contratos_sr->clausula_edit_3_1_b !!}</p>
        <p class="">{!! $contratos_sr->clausula_edit_3_1_c !!}</p>
        
        <p class="ml-2 bg-light roboto-font"><b>3.1.2.  Do(a) <input  class="myform-control" type="text" name="nome_inst_privado" placeholder="{{$contratos_sr->nome_inst_privado}}" disabled="">:(PARCEIRO PRIVADO)</b></p>
        <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a>
        <div class="form-group col-md-6">
            <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" class="form-control" id="nome_coordenador_privado" disabled value="{{$contratos_sr->nome_coordenador_privado}}" placeholder="Nome do coordenador parceiro privado"> <br>
        </div>
        <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
        <br>
        <p class="">{!! $contratos_sr->clausula_edit_3_2_c !!}</p>
        <br>
        
        <p><b>3.2.</b>
                  <span id="coord_ict">{{$contratos_sr->nome_coordenador_ict}};</span><span id="coord_privado"> {{$contratos_sr->nome_coordenador_privado}}</span>
                   poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.</p>
                  
        <p class=""><b>3.3.</b>{!! $contratos_sr->clausula_edit_3 !!}</p>

    </p>
    </div>
</div>