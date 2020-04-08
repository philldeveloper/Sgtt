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
	<span class="font-weight-bold" style="margin-left: 50px !important">UF:</span> {{$contrato->uf}} 
	<span class="font-weight-bold" style="margin-left: 50px !important">CEP:</span> {{$contrato->cep}}<br>
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
	<span class="font-weight-bold" style="margin-left: 50px !important">UF:</span> {{$contrato->parceiro_uf}} 
	<span class="font-weight-bold" style="margin-left: 50px !important">CEP:</span> {{$contrato->parceiro_cep}}<br>
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
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">c)</b> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;</p><br>

<p style="margin-left: 8px !important"><b>3.1.3. DA FUNDAÇÃO DE APOIO:</b><span style="text-transform: uppercase !important">{{$contrato->nome_inst_fundacao}}</span></p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">a)</b>{!! $contrato->clausula_edit_3a !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">b)</b>{!! $contrato->clausula_edit_3b !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">c)</b>{!! $contrato->clausula_edit_3c !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">d)</b>{!! $contrato->clausula_edit_3d !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">e)</b>{!! $contrato->clausula_edit_3e !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">f)</b>{!! $contrato->clausula_edit_3f !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">g)</b>{!! $contrato->clausula_edit_3g !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">h)</b>{!! $contrato->clausula_edit_3h !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">i)</b>{!! $contrato->clausula_edit_3i !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">j)</b>{!! $contrato->clausula_edit_3j !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">k)</b>{!! $contrato->clausula_edit_3k !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">l)</b>{!! $contrato->clausula_edit_3l !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">m)</b>{!! $contrato->clausula_edit_3m !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">n)</b>{!! $contrato->clausula_edit_3n !!}</p>

<p style="margin-left: 8px !important"><b>3.2</b><span style=""> Poderão ser substituídos a qualquer tempo, competindo a cada PARCEIRO comunicar ao (s) outro (s) acerca desta alteração.</span></p>
<p style="margin-left: 8px !important"><b style="margin-right: 8px !important">3.3</b> {!! $contrato->clausula_edit_3_3 !!}</p>

<!------clausula-4--->
<h5 class="font-weight-bold">4. CLÁUSULA QUARTA - DOS RECURSOS FINANCEIROS</h5>
<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Cláusulas para hipótese do recurso financeiro ser repassado do parceiro privado para o parceiro público, POR INTERMÉDIO DA FUNDAÇÃO DE APOIO.</p>

<p><b>4.1.</b> O(A) {!! $contrato->nome_parceiro_privado!!} transferirá recursos financeiros no valor total de R$ {!! $contrato->valor_financeiro !!}, conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo.</p>
<p><b>4.2</b> Os valores especificados no item acima serão recebidos pela {!! $contrato->nome_fund_apoio !!} em conta específica.</p>
<p><b>4.3</b> O Parceiro Privado efetuará os aportes financeiros previstos no Plano de Trabalho através de depósitos em conta- corrente específica, servindo o comprovante da operação bancária como recibo, para fins de direito, do repasse dos recursos financeiros previstos por este Acordo de Parceria.</p>
<p><b>4.4</b> Após execução total do projeto, havendo ainda saldos provenientes das receitas obtidas de aplicações financeiras, esses serão devolvidos para o Parceiro Privado ou destinados para ação congênere, nos termos de instrumento jurídico próprio a ser firmado pelas partes.</p>
<p><b>4.5</b> Observadas as demais disposições previstas neste Acordo de Parceria, os PARCEIROS acordam, desde já, que os valores mencionados no Plano de Trabalho são estimados com base nas premissas e termos especificados no mencionado Anexo.</p>
<p><b>4.6</b> Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo parceiro privado deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, {!! $contrato->clausula_opcional_4_6 !!} ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.</p>
<p><b>4.7</b> Do valor total repassado, (a) fundação de apoio poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.</p>

