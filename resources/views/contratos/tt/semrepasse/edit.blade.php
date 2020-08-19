@extends('layouts.admin')


<style type="text/css">
  .col-md-12.mb-3{
    padding: 0px;
  }
  p{
    line-height: 1.9 !important;
  }
  #wrapper #content-wrapper {
    background-color: #e3e6f0 !important;
  }

  textarea{
    background-color: white !important;
    color: black !important;
    border-color: #3490dc !important;
    box-shadow: 1px 2px 2px #cdcdcd;
    padding: 10px;
    text-align: justify !important;
    line-height: 1.9 !important;
    border-radius: 0 !important;
  }

  a.badge.badge-primary.text-light.font-weight-bold, .alert.alert-info.py-2.text-dark.font-weight-bold, .alert.alert-warning{
    border-radius: 0 !important;
  }
</style>
@section('content')


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
@include('pesquisador.modals.modalAtoNomeacao')
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<script src="{{ asset('js/localization/messages_pt_BR.js') }}"></script>
<script src="{{ asset('js/default-mask.js') }}"></script>
<script src="{{ asset('js/validation-form.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!-- Funções dinamicas para os contratos -->
<script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>
<div class="title-header">
    <span class="h3 ml-3 font-weight-bold">Editar Contrato</span>
    <div class="badge badge-primary lead  mr-auto float-right">sem repasse</div>
    <!-- <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span> -->
</div>

