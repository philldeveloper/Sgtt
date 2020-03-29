@extends('layouts.admin')

<style type="text/css">
  #wrapper #content-wrapper {
    background-color: white !important;
  }
  textarea{
    background-color: #EFFCFC !important;
    color: #343434 !important;
    border-color: #4e73df !important;
    box-shadow: 3px 5px 5px #cdcdcd;
    padding: 10px;
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

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold">Novo Contrato</span>
    <div class="badge badge-dark lead  mr-auto float-right">Com repasse</div>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>


<div class="card mt-5 color-card p-4">
  <div class="card-body p-3">
        <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="modal-alert modal fade" id="minuta-inicial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="dropdown-diviver"></div>
                    <div class="text-center font-weight-bold">ATENÇÃO</div> 
                    Os pesquisadores do IF-Sertão-PE devem preencher o Acordo com os dados do IF-Sertão-PE e os pesquisadores da UNIVASF devem preencher o Acordo com os dados da UNIVASF.

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="container-fluid pt-3 mt-0 m-0">
                <div class="text-center row justify-content-center mb-5">
                  <img src="{{asset('assets/brazao.jpg')}}" alt="" width="10%" class="mx-auto text-center">
                </div>
                <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">
                ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
                  CELEBRAM</h5> 
                  <div class="form-row" style="justify-content: center;">
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control" type="text" name="nome_ict"  placeholder="Nome da ICT (IFSertão-PE ou UNIVASF)"> 
                    </div>
                    <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">E</h5>
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control" type="text" name="nome_parceiro"  placeholder="Nome do Parceiro (Empresa ou ICT)">  
                    </div>
                  </div>
                 <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center">NA FORMA A SEGUIR.</h5><br>
              </div>
              <div class="alert alert-warning" role="alert">      
                <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                NOTAS EXPLICATIVAS!
                <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#minuta-inicial">Saiba mais</button>
              </div>
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">ICT/ente público</h5>
  
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Nome do Solicitante</label>
                  <input type="text" name="nome_teste" class="form-control text-black font-weight-bold" id="nome_teste" placeholder="empresa solicitante">               
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo1"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="nat_juridica" name="nat_juridica" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo2"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cnpj" name="cnpj">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputAdress" class="font-weight-bold text-black">Endereço</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="endereco" name="endereco">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cidade" name="cidade">
                </div>
                <div class="form-group col-md-2">
                  <label for="UF" class="font-weight-bold text-black">UF</label>
                  <select class="custom-select" id="UF" name="uf">
                    <option value="">Selecione</option>
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
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <input type="text" class="form-control text-black font-weight-bold"  id="cep" name="cep">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo3"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="rep_legal" name="rep_legal" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="cpf" name="cpf" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="rg" name="rg" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="orgao_exp" name="orgao_exp" placeholder="">
              </div>
             </div>
  
             <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4" class="font-weight-bold text-black">Nacionalidade</label>
                 <input type="text" class="form-control text-black font-weight-bold"  id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Estado Civil</label>
                 <input type="text" class="form-control text-black font-weight-bold"  id="est_civil" name="est_civil" placeholder="Estado Civil">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Ato de Nomeação</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="ato_nomeacao" name="ato_nomeacao" placeholder="Ato de Nomeação">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="doravante_denominado" name="doravante_denominado" placeholder="ICT/Agência de Fomento">
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
                  <input type="text" class="form-control text-black font-weight-bold"  id="nome_parceiro_instituicao" name="nome_parceiro_instituicao" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo4"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_nat_juridica" name="parceiro_nat_juridica" placeholder="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo5"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cnpj" name="parceiro_cnpj" placeholder="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="" class="font-weight-bold text-black">Endereço</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_endereco" name="parceiro_endereco">
                </div>
                <div class="form-group col-md-3">
                  <label for="" class="font-weight-bold text-black">Cidade</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cidade" name="parceiro_cidade">
                </div>
                <div class="form-group col-md-2">
                  <label for="parceiro_uf" class="font-weight-bold text-black">UF</label>
                  <select class="custom-select" id="parceiro_uf" name="parceiro_uf">
                    <option value="">Selecione</option>
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
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                    <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cep" name="parceiro_cep">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo6"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_rep_legal" name="parceiro_rep_legal" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cpf" name="parceiro_cpf" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_rg" name="parceiro_rg" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_orgao_exp" name="parceiro_orgao_exp" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_cargo" name="parceiro_cargo" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
                <input type="text" class="form-control text-black font-weight-bold"  id="parceiro_doravante_denominado" name="parceiro_doravante_denominado" placeholder="ICT/Agência de Fomento">
              </div>
             </div>
             <!-- <div class="form-group col-md-4 mt-3" style="margin-left: -15px">
                <a class="btn btn-lg btn-primary font-weight-bold btn-block" href="#"> <i class="fa fa-plus text-right mr-auto"></i>  Adicionar parceiro</a>
              </div> -->

            </div><!--end of content-->
          </div><!--end pane-->
          <!------------------------------------------------------------------------->
  
          <div class="tab-pane " id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                <p>Os <b>PARCEIROS</b>, anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:

                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">1. Cláusula Primeira - do Objeto</h5>
    
                <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARTÍCIPES 
                para desenvolver o</p>
                <br>
                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Insira o Objetivo abaixo:</p>
                </div>
                <div class="col-md-12 mb-3 bg-light border border-primary shadow mb-4 mt-4 p-1">
                  <textarea class="form-control" name="clausula_descricao" id="editor"></textarea>
                </div>
                <br>
                <p>a ser executado nos termos do Plano de Trabalho, anexo, visando à transferência de recursos financeiros, à
                 gestão administrativa e financeira e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.
                </p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
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
                </div>
              </div>
            </div>
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO</h5>
                <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
                </div>   
                <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
  
                <p><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a(o) ICT 
                <input type="text" class="myform-control text-black" name="ict_plano_trabalho" id="ict_plano_trabalho" placeholder="Nome da ICT/Agência de Fomento">
                <a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a>,
                 com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, 
                sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>


                <!--clausula editavel 2-->
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
                      <div class="modal-body"><p class="lead">
                      Cláusula abaixo são obrigatórias para ICTs, cabendo as Agências de Fomento verificar se há interesse na sua inclusão no Acordo.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn-lg btn-primary" data-dismiss="modal">Fechar</button>
                      </div>
                  </div>
                </div>
              </div>
              <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
              </div>
              <div class="col-md-12 mb-3">
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_3" rows="3">2.3 Na execução do Plano de Trabalho, a atuação dos PARCEIROS dar-se-á sempre de forma associada. Para tanto, os PARCEIROS indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.</textarea>
              </div>
              <div class="col-md-12 mb-3">
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_4" rows="3">2.4 Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.</textarea>
              </div>
              <div class="col-md-12 mb-3">
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_5" rows="3">2.5 Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.</textarea>
              </div>
              <div class="col-md-12 mb-3">
                <textarea class="form-control font-weight-bold" name="clausula_edit_2_6" rows="3">2.6 A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.</textarea>
              </div>

            </div>
          </div>
                  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
                  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5>
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
                </div> 
                <!-- FIM Nota explicativa 3 -->
                <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
                 
                <p class="ml-2 bg-light roboto-font"><b>3.1.1. Do(a):</b><input type="text" class="myform-control" name="nome_inst_ict" id="nome_inst_ict" placeholder="Instituição"><a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a></p>
           
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução<a href="#" data-toggle="modal" data-target="#modalCoordenador"><i class="fas fa-fw fa-question-circle"></i></a>
                  <div class="form-group col-md-6">
                    <input type="text" name="nome_coordenador_ict" onchange="handleCoordenadorICT()" id="nome_coordenador_ict" class="form-control" placeholder="Nome coordenador ICT/Publico"><br>
                  </div>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div> Monitorar, avaliar e prestar contas nos termos deste Acordo; </p>
                  <p class="ml-2 bg-light roboto-font"><b>3.1.2. Do(a):

                  </b><input class="myform-control" type="text" name="nome_inst_privado" id="nome_inst_privado" placeholder="Instituição"><a href="#" data-toggle="modal" data-target="#modalExemplo15"><i class="fas fa-fw fa-question-circle"></i></a> (PARCEIRO PRIVADO)</p>
               
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade; <br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução<a href="#" data-toggle="modal" data-target="#modalCoordenadorPrivado"><i class="fas fa-fw fa-question-circle"></i></a>
                  <div class="form-group col-md-6">
                    <input type="text" name="nome_coordenador_privado" onchange="handleCoordenadorPrivado()" class="form-control" id="nome_coordenador_privado" placeholder="Nome Coordenador privado"> <br>
                  </div>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
                  
                  <br><br>
                  <!--    Checkbox clausula condicional fundo de apoio  -->
                  <div class="dropdown-divider"></div>
                  <div class="form-check form-check-inline py-4">
                    <input class="form-check-input" onclick="handleCheckbox()" type="checkbox" id="possui_apoio" value="opcao1">
                    <label class="form-check-label h3 font-weight-bold text-primary" for="possui_apoio">Possui Fundação de apoio?</label>
                  </div>
                  <div id="clausula_apoio_wrapper" style="display: none;">
                    <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a): 
                      <input type="text" class="myform-control" name="nome_inst_fundacao" id="nome_inst_fundacao" placeholder="Instituição"> <a href="#" data-toggle="modal" data-target="#modalFundApoio"><i class="fas fa-fw fa-question-circle"></i></a>:(FUNDAÇÃO DE APOIO – QUANDO HOUVER)</b></p>
                      <div class="col-md-12 mb-3">
                        <textarea  name="clausula_edit_3a" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;"  id="" cols="30" rows="3">A) Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I;
                        </textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                        <textarea  name="clausula_edit_3b" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;" id="" cols="30" rows="3">B) Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;
                        </textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                        <textarea  name="clausula_edit_3c" class="form-control font-weight-bold text-justify" style="background-color: #F6FAFA; resize: none !important;" id="" cols="30" rows="3">C) Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;
                        </textarea>
                      </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3d" rows="5" style="background-color: #F6FAFA; resize: none !important;">D) Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;&#13;&#13;Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;&#13;&#13;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3e" rows="5" style="background-color: #F6FAFA; resize: none !important;">E) Informar previamente ao PARCEIRO PRIVADO os dados bancários e cadastrais necessários à realização dos aportes financeiros, cuidando para que a conta corrente a qual serão destinados os recursos seja específica para o projeto executado em conformidade com este Acordo de Parceria;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3f" rows="5" style="background-color: #F6FAFA; resize: none !important;">F) Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, inclusive os provenientes das receitas obtidas nas aplicações financeiras realizadas, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação; ou d)Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação; 