<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.7.1</b> Os valores dos recursos financeiros previstos nesta cláusula poderão ser alterados por meio de termo aditivo, com as necessárias justificativas e de comum acordo entre os PARCEIROS, o que implicará a revisão das metas pactuadas e a alteração do Plano de Trabalho.</p>

<p><b>4.8</b> {!! $contrato->clausula_edit_4_8 !!}</p>

<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.8.1</b> {!! $contrato->clausula_edit_4_8_1 !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.8.2</b> {!! $contrato->clausula_edit_4_8_2 !!}</p>

<p><b>4.9</b> {!! $contrato->clausula_edit_4_9 !!}</p>

<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.9.1</b> {!! $contrato->clausula_edit_4_9_1 !!}</p>

<p><b>4.10</b> {!! $contrato->clausula_edit_4_10 !!}</p>


<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Cláusulas para hipótese do recurso financeiro ser repassado do parceiro privado DIRETAMENTE PARA O PARCEIRO PÚBLICO (Sem intermédio de Fundação de Apoio).</p>

<p><b>4.1.</b> O(A) {!! $contrato->nome_parceiro_privado!!} transferirá recursos financeiros no valor total de R$ {!! $contrato->valor_financeiro !!}, conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo.</p>
<p><b>4.2</b> Os recursos financeiros serão transferidos à ICT/AGÊNCIA DE FOMENTO mediante depósito(s) no Banco do Brasil, por meio de Guia de Recolhimento da União-GRU, na qual deverá constar o código da UG, gestão e código do recolhimento indicados pela ICT/AGÊNCIA DE FOMENTO.</p>
<p><b>4.3</b> O PARCEIRO PRIVADO deverá comunicar a ICT/AGÊNCIA DE FOMENTO as transferências financeiras até o primeiro dia útil seguinte à(s) data(s) do (s) depósito(s) bancário(s). (SE HOUVER NECESSIDADE, ESPECIFICAR A FORMA DE COMUNICAÇÃO: por meio de ...).</p>
<p><b>4.4</b> A ICT/AGÊNCIA DE FOMENTO solicitará autorização orçamentária para incorporação dos valores transferidos.</p>
<p><b>4.5</b> Caso não seja possível a incorporação dos valores transferidos dentro do tempo hábil para a execução das ações previstas no Plano de Trabalho, o presente instrumento será rescindido de comum acordo e a ICT/AGÊNCIA DE FOMENTO devolverá os recursos repassados.</p>
<p><b>4.6</b> Os recursos transferidos à ICT/AGÊNCIA DE FOMENTO, enquanto não utilizados, seguirão as normas da Secretaria do Tesouro Nacional – STN, no que tange à aplicação, rendimentos e outras formas de correção.</p>
<p><b>4.7</b> Eventual saldo de recurso transferido pelo parceiro ao ICT/AGÊNCIA DE FOMENTO, não utilizado no objeto deste Acordo, após a sua conclusão, será restituído ao parceiro, corrigidos nos termos da Secretaria do Tesouro Nacional - STN.</p>
<p><b>4.8</b> A ICT/AGÊNCIA DE FOMENTO não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.</p>
<p><b>4.9</b> A ICT/AGÊNCIA DE FOMENTO não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.</p>
<p><b>4.10</b> Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo PARCEIRO PRIVADO deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, devendo ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.</p>
<p><b>4.11</b> A transposição, o remanejamento ou a transferência de recursos de categoria de programação para outra poderão ocorrer com o objetivo de conferir eficácia e eficiência às atividades de ciência, tecnologia e inovação.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.11.1</b> No âmbito deste projeto de pesquisa, desenvolvimento e inovação, o coordenador indicará a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.11.2</b> Por ocasião da ocorrência de quaisquer das ações previstas no item anterior, a ICT/AGÊNCIA DE FOMENTO poderá alterar a distribuição inicialmente acordada, promover modificações internas ao seu orçamento, alterar rubricas ou itens de despesas, desde que não modifique o valor total do projeto.</p>

<p><b>4.12</b> São dispensáveis de formalização por meio de Termo Aditivo as alterações previstas no item 4.9 que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">4.12.1</b> Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, necessárias para efetiva execução do projeto, ficarão dispensadas de prévia anuência do PARCEIRO PRIVADO, hipótese em que o coordenador do projeto solicitará a alteração à ICT, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</p>
<p><b>4.13</b> A ICT/AGÊNCIA DE FOMENTO não responderá pela suplementação de recursos para fazer frente a despesas decorrentes de quaisquer fatores externos ao seu controle, como flutuação cambial e alterações nos valores de taxas escolares.</p>
<p><b>4.14</b> Do valor total repassado, à ICT/AGÊNCIA DE FOMENTO poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.</p>


<!------clausula-5--->
<h5 class="font-weight-bold">5. CLÁUSULA QUINTA - DO PESSOAL</h5>
<p><b>5.1</b> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício ou de qualquer outra natureza com a EMPRESA PARCERIA e o pessoal da ICT/AGÊNCIA DE FOMENTO (E DA FUNDAÇAO DE APOIO, se houver) e vice-versa, cabendo a cada PARCEIRO a responsabilidade pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.</p>


<!------clausula-6--->
<h5 class="font-weight-bold">6. CLÁUSULA SEXTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h5>

<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> As cláusulas sobre Propriedade Intelectual dependem da Política de Inovação da Instituição, uma vez que cada ente estabelece as regras, possibilidades, percentuais e formas de gerir seu patrimônio intelectual. Desta forma, as cláusulas a seguir servem como sugestões de redação cabendo a cada entidade adequar a o texto do Acordo em conformidade com a sua Política de Inovação.</p>

<p><b>6.1</b> {!! $contrato->clausula_edit_6_1 !!}</p>
<p><b>6.2</b> {!! $contrato->clausula_edit_6_2 !!}</p>
<p><b>6.3</b> {!! $contrato->clausula_edit_6_3 !!}</p>
<p><b>6.4</b> {!! $contrato->clausula_edit_6_4 !!}</p>
<p><b>6.5</b> {!! $contrato->clausula_edit_6_5 !!}</p>
<p><b>6.6</b> {!! $contrato->clausula_edit_6_6 !!}</p>
<p><b>6.7</b> {!! $contrato->clausula_edit_6_7 !!}</p>
<p><b>6.8</b> {!! $contrato->clausula_edit_6_8 !!}</p>
<p><b>6.9</b> {!! $contrato->clausula_edit_6_9 !!}</p>
<p><b>6.10</b> {!! $contrato->clausula_edit_6_10 !!}</p>
<p><b>6.11</b> {!! $contrato->clausula_edit_6_11 !!}</p>
<p><b>6.12</b> {!! $contrato->clausula_edit_6_12 !!}</p>
<p><b>6.13</b> {!! $contrato->clausula_edit_6_13 !!}</p>

<!------clausula-7--->
<h5 class="font-weight-bold">7. CLÁUSULA SÉTIMA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h5>

<p><b>7.1</b> Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao contrato ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito da PARTE referida.</p>
<p><b>7.2</b> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.</p>
<p><b>7.3</b> Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.</p>
<p><b>7.4</b> As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS.</p>

<!------clausula-8--->
<h5 class="font-weight-bold">8. CLÁUSULA OITAVA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h5>

<p><b>8.1</b> Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO.</p>
<p><b>8.2</b> Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer.</p>
<p><b>8.3</b> As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade.</p>
<p><b>8.4</b> Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses:</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.1</b> Informações técnicas ou comerciais que já sejam do conhecimento das PARTES na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pela PARCEIRO que a revele;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.2</b> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S);</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.2.1</b> Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.3</b> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.4</b> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">8.4.5</b> Revelação expressamente autorizada, por escrito, pelas PARTES.</p>
<p><b>8.5</b> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada.</p>

