@extends('layouts.admin')

@section('content')

<style>#wrapper #content-wrapper {background-color: #f5f5f5 !important;}
.faq-container{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 72px;
}

.box-shadow{
  -webkit-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  -moz-box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
  box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.04);
}
</style>

<!-- Begin Page Content -->
<div class="mb-4 col-md-12 faq-container bg-white p-5" style="min-height: 200px !important">
  <h1 class="h2 mb-0 text-gray-800 font-weight-bold">Como podemos ajudar você?</h1>
</div>

<div class="container p-5">
  <div class="row justify-content-center">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link rounded-0 py-3 mb-4 font-weight-bold active" id="pills-ask-tab" data-toggle="pill" href="#pills-ask" role="tab" aria-controls="pills-ask" aria-selected="true">Perguntas Frequentes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0 py-3 mb-4 font-weight-bold" id="pills-tutorials-tab" data-toggle="pill" href="#pills-tutorials" role="tab" aria-controls="pills-tutorials" aria-selected="false">Tutoriais</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0 py-3 mb-4 font-weight-bold" id="pills-docs-tab" data-toggle="pill" href="#pills-docs" role="tab" aria-controls="pills-docs" aria-selected="false">Documentação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0 py-3 mb-4 font-weight-bold" id="pills-nit-tab" data-toggle="pill" href="#pills-nit" role="tab" aria-controls="pills-nit" aria-selected="false">Sobre o NIT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link rounded-0 py-3 mb-4 font-weight-bold" id="pills-marca-tab" data-toggle="pill" href="#pills-marca" role="tab" aria-controls="pills-marca" aria-selected="false">Manual da Marca</a>
      </li>
    </ul>
  </div>
  <div class="tab-content shadow border border-primary bg-white p-5" id="pills-tabContent">

    <div class="tab-pane fade show active text-justify" id="pills-ask" role="tabpanel" aria-labelledby="pills-ask-tab">
      <h2 class="font-weight-bold text-dark mb-5">Perguntas Frequentes</h2>
      <h4 class="font-weight-bold">1) O que é o SGTT?</h4><hr>
      <p class="mb-5">O SGTT é um sistema desenvolvido para gerenciar e elaborar acordos de cooperação técnica e contratos de transferência de tecnologia nas ICTs/agência de fomento e em empresas que laborem com a inovação.</p>

      <h4 class="font-weight-bold">2)	Quais as ferramentas que o sgtt disponibiliza para o usuário?</h4><hr>
      <p class="mb-5">O SGTT produz minutas de acordos de cooperação técnica, a partir de modelos disponibilizados pela Procuradoria Geral Federal (PGF); o sistema dispõe de dois modelos: o ACORDO DE COOPERAÇÃO SEM REPASSE e o ACORDO DE COOPERAÇÃO COM REPASSE.</p>

      <h4 class="font-weight-bold">3) O que são notas explicativas?</h4><hr>
      <p class="mb-5">As notas explicativas é uma ferramenta que tem como objetivo orientar o usuário no momento da produção das minutas de acordos. Assim, caso o usuário tenha dúvidas de como proceder no preenchimento dos campos, deverá sempre consultar as notas explicativas ou os itens que tenham o símbolo da “?”.</p>

      <h4 class="font-weight-bold">4)	Como funciona a elaboração dos acordos no SGTT?</h4><hr>
      <p class="mb-5">Após fazer o registro de usuário no sistema e em seguida o login, o usuário será direcionado a página dos “Dados gerais” do sistema, caso queira produzir algum contrato deverá clicar no botão “Criar contrato”, preencher as informações nos campos em branco e, após preencher todos os campos, o usuário concluir a produção, será direcionado a página “Dados gerais” e no item “Meus contratos” deverá baixar o documento produzido.</p>

      <h4 class="font-weight-bold">5)	Posso editar a minuta após gerar o documento?</h4><hr>
      <p class="mb-5">Sim. O documento é gerado e salvo no próprio sistema no item “Meus contratos” o usuário pode editar e aperfeiçoar o documento quantas vezes julgar necessário.</p>

      <h4 class="font-weight-bold">6)	Posso criar mais de um contrato ao mesmo tempo?</h4><hr>
      <p class="mb-5">Sim. O sistema pode ser usado simultaneamente por o mesmo usuário ou por vários.</p>

      <h4 class="font-weight-bold">7)	Posso excluir o documento e recomeçar a produção do acordo, caso tenha errado?</h4><hr>
      <p class="mb-5">Sim. Conforme orientado anteriormente, o usuário pode fazer as edições que julgar necessário até que o documento pronto. Mas, caso não seja mais interessante prosseguir com a produção poderá excluir no item “meus contratos” no botão da lixeira.</p>
    </div>

    <div class="tab-pane fade" id="pills-tutorials" role="tabpanel" aria-labelledby="pills-tutorials-tab">
      <h2 class="font-weight-bold text-dark mb-5">Tutoriais</h2>
      <h4 class="">Como gerar um contrato</h4><hr>
      <!-- <p>Veja em pdf como criar um novo contrato usando o SGTT.</p> -->
      <a href="{{asset('assets/tutorial_sistema.pdf')}}" target="blank" class="btn btn-success btn-lg">Ver PDF</a>
    </div>


    <div class="tab-pane fade text-justify" id="pills-docs" role="tabpanel" aria-labelledby="pills-docs-tab">
      <h2 class="font-weight-bold text-dark mb-5">Documentação</h2>
      
      <h4 class="font-weight-bold">LEI Nº 9.279, DE 14 DE MAIO DE 1996.</h4><hr>
      <p>Regula direitos e obrigações relativos à propriedade industrial.</p>
      <a href="http://www.planalto.gov.br/ccivil_03/Leis/L9279.htm" class="btn btn-outline-dark btn-lg mb-5" target="blank">Abrir Link</a>

      <h4 class="font-weight-bold">LEI Nº 10.973, DE 2 DE DEZEMBRO DE 2004.</h4><hr>
      <p>Dispõe sobre incentivos à inovação e à pesquisa científica e tecnológica no ambiente produtivo e dá outras providências.</p>
      <a href="http://www.planalto.gov.br/ccivil_03/_ato2004-2006/2004/lei/l10.973.htm" class="btn btn-outline-dark btn-lg mb-5" target="blank">Abrir Link</a>

      <h4 class="font-weight-bold">LEI Nº 13.243, DE 11 DE JANEIRO DE 2016.</h4><hr>
      <p>Dispõe sobre incentivos à inovação e à pesquisa científica e tecnológica no ambiente produtivo e dá outras providências.</p>
      <a href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2016/Lei/L13243.htm" class="btn btn-outline-dark btn-lg mb-5" target="blank">Abrir Link</a>

      <h4 class="font-weight-bold">DECRETO Nº 9.283, DE 7 DE FEVEREIRO DE 2018.</h4><hr>
      <p>Regulamenta a Lei nº 10.973, de 2 de dezembro de 2004, a Lei nº 13.243, de 11 de janeiro de 2016, o art. 24, § 3º, e o art. 32, § 7º, da Lei nº 8.666, de 21 de junho de 1993, o art. 1º da Lei nº 8.010, de 29 de março de 1990, e o art. 2º, caput, inciso I, alínea "g", da Lei nº 8.032, de 12 de abril de 1990, e altera o Decreto nº 6.759, de 5 de fevereiro de 2009</p>
      <a href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2018/Decreto/D9283.htm" class="btn btn-outline-dark btn-lg mb-5" target="blank">Abrir Link</a>


    </div>

    <div class="tab-pane fade" id="pills-nit" role="tabpanel" aria-labelledby="pills-nit-tab">
      <h2 class="font-weight-bold text-dark mb-5">Sobre o NIT</h2>
      <h4 class="">NIT</h4><hr>
      <p class="text-justify">
        O Núcleo de Inovação Tecnológica (NIT) é um departamento instituído por uma ou mais Instituições Científicas, 
        Tecnológicas e de Inovações (ICTs), com ou sem personalidade jurídica própria, que tem como objetivo gerir as 
        políticas institucionais de pesquisa, inovação e tecnologias, através de competências específicas previstas na Lei 
        nº 13.243, de 11 de janeiro de 2016 e nas demais legislações correlatas ao tema Inovação. Portanto, são setores que 
        tem como finalidade gerar as políticas de inovação e empreendedorismo, auxiliando na promoção, a utilização do 
        conhecimento e o uso de novas tecnologias oriundas de universidades e institutos de pesquisa. 
      </p>
    </div>

    <div class="tab-pane fade" id="pills-marca" role="tabpanel" aria-labelledby="pills-marca-tab">
      <h2 class="font-weight-bold text-dark mb-5">Manual da Marca</h2>
      <h4 class="">Manual</h4><hr>
      <p>O Manual de Identidade Visual é o guia técnico para uso dos padrões visuais e verbais na comunicação da marca SGTT. Você pode baixar uma cópia deste manual para consulta no link abaixo.</p>
      <a href="{{asset('assets/manual_sgtt.pdf')}}" class="btn btn-lg btn-success py-3 mt-3" target="blank">Baixar Manual</a>
    </div>
  </div>
</div>


@endsection