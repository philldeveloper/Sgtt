@extends('layouts.admin')


<style type="text/css">
  #wrapper #content-wrapper {
    background-color: white !important;
  }

  textarea{
    background-color: #DCF8FC !important;
    color: #343434 !important;
    border-color: #8DB7BD !important;
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/additional-methods.min.js') }}"></script>
<script src="{{ asset('js/localization/messages_pt_BR.js') }}"></script>
<script src="{{ asset('js/default-mask.js') }}"></script>
<script src="{{ asset('js/validation-form.js') }}"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<div class="title-header">
    <span class="h3 ml-3 font-weight-bold">Novo Contrato</span>
    <div class="badge badge-dark lead  mr-auto float-right">sem repasse</div>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>

<div class="card mt-5 color-card">
  <div class="card-body p-3">
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
              <div class="container-fluid pb-5 pt-5 mt-0 m-0">
                <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">
                ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
                  CELEBRAM</h5> 
                  <div class="form-row" style="justify-content: center;">
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control" type="text" name="nome_ict"  placeholder="ICT ou ente público"> 
                    </div>
                    <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">E</h5>
                    <div class="form-group col-md-4">
                      <input class="mb-2 text-black form-control" type="text" name="nome_parceiro"  placeholder="Nome do parceiro">  
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
                  <label for="inputEmail4" class="font-weight-bold text-black">Nomes</label>
                  <input type="text" name="nome_teste" class="form-control text-black font-weight-bold ofo" id="nome">               
                </div>
                <div class="form-group col-md-4">
                  <label for="natureza" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo1"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold" name="nat_juridica" id="natureza" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="cpf-cnpj" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo2"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold cnpj" name="cnpj" id="cpf-cnpj">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="endereço" class="font-weight-bold text-black">Endereço</label>
                  <input type="text" class="form-control text-black font-weight-bold" name="endereco" id="endereço">
                </div>
                <div class="form-group col-md-3">
                  <label for="cidade" class="font-weight-bold text-black">Cidade</label>
                  <input type="text" class="form-control text-black font-weight-bold" name="cidade" id="cidade">
                </div>
                <div class="form-group col-md-2">
                  <label for="uf" class="font-weight-bold text-black">UF</label>
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
                  <label for="cep" class="font-weight-bold text-black">CEP</label>
                  <input type="text" class="form-control text-black font-weight-bold cep" name="cep" id="cep">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="representante" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo3"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold" name="rep_legal" id="representante" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="cpf-mf" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold cpf" name="cpf" id="cpf-mf" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="rg" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold rg" name="rg" id="rg" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="orgao-expedidor" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold" name="orgao_exp" id="orgao-expedidor" placeholder="">
              </div>
             </div>
  
             <div class="form-row">
              <div class="form-group col-md-3">
                <label for="nacionalidade" class="font-weight-bold text-black">Nacionalidade</label>
                 <input type="text" class="form-control text-black font-weight-bold" name="nacionalidade" id="nacionalidade" placeholder="Nacionalidade">
              </div>
              <div class="form-group col-md-3">
                <label for="estado-civil" class="font-weight-bold text-black">Estado Civil</label>
                 <input type="text" class="form-control text-black font-weight-bold" name="est_civil" id="estado-civil" placeholder="Estado Civil">
              </div>
              <div class="form-group col-md-3">
                <label for="ato-nomeacao" class="font-weight-bold text-black">Ato de Nomeação</label>
                <input type="text" class="form-control text-black font-weight-bold" name="ato_nomeacao" id="ato-nomeacao" placeholder="Ato de Nomeação">
              </div>
              <div class="form-group col-md-3">
                <label for="doravante" class="font-weight-bold text-black">Doravante Denominado</label>
                <input type="text" class="form-control text-black font-weight-bold" name="doravante_denominado" id="doravante" placeholder="ICT/Agência de Fomento">
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
                  <input type="text" class="form-control text-black font-weight-bold"  name="nome_parceiro_instituicao" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="natureza-juridica" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo4"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold" name="parceiro_nat_juridica" id="natureza-juridica" placeholder="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="cnpj-n" class="font-weight-bold text-black">CNPJ nº</label>
                  <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo5"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control text-black font-weight-bold cnpj" name="parceiro_cnpj" id="cnpj-n" placeholder="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="parceiro-endereco" class="font-weight-bold text-black">Endereço</label>
                    <input type="text" class="form-control text-black font-weight-bold" name="parceiro_endereco" id="parceiro-endereco">
                </div>
                <div class="form-group col-md-3">
                  <label for="parceiro_cidade" class="font-weight-bold text-black">Cidade</label>
                    <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cidade" id="parceiro_cidade">
                </div>
                <div class="form-group col-md-2">
                  <label for="parceiro_uf" class="font-weight-bold text-black">UF</label>
                  <input type="text" class="form-control text-black font-weight-bold" name="parceiro_uf" id="parceiro_uf">
                </div>
                <div class="form-group col-md-2">
                  <label for="parceiro_cep" class="font-weight-bold text-black">CEP</label>
                    <input type="text" class="form-control text-black font-weight-bold cep" name="parceiro_cep" id="parceiro_cep">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="parceiro_rep_legal" class="font-weight-bold text-black">Representante Legal</label>
                <!-- Botão para acionar modal -->
                  <a href="#" data-toggle="modal" data-target="#modalExemplo6"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control text-black font-weight-bold" name="parceiro_rep_legal" id="parceiro_rep_legal" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="parceiro_cpf" class="font-weight-bold text-black">CPF/M.F</label>
                <input type="text" class="form-control text-black font-weight-bold cpf" name="parceiro_cpf" id="parceiro_cpf" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="parceiro_rg" class="font-weight-bold text-black">Identidade nº</label>
                <input type="text" class="form-control text-black font-weight-bold rg" name="parceiro_rg" id="parceiro_rg" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="parceiro_orgao_exp" class="font-weight-bold text-black">Órgão Expedidor</label>
                <input type="text" class="form-control text-black font-weight-bold" name="parceiro_orgao_exp" id="parceiro_orgao_exp" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="parceiro_cargo" class="font-weight-bold text-black">Cargo</label>
                <input type="text" class="form-control text-black font-weight-bold" name="parceiro_cargo" id="parceiro_cargo" placeholder="">
              </div>
             </div>
             <hr>
             <div class="form-group col-md-4 mt-3" style="margin-left: -15px">
                <a class="btn btn-lg btn-primary font-weight-bold btn-block" href="#"> <i class="fa fa-plus text-right mr-auto"></i>  Adicionar parceiro</a>
              </div>

            
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">1. Cláusula Primeira - do Objeto</h5>
    
                <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARTÍCIPES para desenvolver
                o <br><div class="form-group col-md-12">
                  <textarea class="form-control" name="clausula_descricao"></textarea></div>

                <a href="#" data-toggle="modal" data-target="#modalExemplo10"><i class="fas fa-fw fa-question-circle float-right"></i></a>

                <br>a ser executado nos termos do Plano de Trabalho, anexo, visando 

                <br><div class="form-group col-md-12"><textarea name="clausula_objetivo" class="form-control"></textarea></div>

                <a href="#" data-toggle="modal" data-target="#modalExemplo11"><i class="fas fa-fw fa-question-circle float-right"></i></a>

                e à execução técnica de projeto de pesquisa, desenvolvimento e inovação - PD&I.</p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO <a href="#" data-toggle="modal" data-target="#modalExemplo12"><i class="fas fa-fw fa-question-circle float-right"></i></a></h5>
    
                <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
  
                <p class=""><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a ICT<a href="#" data-toggle="modal" data-target="#modalExemplo13"><i class="fas fa-fw fa-question-circle"></i></a>, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>
                
                <!--clausula editavel 2-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_2_3" rows="3" style="background-color: #F6FAFA; resize: none !important;">2.3 Na execução do Plano de Trabalho, a atuação dos PARCEIROS dar-se-á sempre de forma associada. Para tanto, os PARCEIROS indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.
                </textarea>
               </div>

               <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_2_4" rows="3" style="background-color: #F6FAFA; resize: none !important;">2.4 Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.
                </textarea>
               </div>

               <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_2_5" rows="3" style="background-color: #F6FAFA; resize: none !important;">2.5 Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.
                </textarea>
               </div>

               <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_2_6" rows="4" style="background-color: #F6FAFA; resize: none !important;">2.6 A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.
                </textarea>
               </div>

              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
                 
                <p class="ml-2 bg-light roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" class="myform-control" name="nome_inst_ict" placeholder="Instituição"></p>
           
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div> Monitorar, avaliar e prestar contas nos termos deste Acordo; </p>
                  <p class="ml-2 bg-light roboto-font"><b>3.1.2.  Do(a) <input  class="myform-control" type="text" name="nome_inst_privado" placeholder="Instituição">:(PARCEIRO PRIVADO)</b></p>
               
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade; <br><div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Indicar coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução; <br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
                  <br><br>
                  <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a) <input type="text" class="myform-control" name="nome_inst_fundacao" placeholder="Instituição">:(FUNDAÇÃO DE APOIO – QUANDO HOUVER)</b></p>
                 
                    <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>  Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I; <br>
                    <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div>  Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                    <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div>  Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
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
                  <br>
                  <p><b>3.2.</b> Os Coordenadores de projeto poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.</p><br>
                  
                <!--clausula editavel 3-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_3" rows="4" style="background-color: #F6FAFA; resize: none !important;">3.3. Os PARCEIROS são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente Acordo de Parceria para PD&I ou de publicações a ele referentes. <br>
                </textarea>
               </div>
                
                </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">4. CLÁUSULA QUARTA - DO PESSOAL <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                
                <p>
                  <b>4.1.</b> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações
                   trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si 
                   e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem 
                   na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma,
                  vínculo empregatício ou de qualquer outra natureza com a <input type="text" class="form-control" name="nome_empresa_parceira" placeholder="Empresa parceira"> e
                  o pessoal <input type="text" class="form-control" name="nome_ict_parceira" placeholder="ICT ou Agência de fomento"> vice-versa, cabendo a cada PARCEIRO a responsabilidade 
                  pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a
                  documentação comprobatória da regularidade na contratação.<br>
                </p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <div class="tab-pane " id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-dark">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">5. CLÁUSULA QUINTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                
                <!--clausula editavel 5-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_1" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.1. Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_2" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.2. Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre os PARCEIROS, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da Lei nº 10.973/2004.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_3" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.3. A divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para a ICT/AGÊNCIA DE FOMENTO.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_4" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.4 O instrumento previsto na subcláusula 5.3 deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_5" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.5 Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_6" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.6 Os PARCEIROS devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_7" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.7 Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_8" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.8 Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento da ICT/AGÊNCIA DE FOMENTO.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_9" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.9 Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países. </textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_10" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.10 As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos PARCEIROS ora acordantes.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_11" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.11 Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os PARCEIROS concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos PARCEIROS, em conjunto ou separadamente.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_12" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.12 Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os PARCEIROS concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold" name="clausula_edit_5_13" rows="4" style="background-color: #F6FAFA; resize: none !important;">5.13 A ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países.</textarea>
                </div>

                
             
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">6. CLÁUSULA SEXTA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>6.1 </b>Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao acordo ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito do PARCEIRO referido.</p>
                

                <!--clausula editavel 6-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_6_2" rows="3" style="background-color: #F6FAFA; resize: none !important;">6.2 Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.</textarea>
               </div>

               <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_6_3" rows="3" style="background-color: #F6FAFA; resize: none !important;">6.3 Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.</textarea>
               </div>

               <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_6_4" rows="3" style="background-color: #F6FAFA; resize: none !important;">6.4 As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS.</textarea>
               </div>

              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">7 CLÁUSULA SÉTIMA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>7.1 </b>Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO.</p>
  
                <p><b>7.2 </b>Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer. </p>
                <p><b>7.3 </b>As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade.</p>
  
                <p><b>7.4 </b>Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses: </p>
                <p><b>7.4.1.</b> Informações técnicas ou comerciais que já sejam do conhecimento dos PARCEIROS na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pelo PARCEIRO que a revele; 
                   <br><br>  <b>7.4.2.</b> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S);
                   <br><br> <b>7.4.2.1.</b> Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público. 
                   <br><br> <b>7.4.3.</b> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade;
                   <br><br> <b>7.4.4.</b> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa;
                   <br><br> <b>7.4.5.</b> Revelação expressamente autorizada, por escrito, pelos PARCEIROS.
                </p>
                <p><b>7.5.</b> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. 
                </p>

              <!--clausula editavel 7-->
              <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_7_6" rows="3" style="background-color: #F6FAFA; resize: none !important;">7.6.As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção.</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_7_7" rows="3" style="background-color: #F6FAFA; resize: none !important;">7.7.Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo.</textarea>
              </div>
              <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_7_8" rows="3" style="background-color: #F6FAFA; resize: none !important;">7.8.Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio.</textarea>
              </div>

              </div>
            </div>
        </div>
            <!------------------------------------------------------------------------->
  
        <div class="tab-pane" id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-blue">
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">8 CLÁUSULA OITAVA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                <!--clausula editavel 8-->
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_1" rows="7" style="background-color: #F6FAFA; resize: none !important;">8.1 Os PARCEIROS deverão tomar todas as medidas necessárias, observados os princípios de civilidade e legalidade, e de acordo com as boas práticas empresariais para cumprir e assegurar que  (i) seus conselheiros, diretores, empregados qualquer pessoa agindo em seu nome, inclusive prepostos e subcontratados, quando houver (todos doravante referidos como “Partes Relacionadas” e, cada uma delas, como “uma Parte Relacionada”) obedecerão a todas as leis aplicáveis, incluindo àquelas  relativas ao combate à corrupção, suborno e lavagem de dinheiro, bem como àquelas  relativas a sanções econômicas, vigentes nas jurisdições em que os PARCEIROS estão constituídos e na jurisdição em que o Acordo de Parceria será cumprido (se diferentes), para impedir qualquer atividade fraudulenta por si ou por uma Parte Relacionada com relação ao cumprimento deste Acordo de Parceria. Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo.</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2" rows="5" style="background-color: #F6FAFA; resize: none !important;">8.2 Um PARCEIRO deverá notificar imediatamente o outro sobre eventual suspeita de qualquer fraude tenha ocorrido, esteja ocorrendo, ou provavelmente ocorrerá, para que sejam tomadas as medidas necessárias para apurá-las. Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:</textarea>
                </div>
                <div class="">
                  <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2_a" rows="3" style="background-color: #F6FAFA; resize: none !important;">A) Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc;</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2_b" rows="3" style="background-color: #F6FAFA; resize: none !important;">B) Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder;</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2_c" rows="3" style="background-color: #F6FAFA; resize: none !important;">C) Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS;</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2_d" rows="3" style="background-color: #F6FAFA; resize: none !important;">D) Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo;</textarea>
                  </div>
                  <div class="col-md-12 mb-3">
                      <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_8_2_e" rows="3" style="background-color: #F6FAFA; resize: none !important;">E) Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente.</textarea>
                  </div>
                </div>
              </div>
            </div><!--container-fluid-->
        </div><!--end of tab-content: insert all these here!-->
        <!------------------------------------------------------------------------->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">9 CLÁUSULA NONA - DO ACOMPANHAMENTO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>9.1</b>Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
                <p><b>9.2</b>O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. </p>
                <p><b>9.3</b>O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros. </p>
                <p><b>9.4</b>A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. </p>
              </div>
            </div>
            <!------------------------------------------------------------------------->
        </div><!--end of tab-content: insert all these here!-->
         <!------------------------------------------------------------------------->
  
         <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">10. CLÁUSULA DÉCIMA - DA VIGÊNCIA E DA PRORROGAÇÃO<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>10.1</b> O presente Acordo de Parceria para PD&I vigerá pelo prazo de <input type="text" name="prazo_vigencia" placeholder="De (XXXX) anos" > anos, a partir da data de sua assinatura, prorrogáveis.</p>
                <p><b>10.2</b> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
            
              </div>
            </div>
          </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">11. CLÁUSULA DÉCIMA PRIMEIRA- DAS ALTERAÇÕES<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">12. CLÁUSULA DÉCIMA SEGUNDA – DO MONITORAMENTO, DA
                    AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>12.1</b> Os <b>PARCEIROS</b> exercerão a fiscalização técnico-financeira das atividades do presente Acordo. </p>
                <p><b>12.2</b>  O pesquisador deverá encaminhar ao <span class="text-blue">Setor responsável ou COMISSÃO DA ICT:</span>  </p>


                <!--clausula editavel 12-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_12_a" rows="3" style="background-color: #F6FAFA; resize: none !important;">A) Formulário de Resultado Parcial: anualmente, até o último dia útil do mês de dezembro de cada ano de vigência deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho;</textarea>
                </div>
                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_12_b" rows="3" style="background-color: #F6FAFA; resize: none !important;">B) Formulário de Resultado Final: no prazo de até 120 (cento e vinte) dias contados da conclusão do objeto deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho.</textarea>
               </div>

                
                <p><b>12.3</b> No Formulário de Resultado de que trata a subcláusula 12.2, deverá ser demonstrada a
                                compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as
                                justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas.</p>
                <p><b>12.4</b> Caberá a cada <b>PARCEIRO</b> adotar as providências necessárias julgadas cabíveis, caso os
                <p><b>12.5</b> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá
                                as regras previstas no <span class="text-blue">artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade
                                pública. </span> 
                                </p>
            
              </div>
            </div>
            </div>
            <!------------------------------------------------------------------------->
           
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">13. CLÁUSULA DÉCIMA TERCEIRA – DA EXTINÇÃO DO ACORDO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>13.1</b> Este Acordo poderá, a qualquer tempo, ser denunciado pelos <b>PARCEIROS</b>, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de <span>60 (sessenta)</span> dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os <b>PARCEIROS</b>, creditando eventuais benefícios adquiridos no período.</p>

                <!--clausula editavel 13-->

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_13_2" rows="5" style="background-color: #F6FAFA; resize: none !important;">13.2 Constituem motivos para rescisão de pleno direito o inadimplemento de quaisquer das cláusulas pactuadas neste Acordo, o descumprimento das normas estabelecidas na legislação vigente ou a superveniência de norma legal ou fato que tome material ou formalmente inexequível o Acordo de Parceria para PD&I, imputando-se aos PARCEIROS as responsabilidades pelas obrigações até então assumidas, devendo o PARCEIRO que se julgar prejudicado notificar o parceiro para que apresente esclarecimentos no prazo de 15 (quinze) dias corridos.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_13_2_1" rows="3" style="background-color: #F6FAFA; resize: none !important;">13.2.1  Prestados os esclarecimentos, os PARCEIROS deverão, por mútuo consenso, decidir pela rescisão ou manutenção do Acordo.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_13_2_2" rows="3" style="background-color: #F6FAFA; resize: none !important;">13.2.2  Decorrido o prazo para esclarecimentos, caso não haja resposta, o Acordo será rescindido de pleno direito, independentemente de notificações ou interpelações, judiciais ou extrajudiciais.</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <textarea class="form-control font-weight-bold text-justify" name="clausula_edit_13_3" rows="5" style="background-color: #F6FAFA; resize: none !important;">13.3 O Acordo de Parceria será rescindido em caso de decretação de falência, liquidação extrajudicial ou judicial, ou insolvência de qualquer dos PARCEIROS, ou, ainda, no caso de  10/11 propositura de quaisquer medidas ou procedimentos contra qualquer dos PARCEIROS para sua liquidação e/ou dissolução.</textarea>
                </div>
                

                <p><b>13.4</b> O presente Acordo será extinto com o cumprimento do objeto ou com o decurso de prazo de vigência.</p>
              
                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
              <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">14. CLÁUSULA DÉCIMA QUARTA - DA PUBLICIDADE  <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>14.1</b> A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da
                                  União (DOU) é condição indispensável para sua eficácia e será providenciada pela ICT no
                                  prazo de até 20 (vinte) dias da sua assinatura. </p>
            
              
                </div>
              </div>
            </div>
              <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">15. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES  <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>15.1</b> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita
                                pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no
                                respectivo endereço do PARCEIRO notificado, conforme as seguintes informações:
                                <span>PARCEIRO(S) PÚBLICO(S):</span> (endereço completo, telefone, celular e e-mail)
                                <span>PARCEIRO(S) PÚBLICO(S):</span> (endereço completo, telefone, celular e e-mail) </p>
                  <p><b>15.2</b> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada
                                como tendo sido legalmente entregue: </p>
                                <p><b>15.2.1</b> Quando entregue em mão a quem destinada, com o comprovante de recebimento;  </p>
                                <p><b>15.2.2</b> Se enviada por correio, registrada ou certificada, porte pago e devidamente
                                                  endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do
                                                  despacho, o que ocorrer primeiro; </p>
                                <p><b>15.2.3</b>  Se enviada por fax, quando recebida pelo destinatário; </p>
                                <p><b>15.2.4</b>  Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou,
                                                  após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do
                                                  prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a
                                                  notificação devidamente realizada.  </p>
                                <p><b>15.3</b>  Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço
                                                para o qual as comunicações ou solicitações deverão ser enviadas. </p>

              
                </div>
              </div>
            </div>
             <!------------------------------------------------------------------------->
             <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">16. CLÁUSULA DÉCIMA SEXTA – DISPOSIÇÕES GERAIS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>16.1.</b> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal
                            de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais
                            de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das
                            pesquisas que possam culminar em alguma inovação. </p>
            
              
                </div>
              </div>
            </div>

            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
              <div class="container-fluid p-0 mt-0 m-0">
                <div class="text-justify text-black">
                  <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">17. CLÁUSULA DÉCIMA SÉTIMA - DO FORO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
      
                  <p><b>17.1.</b>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de
                   <input class="myform-control text-black"  type="text" name="estado_foro" placeholder="Estado">, cidade de <input  class="myform-control" type="text" name="cidade_foro" placeholder="Cidade">,
                                para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109
                                da Constituição Federal.
                                E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente
                                instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.
                                </p><br>
                                <p>Cidade, UF, Dia do Mês e ano:</p>
                      <input type="text" class="myform-control text-black"  name="cidade_uf_dia_foro"  placeholder="Cidade/UF, dia de mês de ano. ">   <br>   
                    <div class="mb-4 row justify-content-center">
                      <div class="col-6 align-self-center">
                        <div class="input-control-center">
                          <p class="mt-4">Pelo(a)  <span class="text-blue">ICT:</span> 
                          <input class="myform-control text-black" type="text" name="ict_inst_foro"  placeholder="Instituição"> </p>   
                            <input class="mb-2 myform-control text-black" type="text" name="nome_rep_foro"  placeholder="Nome do representante legal"> 
                            <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_foro"  placeholder="Cargo"> 
                          </div>
                      </div>
                    </div>
                       <div class="mt-4 row justify-content-center">
                         <div class="col-6 align-self-center">
                           <div class="input-control-center">
                             <p>Pelo(a) <span class="text-blue">PARCEIRO PRIVADO:</span> <input class="myform-control text-black" type="text" name="nome_inst_privado_foro"  placeholder="Instituição"> </p>      
                             <input class="mb-2 myform-control text-black" type="text" name="nome_rep_privado_foro"  placeholder="Nome do representante legal"> 
                             <br><input class="mb-2  myform-control text-black" type="text" name="cargo_rep_privado_foro"  placeholder="Cargo"> 
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
                <button type="submit" class="btn btn-primary py-4">ENVIAR</button>
                {{--<div class="row justify-content-right">
                  <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="{{route('printpdf', $contratos_sr->id)}}" class="btn btn-block d-fluid p-2 bg-white border-dark font-weight-bold text-uppercase text-black text-center"><i class="fas fa-2x fa-file-pdf p-2"></i><br>
                      BAIXAR PDF
                    </a>
                  </div>
                </div>--}}

              </div>
            </div>
        </div>
  
        <!--form id="regForm" action="/action_page.php"-->
        <form id="regForm" class="form-horizontal" method="POST" action="{{ route('contrato_sr.store') }}">
          {{ csrf_field() }}
          <div id="step-container" class="step-container m-4">
            
          </div>
          
         
          <div id="tab-here">

          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div class="buttonsControl pb-5" style="overflow:auto;">
            <div>
              <button type="button" class="btn btn-lg bg-secondary text-light mt-3" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
              <button type="button" class="btn bg-success text-light btn-lg mt-3" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
            </div>
          </div>
        </form>
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
  

@endsection