<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Os parceiros deverão eleger a cláusula de classificação de confidencialidade que melhor se adapte aos seus interesses.</p>

<p><b>8.6</b> {!! $contrato->clausula_edit_8_6 !!}</p>
<p><b>8.7</b> {!! $contrato->clausula_edit_8_7 !!}</p>
<p><b>8.8</b> {!! $contrato->clausula_edit_8_8 !!}</p>

<!------clausula-9--->
<h5 class="font-weight-bold">9. CLÁUSULA NONA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h5>

<p><b>9.1</b> {!! $contrato->clausula_edit_9_1 !!}</p>
<p><b>9.2</b> {!! $contrato->clausula_edit_9_2 !!}</p>
<p><b>9.3</b> {!! $contrato->clausula_edit_9_3 !!}</p>
<p><b>9.4</b> {!! $contrato->clausula_edit_9_4 !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">a)</b> {!! $contrato->clausula_edit_9_a !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">b)</b> {!! $contrato->clausula_edit_9_b !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">c)</b> {!! $contrato->clausula_edit_9_c !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">d)</b> {!! $contrato->clausula_edit_9_d !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">e)</b> {!! $contrato->clausula_edit_9_e !!}</p>

<!------clausula-10--->
<h5 class="font-weight-bold">10. CLÁUSULA DÉCIMA - DO ACOMPANHAMENTO</h5>

<p><b>10.1</b> Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
<p><b>10.2</b> O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas.</p>
<p><b>10.3</b> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros.</p>
<p><b>10.4</b> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo.</p>

<!------clausula-11--->
<h5 class="font-weight-bold">11. CLÁUSULA DÉCIMA PRIMEIRA - DA VIGÊNCIA E DA PRORROGAÇÃO</h5>

<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> Observar que no § 3º do artigo 9-A da Lei nº10.973/2004 estabelece que “A vigência dos instrumentos jurídicos aos quais se refere o caput deverá ser suficiente à plena realização do objeto, admitida a prorrogação, desde que justificada tecnicamente e refletida em ajuste do plano de trabalho.”</p>

<p><b>11.1</b> O presente Acordo de Parceria para PD&I vigerá pelo prazo de {!! $contrato->prazo_vigencia !!} anos, a partir da data de sua assinatura, prorrogáveis.</p>
<p><b>11.2</b> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>


<!------clausula-12--->
<h5 class="font-weight-bold">12. CLÁUSULA DÉCIMA SEGUNDA - DAS ALTERAÇÕES</h5>

<p><b>12.1</b> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo.</p>
<p><b>12.2</b> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento.</p>
<p><b>12.3</b> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou.</p>
<p><b>12.4</b> São dispensáveis de formalização por meio de Termo Aditivo as alterações que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</p>

<p id="nota-explicativa"><b>NOTA EXPLICATIVA:</b> As cláusulas abaixo são sugeridas para os Acordos de Parceria para PD&I em que haja transferência de recurso do parceiro privado diretamente para o púbico, tendo em vista que os recursos passarão a ser orçamentários. Nas hipóteses de Acordos de Parceria para PD&I com intermediação de Fundação de Apoio, as cláusulas abaixo são facultativas.</p>

<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">12.4.1</b> {!! $contrato->clausula_edit_12_4_1 !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">12.4.2</b> {!! $contrato->clausula_edit_12_4_2 !!}</p>


<!------clausula-13--->
<h5 class="font-weight-bold">13. CLÁUSULA DÉCIMA TERCEIRA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h5>

<p><b>13.1</b> Os PARCEIROS exercerão a fiscalização técnico-financeira das atividades do presente Acordo.</p>
<p><b>13.2</b> {!! $contrato->clausula_edit_13_2 !!}.</p>

<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">a)</b> {!! $contrato->clausula_edit_13_2_a !!}</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">b)</b> {!! $contrato->clausula_edit_13_2_b !!}</p>

