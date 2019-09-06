@extends('layouts.researcher')

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">


<h4 class="text-secondary lead m-4 mb-0">
    <span class="h3 font-weight-bold">Novo Contrato</span>
    <span class="font-italic ml-3">Lorem ipsum dolor sit amet, consectetur adipisicing elis.</span>
</h4>

<hr class="mt-3">

<div class="col-12">
  <div class="container">
    <ul class="nav nav-tabs rounded-0 row justify-content-center" id="myTab" role="tablist">
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2 active" id="start-tab" data-toggle="tab" href="#start" role="tab" aria-controls="start" aria-selected="true">0</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1</a>
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
        <a class="nav-link mb-2" id="clausula3_a-tab" data-toggle="tab" href="#clausula3_a" role="tab" aria-controls="clausula3_a" aria-selected="false">8</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="clausula3_b-tab" data-toggle="tab" href="#clausula3_b" role="tab" aria-controls="clausula3_b" aria-selected="false">9</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="clausula3_c-tab" data-toggle="tab" href="#clausula3_c" role="tab" aria-controls="clausula3_c" aria-selected="false">10</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="clausula3_d-tab" data-toggle="tab" href="#clausula3_d" role="tab" aria-controls="clausula3_d" aria-selected="false">11</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="clausula4-tab" data-toggle="tab" href="#clausula4" role="tab" aria-controls="clausula4" aria-selected="false">12</a>
      </li>
      <li class="nav-item rounded-0">
        <a class="nav-link mb-2" id="clausula4_a-tab" data-toggle="tab" href="#clausula4_a" role="tab" aria-controls="clausula4_a" aria-selected="false">13</a>
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
        <a class="nav-link mb-2" id="clausulaF-tab" data-toggle="tab" href="#clausulaF" role="tab" aria-controls="clausulaF" aria-selected="false">20</a>
      </li>
    </ul>
  </div>
</div>
    
<div class="container-fluid text-left mt-3 mb-3">
  <span class="p-2 font-italic font-weight-bold">*Use a barra de navegação acima para alternar entre as guias do contrato.</span>
</div>

{{--<!-- Begin Page Content -->
<div class="container-fluid pb-3 mt-4">
<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="d-sm-flex align-items-center justify-content-between mb-3 pt-3 mr-auto py-auto">
      <div class="card-header border-left-primary bg-light border border-light rounded-0">
      <h6 class="text-uppercase font-weight-bold roboto-font text-black mt-2">TRANSFERÊNCIA DE TECNOLOGIA
      </div>
    </div>        
  </div>

  <div class="col-lg-4">
    <nav aria-label="breadcrumb" class="ml-auto my-auto mt-3 pt-3">
      <ol class="breadcrumb bg-primary rounded-0 border border-primary border-left-primary">
        <li class="breadcrumb-item"><a href="{{route('pesquisador')}}" class="text-light">Início</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-light">Contratos</a></li>
        <li class="breadcrumb-item active" aria-current="page" class="font-weight-bold" style="color: white !important"><b>TT</b></li>
      </ol>
    </nav>
  </div>
</div><!--row-->
</div><!--container-->--}}