@if (session('status_edit'))
<div class="alert alert-success border-0 m-2 mt-4 mr-4 ml-4 border-0 alert-dismissible fade show" role="alert">
  <i class="fas fa-check-circle text-success mr-3"></i>
  <strong class="mr-5 text-uppercase">{{ session('status_edit') }}</strong> Clique abaixo para ver mais.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card m-2 rounded-0">

  <!--form id="regForm" action="/action_page.php"-->
  <form id="regForm" class="form-horizontal" method="POST" action="{{ route('contrato_sr.update', $contratos_sr->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="card-header py-1 border-0">
      <div id="step-container" class="step-container align-items-center py-3 mt-2"></div>
    </div>
    <div id="tab-here" class="p-4 card-body mb-0"></div>
    <div class="d-flex justify-content-between mb-3">
      <div class="p-2"><button type="button" class="btn btn-lg rounded-0 btn-outline-dark font-weight-bold shadow-sm m-3" id="prevBtn" onclick="nextPrev(-1)">Anterior</button></div>
      <div class="p-2"><button type="button" class="btn btn-lg rounded-0 btn-success font-weight-bold shadow-sm m-3" id="nextBtn" onclick="nextPrev(1)">Proximo</button></div>
    </div>
  </form><!--form-->

  <div class="container-fluid">
    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        <div class="modal-alert modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </div>

        <div class="container-fluid p-0 mt-0 m-0">

          <div class="text-center row justify-content-center mb-5">
            <img src="{{asset('assets/brazao.jpg')}}" alt="" width="10%" class="mx-auto text-center">
          </div>
          <div class="text-center">
            <h5 class="text-uppercase col-md-8 col-lg-8 offset-lg-2 offset-md-2 font-weight-bold roboto-font text-black mt-2 mb-3">
            ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
              CELEBRAM</h5>
          </div> 
          <div class="form-row justify-content-center">
            <div class="form-group col-md-4">
              <input class="mb-2 text-black form-control" type="text" name="nome_ict" onchange="handleNameICT(event)" placeholder="ICT ou ente público" value="{{$contratos_sr->nome_ict}}"> 
            </div>
            <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">E</h5>
            <div class="form-group col-md-4">
              <input class="mb-2 text-black form-control" type="text" name="nome_parceiro" onchange="handleNameParceiro(event)" placeholder="Nome do parceiro" value="{{$contratos_sr->nome_parceiro}}">  
            </div>
          </div>
          <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center">NA FORMA A SEGUIR.</h5>
          <br>
          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
          </div>
         
          <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">ICT/ente público</h5>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4" class="font-weight-bold text-black">Nomes</label>
              <input type="text" name="nome_teste" class="form-control text-black font-weight-bold ofo" id="nome" value="{{$contratos_sr->nome_teste}}">               
            </div>
            <div class="form-group col-md-4">
              <label for="natureza" class="font-weight-bold text-black">Natureza Jurídica</label>
              <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo1"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control text-black font-weight-bold" name="nat_juridica" id="natureza" placeholder="" value="{{$contratos_sr->nat_juridica}}">
            </div>
            <div class="form-group col-md-4">
              <label for="cpf-cnpj" class="font-weight-bold text-black">CNPJ nº</label>
              <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo2"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control text-black font-weight-bold cnpj" name="cnpj" placeholder=" 12.345.678/9111-11" id="cpf-cnpj" value="{{$contratos_sr->cnpj}}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="endereço" class="font-weight-bold text-black">Endereço</label>
              <input type="text" class="form-control text-black font-weight-bold" placeholder=" Rua Dois, nº 111, Edifício 12, apt 54 - Alphavile" value="{{$contratos_sr->endereco}}" name="endereco" id="endereço">
            </div>
            <div class="form-group col-md-3">
              <label for="cidade" class="font-weight-bold text-black">Cidade</label>
              <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->cidade}}" name="cidade" id="cidade">
            </div>
            <div class="form-group col-md-2">
              <label for="uf" class="font-weight-bold text-black">UF</label>
              <select class="custom-select" id="UF" name="uf">
                <option value="">Selecione</option>
                <option selected value="{{$contratos_sr->uf}}">{{$contratos_sr->uf}}</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cep" class="font-weight-bold text-black">CEP</label>
              <input type="text" class="form-control text-black font-weight-bold cep" value="{{$contratos_sr->cep}}" name="cep" id="cep">
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
            <label for="representante" class="font-weight-bold text-black">Representante Legal</label>
            <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo3"><i class="fas fa-fw fa-question-circle float-right"></i></a>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->rep_legal}}" name="rep_legal" id="representante" placeholder="Nome">
          </div>
          <div class="form-group col-md-3">
            <label for="cpf-mf" class="font-weight-bold text-black">CPF/M.F</label>
            <input type="text" class="form-control text-black font-weight-bold cpf" value="{{$contratos_sr->cpf}}" name="cpf" id="cpf-mf" placeholder="">
          </div>
          <div class="form-group col-md-3">
            <label for="rg" class="font-weight-bold text-black">Identidade nº</label>
            <input type="text" class="form-control text-black font-weight-bold rg" value="{{$contratos_sr->rg}}" name="rg" id="rg" placeholder="">
          </div>
          <div class="form-group col-md-2">
            <label for="orgao-expedidor" class="font-weight-bold text-black">Órgão Expedidor</label>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->orgao_exp}}" name="orgao_exp" id="orgao-expedidor" placeholder="">
          </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-3">
            <label for="nacionalidade" class="font-weight-bold text-black">Nacionalidade</label>
              <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->nacionalidade}}" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade">
          </div>
          <div class="form-group col-md-3">
            <label for="estado-civil" class="font-weight-bold text-black">Estado Civil</label>
              <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->est_civil}}" name="est_civil" id="estado-civil" placeholder="Estado Civil">
          </div>
          <div class="form-group col-md-3">
            <label for="ato-nomeacao" class="font-weight-bold text-black">Ato de Nomeação</label>
            <a href="#" data-toggle="modal" data-target="#atoNomeacao"><i class="fas fa-fw fa-question-circle float-right"></i></a>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->ato_nomeacao}}" name="ato_nomeacao" id="ato-nomeacao" placeholder="Ato de Nomeação">
          </div>
          <div class="form-group col-md-3">
            <label for="doravante" class="font-weight-bold text-black">Doravante Denominado</label>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->doravante_denominado}}" name="doravante_denominado" id="doravante" placeholder="ICT/Agência de Fomento">
          </div>
          <div class="form-group col-md-4">
            <label for="parceiro_cargo" class="font-weight-bold text-black">Cargo do representante</label>
            <input type="text" class="form-control text-black font-weight-bold" onchange="handleCargoICT(event)" name="cargo_rep_foro" id="parceiro_cargo" value="{{$contratos_sr->cargo_rep_foro}}">
          </div>
          </div><!-- /.row-->
          <br>
        
        </div><!--end of content-->
      </div><!--end-pane-->

      <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container-fluid p-0 mt-0 m-0">
          
          
          <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2º PARCEIRO</h5>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>                  
              <input type="text" class="form-control text-black font-weight-bold"  value="{{$contratos_sr->nome_parceiro_instituicao}}" name="nome_parceiro_instituicao" id="inputEmail4" placeholder="Nome">
            </div>
            <div class="form-group col-md-4">
              <label for="natureza-juridica" class="font-weight-bold text-black">Natureza Jurídica</label>
              <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo4"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_nat_juridica}}" name="parceiro_nat_juridica" id="natureza-juridica" placeholder="Natureza Jurídica">
            </div>
            <div class="form-group col-md-4">
              <label for="cnpj-n" class="font-weight-bold text-black">CNPJ nº</label>
              <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo5"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control text-black font-weight-bold cnpj" value="{{$contratos_sr->parceiro_cnpj}}" name="parceiro_cnpj" id="cnpj-n" placeholder="CNPJ">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="parceiro-endereco" placeholder=" Rua Dois, nº 111, Edifício 12, apt 54 - Alphavile" class="font-weight-bold text-black">Endereço</label>
                <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_endereco}}" name="parceiro_endereco" id="parceiro-endereco">
            </div>
            <div class="form-group col-md-3">
              <label for="parceiro_cidade" class="font-weight-bold text-black">Cidade</label>
                <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_cidade}}" name="parceiro_cidade" id="parceiro_cidade">
            </div>
            <div class="form-group col-md-2">
              <label for="parceiro_uf" class="font-weight-bold text-black">UF</label>
              <select class="custom-select" id="UF" name="parceiro_uf">
                <option value="">Selecione</option>
                <option selected value="{{$contratos_sr->uf}}">{{$contratos_sr->uf}}</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
            </div>
            <div class="form-group col-md-2">
              <label for="parceiro_cep" class="font-weight-bold text-black">CEP</label>
                <input type="text" class="form-control text-black font-weight-bold cep" value="{{$contratos_sr->parceiro_cep}}" name="parceiro_cep" id="parceiro_cep">
            </div>
          </div>

          <div class="form-row">
          <div class="form-group col-md-4">
            <label for="parceiro_rep_legal" class="font-weight-bold text-black">Representante Legal</label>
            <!-- Botão para acionar modal -->
              <a href="#" data-toggle="modal" data-target="#modalExemplo6"><i class="fas fa-fw fa-question-circle float-right"></i></a>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_rep_legal}}" name="parceiro_rep_legal" id="parceiro_rep_legal" placeholder="Nome">
          </div>
          <div class="form-group col-md-3">
            <label for="parceiro_cpf" class="font-weight-bold text-black">CPF/M.F</label>
            <input type="text" class="form-control text-black font-weight-bold cpf" value="{{$contratos_sr->parceiro_cpf}}" name="parceiro_cpf" id="parceiro_cpf" placeholder="">
          </div>
          <div class="form-group col-md-3">
            <label for="parceiro_rg" class="font-weight-bold text-black">Identidade nº</label>
            <input type="text" class="form-control text-black font-weight-bold rg" value="{{$contratos_sr->parceiro_rg}}" name="parceiro_rg" id="parceiro_rg" placeholder="">
          </div>
          <div class="form-group col-md-2">
            <label for="parceiro_orgao_exp" class="font-weight-bold text-black">Órgão Expedidor</label>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_orgao_exp}}" name="parceiro_orgao_exp" id="parceiro_orgao_exp" placeholder="">
          </div>
          <div class="form-group col-md-2">
            <label for="parceiro_cargo" class="font-weight-bold text-black">Cargo</label>
            <input type="text" class="form-control text-black font-weight-bold" value="{{$contratos_sr->parceiro_cargo}}" name="parceiro_cargo" id="parceiro_cargo" placeholder="">
          </div>
          </div>
          <!-- <div class="form-group col-md-4 mt-5 py-4">
            <button class="btn btn-lg btn-light font-weight-bold btn-block" disabled=""> <i class="fa fa-plus text-right mr-auto"></i>  Adicionar parceiro</button>
          </div> -->
        </div><!--end of content-->
      </div><!--end pane-->
      <!------------------------------------------------------------------------->

      <div class="tab-pane " id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
        <div class="container-fluid p-0 mt-0 m-0">
          <div class="text-justify text-black">
            <p>Os <b>PARCEIROS</b>, anteriormente qualificados, resolvem celebrar
            o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - 
            PD&I, em conformidade com as normas legais vigentes no Marco Legal de 
            Ciência, Tecnologia e Inovação (Emenda Constitucional nº85/15, Lei nº
            10.973/2004, Lei nº 13.243/2016, Decreto nº 9.283/2018 e Lei nº 8.958/1994), que deverá ser executado com estrita observância das seguintes cláusulas e condições:</p><br>
            
            <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">1. Cláusula Primeira - do Objeto </h4><hr>

            <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARTÍCIPES para desenvolver
            o <br><div class="form-group col-md-12">
              <textarea class="form-control" value="{{$contratos_sr->clausula_descricao}}" name="clausula_descricao">{{$contratos_sr->clausula_objetivo}}</textarea></div>

            <a href="#" data-toggle="modal" data-target="#modalExemplo10"><i class="fas fa-fw fa-question-circle float-right"></i></a>

            <br>a ser executado nos termos do Plano de Trabalho, anexo, visando 

            <br><div class="form-group col-md-12"><textarea value="{{$contratos_sr->clausula_objetivo}}" name="clausula_objetivo" class="form-control">{{$contratos_sr->clausula_objetivo}}</textarea></div>

            <a href="#" data-toggle="modal" data-target="#modalExemplo11"><i class="fas fa-fw fa-question-circle float-right"></i></a>

            e à execução técnica de projeto de pesquisa, desenvolvimento e inovação - PD&I.</p>
          </div>
        </div>

    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO </h4><hr>
          <!-- Nota explicativa -->
          <div class="alert alert-warning mb-3 mt-3" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modalExemplo12">Saiba mais</button>
          </div>

          <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
          <p class=""><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a(o) <input class="mb-2 text-black myform-control font-weight-bold text-uppercase" id="handle_ict" type="text" value="{{$contratos_sr->nome_ict}}" disabled=""><a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a>, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>
          
          <!--clausula editavel 2-->

          <div class="alert alert-info py-2 mt-3 mb-3 text-dark font-weight-bold" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            Edite a(s) cláusula(s) abaixo (se julgar necessário):
          </div>

          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.2</a>
              <textarea class="form-control" name="clausula_edit_2_2" value="{{$contratos_sr->clausula_edit_2_2}}" rows="4" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_2_2}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.3</a>
              <a href="#" data-toggle="modal" data-target="#modal_clausula_2_3"><i class="fas fa-fw fa-question-circle mt-1 ml-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_2_3}}" name="clausula_edit_2_3" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_2_3}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.4</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_2_4"><i class="fas fa-fw fa-question-circle mt-1 ml-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_2_4}}" name="clausula_edit_2_4" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_2_4}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.5</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_2_5"><i class="fas fa-fw fa-question-circle mt-1 ml-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_2_5}}" name="clausula_edit_2_5" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_2_5}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.6</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_2_6"><i class="fas fa-fw fa-question-circle mt-1 ml-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_2_6}}" name="clausula_edit_2_6" rows="4" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_2_6}}</textarea>
          </div>

        </div>
      </div>

    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">3. CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h4><hr>
          <div class="alert alert-warning mb-3 mt-3" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_atribuicoes">Saiba mais</button>
          </div>
          <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
            
          <p class="mt-3 roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" id="handle_ict" value="{{$contratos_sr->nome_ict}}" disabled></p>
          <hr>      
            <b>A)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<a href="#" data-toggle="modal" data-target="#modalCoordenador"><i class="fas fa-fw fa-question-circle"></i></a>
            
            <div class="form-group row pt-2">
              <label for="" class="col col-form-label font-weight-bold text-left">Nome do Coordenador ICT/Público:</label>
              <div class="col-md-7 col-sm-12 col-lg-7 col-xl-7">
                <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" value="{{$contratos_sr->nome_coordenador_ict}}">
              </div>
            </div>

            <div class="alert alert-info py-2 mt-3 mb-3 text-dark font-weight-bold" role="alert">      
              <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">Edite a(s) cláusula(s) abaixo (se julgar necessário):
            </div>

            <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA B</a>
                <textarea class="form-control" value="{{$contratos_sr->clausula_edit_3_1_b}}" name="clausula_edit_3_1_b" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_3_1_b}}</textarea>
            </div>

            <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA C</a>
                <a href="#" data-toggle="modal" data-target="#modalExemplo16" class="float-left"><i class="fas fa-fw fa-question-circle"></i></a>
                <textarea class="form-control" value="{{$contratos_sr->clausula_edit_3_1_c}}" name="clausula_edit_3_1_c" rows="3" style="background-color: #F6FAFA; resize: none !important;" placeholder="">{{$contratos_sr->clausula_edit_3_1_c}}</textarea>
            </div>

            <p class="mt-5 mb-3 roboto-font text-left"><b>3.1.2.  Do(a) PARCEIRO PRIVADO: <input  class="myform-control" type="text" value="{{$contratos_sr->nome_parceiro}}" id="handle_parceiro" disabled></b></p>
            <hr>
          
            <b>A)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a>
            
            <div class="form-group row pt-2">
              <label for="" class="col col-form-label font-weight-bold text-left">Nome do Coordenador Parceiro Privado:</label>
              <div class="col-md-7 col-sm-12 col-lg-7 col-xl-7">
                <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" id="nome_coordenador_ict" class="form-control" value="{{$contratos_sr->nome_coordenador_privado}}">
              </div>
            </div>

            <p><b>B)</b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos:</p>
            
            <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA C</a>
            <a href="#" data-toggle="modal" data-target="#modalExemplo17"><i class="fas fa-fw fa-question-circle m-2"></i></a>
                <textarea placeholder="{{$contratos_sr->clausula_edit_3_b}}" class="form-control font-weight-bold" value="{{$contratos_sr->clausula_edit_3_1_2_c}}" name="clausula_edit_3_1_2_c" rows="4" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_3_1_2_c}}</textarea>
            </div> 

            <p><b>3.2.</b><span id="coord_ict"></span><span id="coord_privado"></span>poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.</p>

            <div class="alert alert-info py-2 mt-3 mb-4 text-dark font-weight-bold" role="alert">      
              <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">Edite a(s) cláusula(s) abaixo (se julgar necessário):
            </div>

            <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">CLAUSULA 3.3</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left mt-1 m-2"></i></a>
                <textarea class="form-control" value="{{$contratos_sr->clausula_edit_3_3}}" name="clausula_edit_3_3" rows="4" style="background-color: #F6FAFA; resize: none !important;" placeholder="{{$contratos_sr->clausula_edit_3_3}}">{{$contratos_sr->clausula_edit_3_3}}</textarea>
            </div>

            
              <!-- 3.1.3. Aqui Será clausula do novo parceiro caso tenha -->
              <!-- <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a) <input type="text" class="myform-control" name="nome_inst_fundacao" placeholder="Instituição">:(FUNDAÇÃO DE APOIO – QUANDO HOUVER)</b></p>
            
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>  Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I; <br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div>  Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div>  Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a>
              
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div>  Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div>  Informar previamente ao PARCEIRO PRIVADO os dados bancários e cadastrais necessários à realização dos aportes financeiros, cuidando para que a conta corrente a qual serão destinados os recursos seja específica para o projeto executado em conformidade com este Acordo de Parceria.<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">F)</div>  Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, inclusive os provenientes das receitas obtidas nas aplicações financeiras realizadas, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;
              <br><br>
              <p class="ml-2 bg-light roboto-font"><b>3.1.3.  OU:</b></p>
          
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;
              <br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">G)</div>  Responsabilizar-se pelo recolhimento de impostos, taxas, contribuições e outros encargos porventura devidos em decorrência das atividades vinculadas a este Acordo de Parceria;<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">H)</div>  Manter, durante toda a execução do Acordo de Parceria, todas as condições de habilitação e de qualificação exigidas para a sua celebração, responsabilizando-se pela boa e integral execução das atividades ora descritas;<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">I)</div>  Nas compras de bens e nas contratações de serviços, observar as regras do Decreto nº 8.241/2014;<br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">J)</div>  Observar os princípios da legalidade, eficiência, moralidade, publicidade, economicidade, legalidade e impessoalidade, nas aquisições e contratações realizadas, bem como no desenvolvimento de todas as suas ações no âmbito deste Acordo de Parceria;
              <br>
              <div class="badge badge-primary p-2 mb-1 font-weight-bold">K)</div>  Manter registros contábeis, fiscais e financeiros completos e fidedignos relativamente à aplicação dos aportes recebidos do PARCEIRO PRIVADO por este Acordo de Parceria, fazendo-o em estrita observância às normas tributário-fiscais em vigor e, especialmente, à legislação que instituiu contrapartidas em atividades de PD&I para a concessão de incentivos ou de benefícios dos quais o PARCEIRO PRIVADO seja ou se torne beneficiária;<br>
              <br> -->
            
          <!--clausula editavel 3-->

          
          
          </div>
      </div>

    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">4. CLÁUSULA QUARTA - DO PESSOAL <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr>
        <p class="mt-3 text-justify text-black py-4">
          <b>4.1.</b> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações
            trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si 
            e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem 
            na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma,
          vínculo empregatício ou de qualquer outra natureza com a EMPRESA <input type="text" class="myform-control font-weight-bold" value="{{$contratos_sr->nome_parceiro}}"  id="handle_parceiro" disabled> e
          o pessoal do(a)<input type="text" class="myform-control font-weight-bold" value="{{$contratos_sr->nome_ict}}" id="handle_ict" disabled> vice-versa, cabendo a cada PARCEIRO a responsabilidade 
          pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.<br>
        </p>
      </div>
    </div><!--end of tab-content: insert all these here!-->

    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">5. CLÁUSULA QUINTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h4><hr>
          <div class="alert alert-warning mb-3 mt-3" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#propriedade_intelectual">Saiba mais</button>
          </div>
        </div><!--text-justify-->

        <div class="alert alert-info py-2 mt-3 mb-3 text-dark font-weight-bold" role="alert">      
          <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
          Edite a(s) cláusula(s) abaixo (se julgar necessário):
        </div>

        <div class="container-fluid pt-4 pb-4 pl-0 pr-0">
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.1</a>
              <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_1}}" name="clausula_edit_5_1" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_1}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.2</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_2"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_2}}" name="clausula_edit_5_2" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_2}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.3</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_3"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_3}}" name="clausula_edit_5_3" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_3}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.4</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_4"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_4}}" name="clausula_edit_5_4" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_4}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.5</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_5"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_5}}" name="clausula_edit_5_5" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_5}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.6</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_6"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_6}}" name="clausula_edit_5_6" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_6}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.7</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_7"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_7}}" name="clausula_edit_5_7" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_7}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.8</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_8"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_8}}" name="clausula_edit_5_8" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_8}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.9</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_5_9"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_9}}" name="clausula_edit_5_9" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_9}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.10</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_10}}" name="clausula_edit_5_10" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_10}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.11</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_11}}" name="clausula_edit_5_11" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_11}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.12</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_12}}" name="clausula_edit_5_12" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_12}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 5.13</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_5_13}}" name="clausula_edit_5_13" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_5_13}}</textarea>
          </div>
        </div><!--container-fluid-->
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">6. CLÁUSULA SEXTA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h4><hr>
          <br>
          <p><b>6.1</b> Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao acordo ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito do PARCEIRO referido.</p>
          
          <p>
            <b>6.2</b> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.</textarea>
          </p>
          <p>
            <b>6.3</b> Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.</textarea>
          </p>
          <p>
            <b>6.4</b> As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS.</textarea>
          </p>
        </div>
      </div>
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">7. CLÁUSULA SÉTIMA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h4><hr>
          <br>
          <p><b>7.1 </b>Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO.</p>
          <p><b>7.2 </b>Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer. </p>
          <p><b>7.3 </b>Os PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade.</p>
          <p><b>7.4 </b>Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses: </p>
          <p><b>7.4.1.</b> Informações técnicas ou comerciais que já sejam do conhecimento dos PARCEIROS na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pelo PARCEIRO que a revele; </p>
          <p><b>7.4.2.</b> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S);</p>
          <p><b>7.4.2.1.</b> Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público. </p>
          <p><b>7.4.3.</b> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade;</p>
          <p><b>7.4.4.</b> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa;</p>
          <p><b>7.4.5.</b> Revelação expressamente autorizada, por escrito, pelos PARCEIROS.</p>
          <p><b>7.5.</b> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. </p>
          
          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#confidencial">Saiba mais</button>
          </div>

          <div class="alert alert-info py-2 mt-3 mb-3 text-dark font-weight-bold" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            Edite a(s) cláusula(s) abaixo (se julgar necessário):
          </div>

          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 7.6</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_7_6}}" name="clausula_edit_7_6" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_7_6}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 7.7</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_7_7}}" name="clausula_edit_7_7" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_7_7}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 7.8</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_7_8}}" name="clausula_edit_7_8" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_7_8}}</textarea>
          </div>

        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane" id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        

        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">8. CLÁUSULA OITAVA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h4><hr>
          <div class="alert alert-warning mb-3 mt-3" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#propriedade_intelectual">Saiba mais</button>
          </div>
        </div><!--text-justify-->

        <div class="alert alert-info py-2 mt-3 mb-3 text-dark font-weight-bold" role="alert">      
          <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
          Edite a(s) cláusula(s) abaixo (se julgar necessário):
        </div>

        <div class="container-fluid pt-4 pb-4 pl-0 pr-0">
          
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 8.1</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_1}}" name="clausula_edit_8_1" rows="6" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_1}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 8.2</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2}}" name="clausula_edit_8_2" rows="6" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a id="clausula_8"  class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 8.3</a>
          
              <a href="#" data-toggle="modal" data-target="#modal_clausula_8_1"><i class="fas fa-fw fa-question-circle  m-2"></i></a>
              <textarea class="form-control" name="clausula_edit_8_3" value="{{$contratos_sr->clausula_edit_8_3}}" rows="8" style="background-color: #F6FAFA; resize: none !important;">Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo. </textarea>
          </div>
          
          <div class="col-md-12 mb-3">
            <a id="clausula_8"  class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 8.4</a>
            <textarea class="form-control" name="clausula_edit_8_4" value="{{$contratos_sr->clausula_edit_8_4}}"  rows="6" style="background-color: #F6FAFA; resize: none !important;">Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:</textarea>
          </div>
          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA A)</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2_a}}" name="clausula_edit_8_2_a" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2_a}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA B)</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2_b}}" name="clausula_edit_8_2_b" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2_b}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA C)</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2_c}}" name="clausula_edit_8_2_c" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2_c}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA D)</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2_d}}" name="clausula_edit_8_2_d" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2_d}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">LETRA E)</a>
            <a href="#" data-toggle="modal" data-target="#modal_clausula_8_all"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
            <textarea class="form-control" value="{{$contratos_sr->clausula_edit_8_2_e}}" name="clausula_edit_8_2_e" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_8_2_e}}</textarea>
          </div>

        </div>

        
      </div><!--container-fluid-->
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">9 CLÁUSULA NONA - DO ACOMPANHAMENTO</h4><hr>
          <br>
          <p><b>9.1</b> Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
          <p><b>9.2</b> O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. </p>
          <p><b>9.3</b> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros. </p>
          <p><b>9.4</b> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. </p>
        </div>
      </div>
      <!------------------------------------------------------------------------->
    </div><!--end of tab-content: insert all these here!-->
    <!------------------------------------------------------------------------->
  
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">10. CLÁUSULA DÉCIMA - DA VIGÊNCIA E DA PRORROGAÇÃO</h4><hr>
          <br>
          <p><b>10.1</b> O presente Acordo de Parceria para PD&I vigerá pelo prazo de <input class="myform-control text-black" type="text" value="{{$contratos_sr->prazo_vigencia}}" name="prazo_vigencia" placeholder="{{$contratos_sr->prazo_vigencia}}">
          <a href="#" data-toggle="modal" data-target="#modal_clausula_10_1"><i class="fas fa-fw fa-question-circle"></i></a>
           anos, a partir da data de sua assinatura, prorrogáveis.</p>
          
          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_18">Saiba mais</button>
          </div>
          <p><b>10.2</b> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
      
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">11. CLÁUSULA DÉCIMA PRIMEIRA- DAS ALTERAÇÕES</h4><hr>
          <br>
          <p><b>11.1</b> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo.</p>
          <p><b>11.2</b> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento.</p>
          <p><b>11.3</b> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou.</p>
      
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">12. CLÁUSULA DÉCIMA SEGUNDA – DO MONITORAMENTO, DA
              AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h4><hr>
          <br>
          <p><b>12.1</b> Os <b>PARCEIROS</b> exercerão a fiscalização técnico-financeira das atividades do presente Acordo. </p>
          <p><b>12.2</b>  O pesquisador deverá encaminhar ao <span class="font-weight-bold">Setor responsável ou COMISSÃO DO(A): <input class="mb-2 text-black myform-control" name="nome_setor_comissao"  value="{{$contratos_sr->nome_setor_comissao}}" type="text"></span> 
          
         </p>

          <!--clausula editavel 12-->
          <div class="alert alert-info py-2 mt-5 mb-4 text-dark font-weight-bold" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">Edite a(s) cláusula(s) abaixo (se julgar necessário):
          </div>

          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Letra A)</a>
              <textarea class="form-control" value="{{$contratos_sr->clausula_edit_12_a}}" name="clausula_edit_12_a" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_12_a}}</textarea>
          </div>

          <div class="col-md-12 mb-3">
            <p><b>B)</b> Formulário de Resultado Final: no prazo de até <input class="myform-control text-black" type="text" value="{{$contratos_sr->clausula_prazo_12_b}}" name="clausula_prazo_12_b" placeholder="{{$contratos_sr->clausula_prazo_12_b}}"> dias contados da conclusão do objeto deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho.</p>
          </div>

          <p><b>12.3</b> No Formulário de Resultado de que trata a subcláusula 12.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas.</p>
          <p><b>12.4</b> Caberá a cada <b>PARCEIRO</b> adotar as providências necessárias julgadas cabíveis, caso os relatórios parciais de que trata a subcláusula primeira demonstrem inconsistências na execução do objeto deste Acordo.

          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_19">Saiba mais</button>
          </div>
          <p><b>12.5</b> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública. </p>
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
           
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">13. CLÁUSULA DÉCIMA TERCEIRA – DA EXTINÇÃO DO ACORDO</h4><hr>
          <br>

          <p><b>13.1</b> Este Acordo poderá, a qualquer tempo, ser denunciado pelos <b>PARCEIROS</b>, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de  <input class="myform-control text-black" type="text" name="clausula_prazo_13_1" value="{{$contratos_sr->clausula_prazo_13_1}}" placeholder="Prazo em dias"> dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os <b>PARCEIROS</b>, creditando eventuais benefícios adquiridos no período.</p>

        <!--clausula editavel 13-->

        <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.2</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
          <textarea class="form-control text-justify" value="{{$contratos_sr->clausula_edit_13_2}}" name="clausula_edit_13_2" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_13_2}}</textarea>
        </div>

        <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.2.1</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
          <textarea class="form-control text-justify" value="{{$contratos_sr->clausula_edit_13_2_1}}" name="clausula_edit_13_2_1" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_13_2_1}}</textarea>
        </div>

        <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.2.2</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
          <textarea class="form-control text-justify" value="{{$contratos_sr->clausula_edit_13_2_2}}" name="clausula_edit_13_2_2" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_13_2_2}}</textarea>
        </div>

        <div class="col-md-12 mb-3">
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.3</a>
          <a href="#" data-toggle="modal" data-target="#modal_clausula_default"><i class="fas fa-fw fa-question-circle float-left m-2"></i></a>
          <textarea class="form-control text-justify" value="{{$contratos_sr->clausula_edit_13_3}}" name="clausula_edit_13_3" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_13_3}}</textarea>
        </div>
        

        <p><b>13.4</b> O presente Acordo será extinto com o cumprimento do objeto ou com o decurso de prazo de vigência.</p>
      
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">14. CLÁUSULA DÉCIMA QUARTA - DA PUBLICIDADE</h4><hr>
          <br>
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 14.1</a>
          <textarea class="form-control text-justify" name="clausula_edit_14_1" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_14_1}}</textarea>
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-justify text-black">
          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">15. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES </h4><hr>
          <br>
          <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 15.1</a>
          <textarea class="form-control text-justify" name="clausula_edit_15_1" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_15_1}}</textarea>
          <br>
          <span class="font-weight-bold ">PARCEIRO(S) PUBLICO(S):</span> 
          <a href="#" data-toggle="modal" data-target="#dados_instituicoes"><i class="fas fa-fw fa-question-circle m-2"></i></a>
          <div class="form-row">
            <div class="form-group col">
              <label for="endereco" class="font-weight-bold text-black">Endereço</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="parceiro_contato_endereço"
                id="endereco" 
                placeholder="{{$contratos_sr->parceiro_contato_endereco}}"
                value="{{$contratos_sr->parceiro_contato_endereco}}">
            </div>
            <div class="form-group col">
              <label for="parceiro_contato_celular" class="font-weight-bold text-black">Celular</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="parceiro_contato_celular" id="parceiro_contato_celular" 
                placeholder="{{$contratos_sr->parceiro_contato_celular}}"
                value="{{$contratos_sr->parceiro_contato_celular}}">
            </div>
            <div class="form-group col">
              <label for="parceiro_contato_email" class="font-weight-bold text-black">Email</label>
              <input type="email" 
                class="form-control text-black font-weight-bold"
                name="parceiro_contato_email" 
                id="parceiro_contato_email" 
                placeholder="{{$contratos_sr->parceiro_contato_email}}"
                value="{{$contratos_sr->parceiro_contato_email}}">
            </div>
          </div><!-- /.row-->
          <!-- Pariceiro privado -->
          <span class="font-weight-bold ">PARCEIRO(S) PRIVADO(S):</span> 
          <a href="#" data-toggle="modal" data-target="#dados_instituicoes"><i class="fas fa-fw fa-question-circle m-2"></i></a>
          <div class="form-row mt-3">
            <div class="form-group col">
              <label for="endereco" class="font-weight-bold text-black">Endereço</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="privado_contato_endereço"
                id="endereco" 
                placeholder="{{$contratos_sr->privado_contato_endereco}}"
                value="{{$contratos_sr->privado_contato_endereco}}">
            </div>
            <div class="form-group col">
              <label for="privado_contato_celular" class="font-weight-bold text-black">Celular</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="privado_contato_celular" id="privado_contato_celular" 
                placeholder="{{$contratos_sr->privado_contato_celular}}"
                value="{{$contratos_sr->privado_contato_celular}}">
            </div>
            <div class="form-group col">
              <label for="privado_contato_email" class="font-weight-bold text-black">Email</label>
              <input type="email" 
                class="form-control text-black font-weight-bold"
                name="privado_contato_email" 
                id="privado_contato_email" 
                placeholder="{{$contratos_sr->privado_contato_email}}"
                value="{{$contratos_sr->privado_contato_email}}">
            </div>
          </div><!-- /.row-->
                      
          <p><b>15.2</b> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue: </p>
          <p><b>15.2.1</b> Quando entregue em mão a quem destinada, com o comprovante de recebimento;  </p>
          <p><b>15.2.2</b> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro; </p>
          <p><b>15.2.3</b>  Se enviada por fax, quando recebida pelo destinatário; </p>
          <p><b>15.2.4</b>  Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada.  </p>
          <p><b>15.3</b>  Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas. </p>
      
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">16. CLÁUSULA DÉCIMA SEXTA – DISPOSIÇÕES GERAIS</h4><hr>
        <br>
        <div class="text-justify text-black">
          <p><b>16.1.</b> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar em alguma inovação. </p>
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">17. CLÁUSULA DÉCIMA SÉTIMA - DO FORO</h4><hr>
        <br>
        <div class="text-justify text-black">
          <p><b>17.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de <input class="myform-control font-weight-bold"  type="text" value="{{$contratos_sr->estado_foro}}" name="estado_foro" placeholder="{{$contratos_sr->estado_foro}}">, cidade de <input  class="myform-control font-weight-bold" type="text" value="{{$contratos_sr->cidade_foro}}" name="cidade_foro" placeholder="{{$contratos_sr->cidade_foro}}">, para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109 da Constituição Federal. E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.</p>
          <textarea class="form-control text-justify" name="clausula_edit_17_1" rows="3" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_sr->clausula_edit_17_1}}</textarea>
          <br>
          <div class="form-row mt-3">
            <div class="form-group col-md-3">
              <label for="data_foro" class="font-weight-bold text-black">Data:</label>
              <input type="date" 
                class="form-control text-black font-weight-bold" 
                name="data_foro"
                id="data_foro" 
                placeholder="{{$contratos_sr->data_foro}}"
                value="{{$contratos_sr->data_foro}}">
            </div>
          </div><!-- /.row-->

          <div class="form-row mt-3">
            <div class="form-group col-md-3">
              <label for="ict_inst_foro" class="font-weight-bold text-black">ICT:</label>
              <a href="#" data-toggle="modal" data-target="#ict"><i class="fas fa-fw fa-question-circle m-2"></i></a>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="ict_inst_foro" 
                id="ict_inst_foro" 
                placeholder="{{$contratos_sr->ict_inst_foro}}"
                value="{{$contratos_sr->ict_inst_foro}}">
            </div>
            <div class="form-group col-md-3">
              <label for="nome_rep_foro" class="font-weight-bold text-black">Representante:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="nome_rep_foro" id="nome_rep_foro" 
                placeholder="{{$contratos_sr->nome_rep_foro}}"
                value="{{$contratos_sr->nome_rep_foro}}">
            </div>
            <div class="form-group col-md-3">
              <label for="cargo_rep_foro" class="font-weight-bold text-black">Cargo</label>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="cargo_rep_foro" 
                id="cargo_rep_foro" 
                placeholder="{{$contratos_sr->cargo_rep_foro}}"
                value="{{$contratos_sr->cargo_rep_foro}}">
            </div>
          </div><!-- /.row-->

          <div class="form-row mt-3">
            <div class="form-group col-md-3">
              <label for="nome_inst_privado_foro" class="font-weight-bold text-black">Parceiro Privado:</label>
              <a href="#" data-toggle="modal" data-target="#parceiro"><i class="fas fa-fw fa-question-circle m-2"></i></a>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="nome_inst_privado_foro" 
                id="nome_inst_privado_foro" 
                placeholder="{{$contratos_sr->nome_inst_privado_foro}}"
                value="{{$contratos_sr->nome_inst_privado_foro}}">
            </div>
            <div class="form-group col-md-3">
              <label for="nome_rep_privado_foro" class="font-weight-bold text-black">Representante:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="nome_rep_privado_foro" id="nome_rep_privado_foro" 
                placeholder="{{$contratos_sr->nome_rep_privado_foro}}"
                value="{{$contratos_sr->nome_rep_privado_foro}}">
            </div>
            <div class="form-group col-md-3">
              <label for="cargo_rep_privado_foro" class="font-weight-bold text-black">Cargo</label>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="cargo_rep_privado_foro" 
                id="cargo_rep_privado_foro" 
                placeholder="{{$contratos_sr->cargo_rep_privado_foro}}"
                value="{{$contratos_sr->cargo_rep_privado_foro}}">
            </div>
            <input type="hidden" id="tipo" name="{{$contratos_sr->tipo}}" value="Sem Repasse">
          </div><!-- /.row-->
          <!-- <div class="form-row mt-5">
            <div class="form-group col-md-3">
              <label for="nome_testemunha_1" class="font-weight-bold text-black">Testemunha 1:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold" 
                name="nome_testemunha_1" id="nome_testemunha_1" 
                placeholder="{{$contratos_sr->nome_testemunha_1}}"
                value="{{$contratos_sr->nome_testemunha_1}}">
            </div>
            <div class="form-group col-md-3">
              <label for="nome_testemunha_2" class="font-weight-bold text-black">Testemunha 2:</label>
              <input type="text" 
                class="form-control text-black font-weight-bold"
                name="nome_testemunha_2" 
                id="nome_testemunha_2" 
                placeholder="{{$contratos_sr->nome_testemunha_2}}"
                value="{{$contratos_sr->nome_testemunha_2}}">
            </div>
          </div> --><!-- /.row-->
        </div>
      </div>
    </div>
    <!------------------------------------------------------------------------->
    <div class="tab-pane " id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
      <div class="container-fluid p-0 mt-0 m-0">
        <div class="text-black">

          <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">SEU CONTRATO ESTÁ PRONTO.<i class="fas fa-fw fa-check ml-2"></i></h4><hr>
          <br>
          
          <p>Clique em enviar, e você será redirecionado para a tela inicial onde poderá visualizar seu contrato. </p><br>
          <!-- <a href="{{route('home')}}" class="btn btn-primary p-2 btn-lg col-4">Ver Contrato</a> -->
        </div>
      </div>
    </div>

  </div><!--card-body-->