OU 
F) Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3g" rows="5" style="background-color: #F6FAFA; resize: none !important;">G) Responsabilizar-se pelo recolhimento de impostos, taxas, contribuições e outros encargos porventura devidos em decorrência das atividades vinculadas a este Acordo de Parceria;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3h" rows="5" style="background-color: #F6FAFA; resize: none !important;">H) Manter, durante toda a execução do Acordo de Parceria, todas as condições de habilitação e de qualificação exigidas para a sua celebração, responsabilizando-se pela boa e integral execução das atividades ora descritas;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3i" rows="5" style="background-color: #F6FAFA; resize: none !important;">I)  Nas compras de bens e nas contratações de serviços, observar as regras do Decreto nº 8.241/2014;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3j" rows="5" style="background-color: #F6FAFA; resize: none !important;">J) Observar os princípios da legalidade, eficiência, moralidade, publicidade, economicidade, legalidade e impessoalidade, nas aquisições e contratações realizadas, bem como no desenvolvimento de todas as suas ações no âmbito deste Acordo de Parceria;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3k" rows="5" style="background-color: #F6FAFA; resize: none !important;">K) Manter registros contábeis, fiscais e financeiros completos e fidedignos relativamente à aplicação dos aportes recebidos do PARCEIRO PRIVADO por este Acordo de Parceria, fazendo-o em estrita observância às normas tributário-fiscais em vigor e, especialmente, à legislação que instituiu contrapartidas em atividades de PD&I para a concessão de incentivos ou de benefícios dos quais o PARCEIRO PRIVADO seja ou se torne beneficiária;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3l" rows="5" style="background-color: #F6FAFA; resize: none !important;">L) Manter, com os recursos do projeto e sob sua coordenação direta, pessoal de pesquisa e desenvolvimento, através de contratação pela CLT, bolsa ou estágio de pesquisa e desenvolvimento, disponível para a execução das atividades relativas a este Acordo de Parceria e ao Plano de Trabalho, em número e com conhecimento técnico-acadêmico suficientes;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3m" rows="5" style="background-color: #F6FAFA; resize: none !important;">M) Providenciar a remuneração dos colaboradores, conforme previsto em orçamento específico aprovado, em conformidade, ainda, com o art. 4º da Lei nº 8.958/1994;
                      </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_3n" rows="5" style="background-color: #F6FAFA; resize: none !important;">N) Cumprir todas as normas pertencentes ao ordenamento jurídico brasileiro, em especial as trabalhistas, previdenciárias e tributárias derivadas da relação existente entre si e seus empregados e/ou contratados, durante a execução do Projeto objeto do Plano de Trabalho, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício entre esses empregados, funcionários, servidores ou contratados da FUNDAÇÃO e PARCEIRO PRIVADO ou as demais convenentes, cabendo a FUNDAÇÃO responsabilidade exclusiva pelos salários e todos os ônus trabalhistas e previdenciários, bem como pelas reclamações trabalhistas ajuizadas, e por quaisquer autos de infração, e ainda, fiscalização do Ministério do Trabalho e da Previdência Social a que a FUNDAÇÃO der causa, com relação a toda a mão de obra por ela contratada em decorrência do presente Acordo de Parceria.
                      </textarea>
                    </div>


                  </div>
                   <!--  Fim Clausula Opcional -->
                  <p><b>3.2.</b> <span id="coord_ict"></span><span id="coord_privado"></span> poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.<br>
                    <!--clausula editavel 3_3-->
                    <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold" name="clausula_edit_3_3" rows="5" style="background-color: #F6FAFA; resize: none !important;">3.3. Os PARCEIROS são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente Acordo de Parceria para PD&I ou de publicações a ele referentes.&#13;&#13;
                    </textarea>
                   </div>
                      
                  </p>
                </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">4. CLÁUSULA QUARTA - DOS RECURSOS FINANCEIROS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_clausula_4">Saiba mais</button>
                </div>  
                <p>
                  <b>4.1.</b> O (A) <input class="myform-control text-black"type="text" name="nome_parceiro_privado" id="nome_parceiro_privado" placeholder="Parceiro privado">
                   transferirá recursos financeiros no valor total de R$ <input class="myform-control text-black" type="text" name="valor_financeiro" id="valor_financeiro" placeholder="Valor por Extenso">
                   , conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo. 
                </p>
                <p>
                  <b>4.2.</b> Os valores especificados no item acima serão recebidos pela <input class="myform-control text-black" type="text" name="nome_fund_apoio" id="nome_fund_apoio" placeholder="Fundação de apoio"><a href="#"><i class="fas fa-fw fa-question-circle pos"></i></a> em conta específica. 
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
                  <select class="myform-control">
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

                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8" rows="4">4.8. A transposição, o remanejamento ou a transferência de recursos de categoria de programação para outra poderão ocorrer com o objetivo de conferir eficácia e eficiência às atividades de ciência, tecnologia e inovação.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8_1" rows="4">4.8.1 No âmbito deste projeto de pesquisa, desenvolvimento e inovação, o coordenador geral indicará a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_8_2" rows="4">4.8.2 Por ocasião da ocorrência de quaisquer das ações previstas no item anterior, a ICT poderá alterar a distribuição inicialmente acordada, promover modificações internas ao seu orçamento, alterar rubricas ou itens de despesas, desde que não modifique o valor total do projeto.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_9" rows="4">4.9. São dispensáveis de formalização por meio de Termo Aditivo as alterações previstas no item 4.8 que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_9_1" rows="4">4.9.1. Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, necessárias para efetiva execução do, ficarão dispensadas de prévia anuência d PARCEIRO PRIVADO, hipótese em que o coordenador do projeto solicitará a alteração à ICT, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</textarea>
                </div>
                <div class="col-md-12 mb-5">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_4_10" rows="4">4.10. A ICT/AGÊNCIA DE FOMENTO não responderá pela suplementação de recursos para fazer frente a despesas decorrentes de quaisquer fatores externos ao seu controle, como flutuação cambial e alterações nos valores de taxas escolares.</textarea>
                </div>


               <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#recurso_privado">Saiba mais</button>
                </div>  
                <p>
                  <b>4.1.</b> O (A) <input class="myform-control text-black"type="text" name="nome_parceiro_privado" id="nome_parceiro_privado" placeholder="Parceiro privado">
                   transferirá recursos financeiros no valor total de R$ <input class="myform-control text-black" type="text" name="valor_financeiro" id="valor_financeiro" placeholder="Valor por Extenso">
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
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">5. CLÁUSULA QUINTA - DO PESSOAL</h5>
                
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">6. CLÁUSULA SEXTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h5>
                <div class="alert alert-warning" role="alert">      
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#propriedade_intelectual">Saiba mais</button>
                </div>  
                
               <!--clausula editavel 6-->

                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_1" rows="4">6.1. Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_2" rows="4">6.2. Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre as duas convenentes, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da lei nº 10.973/2004.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_3" rows="4">6.3. divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para o ICT/AGÊNCIA DE FOMENTO. Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre as parceiras, por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para o ICT/AGÊNCIA DE FOMENTO.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_4" rows="4">6.4. O instrumento previsto na subcláusula 6.3 deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_5" rows="4">6.5. Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_6" rows="4">6.6. As Partes devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_7" rows="4">6.7. Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_8" rows="4">6.8. Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento d o  ICT/AGÊNCIA DE FOMENTO.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_9" rows="4">6.9. Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_10" rows="4">6.10. As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos partícipes ora acordantes.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_11" rows="4">6.11. Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os partícipes concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos partícipes, em conjunto ou separadamente. Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os partícipes concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_12" rows="4">6.12. A FUNDAÇÃO DE APOIO não terá direitos sobre os resultados obtidos, passíveis ou não de proteção legal.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_6_13" rows="4">6.13. O ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países. </textarea>
                </div>
                
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">7 CLÁUSULA SÉTIMA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h5>
    
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">8 CLÁUSULA OITAVA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
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
               <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_8_6" rows="3">8.6. As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_8_7" rows="3"> 8.7. Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_8_8" rows="3">8.8. Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio.</textarea>
                </div>
                  
              </div>
          </div>
        </div><!--end of tab-content: insert all these here!-->
            <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-blue">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">9 CLÁUSULA NONA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>

                <!--clausula editavel 9-->

                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>

                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_1" rows="7">9.1. Os PARCEIROS deverão tomar todas as medidas necessárias, observados os princípios de civilidade e legalidade, e de acordo com as boas práticas empresariais para cumprir e assegurar que  (i) seus conselheiros, diretores, empregados qualquer pessoa agindo em seu nome, inclusive prepostos e subcontratados, quando houver (todos doravante referidos como “Partes Relacionadas” e, cada uma delas, como “uma Parte Relacionada”) obedecerão a todas as leis aplicáveis, incluindo àquelas  relativas ao combate à corrupção, suborno e lavagem de dinheiro, bem como àquelas  relativas a sanções econômicas, vigentes nas jurisdições em que os PARCEIROS estão constituídos e na jurisdição em que o Acordo de Parceria será cumprido (se diferentes), para impedir qualquer atividade fraudulenta por si ou por uma Parte Relacionada com relação ao cumprimento deste Acordo de Parceria.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_2" rows="3">9.2. Um PARCEIRO deverá notificar imediatamente o outro sobre eventual suspeita de qualquer fraude tenha ocorrido, esteja ocorrendo, ou provavelmente ocorrerá, para que sejam tomadas as medidas necessárias para apurá-las.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_3" rows="3">9.3. Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo. </textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_4" rows="3">9.4. Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_a" rows="5">A) Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_b" rows="5">B)  Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_c" rows="5">C) Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_d" rows="5">D) Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_9_e" rows="5">E) Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente.</textarea>
                </div>
    
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">10 CLÁUSULA DÉCIMA - DO ACOMPANHAMENTO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>10.1.</b> Aos coordenadores indicados pelos <b>PARCEIROS</b> competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
                <p><b>10.2.</b> O coordenador do projeto indicado pela <b>ICT/AGÊNCIA DE FOMENTO</b> anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. </p>
                <p><b>10.3.</b> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos <b>PARCEIROS</b> perante terceiros. </p>
                <p><b>10.4.</b> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os <b>PARCEIROS</b> quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. </p>
              </div>
            </div>
            <!------------------------------------------------------------------------->
        </div><!--end of tab-content: insert all these here!-->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">11. CLÁUSULA DÉCIMA PRIMEIRA - DA VIGÊNCIA E DA PRORROGAÇÃO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                <div class="alert alert-warning" role="alert">     
                  <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
                    NOTAS EXPLICATIVAS!
                  <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#modal_vigencia">Saiba mais</button>
                </div> 
                <p><b>11.1.</b> O presente Acordo de Parceria para PD&I vigerá pelo prazo de 
                <input class="myform-control text-black" type="text" name="prazo_vigencia" id="prazo_vigencia" placeholder="Quantidade de anos" id=""> anos, a partir da data de sua assinatura, prorrogáveis.</p>
                <p><b>11.2.</b> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
            
              </div>
            </div>
          </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">12. CLÁUSULA DÉCIMA SEGUNDA - DAS ALTERAÇÕES</h5>
    
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
                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_12_4_1" rows="6">12.4.1. Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, que não ultrapassarem 20% (vinte por cento) do valor total do projeto, ficarão dispensadas de prévia anuência da concedente, hipótese em o interessado comunicará aos PARCEIROS, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_12_4_2" rows="3">12.4.2. Alterações que superarem o percentual acima indicado dependerão de anuência prévia e expressa da concedente, que será formalizado por meio de ofício, nos termos da Cláusula 4.8.</textarea>
                </div>

               </div>
              </div>
            </div>
            </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2"> 13. CLÁUSULA DÉCIMA TERCEIRA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>13.1.</b> Os <b>PARCEIROS</b> exercerão a fiscalização técnico-financeira das atividades do presente Acordo. </p>
                

                <!--clausula editavel 13-->

                <div class="text-center d-flex">
                  <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_13_2" rows="3">13.2. O pesquisador deverá encaminhar ao Setor responsável ou COMISSÃO DA ICT ou à FUNDAÇÃO DE APOIO: </textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_13_2_a" rows="3">A) Formulário de Resultado Parcial: anualmente, até o último dia útil do mês de dezembro de cada ano de vigência deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_13_2_b" rows="3">B) Formulário de Resultado Final: no prazo de até 120 (cento e vinte) dias contados da conclusão do objeto deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho.</textarea>
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
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">14. CLÁUSULA DÉCIMA QUARTA – DA EXTINÇÃO DO ACORDO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                  <p><b>14.1.</b> Este Acordo poderá, a qualquer tempo, ser denunciado pelos <b>PARCEIROS</b>, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de <span>60 (sessenta)</span> dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os <b>PARCEIROS</b>, creditando eventuais benefícios adquiridos no período.</p>

                  <!--clausula editavel 14-->

                  <div class="text-center d-flex">
                    <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_14_2" rows="5">14.2. Constituem motivos para rescisão de pleno direito o inadimplemento de quaisquer das cláusulas pactuadas neste Acordo, o descumprimento das normas estabelecidas na legislação vigente ou a superveniência de norma legal ou fato que tome material ou formalmente inexequível o Acordo de Parceria para PD&I, imputando-se aos PARCEIROS as responsabilidades pelas obrigações até então assumidas, devendo o PARCEIRO que se julgar prejudicado notificar o parceiro para que apresente esclarecimentos no prazo de 15 (quinze) dias corridos.</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_14_2_1" rows="3">14.2.1 Prestados os esclarecimentos, os PARCEIROS deverão, por mútuo consenso, decidir pela rescisão ou manutenção do Acordo.</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_14_2_2" rows="3">14.2.2  Decorrido o prazo para esclarecimentos, caso não haja resposta, o Acordo será rescindido de pleno direito, independentemente de notificações ou interpelações, judiciais ou extrajudiciais.</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_14_3" rows="3">14.3 O Acordo de Parceria será rescindido em caso de decretação de falência, liquidação extrajudicial ou judicial, ou insolvência de qualquer dos PARCEIROS, ou, ainda, no caso de  10/11 propositura de quaisquer medidas ou procedimentos contra qualquer dos PARCEIROS para sua liquidação e/ou dissolução;</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_14_4" rows="3">14.4 O presente Acordo será extinto com o cumprimento do objeto ou com o decurso de prazo de vigência.</textarea>
                  </div>

                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
              <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">15. CLÁUSULA DÉCIMA QUINTA - DA PUBLICIDADE <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
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
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">16. CLAUSULA DÉCIMA SEXTA – DOS BENS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                  <div class="text-center d-flex">
                    <p class="h4 p-3 font-italic text-primary font-weight-bold">Edite a(s) cláusula(s) abaixo (se julgar necessário):</p>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_16_1" rows="3"> 16.1.Após execução integral do objeto desse acordo, os bens patrimoniais, materiais permanentes ou equipamentos adquiridos serão revertidos à ICT, diretamente ao campus envolvido, por meio de Termo de Doação.(CLAÚSULA PARA AS ICTs)</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold" name="clausula_edit_16_2" rows="3">16.2. Os bens gerados ou adquiridos no âmbito dos projetos de estímulo à ciência, à tecnologia e à inovação deste Acordo de Parceria serão incorporados, desde sua aquisição, ao patrimônio da ICT a que o pesquisador for vinculado. (CLÁUSULA PARA AS AGÊNCIAS DE FOMENTO)</textarea>
                  </div>
                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">17. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES  <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p>
                    <b>17.1.</b> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita pelos PARCEIROS/FUNDAÇÃO DE APOIO, por e-mail, fax, correio ou entregue pessoalmente, 
                    diretamente no respectivo endereço do PARCEIRO/FUNDAÇÃO DE APOIO notificado, conforme as seguintes informações: <br><br>
                     <b>ICT/AGÊNCIA DE FOMENTO:</b> (endereço completo, telefone, celular e e-mail) <br>
                     <b>PARCEIRO PRIVADO:</b> (endereço completo, telefone, celular e e-mail) <br>
                      <b>FUNDAÇÃO DE APOIO:</b> (endereço completo, telefone, celular e e-mail) <br>
                  </p>  
                  <p>
                    <b>17.2.</b> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue:
                  </p>   
                  <p>
                    <b>17.2.1.</b> Quando entregue em mão  a quem destinada, com o comprovante de recebimento;
                  </p>   
                  <p>
                    <b>17.2.2.</b> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro;
                  </p>   
                  <p>
                    <b>17.2.3.</b> Se enviada por fax, quando recebida pelo destinatário;
                  </p>   
                  <p>
                    <b>17.2.4.</b> Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada.
                  </p>   
                  <p>
                    <b>17.3.</b> Qualquer dos PARCEIROS/FUNDAÇÃO DE APOIO poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas.
                  </p>   
                </div>
              </div>
            </div>
             <!------------------------------------------------------------------------->
             <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">18. CLÁUSULA DÉCIMA OITAVA – DISPOSIÇÕES GERAIS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p>
                    <b>18.1.</b> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar com alguma inovação.
                  </p>
                </div>
              </div>
            </div>

             <!------------------------------------------------------------------------->
          <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">19. CLÁUSULA DÉCIMA NONA - DO FORO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>19.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de <input class="myform-control text-black"  type="text" name="estado_foro" id="estado_foro" placeholder="Estado">, cidade de <input  class="myform-control" type="text" name="cidade_foro" id="cidade_foro" placeholder="Cidade">,
                                para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109
                                da Constituição Federal.
                                E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente
                                instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.
                                </p>
                      <input type="text" class="myform-control text-black"  name="cidade_uf_dia_foro" id="cidade_uf_dia_foro" placeholder="Cidade/UF, dia de mês de ano. ">   <br>   
                    <div class="mb-4 row justify-content-center">
                      <div class="col-6 align-self-center">
                        <div class="input-control-center">
                          <p class="mt-4">Pelo(a)  <span class="text-blue">ICT:</span> <input class="myform-control text-black" type="text" name="ict_inst_foro" id="ict_inst_foro" placeholder="Instituição"> </p>   
                            <input class="mb-2 myform-control text-black" type="text" name="nome_rep_foro" id="nome_rep_foro" placeholder="Nome do representante legal"> 
                            <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_foro" id="cargo_rep_foro" placeholder="Cargo"> 
                          </div>
                      </div>
                    </div>
                       <div class="mt-4 row justify-content-center">
                         <div class="col-6 align-self-center">
                           <div class="input-control-center">
                             <p>Pelo(a) <span class="text-blue">PARCEIRO PRIVADO:</span> <input class="myform-control text-black" type="text" name="nome_inst_privado_foro" id="nome_inst_privado_foro" placeholder="Instituição"> </p>      
                             <input class="mb-2 myform-control text-black" type="text" name="nome_rep_privado_foro" id="nome_rep_privado_foro" placeholder="Nome do representante legal"> 
                             <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_privado_foro" id="cargo_rep_privado_foro" placeholder="Cargo"> 
                           </div>
                         </div>
                       </div>
                </div>
              </div>
          </div>
        <div class="tab-pane " id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black bg-light p-2 mb-3">SEU CONTRATO ESTÁ PRONTO PARA ANÁLISE. <a href="#"><i class="fas fa-fw fa-check ml-2"></i></a></h5>
  
                <p>Seu contrato será revisado em até de 30 dias e uma resposta será gerada. Aguarde a confirmação do sistema. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolores excepturi ipsum rem, enim accusantium quam similique assumenda eum veniam saepe, quas earum nisi hic neque voluptate consectetur ex quo!</p><br>

                <button type="submit" class="btn btn-success btn-lg btn-block col-lg-4 col-sm-12 col-md-6">ENVIAR</button>
                
              </div>
            </div>
        </div>
  
        <form id="regForm" class="form-horizontal" method="POST" action="{{ route('contrato_cr.store') }}">
          {{ csrf_field() }}
          <div id="step-container" class="step-container mb-5">
            
          </div>
          
          <div id="tab-here">

          </div><hr>
          <!-- Circles which indicates the steps of the form: -->
          <div class="buttonsControl pb-5 pt-4" style="overflow:auto;">
            <div>
              <button type="button" class="btn btn-lg btn-outline-dark font-weight-bold shadow-sm" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
              <button type="button" class="btn btn-success btn-lg font-weight-bold shadow-sm" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
            </div>
          </div>
        </form>
  </div>