<p><b>13.3</b> No Formulário de Resultado de que trata a subcláusula 13.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas.</p>
<p><b>13.4</b> Caberá a cada PARCEIRO adotar as providências necessárias julgadas cabíveis, caso os relatórios parciais de que trata a subcláusula primeira demonstrem inconsistências na execução do objeto deste Acordo.</p>
<p><b>13.5</b> O pesquisador deverá apresentar a prestação de contas financeira, em até 180 (cento e oitenta) dias, contados do termo final do prazo de vigência previsto neste Acordo.</p>
<p><b>13.6</b> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública.</p>

<!------clausula-14--->
<h5 class="font-weight-bold">14. CLÁUSULA DÉCIMA QUARTA – DA EXTINÇÃO DO ACORDO</h5>

<p><b>14.1</b> Este Acordo poderá, a qualquer tempo, ser denunciado pelos PARCEIROS, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de 60 (sessenta) dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os PARCEIROS, creditando eventuais benefícios adquiridos no período.</p>

<p><b>14.2</b> {!! $contrato->clausula_edit_14_2 !!}.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">14.2.1</b> {!! $contrato->clausula_edit_14_2_1 !!}.</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">14.2.2</b> {!! $contrato->clausula_edit_14_2_2 !!}.</p>
<p><b>14.3</b> {!! $contrato->clausula_edit_14_3 !!}</p>
<p><b>14.4</b> {!! $contrato->clausula_edit_14_4 !!}</p>


