@extends('layouts.researcher')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">

<!-- Begin Page Content -->
<div class="container-fluid p-2 pb-0">
  <div class="d-sm-flex align-items-center justify-content-between mb-3 pt-4 pl-3 pr-3">
    <h1 class="h3 roboto-font-700">Novo Contrato</h1>
    <nav aria-label="breadcrumb float-right">
      <ol class="breadcrumb bg-light rounded-0 border-left-primary">
        <li class="breadcrumb-item"><a href="{{route('pesquisador')}}">Início</a></li>
        <li class="breadcrumb-item"><a href="#">Contratos</a></li>
        <li class="breadcrumb-item active" aria-current="page">TT</li>
      </ol>
    </nav>
  </div>
</div>


<!-- Begin Page Content -->
<div class="container-fluid pb-5">

  <!-- Content Row -->
  <div class="card-header border-left-primary bg-light border border-light rounded-0">
    <h5 class="text-uppercase font-weight-bold roboto-font text-black mt-2">ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI CELEBRAM <span class="text-primary">IF-SERTÃO</span> E <span class="text-primary">UNIVASF</span> NA FORMA ABAIXO.</h5>
  </div>
  <div class="card-body bg-white pb-5">

  <div class="col-12">
    <div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

      <ul class="nav nav-tabs rounded-0 row justify-content-center" id="myTab" role="tablist">
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">2</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">3</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausula1-tab" data-toggle="tab" href="#clausula1" role="tab" aria-controls="clausula1" aria-selected="false">4</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausula2-tab" data-toggle="tab" href="#clausula2" role="tab" aria-controls="clausula2" aria-selected="false">5</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausula2a-tab" data-toggle="tab" href="#clausula2a" role="tab" aria-controls="clausula2" aria-selected="false">6</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausula3-tab" data-toggle="tab" href="#clausula3" role="tab" aria-controls="clausula3" aria-selected="false">7</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">8</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">9</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">10</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">11</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">12</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">13</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">14</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">15</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">16</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">17</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">18</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">19</a>
        </li>
        <li class="nav-item rounded-0">
          <a class="nav-link mb-2" id="clausulaX-tab" data-toggle="tab" href="#clausulaX" role="tab" aria-controls="clausulaX" aria-selected="false">20</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <form class="p-0 m-0">
            
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">1º PARCEIRO</h5>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Nome</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="CNPJ">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputState" class="font-weight-bold text-black">UF</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputZip">
              </div>
            </div>

           <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
           </div>

           <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4" class="font-weight-bold text-black">Nacionalidade</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nacionalidade">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Estado Civil</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="Estado Civil">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Ato de Nomeação</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="Ato de Nomeação">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Doravante Denominado</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="ICT/Agência de Fomento">
            </div>
           </div><!-- /.row-->
           <br>
          </form>
          </div><!--end of content-->
        </div><!--end-pane-->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <form class="p-0 m-0">
            
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">2º PARCEIRO (Entidade Privada)</h5>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="CNPJ">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputState" class="font-weight-bold text-black">UF</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputZip">
              </div>
            </div>

           <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
           </div>
          </form>
          </div><!--end of content-->
        </div><!--end pane-->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <form class="p-0 m-0">
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">3º PARCEIRO (Fundação de Apoio)</h5>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputEmail4" class="font-weight-bold text-black">Instituição</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">Natureza Jurídica</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="Natureza Jurídica">
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4" class="font-weight-bold text-black">CNPJ nº</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="CNPJ">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity" class="font-weight-bold text-black">Endereço</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputCity" class="font-weight-bold text-black">Cidade</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputState" class="font-weight-bold text-black">UF</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputCity">
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip" class="font-weight-bold text-black">CEP</label>
                <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
                <input type="text" class="form-control border-left-primary rounded-0" id="inputZip">
              </div>
            </div>

           <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4" class="font-weight-bold text-black">Representante Legal</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputEmail4" placeholder="Nome">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">CPF/M.F</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4" class="font-weight-bold text-black">Identidade nº</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="inputPassword4" class="font-weight-bold text-black">Órgão Expedidor</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
            <div class="form-group col-md-2">
              <label for="inputPassword4" class="font-weight-bold text-black">Cargo</label>
              <a href="#"><i class="fas fa-fw fa-question-circle float-right"></i></a>
              <input type="text" class="form-control border-left-primary rounded-0" id="inputPassword4" placeholder="">
            </div>
           </div>
          </form>
          </div><!--end of content-->
        </div><!--end pane-->
        
        <!------------------------------------------------------------------------->

        <div class="tab-pane fade" id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <div class="text-justify text-black">
              <p>Os <b>PARCEIROS</b>, anteriormente qualificados, resolvem celebrar
              o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - 
              PD&I, em conformidade com as normas legais vigentes no Marco Legal de 
              Ciência, Tecnologia e Inovação (Emenda Constitucional nº85/15, Lei nº
              10.973/2004, Lei nº 13.243/2016, Decreto nº 9.283/2018 e Lei nº 8.958/1994), que deverá ser executado com estrita observância das seguintes cláusulas e condições:</p><br>
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">1. Cláusula Primeira - do Objeto <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
  
              <p><b>1.1</b> O presente Acordo de Parceria para PD&I tem por objeto
              a cooperação técnica e científica entre os PARTÍCIPES para desenvolver
              o XXXXX, a ser executado nos termos do Plano de Trabalho, anexo, visando
              à transferência de recursos financeiros, à gestão administrativa e financeira e à execução técnia de projeto de pesquisa, desenvolvimento e inovação - PD&I.</p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
  
              <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>

              <p><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a ICT/Agência de Fomento, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula2a" role="tabpanel" aria-labelledby="clausula2a-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <div class="text-justify text-black">
  
              <p><b>2.3 </b>Na execução do Plano de Trabalho, a atuação dos PARTÍCIPES dar-se-á sempre de forma associada. Para tanto, os PARTÍCIPES indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.</p>

              <p><b>2.4 </b>Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.</p>

              <p><b>2.5 </b>Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.</p>

              <p><b>2.6 </b>A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.</p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula3" role="tabpanel" aria-labelledby="clausula3-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-5 bg-light p-2">2. CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
  
              <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
              
              <p class="ml-2 bg-light roboto-font"><b>3.1.1 Do(a) ICT OU AGÊNCIA DE FOMENTO:</b></p>
              <p class="ml-2">
                a)  Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;
                b)  Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;
                c)  Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;
                d)  Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;
                e)  Monitorar, avaliar e prestar contas nos termos deste Acordo; </p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausulaX" role="tabpanel" aria-labelledby="clausulaX-tab">
          <div class="container-fluid p-0 mt-5 m-0">
            <div class="text-justify text-black">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid temporibus enim molestias aliquam! Aliquid odit nemo repudiandae cupiditate tempore rerum provident cumque ad, perferendis, iure obcaecati vitae debitis. Vel.
            </div>
          </div>
      </div>
      <!------------------------------------------------------------------------->


    </div>

  </div>
  </div>

</div><!--card-body-->


<!--script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

  <script type="text/javascript">
    $('#carousel').slick({
    dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

  </script-->
@endsection