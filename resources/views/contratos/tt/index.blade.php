@extends('layouts.researcher')

@section('content')

<div class="title-header">
    <span class="h3 ml-3">Novo Contrato</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</div>


<div class="card mt-5 color-card">
  <div class="card-body p-3">
  <div class="tab-pane  show active" id="start" role="tabpanel" aria-labelledby="start-tab">
    <div class="alert alert-warning" role="alert">      
      <img class="img-alert mr-2" src="https://image.flaticon.com/icons/svg/1680/1680012.svg" alt="attention" style="width:32px;">
      NOTAS EXPLICATIVAS!
      <button type="button" class="ml-2 btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Saiba mais</button>
  </div>
  <!-- Modal -->
        <div class="modal-alert modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NOTAS EXPLICATIVAS!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                ESTA MINUTA DEVE SER UTILIZADA PARA ACORDOS DE PARCERIA PARA
                PD&I QUANDO NÃO HOUVER REPASSE DE RECURSOS ENTRE OS PARCEIROS.<br/>
                Este tipo de Acordo é apropriado para ser utilizado na construção de ambientes inovadores
                (como parques tecnológico, co-working, entre outras possibilidades), servindo como
                instrumento que estabelece as regras de interação entre os parceiros. Pode tanto ser usado em
                relações bilaterais como multilaterais.
                BASE LEGAL: ARTIGO 9º DA LEI Nº 10.973/04.
                Caso se trate da hipótese de Acordo com transferência de recursos do parceiro privado para o
                projeto (§§ 6º e 7º do Artigo 35 do Decreto nº 9.283/18.), deverá ser utilizada a outra minuta
                apropriada para esta situação.
                Alguns itens receberão notas explicativas destacadas para compreensão do agente ou setor
                responsável pela elaboração das minutas, que deverão ser devidamente suprimidas quando da
                finalização do documento. 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn-sm btn-light bg-light" data-dismiss="modal">Fechar</button>
                </div>
            </div>
          </div>
        </div>
            <div class="container-fluid pb-5 pt-5 mt-0 m-0">
                <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">
                  ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI
                  CELEBRAM <input type="text" class="myform-control m-2 p-0"> E 
                  <input type="text" class="myform-control m-0 p-0"> 
                  NA FORMA A SEGUIR.</h5><br>
            </div>
          </div>
  
          <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <form class="p-0 m-0">
              <h5 
              class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">
              1º PARCEIRO</h5>
  
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4" class="font-weight-bold text-black">Nome</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputZip">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
             </div>
  
             <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4" class="font-weight-bold text-black">Nacionalidade</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nacionalidade">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Estado Civil</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="Estado Civil">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Ato de Nomeação</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="Ato de Nomeação">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="ICT/Agência de Fomento">
              </div>
             </div><!-- /.row-->
             <br>
            </form>
            </div><!--end of content-->
          </div><!--end-pane-->
          <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <form class="p-0 m-0">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2º PARCEIRO</h5>
  
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputZip">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
             </div>
            </form>
            </div><!--end of content-->
          </div><!--end pane-->
          <div class="tab-pane " id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <form class="p-0 m-0">
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3º PARCEIRO (Fundação de Apoio)</h5>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="CNPJ">
                </div>
              </div>
  
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputState" class="font-weight-bold text-black">UF</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                  <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                  <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputZip">
                </div>
              </div>
  
             <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-3">
                <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary text-black font-weight-bold rounded-0" id="inputPassword4" placeholder="">
              </div>
             </div>
            </form>
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
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">1. Cláusula Primeira - do Objeto <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto
                a cooperação técnica e científica entre os PARTÍCIPES para desenvolver
                o XXXXX, a ser executado nos termos do Plano de Trabalho, anexo, visando
                à transferência de recursos financeiros, à gestão administrativa e financeira e à execução técnia de projeto de pesquisa, desenvolvimento e inovação - PD&I.</p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
  
                <p class="text-blue"><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a ICT/Agência de Fomento, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>
                <p class="text-blue"><b>2.3 </b>Na execução do Plano de Trabalho, a atuação dos PARTÍCIPES dar-se-á sempre de forma associada. Para tanto, os PARTÍCIPES indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.</p>
  
                <p class="text-blue"><b>2.4 </b>Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.</p>

                <p class="text-blue"><b>2.5 </b>Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.</p>

                <p class="text-blue"><b>2.6 </b>A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.</p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
                 
                <p class="ml-2 bg-light roboto-font"><b>3.1.1. Do(a) ICT:</b><input type="text" name="ICT" placeholder="Instituição"></p>
           
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div> Monitorar, avaliar e prestar contas nos termos deste Acordo; </p>
                  <p class="ml-2 bg-light roboto-font"><b>3.1.2.  Do(a) <input type="text" name="ICT" placeholder="Instituição">:(PARCEIRO PRIVADO)</b></p>
               
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade; <br><div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Indicar coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução; <br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
                  <br><br>
                  <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a) <input type="text" name="ICT" placeholder="Instituição">:(FUNDAÇÃO DE APOIO – QUANDO HOUVER)</b></p>
                 
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
                  <p><b>3.2.</b> Os Coordenadores de projeto poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.<br>
  
                  <p class="text-blue"><b>3.3.</b> Os <b>PARCEIROS</b> são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente <b>Acordo de Parceria para PD&I</b> ou de publicações a ele referentes.</p>
                </p>
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
                  vínculo empregatício ou de qualquer outra natureza com a <input type="text" name="empresa" placeholder="Empresa parceira"> e
                  o pessoal <input type="text" name="empresa" placeholder="ICT ou Agência de fomento"> vice-versa, cabendo a cada PARCEIRO a responsabilidade 
                  pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a
                  documentação comprobatória da regularidade na contratação.<br>
                </p>
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <div class="tab-pane " id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">5. CLÁUSULA QUINTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
                
                <p class="text-blue">
                <b>5.1.</b> Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário. <br>
                <br/><b>5.2.</b> Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre os PARCEIROS, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da Lei nº 10.973/2004.<br>
                <br/><b>5.3.</b> A divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para a ICT/AGÊNCIA DE FOMENTO.           
                <br><br><b>5.4</b> O instrumento previsto na subcláusula 5.3 deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes.
                <br>
                <br/><b>5.5</b> Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais.
                <br>
                <br/><b>5.6</b> Os PARCEIROS devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros.
                <br>
                <br/><b>5.7</b> Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente.
                <br>
                <br/><b>5.8</b> Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento da ICT/AGÊNCIA DE FOMENTO.
                <br><br/><b>5.9</b> Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países.
                <br><br/><b>5.10</b> As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos PARCEIROS ora acordantes.
                <br>
                <br/><b>5.11</b> Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os PARCEIROS concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos PARCEIROS, em conjunto ou separadamente.
                <br>
                <br/><b>5.12</b> Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os PARCEIROS concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias.
                <br>
                <br/><b>5.13</b> A ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países.</b>
                </p>
             
              </div>
            </div>
  
        </div><!--end of tab-content: insert all these here!-->
  
        <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">6. CLÁUSULA SEXTA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>6.1 </b>Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao acordo ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito do PARCEIRO referido.</p>
  
                <p class="text-blue"><b>6.2 </b>Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.</p>
                <p class="text-blue"><b>6.3 </b>Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.</p>
  
                <p class="text-blue"><b>6.4 </b>As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS.</p>

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
                <p><b>7.5.</b> A divulgação científica, por meio de artigos em congressos, revistas e outros meios,
                                relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito
                                dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a
                                execução das tarefas, deveres ou contratos relacionados com a informação divulgada. A divulgação científica, por meio de artigos em congressos, revistas e outros meios,
                                relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito
                                dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a
                                execução das tarefas, deveres ou contratos relacionados com a informação divulgada. 
                </p>
                <p class="text-blue"><b>7.6.</b>As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção.</p>
                <p class="text-blue"><b>7.7.</b>Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo.</p>
                <p class="text-blue"><b>7.8.</b>Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio.</p>
      
              </div>
            </div>
            <!------------------------------------------------------------------------->
  
        <div class="tab-pane " id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-blue">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">8 CLÁUSULA OITAVA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p class="text-blue"><b>8.1</b> Os PARCEIROS deverão tomar todas as medidas necessárias, observados os princípios de civilidade e legalidade, e de acordo com as boas práticas empresariais para cumprir e assegurar que  (i) seus conselheiros, diretores, empregados qualquer pessoa agindo em seu nome, inclusive prepostos e subcontratados, quando houver (todos doravante referidos como “Partes Relacionadas” e, cada uma delas, como “uma Parte Relacionada”) obedecerão a todas as leis aplicáveis, incluindo àquelas  relativas ao combate à corrupção, suborno e lavagem de dinheiro, bem como àquelas  relativas a sanções econômicas, vigentes nas jurisdições em que os PARCEIROS estão constituídos e na jurisdição em que o Acordo de Parceria será cumprido (se diferentes), para impedir qualquer atividade fraudulenta por si ou por uma Parte Relacionada com relação ao cumprimento deste Acordo de Parceria.</p>
                <p class="text-blue"><b>8.2</b> Um PARCEIRO deverá notificar imediatamente o outro sobre eventual suspeita de qualquer fraude tenha ocorrido, esteja ocorrendo, ou provavelmente ocorrerá, para que sejam tomadas as medidas necessárias para apurá-las.</p>
                <p class="text-blue"><b>8.1*</b> Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo. </p>
                <p class="text-blue"><b>8.2*</b> Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:</p>
                
                
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div>  Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo;<br>
                  <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div> Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente. </p>
              </div>
            </div>
  
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
    
                <p><b>10.1</b>O presente Acordo de Parceria para PD&I vigerá pelo prazo de <input type="text" name="date" placeholder="De (XXXX) anos" id=""> anos, a partir da data de sua assinatura, prorrogáveis.</p>
                <p><b>10.2</b>10.2. Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
            
              </div>
            </div>
            <!------------------------------------------------------------------------->
            <div class="tab-pane " id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-justify text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">11. CLÁUSULA DÉCIMA PRIMEIRA- DAS ALTERAÇÕES<a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
    
                <p><b>11.1</b>As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo.</p>
                <p><b>11.2</b>A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento.</p>
                <p><b>11.3</b> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou.</p>
            
              </div>
            </div>
            <!------------------------------------------------------------------------->
        <div class="tab-pane " id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
            <div class="container-fluid p-0 mt-0 m-0">
              <div class="text-black">
                
                <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black bg-light p-2 mb-3">SEU CONTRATO ESTÁ PRONTO PARA ANÁLISE. <a href="#"><i class="fas fa-fw fa-check ml-2"></i></a></h5>
  
                <p>Seu contrato será revisado em até de 30 dias e uma resposta será gerada. Aguarde a confirmação do sistema. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dolores excepturi ipsum rem, enim accusantium quam similique assumenda eum veniam saepe, quas earum nisi hic neque voluptate consectetur ex quo!</p><br>
                
                <div class="row justify-content-right">
                  <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="#" class="btn btn-block d-fluid p-2 rounded-0 bg-white border-dark font-weight-bold text-uppercase text-black text-center"><i class="fas fa-2x fa-envelope-open-text p-2"></i><br>
                      SALVAR NO EMAIL
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="btn btn-block d-fluid p-2 rounded-0 bg-white border-dark font-weight-bold text-uppercase text-black text-center"><i class="fas fa-2x fa-file-pdf p-2"></i><br>
                      BAIXAR PDF
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="btn btn-block d-fluid p-2 rounded-0 bg-primary text-light font-weight-bold text-uppercase text-black text-center"><i class="fas fa-2x fa-print p-2"></i><br>
                      IMPRIMIR
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
  
        <form id="regForm" action="/action_page.php">
          <div id="step-container" class="step-container">
            
          </div>
          
         
          <div id="tab-here">

          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div class="buttonsControl pb-5" style="overflow:auto;">
            <div>
              <button type="button" class="btn-sm btn-success" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
              <button type="button" class="btn-sm btn-success" id="nextBtn" onclick="nextPrev(1)">Proximo</button>
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

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateStep()) return false;
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