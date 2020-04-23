@extends('layouts.admin')


<style type="text/css">

  #wrapper #content-wrapper {
    background-color: white !important;
  }

  textarea{
    background-color: white !important;
    /* color: black !important; */
    border-color: black !important;
    box-shadow: 1px 2px 2px #cdcdcd;
    padding: 10px;
    text-align: justify !important;
    font-weight: bold !important;
  }
  input, span, p{
    /* color: black !important; */
    text-align: justify !important;
  }

</style>
@section('content')
<!-- Funções dinamicas para os contratos -->
<script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
@include('pesquisador.modals.modal_1')
@include('pesquisador.modals.modal_2')
@include('pesquisador.modals.modal_3')
@include('pesquisador.modals.modal_4')
@include('pesquisador.modals.modal_5')
@include('pesquisador.modals.modal_6')
@include('pesquisador.modals.modal_7')
@include('pesquisador.modals.modal_8')
@include('pesquisador.modals.modal_9')
@include('pesquisador.modals.modal_10')
@include('pesquisador.modals.modal_11')
@include('pesquisador.modals.modal_12')
@include('pesquisador.modals.modal_13')
@include('pesquisador.modals.modal_14')
@include('pesquisador.modals.modal_16')
@include('pesquisador.modals.modal_17')
@include('pesquisador.modals.modal_18')
@include('pesquisador.modals.modal_19')
@include('pesquisador.modals.modalAtribuicoes')
@include('pesquisador.modals.modalCoordenador')
@include('pesquisador.modals.modalCoordenadorPrivado')
@include('pesquisador.modals.modalPropriedadeIntelectual')
@include('pesquisador.modals.modalConfidencial')
@include('pesquisador.modals.ModalAtoNomeacao')
@include('pesquisador.modals.modal_clausula_2_3')
@include('pesquisador.modals.modal_clausula_2_4')
@include('pesquisador.modals.modal_clausula_2_5')
@include('pesquisador.modals.modal_clausula_2_6')
@include('pesquisador.modals.modal_clausula_5_2')
@include('pesquisador.modals.modal_clausula_5_3')
@include('pesquisador.modals.modal_clausula_5_4')
@include('pesquisador.modals.modal_clausula_7_all')
@include('pesquisador.modals.modal_clausula_8_all')
@include('pesquisador.modals.modal_clausula_10_1')
@include('pesquisador.modals.modal_clausula_default')
@include('pesquisador.modals.modal_anti_corrupcao')

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold">Exibir Contrato <span class="badge badge-primary">{{$contratos_sr->id}}</span></span>
    <div class="badge badge-primary lead  mr-auto float-right">sem repasse</div>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>