</div>

<script>
  function handleCheckbox(){
    const checkBox = document.getElementById("possui_apoio")
    const clausula = document.getElementById("clausula_apoio_wrapper")
    if (checkBox.checked == true){
      clausula.style.display = "block"
    } else {
      clausula.style.display = "none"
    }
    
  }

  function handleCoordenadorICT(){
    const elem = document.getElementById('nome_coordenador_ict').value;
    const coord_ict = document.getElementById('coord_ict')
    coord_ict.innerText = `${elem};`
  }

  function handleCoordenadorPrivado(){
    const elem = document.getElementById('nome_coordenador_privado').value;
    const coord_privado = document.getElementById('coord_privado')
    coord_privado.innerText = ` ${elem}`
  }
</script>
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
function stepButton(n) {
  let x = document.getElementsByClassName("tab");
  console.log(window.firstStep)
  //Verificando se o array contém o numeros de campos validos = 17, firstStep
  if (window.firstStep !== undefined || n <= lastTab){
      console.log( lastTab)
      console.log( n)
      if(n <= lastTab){
        for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        currentTab = n
        showTab(n)
        return true
    }else{
        Toastify({
          text: "Você precisa preencher todos campos.",
              backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
              duration: 3000
        }).showToast(); 
        return false
    }
  }else{
      Toastify({
        text: "Você precisa preencher todos campos.",
            backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
            duration: 3000
      }).showToast(); 
    return
  }
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
    document.getElementById("nextBtn").innerHTML = "Enviar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Proximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function handleDisplay(x, currentTab, lastTab){
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

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateStep()) return false;
 //Regra para o botão anterior
  if (n === -1){
    for (let i = 0; i < x.length; i++) {
          x[i].style.display = "none"; 
        }
        // Hide the current tab:
      //  x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        
        // Otherwise, display the correct tab:
        showTab(currentTab);
        return true
  }
    //Verificando se o array contém o numeros de campos validos = 17, firstStep
    if (window.firstStep !== undefined){
      console.log(window.firstStep)
      console.log(lastTab)
      if(window.firstStep.length === 17 && currentTab == 0){
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
        return true
      }else if(window.firstStep.length === 29 && currentTab == 1 ){
        
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
        return true
      }else if(window.firstStep.length === 31 && currentTab == 2 ){
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
          return true
      }else if(window.firstStep.length === 34 && currentTab == 4 ){
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
          return true
      }else if(window.firstStep.length === 37 && currentTab === 11 ){
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
          return true
      }else if(window.firstStep.length === 46 && currentTab === 18 ){
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
          return true
      }else if( currentTab === 3 || (currentTab >= 3 && currentTab <= 10) || (currentTab >= 12 && currentTab <= 17)){
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
          return true
           
      }else if(currentTab < lastTab){ 
        for (let i = 0; i < x.length; i++) {
            x[i].style.display = "none"; 
          }
          // Hide the current tab:
          x[currentTab].style.display = "none";
          currentTab = currentTab + n;
          if (lastTab <= currentTab){
            lastTab = currentTab
          }
          showTab(currentTab)
          return true
      }else{
        Toastify({
          text: "Você precisa preencher todos campos.",
              backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
              duration: 3000
        }).showToast(); 
        return false
    }
  }else{
      Toastify({
        text: "Você precisa preencher todos campos.",
            backgroundColor: "linear-gradient(to right, #FEB692, #EA5455)",
            duration: 3000
      }).showToast(); 
    return
  }
}
function validateStep() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
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

@include('features.ckeditor')

@endsection