</div><!--card-->

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

 // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

//Regra para avançar os step do formulario pelo header
function stepButton(n) {
  let x = document.getElementsByClassName("tab");
  if (window.firstStep !== undefined || n <= lastTab){
      if(n <= lastTab){
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        x[n].style.display = "block";
        currentTab = n
        showTab(n)
    }else{
        Toastify({
          text: "Você precisa preencher todos campos.",
              backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
              duration: 3000
        }).showToast(); 
    }
  }else{
      Toastify({
        text: "Você precisa preencher todos campos.",
            backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
            duration: 3000
      }).showToast(); 
  }
}

//Função para mostrar os Campos de cada etapa
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  var button = document.getElementById("nextBtn")
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    button.innerHTML = "Salvar";

  } else {
    button.type = 'button'
    document.getElementById("nextBtn").innerHTML = "Proximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

//Regra do butão para avançar ou voltar uma etapa
function nextPrev(n) {
  var button = document.getElementById("nextBtn");
  var x = document.getElementsByClassName("tab");
  
  if (n == 1 && !validateStepForm()) 
    return false;

  if (button.innerHTML === "Salvar"){
  
    document.getElementById("regForm").submit();
    return false
  }

  handleStep(x, n)
}

function validateStepForm() {
  // This function deals with validation of the form fields
  var x, inputs, selects, i, valid = true;
  x = document.getElementsByClassName("tab-pane");
  inputs = x[currentTab].getElementsByTagName("input");
  selects = x[currentTab].getElementsByTagName("select");
  for (i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
      inputs[i].className += " invalid";
      valid = false;
      
      if(inputs[i].name === "parceiro_contato_celular" || inputs[i].name === "privado_contato_celular"){
        inputs[i].className = inputs[i].className.replace(" invalid", "");
        valid = true
      }
    }

    if(i < selects.length){
      if (selects[i].value == "") {
        selects[i].className += " invalid";
        valid = false;
      }
    }
  } 

  if (window.firstStep !== undefined){
    for (i = 0; i < inputs.length; i++) {
      if(window.firstStep.includes(inputs[i].name)){
        console.log(inputs[i].name)
        valid = false
      }
    }
  }
  
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }else{
    Toastify({
        text: "Você precisa preencher todos campos.",
        backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
        duration: 3000
    }).showToast(); 
  }
  return valid; // return the valid status
}

//Remove as classes "active" dos campos que não estão ativos
function fixStepIndicator(n) {
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