<div class="card mt-5 mb-5 color-card">

  <!--form id="regForm" action="/action_page.php"-->
  <!-- <form id="regForm" class="form-horizontal" method="POST" action="{{ route('contrato_sr.store') }}"> -->
  <form action="">
    {{ csrf_field() }}
    <div class="card-header py-1">
        <div id="step-container" class="step-container align-items-center py-3 mt-2"></div>
    </div>
    <div id="tab-here" class="p-5 card-body mb-0"></div>
    <!-- Circles which indicates the steps of the form: -->
    <div class="buttonsControl card-footer bg-transparent p-0 clearfix" style="overflow:auto;">
        <div class="m-3 mt-0 mb-0">
          <button type="button" class="btn btn-lg btn-outline-dark font-weight-bold shadow-sm" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
          <button type="button" class="btn btn-success btn-lg font-weight-bold shadow-sm" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
        </div>
      </div>
  </form>

  <div class="container-fluid">
    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <!-- <div class="modal-alert modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title font-weight-bold" id="exampleModalLabel">NOTAS EXPLICATIVAS</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
              <div class="modal-body font-weight-bold"><p class="lead">

              <span class="font-weight-bold text-dark">ESTA MINUTA DEVE SER UTILIZADA PARA ACORDOS DE PARCERIA PARA
              PD&I QUANDO NÃO HOUVER REPASSE DE RECURSOS ENTRE OS PARCEIROS.</span><br>

              Este tipo de Acordo é apropriado para ser utilizado na construção de ambientes inovadores
              (como parques tecnológico, co-working, entre outras possibilidades), servindo como
              instrumento que estabelece as regras de interação entre os parceiros. Pode tanto ser usado em
              relações bilaterais como multilaterais.
              <b>BASE LEGAL: ARTIGO 9º DA LEI Nº 10.973/04.</b> <br>
              Caso se trate da hipótese de Acordo com transferência de recursos do parceiro privado para o
              projeto (§§ 6º e 7º do Artigo 35 do Decreto nº 9.283/18.), deverá ser utilizada a outra minuta
              apropriada para esta situação. <br>
              Alguns itens receberão notas explicativas destacadas para compreensão do agente ou setor
              responsável pela elaboração das minutas, que deverão ser devidamente suprimidas quando da
              finalização do documento. 
              <br/>No modelo a seguir, deve-se observar que há duas cores:<br/>
              <br/>- os itens escritos na cor <b>PRETA</b> devem ser mantidos, podendo eventualmente serem alterados ou excluídos diante do caso concreto, e;
              <br/>-  aqueles redigidos na cor <span class="text-blue font-weight-bold">AZUL</span> são textos que dependem de situações específicas ou se trata de textos sugestivos. Cabe a cada entidade verificar o que deve ser escrito nestes itens e decidir se eles serão ou não mantidos na redação final do Acordo. 
              </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
              </div>
          </div>
        </div>
      </div> -->

      <div class="container-fluid p-0 mt-0 m-0">
        <div class="container-fluid pb-5 pt-5 mt-0 m-0 text-center">
          <div class="text-center row justify-content-center mb-5">
            <img src="{{asset('assets/brazao.jpg')}}" alt="" width="10%" class="mx-auto text-center">
          </div>
          <h5 class="text-uppercase font-weight-bold roboto-font text-black ">
            ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
            CELEBRAM <input class="mb-2  myform-control text-black" type="text" name="nome_ict" onchange="handleNameICT(event)" placeholder="{{$contratos_sr->nome_ict}}" disabled=""> E 
            <input class="mb-2  myform-control text-black" type="text" name="nome_parceiro" onchange="handleNameParceiro(event)" placeholder="{{$contratos_sr->nome_parceiro}}" disabled=""> 
            NA FORMA A SEGUIR.</h5><br>
        </div>

        <!-- <div class="alert alert-warning" role="alert">      
          <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
          NOTAS EXPLICATIVAS!
          <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
        </div> -->

        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">ICT/ente público</h4><hr><br>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4" class="font-weight-bold text-black">Nome</label>
            <input type="text" name="nome_teste" class="form-control text-black font-weight-bold" id="nome" placeholder="{{$contratos_sr->nome_teste}}" disabled="">               
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
            <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo1"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
            <input type="text" class="form-control text-black font-weight-bold" name="nat_juridica" id="inputPassword4" placeholder="{{$contratos_sr->nat_juridica}}" disabled="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
            <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo2"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
            <input type="text" class="form-control text-black font-weight-bold" name="cnpj" id="inputCity" placeholder="{{$contratos_sr->cnpj}}" disabled="">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
            <input type="text" class="form-control text-black font-weight-bold" name="endereco" id="inputCity" placeholder="{{$contratos_sr->endereco}}" disabled="">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
            <input type="text" class="form-control text-black font-weight-bold" name="cidade" id="inputCity" placeholder="{{$contratos_sr->cidade}}" disabled="">
          </div>
          <div class="form-group col-md-2">
            <label for="inputState" class="font-weight-bold text-black">UF</label>
            <input type="text" class="form-control text-black font-weight-bold" name="uf" id="inputCity" placeholder="{{$contratos_sr->uf}}" disabled="">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip" class="font-weight-bold text-black">CEP</label>
            <input type="text" class="form-control text-black font-weight-bold" name="cep" id="inputZip" placeholder="{{$contratos_sr->cep}}" disabled="">
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
          <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo3"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
          <input type="text" class="form-control text-black font-weight-bold" name="rep_legal" id="inputEmail4" placeholder="{{$contratos_sr->rep_legal}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
          <input type="text" class="form-control text-black font-weight-bold" name="cpf" id="inputPassword4" placeholder="{{$contratos_sr->cpf}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
          <input type="text" class="form-control text-black font-weight-bold" name="rg" id="inputPassword4" placeholder="{{$contratos_sr->rg}}" disabled="">
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
          <input type="text" class="form-control text-black font-weight-bold" name="orgao_exp" id="inputPassword4" placeholder="{{$contratos_sr->orgao_exp}}" disabled="">
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputEmail4" class="font-weight-bold text-black">Nacionalidade</label>
            <input type="text" class="form-control text-black font-weight-bold" name="nacionalidade" id="inputEmail4" placeholder="{{$contratos_sr->nacionalidade}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">Estado Civil</label>
            <input type="text" class="form-control text-black font-weight-bold" name="est_civil" id="inputPassword4" placeholder="{{$contratos_sr->est_civil}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">Ato de Nomeação</label>
          <input type="text" class="form-control text-black font-weight-bold" name="ato_nomeacao" id="inputPassword4" placeholder="{{$contratos_sr->ato_nomeacao}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
          <input type="text" class="form-control text-black font-weight-bold" name="doravante_denominado" id="inputPassword4" placeholder="{{$contratos_sr->doravante_denominado}}" disabled="">
        </div>
        </div><!-- /.row-->
        <br>
      </div><!--end of container-->

    </div><!--end-pane-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="container-fluid p-0 mt-0 m-0">
      <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">2° Parceiro</h4><hr><br>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>                  
            <input type="text" class="form-control text-black font-weight-bold"  name="nome_parceiro_instituicao" id="inputEmail4" placeholder="{{$contratos_sr->nome_parceiro_instituicao}}" disabled="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
            <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo4"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
            <input type="text" class="form-control text-black font-weight-bold" name="parceiro_nat_juridica" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_nat_juridica}}" disabled="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
            <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo5"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
            <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cnpj" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_cnpj}}" disabled="">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-5">
            <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
              <input type="text" class="form-control text-black font-weight-bold" name="parceiro_endereco" id="inputCity" placeholder="{{$contratos_sr->parceiro_endereco}}" disabled="">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
              <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cidade" id="inputCity" placeholder="{{$contratos_sr->parceiro_cidade}}" disabled="">
          </div>
          <div class="form-group col-md-2">
            <label for="inputState" class="font-weight-bold text-black">UF</label>
            <input type="text" class="form-control text-black font-weight-bold" name="parceiro_uf" id="inputCity" placeholder="{{$contratos_sr->parceiro_uf}}" disabled="">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip" class="font-weight-bold text-black">CEP</label>
              <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cep" id="inputZip" disabled="" placeholder="{{$contratos_sr->parceiro_cep}}">
          </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
          <!-- Botão para acionar modal -->
            <!-- <a href="#" data-toggle="modal" data-target="#modalExemplo6"><i class="fas fa-fw fa-question-circle float-right"></i></a> -->
          <input type="text" class="form-control text-black font-weight-bold" name="parceiro_rep_legal" id="inputEmail4" placeholder="{{$contratos_sr->parceiro_rep_legal}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
          <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cpf" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_cpf}}" disabled="">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
          <input type="text" class="form-control text-black font-weight-bold" name="parceiro_rg" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_rg}}" disabled="">
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
          <input type="text" class="form-control text-black font-weight-bold" name="parceiro_orgao_exp" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_orgao_exp}}" disabled="">
        </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
          <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cargo" id="inputPassword4" placeholder="{{$contratos_sr->parceiro_cargo}}" disabled="">
        </div>
        </div>         
      </div><!--end of content-->
    </div><!--end pane--> 
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_1')
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_2')
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_3')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_4')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_5')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_6')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_7')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_8')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_9')  
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_10')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_11')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_12')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_13')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_14')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_15')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_16')  
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      @include('contratos.tt.semrepasse.clausulas.clausula_17')             
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
        <div class="container-fluid p-0 mt-0 m-0">
          <div class="text-black">
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black bg-light p-2 mb-3">SEU CONTRATO ESTÁ PRONTO PARA ANÁLISE. <a href="#"><i class="fas fa-fw fa-check ml-2"></i></a></h5>
            <p>Seu contrato será revisado em até de 30 dias e uma resposta será gerada. Aguarde a confirmação do sistema. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolores excepturi ipsum rem, enim accusantium quam similique assumenda eum veniam saepe, quas earum nisi hic neque voluptate consectetur ex quo!</p><br>
          </div>
        </div>
    </div>
    <!------------------------------------------------------------------------->   
  </div><!--container-fluid-->
