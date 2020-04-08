<!DOCTYPE html>
<html>
<head>
	<title>Contrato - Com Repasse</title>
    <!-- Styles -->
    <link href="../public/css/pdf.css" rel="stylesheet">
	
</head>
<body>

<h1>{{$title}}</h1>
<div style="justify-content: center; margin-bottom: 20px !important; text-align: center !important">
	<img src="../public/assets/brazao.png" alt="">
</div>

<h5 id="main-title"> ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI CELEBRAM {{$contrato->nome_ict}} E {{$contrato->nome_parceiro}} NA FORMA ABAIXO.</h5><br><br>

<h5 class="text-uppercase display-4 border-bottom border-dark">1º PARCEIRO</h5>
<p>
	<span class="font-weight-bold">Nome:</span> {{$contrato->nome_teste}}<br>
	<span class="font-weight-bold">Natureza Jurídica:</span> {{$contrato->nat_juridica}}<br>
	<span class="font-weight-bold">CNPJ nº:</span> {{$contrato->cnpj}}<br>
	<span class="font-weight-bold">Endereço:</span> {{$contrato->endereco}}<br>
	<span class="font-weight-bold">Cidade:</span> {{$contrato->cidade}},
	<span class="font-weight-bold">UF:</span> {{$contrato->uf}}, 
	<span class="font-weight-bold">CEP:</span> {{$contrato->cep}}<br>
	<span class="font-weight-bold">Representante Legal:</span> {{$contrato->rep_legal}}<br>
	<span class="font-weight-bold">C.P.F / M.F:</span> {{$contrato->cpf}}<br>
	<span class="font-weight-bold">Identidade n.º:</span> {{$contrato->rg}}<br>
	<span class="font-weight-bold">Órgão expedido:</span> {{$contrato->orgao_exp}}<br>
	<span class="font-weight-bold">Nacionalidade:</span> {{$contrato->nacionalidade}}<br>
	<span class="font-weight-bold">Estado Civil:</span> {{$contrato->est_civil}}<br>
	<span class="font-weight-bold">Cargo:</span> {{$contrato->ato_nomeacao}}<br>
	<span class="font-weight-bold">Doravante denominado:</span> {{$contrato->doravante_denominado}}<br>
</p>

<h5 class="text-uppercase">2º PARCEIRO</h5>
<p>
	<span class="font-weight-bold">Nome:</span> {{$contrato->nome_parceiro_instituicao}}<br>
	<span class="font-weight-bold">Natureza Jurídica:</span> {{$contrato->parceiro_nat_juridica}}<br>
	<span class="font-weight-bold">CNPJ nº:</span> {{$contrato->parceiro_cnpj}}<br>
	<span class="font-weight-bold">Endereço:</span> {{$contrato->parceiro_endereco}}<br>
	<span class="font-weight-bold">Cidade:</span> {{$contrato->parceiro_cidade}},
	<span class="font-weight-bold">UF:</span> {{$contrato->parceiro_uf}}, 
	<span class="font-weight-bold">CEP:</span> {{$contrato->parceiro_cep}}<br>
	<span class="font-weight-bold">Representante Legal:</span> {{$contrato->parceiro_rep_legal}}<br>
	<span class="font-weight-bold">C.P.F / M.F:</span> {{$contrato->parceiro_cpf}}<br>
	<span class="font-weight-bold">Identidade n.º:</span> {{$contrato->parceiro_rg}}<br>
	<span class="font-weight-bold">Órgão expedido:</span> {{$contrato->parceiro_orgao_exp}}<br>
	<span class="font-weight-bold">Cargo:</span> {{$contrato->parceiro_cargo}}<br>
</p>

<p>Os <span class="font-weight-bold">PARCEIROS, </span>anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:</p>


<!------clausula-1--->
<h5 class="font-weight-bold">1. CLÁUSULA PRIMEIRA - DO OBJETO</h5>
	
<p><span id="p-title">1.1.</span>O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARCEIROS para desenvolver o {{$contrato->clausula_descricao}}, a ser executado nos termos do Plano de Trabalho, anexo, visando {{$contrato->clausula_objetivo}} e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.</p>

<!------clausula-2--->
<h5 class="font-weight-bold">2. CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO</h5>
<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Cláusula abaixo são obrigatórias para ICTs, cabendo as Agências de Fomento verificar se há interesse na sua inclusão no Acordo.</p>

<p><span id="p-title">2.1.</span>O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
<p><span id="p-title">2.2.</span>Respeitadas as previsões contidas na legislação em vigor, a ICT, com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>

<p><span id="p-title">2.3.</span>{!! $contrato->clausula_edit_2_3 !!}</p>
<p><span id="p-title">2.4.</span>{!! $contrato->clausula_edit_2_4 !!}</p>
<p><span id="p-title">2.5.</span>{!! $contrato->clausula_edit_2_5 !!}</p>
<p><span id="p-title">2.6.</span>{!! $contrato->clausula_edit_2_6 !!}</p>

<!------clausula-3--->
<h5 class="font-weight-bold">3. CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5>
<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Cabe a cada Parceiro especificar as atribuições de cada parte no Acordo, conforme a parceria que irá ser firmada e as obrigações que cada partícipe terá.</p>

<p><b>3.1.</b>São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>

<p style="margin-left: 8px !important"><b>3.1.1. Do(a) ICT:</b><span style="text-transform: uppercase !important">{{$contrato->nome_inst_ict}}</span></p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">a)</b> Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">b)</b> Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">c)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução</p>
<p style="margin-left: 8px !important"><b>Nome do Coordenador ICT/Público:</b><span style="text-transform: uppercase !important">{{$contrato->nome_coordenador_ict}}</span></p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">d)</b> Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">e)</b> Monitorar, avaliar e prestar contas nos termos deste Acordo;</p>

<p style="margin-left: 8px !important"><b>3.1.2. Do Parceiro Privado:</b><span style="text-transform: uppercase !important">{{$contrato->nome_parceiro_privado}}</span></p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">a)</b> Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">b)</b> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução</p>

<p style="margin-left: 8px !important"><b>Nome do Coordenador Privado:</b><span style="text-transform: uppercase !important">{{$contrato->nome_coordenador_privado}}</span></p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">c)</b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;</p>

<p style="margin-left: 8px !important"><b>3.1.2. Do Parceiro Privado:</b><span style="text-transform: uppercase !important">{{$contrato->nome_parceiro_privado}}</span></p>






<footer class="footer" style="position: fixed; right:5px; bottom: 25px; opacity: 0.3; margin-top: 20px !important; margin-bottom: 20px !important">
	<img src="../public/assets/sgtt_small.png" alt="sgtt" width="60px">
</footer>
</body>
</html>