<!------clausula-15--->
<h5 class="font-weight-bold">15. CLÁUSULA DÉCIMA QUINTA - DA PUBLICIDADE</h5>

<p id="nota-explicativa" style="text-transform: lowercase"><b style="text-transform: uppercase !important">NOTA EXPLICATIVA:</b> DEPENDENDO SE O ACORDO É, RESPECTIVAMENTE, COM TRANSFERÊNCIA DIRETA DE RECURSOS OU POR INTERMÉDIO DE FUNDAÇÃO DE APOIO.</p>

<p><b>14.1</b> A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da União (DOU) é condição indispensável para sua eficácia e será providenciada pela ICT no prazo de até 20 (vinte) dias da sua assinatura.</p>

<!------clausula-16--->
<h5 class="font-weight-bold">16. CLAUSULA DÉCIMA SEXTA – DOS BENS</h5>
<p><b>16.1</b> {!! $contrato->clausula_edit_16_1 !!}</p>
<p><b>16.2</b> {!! $contrato->clausula_edit_16_2 !!}</p>

<!------clausula-17--->
<h5 class="font-weight-bold">17. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES</h5>
<p><b>17.1</b> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no respectivo endereço do PARCEIRO notificado, conforme as seguintes informações:</p>

<br>

<p><b>PARCEIRO PÚBLICO:</b></p>
<p><b>Endereço:</b> {!! $contrato->parceiro_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->parceiro_contato_telefone !!}, <b>Celular:</b> {!! $contrato->parceiro_contato_celular !!}, <b>E-mail:</b> {!! $contrato->parceiro_contato_email !!}</p>

<p><b>PARCEIRO PRIVADO:</b></p>
<p><b>Endereço:</b> {!! $contrato->privado_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->privado_contato_telefone !!}, <b>Celular:</b> {!! $contrato->privado_contato_celular !!}, <b>E-mail:</b> {!! $contrato->privado_contato_email !!}</p>

<p><b>FUNDAÇÃO DE APOIO:</b></p>
<p><b>Endereço:</b> {!! $contrato->apoio_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->apoio_contato_telefone !!}, <b>Celular:</b> {!! $contrato->apoio_contato_celular !!}, <b>E-mail:</b> {!! $contrato->apoio_contato_email !!}</p>

<p><b>17.2</b> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue:</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">17.2.1</b> Quando entregue em mão a quem destinada, com o comprovante de recebimento;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">17.2.2</b> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">17.2.3</b> Se enviada por fax, quando recebida pelo destinatário;</p>
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">17.2.4</b> Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada.</p>
<p><b>17.3</b> Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas.</p>


<img src="../public/assets/sgtt_small.png" alt="sgtt" width="60px" style="position: fixed; right:5px; bottom: 25px; opacity: 0.3; margin-top: 20px !important; margin-bottom: 20px !important">

</body>
</html>