</div><!--color-card-->


<script>
    //container do conteúdo necessário para os buttons ficar em baixo
    const wrapper = document.getElementById("tab-here")
    //classe do conteúdo do carrousel
    var elem = document.getElementsByClassName("tab-pane");
    //container que envolve o carrousel
    const container = document.getElementsByClassName("tab");
    //step do formulário
    const step = document.getElementById("step-container")
   
    let tab = []
    let stepContainer = []
  
  
    elem = Array.from(elem);
    for (let i = 0; i < elem.length; i++) {
        tab[i] = document.createElement("div");
        tab[i].classList.add('tab');   
        stepContainer[i] = document.createElement("span");
        stepContainer[i].classList.add('step');  
        stepContainer[i].setAttribute("id", `${i}`)
        stepContainer[i].setAttribute("onclick", `stepButton(${i})`)
        wrapper.appendChild(tab[i])
        step.appendChild(stepContainer[i])
    }
  
      elem.map( (item, index) => {
        container[index].appendChild(item)
      })
  
  </script>
<script>
var currentTab = 0;
var lastTab = 99; 
showTab(currentTab); // Display the current tab

function stepButton(n) {
  let x = document.getElementsByClassName("tab");

  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }

  x[n].style.display = "block";
 
 
  //... and fix the Previous/Next buttons:
  currentTab = n
  showTab(n)
}

function showTab(n) {
  
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    var button = document.getElementById("nextBtn")
    button.innerHTML = 'Menu'
    button.addEventListener("click", function(){
      window.location.href = "/home";
    });
  } else {
    document.getElementById("nextBtn").innerHTML = "Proximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

//Regra do butão para avançar ou voltar uma etapa
function nextPrev(n) {
  var button = document.getElementById("nextBtn");
  var stepCount = document.getElementById("stepCount")
  var x = document.getElementsByClassName("tab");
  
  if (n == 1 && !validateStep()) 
    return false;

  if (button.innerHTML === "Menu"){
    return false
  }

  handleStep(x, n)
}


function validateStep() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
      /*  for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        } */
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function handleStep(x, n){
  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  
  if (lastTab <= currentTab){
    lastTab = currentTab
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

</script>
  

@endsection