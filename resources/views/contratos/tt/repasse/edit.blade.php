@extends('layouts.admin')


<style type="text/css">
  #wrapper #content-wrapper {
    background-color: white !important;
  }

  textarea{
    background-color: white !important;
    color: black !important;
    border-color: #3490dc !important;
    box-shadow: 1px 2px 2px #cdcdcd;
    padding: 10px;
    text-align: justify !important;
  }
  body, p{
    line-height: 1cm !important;
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
@include('pesquisador.modals.modal_15')
@include('pesquisador.modals.modalCoordenador')
@include('pesquisador.modals.modalCoordenadorPrivado')
@include('pesquisador.modals.modalFundApoio')
@include('pesquisador.modals.modal_clausula_4')
@include('pesquisador.modals.modalRecursoPrivado')
@include('pesquisador.modals.modalVerificarMeta')
@include('pesquisador.modals.modalPropriedadeIntelectual')
@include('pesquisador.modals.modalConfidencial')
@include('pesquisador.modals.modalVigencia')
@include('pesquisador.modals.modalPDI')
@include('pesquisador.modals.modalPublicidade')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<script src="{{ asset('js/localization/messages_pt_BR.js') }}"></script>
<script src="{{ asset('js/default-mask.js') }}"></script>
<script src="{{ asset('js/validation-form-cr.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- Funções dinamicas para os contratos -->
<script type="text/javascript" src="{{ asset('js/utils.js') }}"></script>

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold text-primary">Editar Contrato <span class="badge badge-primary">1</span></span>
    <div class="badge badge-success lead  mr-auto float-right">Com repasse</div>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

@if (session('status_edit'))
<div class="alert alert-success border-0 m-2 mr-4 mt-4 ml-4 border-0 alert-dismissible fade show" role="alert">
  <i class="fas fa-check-circle text-success mr-3"></i>
  <strong class="mr-5 text-uppercase">{{ session('status_edit') }}</strong> Clique abaixo para ver mais.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card mt-5 mb-5 color-card">

  <form id="regForm" class="form-horizontal" method="POST" action="{{ route('contrato_cr.update', $contratos_cr->id) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
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
                    <div class="modal-body"><p class="lead">

                    <span class="font-weight-bold text-dark">ESTA MINUTA DEVE SER UTILIZADA PARA ACORDOS DE PARCERIA PARA PD&I QUANDO HOUVER REPASSE DE RECURSOS PRIVADOS PARA O PROJETO DE PESQUISA.</span><br>
                    <hr>
                    Este repasse tanto pode ser feito diretamente à ICT ou Agência de Fomento, com ou sem intermédio de Fundação de Apoio 
                    (Lei nº 8.958/94) – nas cláusulas abaixo serão contempladas estas duas hipóteses (cabe a cada entidade verificar qual é a 
                    sua situação e adequar o instrumento jurídico. <b>Base Legal: §§ 6º e 7º do Artigo 35 do Decreto nº 9.283/18.</b><br/>
                    Caso se trate da hipótese de Acordo sem transferência de recursos entre os partícipes (Artigo 9º da Lei nº 10.973/04), deverá ser 
                    utilizada a outra minuta apropriada para esta situação. Alguns itens receberão notas explicativas destacadas para 
                    compreensão do agente ou setor responsável pela elaboração das minutas, que deverão ser devidamente suprimidas quando 
                    da finalização do documento. 
                    <br/>No modelo a seguir, deve-se observar que há duas cores:<br/>
                    <br/>- os itens escritos na cor <b>PRETA</b> devem ser mantidos, podendo eventualmente serem alterados ou excluídos diante do caso concreto, e;
                    <br/>-  aqueles redigidos na cor <span class="text-blue font-weight-bold">AZUL</span> são textos que dependem de situações específicas ou se trata de textos sugestivos. Cabe a cada entidade verificar o que deve ser escrito nestes itens e decidir se eles serão ou não mantidos na redação final do Acordo. 

                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="container-fluid p-0 mt-0 m-0">
              <div class="container-fluid pb-5 pt-5 mt-0 m-0">
                <div class="text-center row justify-content-center mb-5">
                  <img src="{{asset('assets/brazao.jpg')}}" alt="" width="10%" class="mx-auto text-center">
                </div>
                <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">
                ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
                  CELEBRAM</h5> 
                  <div class="form-row" style="justify-content: center;">
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control text-uppercase font-weight-bold" type="text" name="nome_ict" onchange="handleNameICT(event)" placeholder="ICT ou ente público" value="{{$contratos_cr->nome_ict}}"> 
                    </div>
                    <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">E</h5>
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control text-uppercase font-weight-bold" type="text" name="nome_parceiro" onchange="handleNameParceiro(event)"  placeholder="Nome do parceiro" value="{{$contratos_cr->nome_parceiro}}">  
                    </div>
                  </div>
                 <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center">NA FORMA A SEGUIR.</h5><br>
              </div>

              <div class="alert alert-warning" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                NOTAS EXPLICATIVAS!
                <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
              </div>

              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">ICT/ente público</h5>
  
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="nome_teste" class="font-weight-bold text-black">Nome</label>
                  <input type="text" name="nome_teste" class="form-control text-black font-weight-bold" id="nome_parceiro" value="{{$contratos_cr->nome_teste}}">               
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo1"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="nat_juridica" name="nat_juridica" value="{{$contratos_cr->nat_juridica}}">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo2"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cnpj" name="cnpj" value="{{$contratos_cr->cnpj}}">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputAdress" class="font-weight-bold text-black">Endereço</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="endereco" name="endereco" value="{{$contratos_cr->endereco}}">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cidade" name="cidade" value="{{$contratos_cr->cidade}}">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="uf" name="uf" value="{{$contratos_cr->uf}}">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cep" name="cep" value="{{$contratos_cr->cep}}">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo3"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="rep_legal" name="rep_legal" value="{{$contratos_cr->rep_legal}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="cpf" name="cpf" value="{{$contratos_cr->cpf}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="rg" name="rg" value="{{$contratos_cr->rg}}">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="orgao_exp" name="orgao_exp" value="{{$contratos_cr->orgao_exp}}">
              </div>
             </div>
  
             <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4" class="font-weight-bold text-black">Nacionalidade</label>
                 <input type="text" class="form-control text-black font-weight-bold"  id="nacionalidade" name="nacionalidade" value="{{$contratos_cr->nacionalidade}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Estado Civil</label>
                 <input type="text" class="form-control text-black font-weight-bold"  id="est_civil" name="est_civil" value="{{$contratos_cr->est_civil}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Ato de Nomeação</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="ato_nomeacao" name="ato_nomeacao" value="{{$contratos_cr->ato_nomeacao}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="doravante_denominado" name="doravante_denominado" value="{{$contratos_cr->doravante_denominado}}">
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
                  <input type="text" class="form-control text-black font-weight-bold"  id="nome_parceiro_instituicao" name="nome_parceiro_instituicao" value="{{$contratos_cr->nome_parceiro_instituicao}}">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo4"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_nat_juridica" name="" value="{{$contratos_cr->parceiro_nat_juridica}}">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo5"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cnpj" name="parceiro_cnpj" value="{{$contratos_cr->parceiro_cnpj}}">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="" class="font-weight-bold text-black">Endereço</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_endereco" name="parceiro_endereco" value="{{$contratos_cr->parceiro_endereco}}">
                </div>
                <div class="form-group col-md-3">
                  <label for="" class="font-weight-bold text-black">Cidade</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cidade" name="parceiro_cidade" value="{{$contratos_cr->parceiro_cidade}}">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_uf" name="parceiro_uf" value="{{$contratos_cr->parceiro_uf}}">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cep" name="parceiro_cep" value="{{$contratos_cr->parceiro_cep}}">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo6"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_rep_legal" name="parceiro_rep_legal" value="{{$contratos_cr->parceiro_rep_legal}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cpf" name="parceiro_cpf" value="{{$contratos_cr->parceiro_cpf}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_rg" name="parceiro_rg" value="{{$contratos_cr->parceiro_rg}}">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_orgao_exp" name="parceiro_orgao_exp" value="{{$contratos_cr->parceiro_orgao_exp}}">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cargo" name="parceiro_cargo" value="{{$contratos_cr->parceiro_cargo}}">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_doravante_denominado" name="parceiro_doravante_denominado" value="{{$contratos_cr->parceiro_doravante_denominado}}">
              </div>
             </div>
            </div><!--end of content-->
          </div><!--end pane-->
          {{--<div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3º PARCEIRO (Fundação de Apoio)</h5>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="inputEmail4" value="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="" class="font-weight-bold text-black">Endereço</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="">
                </div>
                <div class="form-group col-md-3">
                  <label for="" class="font-weight-bold text-black">Cidade</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="inputZip">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="inputEmail4" value="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="inputPassword4" value="">
              </div>
             </div>
            </div><!--end of content-->
          </div><!--end pane-->--}}
          
          <!------------------------------------------------------------------------->
  
          <div class="tab-pane " id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                <p>Os <b>PARCEIROS</b>, anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:

                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">1. Cláusula Primeira - do Objeto</h4><hr><br>
    
                <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARTÍCIPES 
                para desenvolver
                o <br>
                
                <a href="#" data-toggle="modal" data-target="#modalExemplo10"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <div class="form-group col-md-12"><textarea class="form-control font-weight-bold text-dark" name="clausula_descricao" value="{{$contratos_cr->clausula_descricao}}">{{$contratos_cr->clausula_descricao}}</textarea></div>


                <br>a ser executado nos termos do Plano de Trabalho, anexo, visando à transferência de recursos financeiros, à
                 gestão administrativa e financeira e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.
                </p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
        <div class="modal-alert modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title font-weight-bold" id="exampleModalLabel">NOTAS EXPLICATIVAS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"><p class="lead">
              Para cada parceria deverá haver um único plano de trabalho. 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
              </div>
            </div><!--modal-content-->
          </div><!--modal-dialog-->
        </div><!--modal-alert-->
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO <a href="#" data-toggle="modal" data-target="#modalExemplo12"><i class="fas fa-fw fa-question-circle float-right"></i></a></h4><hr><br>
                <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
                </div>   
                <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
  
                <p class=""><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a ICT <a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a>, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>

                <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
              NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal2">Saiba mais</button>
          </div> 
            <div class="modal-alert modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title font-weight-bold" id="exampleModalLabel">NOTAS EXPLICATIVAS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="lead">Cláusula abaixo são obrigatórias para ICTs, cabendo as Agências de Fomento verificar se há interesse na sua inclusão no Acordo.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div><!--modal-dialog-->
            </div><!--modal-alert-->
                <!--clausula editavel 2-->
              <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                Edite a(s) cláusula(s) abaixo (se julgar necessário):
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.3</a>
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_3" rows="3">{{$contratos_cr->clausula_edit_2_3}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.4</a>
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_4" rows="3">{{$contratos_cr->clausula_edit_2_4}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.5</a>
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_5" rows="3">{{$contratos_cr->clausula_edit_2_5}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">Cláusula 2.6</a>
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_6" rows="3">{{$contratos_cr->clausula_edit_2_6}}</textarea>
              </div>
                
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h4><hr><br>
                <!--  Nota explicativa 3 -->
                <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal3">Saiba mais</button>
                </div>
                <div class="modal-alert modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title font-weight-bold" id="exampleModalLabel">NOTAS EXPLICATIVAS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                        <div class="modal-body"><p class="lead">
                        Cabe a cada Parceiro especificar as atribuições de cada parte no Acordo, conforme a parceria que irá ser firmada e as obrigações que cada partícipe terá. 
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                  </div>
              </div><!--modal-alert-->
            
              <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
              <p class="mt-3 roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" name="nome_inst_ict" id="handle_ict" placeholder="{{$contratos_cr->nome_inst_ict}}"><a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a></p><hr>
              <p><b>A)</b> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;</p>
              <p><b>B)</b> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;</p>
              <p><b>C)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução<a href="#" data-toggle="modal" data-target="#modalCoordenador"><i class="fas fa-fw fa-question-circle"></i></a></p>
          
              <div class="form-group row p-2">
                <label for="" class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-form-label font-weight-bold">Nome do Coordenador ICT/Público:</label>
                <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
                  <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" placeholder="{{$contratos_cr->nome_coordenador_ict}}">
                </div>
              </div>

              <p><b>D)</b> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;</p>
              <p><b>E)</b> Monitorar, avaliar e prestar contas nos termos deste Acordo; </p></p>
              
              <!--inicio das clausulas 3-->
              <p class="mt-3 roboto-font"><b>3.1.2. Do Parceiro Privado:</b><input type="text" class="myform-control" name="nome_inst_privado" id="nome_inst_privado" placeholder="{{$contratos_cr->nome_inst_privado}}"></p><hr>

              <p><b>A)</b> Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade;</p>
              <p><b>B)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a></p>
              
              <div class="form-group row p-2">
                <label for="" class="col-lg-4 col-xl-4 col-md-12 col-sm-12 col-form-label font-weight-bold">Nome do Coordenador Privado:</label>
                <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12">
                  <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" id="nome_coordenador_privado" class="form-control" placeholder="{{$contratos_cr->nome_coordenador_privado}}">
                </div>
              </div>

              <b>C)</b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
                
              <br><br>
  
            <!--    Checkbox clausula condicional fundo de apoio  -->
            <div class="dropdown-divider"></div>´
            @if(!$contratos_cr->nome_inst_fundacao)
            <div class="form-check form-check-inline py-4">
              <input class="form-check-input" onclick="handleCheckbox()" type="checkbox" id="possui_apoio" value="opcao1">
              <label class="form-check-label h3 font-weight-bold text-primary" for="possui_apoio">Possui Fundação de apoio?</label>
            </div>
            @endif
            @if($contratos_cr->nome_inst_fundacao)
              <div class="form-check form-check-inline py-4">
                <input class="form-check-input" checked onclick="handleCheckbox()" type="checkbox" id="possui_apoio" value="opcao1">
                <label class="form-check-label h3 font-weight-bold text-primary" for="possui_apoio">Possui Fundação de apoio?</label>
              </div>
            <div id="clausula_apoio_wrapper">
              <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a): <input type="text" class="myform-control" value="{{$contratos_cr->nome_inst_fundacao}}" name="nome_inst_fundacao" id="nome_inst_fundacao" placeholder="Instituição"> <a href="#" data-toggle="modal" data-target="#modalFundApoio"><i class="fas fa-fw fa-question-circle"></i></a>:(FUNDAÇÃO DE APOIO – QUANDO HOUVER)</b></p>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">A)</a>
                <textarea  name="clausula_edit_3a" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;"  id="" cols="30" rows="3">{{$contratos_cr->clausula_edit_3a}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">B)</a>
                <textarea  name="clausula_edit_3b" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;" id="" cols="30" rows="3">{{$contratos_cr->clausula_edit_3b}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">C)</a>
              <textarea  name="clausula_edit_3c" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;" id="" cols="30" rows="3">{{$contratos_cr->clausula_edit_3c}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">D)</a>
              <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3d" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3d}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">E)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3e" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3e}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">F)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3f" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3f}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">G)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3g" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3g}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">H)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3h" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3h}}
                </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">I)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3i" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3i}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">J)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3j" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3j}}
                </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">K)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3k" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3k}}
                </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">L)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3l" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3l}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">M)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3m" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3m}}
              </textarea>
              </div>
              <div class="col-md-12 mb-3">
                <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">N)</a>
                <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3n" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3n}}
              </textarea>
              </div>
            </div><!--clausula_apoio_wrapper-->
            @endif
            <p><b>3.2.</b> <span id="coord_ict"></span><span id="coord_privado"></span> poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.<br></p>
              <!--clausula editavel 3_3-->
            <div class="col-md-12 mb-3">
              <textarea class="form-control font-weight-bold" name="clausula_edit_3_3" rows="5" style="background-color: #F6FAFA; resize: none !important;">{{$contratos_cr->clausula_edit_3_3}}</textarea>
            </div>
                </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">4. CLÁUSULA QUARTA - DOS RECURSOS FINANCEIROS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr><br>
                <div class="alert alert-warning" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                  NOTAS EXPLICATIVAS!
                <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_clausula_4">Saiba mais</button>
              </div>
                <p>
                  <b>4.1.</b> O (A) <input class="myform-control text-black"type="text" name="nome_parceiro_privado" id="nome_parceiro_privado" value="{{$contratos_cr->nome_parceiro_privado}}">
                   transferirá recursos financeiros no valor total de R$ <input class="myform-control text-black" type="text" name="valor_financeiro" id="valor_financeiro" value="{{$contratos_cr->valor_financeiro}}">
                   , conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo. 
                </p>
                <p>
                  <b>4.2.</b> Os valores especificados no item acima serão recebidos pela <input class="myform-control text-black" type="text" name="nome_fund_apoio" id="nome_fund_apoio" value="{{$contratos_cr->nome_fund_apoio}}"><a href="#"><i class="fas fa-fw fa-question-circle pos"></i></a> em conta específica. 
                </p>
                <p>
                  <b>4.3.</b> O Parceiro Privado efetuará os aportes financeiros previstos no Plano de Trabalho através de depósitos em conta- corrente específica, servindo o 
                  comprovante da operação bancária como recibo, para fins de direito, do repasse dos recursos financeiros previstos por este Acordo de Parceira.
                </p>
                <p>
                  <b>4.1.1.</b> Após execução total do projeto, havendo ainda saldos provenientes das receitas obtidas de aplicações financeiras, <span class="red-text"> esses serão devolvidos
                   para o Parceiro Privado ou destinados para ação congênere, nos termos de instrumento jurídico próprio a ser firmado pelas partes.</span>
                </p>
                <p>
                  <b>4.5.</b> Observadas as demais disposições previstas neste Acordo de Parceria, os PARCEIROS acordam, desde já, que os valores mencionados no 
                  Plano de Trabalho são estimados com base nas premissas e termos especificados no mencionado Anexo.
                </p>
                <p>
                  <b>4.6.</b>Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo parceiro privado deverá ser prévia e formalmente analisado e aprovado pelas Parceiros,
                  <select name="{{$contratos_cr->clausula_opcional_4_6}}" class="myform-control">
                     <option value="{clausula_opcional_4_6}}">{{$contratos_cr->clausula_opcional_4_6}}</option>
                     <option value="devendo">devendo</option>
                     <option value="podendo">podendo</option>
                  </select> 
                  ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.
                </p>
                <p>
                  <b>4.7.</b>Do valor total repassado, (a) fundação de apoio poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.
                </p>
                <p>
                  <b>4.7.1.</b>Os valores dos recursos financeiros previstos nesta cláusula poderão ser alterados por meio de termo aditivo, com as necessárias justificativas e de comum acordo entre os PARCEIROS, o que implicará   a revisão das metas pactuadas e a alteração do Plano de Trabalho. 
                </p>

                <!--clausula editavel 4-->
                <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                Edite a(s) cláusula(s) abaixo (se julgar necessário):
                </div>

                <div class="col-md-12 mb-3">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.8</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8" rows="4">{{$contratos_cr->clausula_edit_4_8}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.8.1</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8_1" rows="4">{{$contratos_cr->clausula_edit_4_8_1}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.8.2</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8_2" rows="4">{{$contratos_cr->clausula_edit_4_8_2}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.9</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_9" rows="4">{{$contratos_cr->clausula_edit_4_9}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.9.1</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_9_1" rows="4">{{$contratos_cr->clausula_edit_4_9_1}}</textarea>
                </div>
                <div class="col-md-12 mb-5">
                    <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">4.10</a>
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_10" rows="4">{{$contratos_cr->clausula_edit_4_10}}</textarea>
                </div>
                <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
              NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#recurso_privado">Saiba mais</button>
          </div>  
          <p>
            <b>4.1.</b> O (A) <input class="myform-control text-black"type="text" value="{{$contratos_cr->nome_parceiro_privado}}" name="nome_parceiro_privado" id="handle_parceiro">
              transferirá recursos financeiros no valor total de R$ <input class="myform-control text-black" type="text" name="valor_financeiro" id="valor_financeiro" value="{{$contratos_cr->valor_financeiro}}">
              , conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo. 
          </p>
          <p>
            <b>4.2.</b> Os recursos financeiros serão transferidos à ICT/AGÊNCIA DE FOMENTO mediante depósito(s) no Banco do Brasil, por meio de Guia de 
            Recolhimento da União-GRU, na qual deverá constar o código da UG, gestão e código do recolhimento indicados pela ICT/AGÊNCIA DE FOMENTO.
          </p>
          <p>
            <b>4.3.</b> O PARCEIRO PRIVADO deverá comunicar a ICT/AGÊNCIA DE FOMENTO as transferências financeiras até o primeiro dia útil 
            seguinte à(s) data(s) do (s) depósito(s) bancário(s). (SE HOUVER NECESSIDADE, ESPECIFICAR A FORMA DE COMUNICAÇÃO: por meio de ...).
          </p>
          <p>
            <b>4.4.</b> A ICT/AGÊNCIA DE FOMENTO solicitará autorização orçamentária para incorporação dos valores transferidos.
          </p>
          <p>
            <b>4.5.</b >Caso não seja possível a incorporação dos valores transferidos dentro do tempo hábil para a execução das ações previstas no Plano de Trabalho, o presente instrumento será rescindido de comum acordo e a ICT/AGÊNCIA DE FOMENTO devolverá os recursos repassados.
          </p>
          <p>
            <b>4.6.</b> Os recursos transferidos à ICT/AGÊNCIA DE FOMENTO, enquanto não utilizados, seguirão as normas da Secretaria do Tesouro Nacional – STN, no que tange à aplicação, rendimentos e outras formas de correção.
          </p>
          <p>
            <b>4.7.</b> Eventual saldo de recurso transferido pelo parceiro ao ICT/AGÊNCIA DE FOMENTO, não utilizado no objeto deste Acordo, 
            após a sua conclusão, será restituído ao parceiro, corrigidos nos termos da Secretaria do Tesouro Nacional - STN.
          </p>
          <p>
            <b>4.8.</b> A ICT/AGÊNCIA DE FOMENTO não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, 
            suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.
          </p>
          <p>
            <b>4.9.</b> A ICT/AGÊNCIA DE FOMENTO não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, 
            suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.
          </p>
          <p>
            <b>4.10.</b> Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o
              aporte de recursos adicionais pelo  PARCEIRO PRIVADO deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, 
              devendo ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.
          </p>
          <p>
            <b>4.11.</b> A transposição, o remanejamento ou a transferência de recursos de categoria de programação para outra poderão ocorrer 
            com o objetivo de conferir eficácia e eficiência às atividades de ciência, tecnologia e inovação. 
          </p>
          <p>
            <b>4.11.1</b> No âmbito deste projeto de pesquisa, desenvolvimento e inovação, o coordenador indicará a necessidade de alteração das
              categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em
              referência ao projeto de pesquisa aprovado originalmente. 
          </p>
          <p>
            <b>4.11.2</b> Por ocasião da ocorrência de quaisquer das ações previstas no item anterior, a ICT/AGÊNCIA DE FOMENTO poderá alterar a distribuição 
            inicialmente acordada, promover modificações internas ao seu orçamento, alterar rubricas ou itens de despesas, desde
              que não modifique o valor total do projeto.
          </p>
          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#verificar_meta">Saiba mais</button>
          </div>  
          <p>
            <b>4.12</b> São dispensáveis de formalização por meio de Termo Aditivo as alterações previstas no item 4.9 que importem em transposição,
              remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às
              atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto. 
          </p>
          <p>
            <b>4.12.1</b> Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, 
            necessárias para efetiva execução do projeto, ficarão dispensadas de prévia anuência do PARCEIRO PRIVADO, 
            hipótese em que o coordenador do projeto solicitará a alteração à ICT, devendo constar as razões que ensejaram as alterações, 
            indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de 
            natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.
          </p>
          <p>
            <b>4.13</b> A  ICT/AGÊNCIA DE FOMENTO não responderá pela suplementação de recursos para fazer frente a despesas decorrentes de
              quaisquer fatores externos ao seu controle, como flutuação cambial e alterações nos valores de taxas escolares.
          </p>
          <p>
            <b>4.14</b> Do valor total repassado, à ICT/AGÊNCIA DE FOMENTO poderá utilizar até 15% (quinze por cento) para custear despesas 
            operacionais, definidas e justificadas no Plano de Trabalho.
          </p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <div class="tab-pane " id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">5. CLÁUSULA QUINTA - DO PESSOAL</h4><hr><br>
                
                <p>
                <b>5.1.</b> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações trabalhistas, previdenciárias, fundiárias e tributárias
                 derivadas da relação existente entre si e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem na execução do objeto 
                 deste Acordo, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício ou de qualquer outra natureza com a EMPRESA PARCERIA e o pessoal 
                da  <span class="text-blue">ICT/AGÊNCIA DE FOMENTO (E DA FUNDAÇAO DE APOIO, se houver) </span>  e vice-versa, cabendo a cada PARCEIRO a responsabilidade pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.
                </p>
             
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">6. CLÁUSULA SEXTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h4><hr><br>
              <div class="alert alert-warning" role="alert">      
              <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                NOTAS EXPLICATIVAS!
              <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#propriedade_intelectual">Saiba mais</button>
            </div>  
                <!--clausula editavel 6-->
            <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            Edite a(s) cláusula(s) abaixo (se julgar necessário):
          </div>
      
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.1</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_1" rows="4">{{$contratos_cr->clausula_edit_6_1}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.2</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_2" rows="4">{{$contratos_cr->clausula_edit_6_2}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.3</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_3" rows="4">{{$contratos_cr->clausula_edit_6_3}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.4</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_4" rows="4">{{$contratos_cr->clausula_edit_6_4}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.5</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_5" rows="4">{{$contratos_cr->clausula_edit_6_5}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.6</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_6" rows="4">{{$contratos_cr->clausula_edit_6_6}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.7</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_7" rows="4">{{$contratos_cr->clausula_edit_6_7}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.8</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_8" rows="4">{{$contratos_cr->clausula_edit_6_8}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.9</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_9" rows="4">{{$contratos_cr->clausula_edit_6_9}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.10</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_10" rows="4">{{$contratos_cr->clausula_edit_6_10}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.11</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_11" rows="4">{{$contratos_cr->clausula_edit_6_11}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.12</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_12" rows="4">{{$contratos_cr->clausula_edit_6_12}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">6.13</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_6_13" rows="4">{{$contratos_cr->clausula_edit_6_13}}</textarea>
          </div>
          
                
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">7 CLÁUSULA SÉTIMA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h4><hr><br>
    
                <p>
                  <b>7.1. </b>Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao contrato ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito da PARTE referida.
                </p>
                <p>
                  <b>7.2. </b> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.
                </p>
                <p>
                  <b>7.3. </b> Os <b>PARCEIROS</b> não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.
                </p>
                <p>
                  <b>7.4. </b> As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos <b>PARCEIROS</b>.
                </p>
              
               
              </div>
            </div>
        </div>
            <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">8 CLÁUSULA OITAVA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h4><hr><br>
          <p>
            <b>8.1.</b> Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO.
          </p>
          <p>
            <b>8.2.</b> Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer.  
          </p>
          <p>
            <b>8.3.</b> As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade. 
          </p>
          <p>
            <b>8.4.</b> Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses:
          </p>
          <p>
            <b>8.4.1.</b> informações técnicas ou comerciais que já sejam do conhecimento das PARTES na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pela PARCEIRO que a revele; 
          </p>
          <p>
            <b>8.4.2.</b> informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S);
          </p>
          <p>
            <b>8.4.2.1.</b> qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público. 
          </p>
          <p>
            <b>8.4.3.</b> informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade;
          </p>
          <p>
            <b>8.4.4.</b> informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa;
          </p>
          <p>
            <b>8.4.5.</b> revelação expressamente autorizada, por escrito, pelas PARTES.
          </p>
          <p>
            <b>8.5.</b> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada.
          </p>

          <div class="alert alert-warning" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
              NOTAS EXPLICATIVAS!
            <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#confidencial">Saiba mais</button>
          </div> 

          <!--clausula editavel 8-->
          <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
            <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
            Edite a(s) cláusula(s) abaixo (se julgar necessário):
          </div>

          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">8.6</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_8_6" rows="3">{{$contratos_cr->clausula_edit_8_6}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">8.7</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_8_7" rows="3">{{$contratos_cr->clausula_edit_8_7}}</textarea>
          </div>
          <div class="col-md-12 mb-3">
              <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">8.8</a>
              <textarea class="form-control font-weight-bold" name="clausula_edit_8_8" rows="3">{{$contratos_cr->clausula_edit_8_8}}</textarea>
          </div>
                  
              </div>
          </div>
        </div><!--end of tab-content: insert all these here!-->
            <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-blue">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">9 CLÁUSULA NONA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h4><hr><br>

              <!--clausula editavel 9-->
              <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
              <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                Edite a(s) cláusula(s) abaixo (se julgar necessário):
              </div>

              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">9.1</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_1" rows="7">{{$contratos_cr->clausula_edit_9_1}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">9.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_2" rows="3">{{$contratos_cr->clausula_edit_9_2}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">9.3</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_3" rows="3">{{$contratos_cr->clausula_edit_9_3}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">9.4</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_4" rows="3">{{$contratos_cr->clausula_edit_9_4}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">A)</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_a" rows="5">{{$contratos_cr->clausula_edit_9_a}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">B)</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_b" rows="5">{{$contratos_cr->clausula_edit_9_b}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">C)</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_c" rows="5">{{$contratos_cr->clausula_edit_9_c}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">D)</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_d" rows="5">{{$contratos_cr->clausula_edit_9_d}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">E)</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_9_e" rows="5">{{$contratos_cr->clausula_edit_9_e}}</textarea>
              </div>
    
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">10 CLÁUSULA DÉCIMA - DO ACOMPANHAMENTO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr><br>
    
                <p><b>10.1.</b>Aos coordenadores indicados pelos <b>PARCEIROS</b> competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
                <p><b>10.2.</b>O coordenador do projeto indicado pela <b>ICT/AGÊNCIA DE FOMENTO</b> anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. </p>
                <p><b>10.3.</b>O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos <b>PARCEIROS</b> perante terceiros. </p>
                <p><b>10.4.</b>A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os <b>PARCEIROS</b> quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. </p>
              </div>
            </div>
            <!------------------------------------------------------------------------->
        </div><!--end of tab-content: insert all these here!-->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">11. CLÁUSULA DÉCIMA PRIMEIRA - DA VIGÊNCIA E DA PRORROGAÇÃO</h4><hr><br>
              <div class="alert alert-warning" role="alert">     
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                  NOTAS EXPLICATIVAS!
                <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_vigencia">Saiba mais</button>
              </div> 
              <p><b>11.1.</b> O presente Acordo de Parceria para PD&I vigerá pelo prazo de 
              <input class="myform-control text-black" type="text" name="prazo_vigencia" id="prazo_vigencia" value="{{$contratos_cr->prazo_vigencia}}" placeholder="Quantidade de anos" > anos, a partir da data de sua assinatura, prorrogáveis.</p>
              <p><b>11.2.</b> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
            
              </div>
            </div>
          </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">12. CLÁUSULA DÉCIMA SEGUNDA - DAS ALTERAÇÕES</h4><hr><br>

              <p><b>12.1.</b> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo.</p>
              <p><b>12.2.</b> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento.</p>
              <p><b>12.3.</b> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou.</p>
              <p><b>12.4.</b> São dispensáveis de formalização por meio de Termo Aditivo as alterações que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</p>

              <div class="alert alert-warning" role="alert">     
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                  NOTAS EXPLICATIVAS!
                <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_pdi">Saiba mais</button>
              </div> 

              <!--clausula editavel 12-->
              <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                Edite a(s) cláusula(s) abaixo (se julgar necessário):
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">12.4.1</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_12_4_1" rows="6">{{$contratos_cr->clausula_edit_12_4_1}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">12.4.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_12_4_2" rows="3">{{$contratos_cr->clausula_edit_12_4_2}}</textarea>
              </div>

              </div>
            </div>
            </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
              <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2"> 13. CLÁUSULA DÉCIMA TERCEIRA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h4><hr><br>
              <p><b>13.1.</b> Os <b>PARCEIROS</b> exercerão a fiscalização técnico-financeira das atividades do presente Acordo. </p>
              <!--clausula editavel 13-->
              <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                Edite a(s) cláusula(s) abaixo (se julgar necessário):
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_13_2" rows="3">{{$contratos_cr->clausula_edit_13_2}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.a</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_13_a" rows="3">{{$contratos_cr->clausula_edit_13_a}}</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">13.b</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_13_b" rows="3">{{$contratos_cr->clausula_edit_13_b}}</textarea>
              </div>
              <p><b>13.3.</b> No Formulário de Resultado de que trata a subcláusula 13.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas.</p>
              <p>
                <b>13.4.</b> Caberá a cada <b>PARCEIRO</b> adotar as providências necessárias julgadas cabíveis, caso os relatórios parciais de que trata a subcláusula primeira demonstrem inconsistências na execução do objeto deste Acordo.
              </p>
              <p>
              <p>
                <b>13.5.</b> O <b>pesquisador</b> deverá apresentar a prestação de contas financeira, em <b>até 180 (cento e oitenta) dias</b>, contados do termo final do prazo de vigência previsto neste Acordo.
              </p>
              <p>
                <b>13.6.</b> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no <span class="text-blue">artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública. </span> 
              </p>
            
              </div>
            </div>
            </div>
            <!------------------------------------------------------------------------->
           
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">14. CLÁUSULA DÉCIMA QUARTA – DA EXTINÇÃO DO ACORDO</h4><hr><br>
                <p><b>14.1.</b> Este Acordo poderá, a qualquer tempo, ser denunciado pelos <b>PARCEIROS</b>, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de <span>60 (sessenta)</span> dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os <b>PARCEIROS</b>, creditando eventuais benefícios adquiridos no período.</p>
                <!--clausula editavel 14-->
                <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                  Edite a(s) cláusula(s) abaixo (se julgar necessário):
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">14.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_14_2"  rows="5">{{$contratos_cr->clausula_edit_14_2}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">14.2.1</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_14_2_1" rows="3">{{$contratos_cr->clausula_edit_14_2_1}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">14.2.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_14_2_2" rows="3">{{$contratos_cr->clausula_edit_14_2_2}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">14.3</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_14_3" rows="3">{{$contratos_cr->clausula_edit_14_3}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">14.4</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_14_4" rows="3">{{$contratos_cr->clausula_edit_14_4}}</textarea>
                </div>

                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
              <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">15. CLÁUSULA DÉCIMA QUINTA - DA PUBLICIDADE</h4><hr><br>
                <div class="alert alert-warning" role="alert">     
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_publicidade">Saiba mais</button>
                </div>
                <p><b>15.1.</b> A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da União (DOU) é condição indispensável para sua eficácia e será providenciada pela ICT no prazo de até 20 (vinte) dias da sua assinatura. </p>
        
                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
           
              <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">16. CLAUSULA DÉCIMA SEXTA – DOS BENS</h4><hr><br>
                <div class="alert alert-info py-2 mt-5 mb-5 text-dark font-weight-bold" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                  Edite a(s) cláusula(s) abaixo (se julgar necessário):
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">16.1</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_16_1" rows="3">{{$contratos_cr->clausula_edit_16_1}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <a class="badge badge-primary text-light font-weight-bold float-left mb-2 p-2">16.2</a>
                  <textarea class="form-control font-weight-bold" name="clausula_edit_16_2" rows="3">{{$contratos_cr->clausula_edit_16_2}}</textarea>
                </div>
                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">17. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES  <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr><br>
                <p><b>17.1</b> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita
                              pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no
                              respectivo endereço do PARCEIRO notificado, conforme as seguintes informações:<br>
                <span class="font-weight-bold">PARCEIRO(S) PÚBLICO(S):</span> 
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="endereco" class= text-black">Endereço</label>
                    <input type="text" 
                      class="form-control text-black" 
                      name="parceiro_contato_endereço"
                      id="endereco" 
                      value="{{$contratos_cr->parceiro_contato_endereço}}"
                      placeholder="Endereço">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="parceiro_contato_telefone" class= text-black">Telefone</label>
                    <input type="text" 
                      class="form-control text-black"
                      name="parceiro_contato_telefone" 
                      id="parceiro_contato_telefone" 
                      value="{{$contratos_cr->parceiro_contato_telefone}}"
                      placeholder="Telefone">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="parceiro_contato_celular" class= text-black">Celular</label>
                    <input type="text" 
                      class="form-control text-black" 
                      name="parceiro_contato_celular" id="parceiro_contato_celular"
                      value="{{$contratos_cr->parceiro_contato_celular}}" 
                      placeholder="Celular">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="parceiro_contato_email" class= text-black">Email</label>
                    <input type="email" 
                      class="form-control text-black"
                      name="parceiro_contato_email" 
                      id="parceiro_contato_email" 
                      value="{{$contratos_cr->parceiro_contato_email}}"
                      placeholder="E-mail">
                  </div>
                </div><!-- /.row-->
                <!-- Pariceiro privado -->
                <span class="font-weight-bold">PARCEIRO(S) PRIVADO(S):</span> 
                <div class="form-row mt-3">
                  <div class="form-group col-md-3">
                    <label for="endereco" class=" text-black">Endereço</label>
                    <input type="text" 
                      class="form-control text-black " 
                      name="privado_contato_endereço"
                      id="endereco" 
                      value="{{$contratos_cr->privado_contato_endereço}}"
                      placeholder="Endereço">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="privado_contato_telefone" class=" text-black">Telefone</label>
                    <input type="text" 
                      class="form-control text-black "
                      name="privado_contato_telefone" 
                      id="privado_contato_telefone" 
                      value="{{$contratos_cr->privado_contato_telefone}}"
                      placeholder="Telefone">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="privado_contato_celular" class=" text-black">Celular</label>
                    <input type="text" 
                      class="form-control text-black " 
                      name="privado_contato_celular" id="privado_contato_celular"
                      value="{{$contratos_cr->privado_contato_celular}}" 
                      placeholder="Celular">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="privado_contato_email" class=" text-black">Email</label>
                    <input type="email" 
                      class="form-control text-black "
                      name="privado_contato_email" 
                      id="privado_contato_email" 
                      value="{{$contratos_cr->privado_contato_email}}" 
                      placeholder="E-mail">
                  </div>
                </div>
                <!-- Fundacao de apoio -->
                @if($contratos_cr->apoio_contato_endereço)
                <div id="clausula_apoio_wrapper">
                  <span class="font-weight-bold ">FUNDAÇÃO DE APOIO:</span> 
                  <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                      <label for="endereco" class=" text-black">Endereço</label>
                      <input type="text" 
                        class="form-control text-black " 
                        name="apoio_contato_endereço"
                        id="endereco" 
                        value="{{$contratos_cr->apoio_contato_endereço}}"
                        placeholder="Endereço">
                    </div>
        
                    <div class="form-group col-md-3">
                      <label for="apoio_contato_telefone" class=" text-black">Telefone</label>
                      <input type="text" 
                        class="form-control text-black "
                        name="priv_contato_telefone" 
                        id="apoio_contato_telefone" 
                        value="{{$contratos_cr->apoio_contato_telefone}}"
                        placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="apoio_contato_celular" class=" text-black">Celular</label>
                      <input type="text" 
                        class="form-control text-black " 
                        name="apoio_contato_celular" id="apoio_contato_celular"
                        value="{{$contratos_cr->apoio_contato_celular}}" 
                        placeholder="Celular">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="apoio_contato_email" class=" text-black">Email</label>
                      <input type="email" 
                        class="form-control text-black "
                        name="apoio_contato_email" 
                        value="{{$contratos_cr->apoio_contato_email}}"
                        id="apoio_contato_email" 
                        placeholder="E-mail">
                    </div>
                  </div><!-- /.row-->
                </div>
                @endif
                <p><b>17.2</b> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue: </p>
                <p><b>17.2.1</b> Quando entregue em mão a quem destinada, com o comprovante de recebimento;  </p>
                <p><b>17.2.2</b> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro; </p>
                <p><b>17.2.3</b>  Se enviada por fax, quando recebida pelo destinatário; </p>
                <p><b>17.2.4</b>  Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada.  </p>
                <p><b>17.3</b>  Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas. </p>
            
                </div>
              </div>
            </div>
             <!------------------------------------------------------------------------->
             <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">18. CLÁUSULA DÉCIMA OITAVA – DISPOSIÇÕES GERAIS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr><br>
      
                  <p>
                    <b>18.1.</b> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar com alguma inovação.
                  </p>
                </div>
              </div>
            </div>

             <!------------------------------------------------------------------------->
          <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-dark">
                <h4 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 p-2">19. CLÁUSULA DÉCIMA NONA - DO FORO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h4><hr><br>
      
                  <p><b>19.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de <input class="myform-control font-weight-bold text-dark"  type="text" name="estado_foro" id="estado_foro" value="{{$contratos_cr->estado_foro}}">, cidade de <input  class="myform-control font-weight-bold" type="text" name="cidade_foro" id="cidade_foro" value="{{$contratos_cr->cidade_foro}}">,
                  para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109
                  da Constituição Federal.
                  E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente
                  instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.
                  </p>

                  <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                      <label for="data_foro" class="font-weight-bold text-black">Data:</label>
                      <input type="date" 
                        class="form-control text-black font-weight-bold" 
                        name="data_foro"
                        id="data_foro"  
                        placeholder="{{$contratos_cr->data_foro}}">
                    </div>
                  </div><!-- /.row-->

                  <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                      <label for="ict_inst_foro" class="font-weight-bold text-black">ICT:</label>
                      <input type="text" 
                        class="form-control text-black font-weight-bold"
                        name="ict_inst_foro" 
                        id="ict_inst_foro"  
                        placeholder="{{$contratos_cr->ict_inst_foro}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nome_rep_foro" class="font-weight-bold text-black">Representante:</label>
                      <input type="text" 
                        class="form-control text-black font-weight-bold" 
                        name="nome_rep_foro" id="nome_rep_foro"  
                        placeholder="{{$contratos_cr->nome_rep_foro}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="cargo_rep_foro" class="font-weight-bold text-black">Cargo</label>
                      <input type="email" 
                        class="form-control text-black font-weight-bold"
                        name="cargo_rep_foro" 
                        id="cargo_rep_foro"  
                        placeholder="{{$contratos_cr->cargo_rep_foro}}">
                    </div>
                  </div><!-- /.row-->

                  <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                      <label for="nome_inst_privado_foro" class="font-weight-bold text-black">Parceiro Privado:</label>
                      <input type="text" 
                        class="form-control text-black font-weight-bold"
                        name="nome_inst_privado_foro" 
                        id="nome_inst_privado_foro"  
                        placeholder="{{$contratos_cr->nome_inst_privado_foro}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nome_rep_privado_foro" class="font-weight-bold text-black">Representante:</label>
                      <input type="text" 
                        class="form-control text-black font-weight-bold" 
                        name="nome_rep_privado_foro" id="nome_rep_privado_foro"  
                        placeholder="{{$contratos_cr->nome_rep_privado_foro}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="cargo_rep_privado_foro" class="font-weight-bold text-black">Cargo</label>
                      <input type="email" 
                        class="form-control text-black font-weight-bold"
                        name="cargo_rep_privado_foro" 
                        id="cargo_rep_privado_foro"  
                        placeholder="{{$contratos_cr->cargo_rep_privado_foro}}">
                    </div>
                  </div><!-- /.row-->
                  
                  <div class="form-row mt-3">
                    <div class="form-group col-md-3">
                      <label for="nome_testemunha_1" class="font-weight-bold text-black">Testemunha 1:</label>
                      <input type="text" 
                        class="form-control text-black font-weight-bold" 
                        name="nome_testemunha_1" id="nome_testemunha_1" 
                        placeholder="{{$contratos_cr->nome_testemunha_1}}">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="nome_testemunha_2" class="font-weight-bold text-black">Testemunha 2:</label>
                      <input type="email" 
                        class="form-control text-black font-weight-bold"
                        name="nome_testemunha_2" 
                        id="nome_testemunha_2" 
                        placeholder="{{$contratos_cr->nome_testemunha_2}}">
                    </div>
                  </div><!-- /.row-->

                </div>
              </div>
          </div>

        <div class="tab-pane " id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black bg-light p-2 mb-3">SEU CONTRATO ESTÁ PRONTO. <a href="#"><i class="fas fa-fw fa-check ml-2"></i></a></h5>
  
                <p>Clique em enviar, e você será redirecionado para a tela inicial onde poderá visualizar seu contrato. </p><br>

                <!-- <div class="col-lg-6 col-md-12 text-left py-4">
                  <button class="btn btn-lg btn-info btn-block" type="submit">
                    Salvar Alterações
                  </button>
                </div> -->
                
              </div>
            </div>
        </div>
  
  </div>

</div>
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
var currentTab = 0; // Current tab is set to be the first tab (0)
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
    button.type = 'submit'
    button.innerHTML = 'Salvar';
    button.addEventListener("click", function(){
      window.location.href = "/home";
    });
  } else {
    document.getElementById("nextBtn").innerHTML = "Proximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateStep()) return false;
  if(n == -1 && currentTab == 0) {
    for (let i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    showTab(currentTab);
    return
  }
  for (let i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
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
</script>
  

@endsection