<!-- Begin Page Content -->
<div class="container-fluid pt-4 pb-0 mb-5">

  <div class="card-body bg-light border-right-secondary p-3" style="box-shadow: 0 0.125rem .05rem 0 rgba(58,59,69,.2)!important">

  <div class="col-12">
    <div class="tab-content" id="v-pills-tabContent">

    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="start" role="tabpanel" aria-labelledby="start-tab">
          <div class="container-fluid pb-5 pt-5 mt-0 m-0">
              <h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2">ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI <br>CELEBRAM <input type="text" class="myform-control m-2 p-0"> E <input type="text" class="myform-control m-0 p-0"> NA FORMA A SEGUIR.</h5><br>
          </div>
        </div>

        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <form class="p-0 m-0">
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">1º PARCEIRO</h5>

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
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <form class="p-0 m-0">
            
            <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2º PARCEIRO (Entidade Privada)</h5>

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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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

        <div class="tab-pane fade" id="clausula1" role="tabpanel" aria-labelledby="clausula1-tab">
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

      <div class="tab-pane fade" id="clausula2" role="tabpanel" aria-labelledby="clausula2-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
  
              <p><b>2.1 </b>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>

              <p><b>2.2 </b>Respeitadas as previsões contidas na legislação em vigor, a ICT/Agência de Fomento, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula2a" role="tabpanel" aria-labelledby="clausula2a-tab">
          <div class="container-fluid p-0 mt-0 m-0">
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
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">3 CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
  
              <p><b>3.1 </b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
              
              <p class="ml-2 bg-light roboto-font"><b>3.1.1. Do(a) ICT OU AGÊNCIA DE FOMENTO:</b></p>
              <p class="ml-2">
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div> Monitorar, avaliar e prestar contas nos termos deste Acordo; </p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula3_a" role="tabpanel" aria-labelledby="clausula3_a-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">              
              <p class="ml-2 bg-light roboto-font"><b>3.1.2.  Do(a) XXXX:(PARCEIRO PRIVADO):</b></p>
              <p class="ml-2">
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade; <br><div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div> Indicar coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução; <br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;
             </p>
            </div>
          </div>
      </div>
      <!------------------------------------------------------------------------->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula3_b" role="tabpanel" aria-labelledby="clausula3_b-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">              
              <p class="ml-2 bg-light roboto-font"><b>3.1.3.  Do(a) XXXX: (FUNDAÇÃO DE APOIO – QUANDO HOUVER):</b></p>
              <p class="ml-2">
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">A)</div>  Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I; <br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">B)</div>  Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">C)</div>  Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div>  Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">E)</div>  Informar previamente ao PARCEIRO PRIVADO os dados bancários e cadastrais necessários à realização dos aportes financeiros, cuidando para que a conta corrente a qual serão destinados os recursos seja específica para o projeto executado em conformidade com este Acordo de Parceria.<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">F)</div>  Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, inclusive os provenientes das receitas obtidas nas aplicações financeiras realizadas, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;
                <br>
             </p>
            </div>
          </div>
      </div>
      <!------------------------------------------------------------------------->
      
      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula3_c" role="tabpanel" aria-labelledby="clausula3_c-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">              
              <p class="ml-2 bg-light roboto-font"><b>3.1.3.  OU:</b></p>
              <p class="ml-2">
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">D)</div> Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;
                <br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">G)</div>  Responsabilizar-se pelo recolhimento de impostos, taxas, contribuições e outros encargos porventura devidos em decorrência das atividades vinculadas a este Acordo de Parceria;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">H)</div>  Manter, durante toda a execução do Acordo de Parceria, todas as condições de habilitação e de qualificação exigidas para a sua celebração, responsabilizando-se pela boa e integral execução das atividades ora descritas;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">I)</div>  Nas compras de bens e nas contratações de serviços, observar as regras do Decreto nº 8.241/2014;<br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">J)</div>  Observar os princípios da legalidade, eficiência, moralidade, publicidade, economicidade, legalidade e impessoalidade, nas aquisições e contratações realizadas, bem como no desenvolvimento de todas as suas ações no âmbito deste Acordo de Parceria;
                <br>
                <div class="badge badge-primary p-2 mb-1 font-weight-bold">K)</div>  Manter registros contábeis, fiscais e financeiros completos e fidedignos relativamente à aplicação dos aportes recebidos do PARCEIRO PRIVADO por este Acordo de Parceria, fazendo-o em estrita observância às normas tributário-fiscais em vigor e, especialmente, à legislação que instituiu contrapartidas em atividades de PD&I para a concessão de incentivos ou de benefícios dos quais o PARCEIRO PRIVADO seja ou se torne beneficiária;<br>
             </p>
            </div>
          </div>
      </div>
      <!------------------------------------------------------------------------->


      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula3_d" role="tabpanel" aria-labelledby="clausula3_d-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">
              <p><b>3.2.</b> Os Coordenadores de projeto poderão ser substituídos a qualquer tempo, competindo a cada <b>PARCEIRO</b> comunicar ao (s) outro (s) acerca desta alteração.<br>

              <p><b>3.3.</b> Os <b>PARCEIROS</b> são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente <b>Acordo de Parceria para PD&I</b> ou de publicações a ele referentes.</p>
            </div>
          </div>
      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula4" role="tabpanel" aria-labelledby="clausula4-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">4 CLÁUSULA QUARTA – DOS RECURSOS FINANCEIROS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
              
              <p>
                <b>4.1.</b>O (A) PARCEIRO PRIVADO transferirá recursos financeiros no valor total de R$ <input class="border border-dark font-weight-bold myform-control text-black text-uppercase p-2" type="text" placeholder="(VALOR POR EXTENSO)"> conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo. <br>
                <b>4.2.</b> Os valores especificados no item acima serão recebidos pela FUNDAÇÃO DE APOIO em conta específica.<br>
                <b>4.3.</b> O PARCEIRO PRIVADO efetuará os aportes financeiros previstos no Plano de Trabalho através de depósitos em conta corrente  específica, servindo o  comprovante da operação bancária como recibo, para fins de direito, do repasse dos recursos financeiros previstos por este Acordo de Parceira.<br>
                <b>4.4.</b>  Eventuais ganhos financeiros com aplicação serão revertidos para garantir a integral execução do objeto desta Parceria.<br>
                <b>4.4.1.</b> Após execução total do projeto, havendo ainda saldos provenientes das receitas obtidas de aplicações financeiras, esses serão devolvidos para o Parceiro Privado ou destinados para ação congênere, nos termos de instrumento jurídico próprio a ser firmado pelas partes. <br>
              </p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausula4_a" role="tabpanel" aria-labelledby="clausula4_a-tab">
          <div class="container-fluid p-0 mt-0 m-0">
            <div class="text-justify text-black">
              
              <h5 class="text-uppercase font-weight-bold roboto-font text-left text-black mb-3 bg-light p-2">4 CLÁUSULA QUARTA – DOS RECURSOS FINANCEIROS <a href="#"><i class="fas fa-fw fa-question-circle ml-2"></i></a></h5>
              
              <p>
                <b>4.5.</b>  Observadas as demais disposições previstas neste Acordo de Parceria, os PARCEIROS acordam, desde já, que os valores mencionados no Plano de Trabalho são estimados com base nas premissas e termos especificados no mencionado Anexo. <br>
                <b>4.6.</b>  Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo PARCEIRO PRIVADO deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, devendo ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria. <br>
                <b>4.7.</b>  Do valor total repassado, (a) FUNDAÇÃO DE APOIO poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.
              </p>
            </div>
          </div>

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <div class="tab-pane fade" id="clausulaF" role="tabpanel" aria-labelledby="clausulaF-tab">
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

      </div><!--end of tab-content: insert all these here!-->

      <!------------------------------------------------------------------------->

      <form id="regForm" action="/action_page.php">
        <div id="step-container" class="step-container">
        
        </div>
        
        <!-- One "tab" for each step in the form: -->
        
        <!-- Circles which indicates the steps of the form: -->
        <div class="buttonsControl" style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>
      </form>
<script>

    //classe do conteúdo do carrousel
    var elem = document.getElementsByClassName("tab-pane");
    //container que envolve o carrousel
    const container = document.getElementsByClassName("tab");
    //container de global do carrousel
    const form = document.getElementById("regForm")
    //step do formulário
    const step = document.getElementById("step-container")
    console.log(step)
    let tab = []
    let stepContainer = []
  
    //  container = Array.from(container);
      elem = Array.from(elem);
    for (let i = 0; i < elem.length; i++) {
        tab[i] = document.createElement("div");
        tab[i].classList.add('tab');   
        stepContainer[i] = document.createElement("span");
        stepContainer[i].classList.add('step');  
        form.appendChild(tab[i])
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
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
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
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 100%;
  height: auto;
  min-width: 300px;
}

.buttonsControl{
  height: auto;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-end;

}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: rgb(35, 187, 55);
}

.step-container{
  display: flex;
  justify-content: center;
  margin-bottom: 10px;
}
</style>
    </div>

  </div>
  </div>

</div><!--card-body-->

</div>

  

@endsection