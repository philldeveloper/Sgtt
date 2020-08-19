<h4 style="font-weight: bold;">SERVIÇO PÚBLICO FEDERAL<br/>MINISTÉRIO DA EDUCAÇÃO<br/></h4>
<br/>
<h4 style="font-weight: bold;">ACORDO DE COOPERAÇÃO TÉCNICA QUE ENTRE SI CELEBRAM {{strtoupper($contrato->nome_ict)}}, POR MEIO DO NÚCLEO DE INOVAÇÃO TECNOLÓGICA E {{strtoupper($contrato->nome_parceiro)}}, PARA FINS QUE ESPECIFICA.</h4>
<br/><br/>

<h5 style="font-weight: bold;">1º PARCEIRO</h5>
<p style="text-align: left;">
<span style="font-weight: bold; text-align: left;">Nome:</span> {{$contrato->nome_teste}}<br/>
<span style="font-weight: bold; text-align: left;">Natureza Jurídica:</span> {{$contrato->nat_juridica}}<br/>
<span style="font-weight: bold; text-align: left;">CNPJ nº:</span> {{$contrato->cnpj}}<br/>
<span style="font-weight: bold; text-align: left;">Endereço:</span> {{$contrato->endereco}}<br/>
<span style="font-weight: bold; text-align: left;">Cidade:</span> {{$contrato->cidade}},
<span style="font-weight: bold; text-align: left;">UF:</span> {{$contrato->uf}} 
<span style="font-weight: bold; text-align: left;">CEP:</span> {{$contrato->cep}}<br/>
<span style="font-weight: bold; text-align: left;">Representante Legal:</span> {{$contrato->rep_legal}}<br/>
<span style="font-weight: bold; text-align: left;">C.P.F / M.F:</span> {{$contrato->cpf}}<br/>
<span style="font-weight: bold; text-align: left;">Identidade n.º:</span> {{$contrato->rg}}<br/>
<span style="font-weight: bold; text-align: left;">Órgão expedido:</span> {{$contrato->orgao_exp}}<br/>
<span style="font-weight: bold; text-align: left;">Nacionalidade:</span> {{$contrato->nacionalidade}}<br/>
<span style="font-weight: bold; text-align: left;">Estado Civil:</span> {{$contrato->est_civil}}<br/>
<span style="font-weight: bold; text-align: left;">Cargo:</span> {{$contrato->ato_nomeacao}}<br/>
<span style="font-weight: bold; text-align: left;">Doravante denominado:</span> {{$contrato->doravante_denominado}}<br/>
</p>

<h5 style="font-weight: bold;">2º PARCEIRO</h5>
<p style="text-align: left;">
<span style="font-weight: bold; text-align: left;">Nome:</span> {{$contrato->nome_parceiro_instituicao}}<br/>
<span style="font-weight: bold; text-align: left;">Natureza Jurídica:</span> {{$contrato->parceiro_nat_juridica}}<br/>
<span style="font-weight: bold; text-align: left;">CNPJ nº:</span> {{$contrato->parceiro_cnpj}}<br/>
<span style="font-weight: bold; text-align: left;">Endereço:</span> {{$contrato->parceiro_endereco}}<br/>
<span style="font-weight: bold; text-align: left;">Cidade:</span> {{$contrato->parceiro_cidade}},
<span style="font-weight: bold; text-align: left;">UF:</span> {{$contrato->parceiro_uf}} 
<span style="font-weight: bold; text-align: left;">CEP:</span> {{$contrato->parceiro_cep}}<br/>
<span style="font-weight: bold; text-align: left;">Representante Legal:</span> {{$contrato->parceiro_rep_legal}}<br/>
<span style="font-weight: bold; text-align: left;">C.P.F / M.F:</span> {{$contrato->parceiro_cpf}}<br/>
<span style="font-weight: bold; text-align: left;">Identidade n.º:</span> {{$contrato->parceiro_rg}}<br/>
<span style="font-weight: bold; text-align: left;">Órgão expedido:</span> {{$contrato->parceiro_orgao_exp}}<br/>
<span style="font-weight: bold; text-align: left;">Cargo:</span> {{$contrato->parceiro_cargo}}<br/>
</p><br/>


<p style="text-align: justify;">Os <b>PARCEIROS</b>, anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:</p>



<h5 style="font-weight: bold;">CLÁUSULA PRIMEIRA - DO OBJETO</h5>
	
<p><span style="font-weight: bold;">1.1.</span> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARCEIROS para desenvolver o {{$contrato->clausula_descricao}}, a ser executado nos termos do Plano de Trabalho, anexo, visando {{$contrato->clausula_objetivo}} e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.</p>


<h5 style="font-weight: bold;">CLÁUSULA SEGUNDA – DO PLANO DE TRABALHO</h5>

<p><span style="font-weight: bold;">2.1.</span> O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>

<!-- <p style="display: none;">{{$count = 1}}</p> -->
@if($contrato->clausula_edit_2_2 == '')
@else
<p><span style="font-weight: bold;">2.{{++$count}}.</span> {!! $contrato->clausula_edit_2_2 !!}</p>
@endif
@if($contrato->clausula_edit_2_3 == '')
@else
<p><span style="font-weight: bold;">2.{{++$count}}.</span> {!! $contrato->clausula_edit_2_3 !!}</p>
@endif

@if($contrato->clausula_edit_2_4 == '')
@else
<p><span style="font-weight: bold;">2.{{++$count}}.</span> {!! $contrato->clausula_edit_2_4 !!}</p>
@endif

@if($contrato->clausula_edit_2_5 == '')
@else
<p><span style="font-weight: bold;">2.{{++$count}}.</span> {!! $contrato->clausula_edit_2_5 !!}</p>
@endif

@if($contrato->clausula_edit_2_6 == '')
@else
<p><span style="font-weight: bold;">2.{{++$count}}.</span> {!! $contrato->clausula_edit_2_6 !!}</p>
@endif


<h5 style="font-weight: bold;">CLÁUSULA TERCEIRA – DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5>

<p><span style="font-weight: bold;">3.1.</span> São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
<p><span style="font-weight: bold;">3.1.1. Do(a) ICT:</span> {{$contrato->nome_inst_ict}}</p>

<h6>a) Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD&I ;</h6>
<h6>b) Manter rigoroso controle das despesas efetuadas e dos respectivos comprovantes com vistas à prestação de contas da execução do objeto deste Acordo;</h6>
<h6>c) Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução</h6>
<p><b>Do Coordenador ICT/Público:</b> {{$contrato->nome_coordenador_ict}}</p>
<h6>d) Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;</h6>
<h6>e) Monitorar, avaliar e prestar contas nos termos deste Acordo;</h6>

<p><span style="font-weight: bold;">3.1.2. Do Parceiro Privado:</span> {{$contrato->nome_parceiro_privado}}</p>

<h6>a) Transferir os recursos financeiros acordados, segundo o Cronograma de Desembolso constante no Plano de Trabalho, por meio do aporte de recursos financeiros de sua responsabilidade;</h6>
<h6>b) Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução</h6>
<h6><span style="text-transform:uppercase"><b>Do Coordenador Privado:</b></span> {{$contrato->nome_coordenador_privado}}</h6>
<h6>c) Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;</h6>
<!-- 	<p style="display: none;">{{ $count_letter = 'z' }}</p>	 -->
@if($contrato->nome_inst_fundacao == '')
@else
<p><span style="font-weight: bold;">3.1.3. DA FUNDAÇÃO DE APOIO:</span> {{$contrato->nome_inst_fundacao}}</p>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3a !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3b !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3c !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3d !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3e !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3f !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3g !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3h !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3i !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3j !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3k !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3l !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3m !!}</h6>
<h6>{{str_split(++$count_letter)[1]}}) {!! $contrato->clausula_edit_3n !!}</h6>
<br/>
@endif

<p><span style="font-weight: bold;">3.2.</span> Poderão ser substituídos a qualquer tempo, competindo a cada PARCEIRO comunicar ao (s) outro (s) acerca desta alteração.</p>
<p><span style="font-weight: bold;">3.3.</span> {!! $contrato->clausula_edit_3_3 !!}</p>


<h5 style="font-weight: bold;">CLÁUSULA QUARTA - DOS RECURSOS FINANCEIROS</h5>

<p><span style="font-weight: bold;">4.1</span> O(A) {!! $contrato->nome_parceiro  !!} transferirá recursos financeiros no valor total de R$ {!! $contrato->valor_financeiro !!}, conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo.</p>
<p><span style="font-weight: bold;">4.2</span> Os valores especificados no item acima serão recebidos pela {!! $contrato->nome_fund_apoio !!} em conta específica.</p>
<p><span style="font-weight: bold;">4.3</span> O Parceiro Privado efetuará os aportes financeiros previstos no Plano de Trabalho através de depósitos em conta- corrente específica, servindo o comprovante da operação bancária como recibo, para fins de direito, do repasse dos recursos financeiros previstos por este Acordo de Parceria.</p>
<p><span style="font-weight: bold;">4.4</span> Após execução total do projeto, havendo ainda saldos provenientes das receitas obtidas de aplicações financeiras, esses serão devolvidos para o Parceiro Privado ou destinados para ação congênere, nos termos de instrumento jurídico próprio a ser firmado pelas partes.</p>
<p><span style="font-weight: bold;">4.5</span> Observadas as demais disposições previstas neste Acordo de Parceria, os PARCEIROS acordam, desde já, que os valores mencionados no Plano de Trabalho são estimados com base nas premissas e termos especificados no mencionado Anexo.</p>
<p><span style="font-weight: bold;">4.6</span> Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo parceiro privado deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, {!! $contrato->clausula_opcional_4_6 !!} ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.</p>
<p><span style="font-weight: bold;">4.7</span> Do valor total repassado, (a) fundação de apoio poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.</p>
<p><span style="font-weight: bold;">4.7.1</span> Os valores dos recursos financeiros previstos nesta cláusula poderão ser alterados por meio de termo aditivo, com as necessárias justificativas e de comum acordo entre os PARCEIROS, o que implicará a revisão das metas pactuadas e a alteração do Plano de Trabalho.</p>
<!-- <p style="display: none;">{{$count = 7}}</p> -->
<!-- <p style="display: none;">{{$sub_count = 0}}</p> -->
@if($contrato->clausula_edit_4_8 == '')
@else
<p><span style="font-weight: bold;">4.{{++$count}}</span> {!! $contrato->clausula_edit_4_8 !!}</p>
@endif

@if($contrato->clausula_edit_4_8_1 == '')
@else
<p><span style="font-weight: bold;">4.8.{{++$sub_count}}</span> {!! $contrato->clausula_edit_4_8_1 !!}</p>
@endif

@if($contrato->clausula_edit_4_8_2 == '')
@else
<p><span style="font-weight: bold;">4.8.{{++$sub_count}}</span> {!! $contrato->clausula_edit_4_8_2 !!}</p>
@endif

@if($contrato->clausula_edit_4_9 == '')
@else
<p><span style="font-weight: bold;">4.{{++$count}}</span> {!! $contrato->clausula_edit_4_9 !!}</p>
@endif
<!-- <p style="display: none;">{{$sub_count = 0}}</p> -->
@if($contrato->clausula_edit_4_9_1 == '')
@else
<p><span style="font-weight: bold;">4.9.{{++$sub_count}}</span> {!! $contrato->clausula_edit_4_9_1 !!}</p>
@endif

@if($contrato->clausula_edit_4_10 == '')
@else
<p><span style="font-weight: bold;">4.{{++$count}}</span> {!! $contrato->clausula_edit_4_10 !!}</p>
@endif

<p><span style="font-weight: bold;">4.1</span> O(A) {!! $contrato->nome_parceiro !!} transferirá recursos financeiros no valor total de R$ {!! $contrato->valor_financeiro !!}, conforme cronograma de desembolso constante no Plano de Trabalho, anexo a este Acordo.</p>
<p><span style="font-weight: bold;">4.2</span> Os recursos financeiros serão transferidos à {!! $contrato->nome_parceiro !!} mediante depósito(s) no Banco do Brasil, por meio de Guia de Recolhimento da União-GRU, na qual deverá constar o código da UG, gestão e código do recolhimento indicados pela {!! $contrato->nome_parceiro !!}.</p>
<p><span style="font-weight: bold;">4.3</span> {!! $contrato->clausula_edit_4_3 !!}</p>
<p><span style="font-weight: bold;">4.4</span> A(O) {!! $contrato->nome_ict!!} solicitará autorização orçamentária para incorporação dos valores transferidos.</p>
<p><span style="font-weight: bold;">4.5</span> Caso não seja possível a incorporação dos valores transferidos dentro do tempo hábil para a execução das ações previstas no Plano de Trabalho, o presente instrumento será rescindido de comum acordo e a {!! $contrato->nome_ict!!} devolverá os recursos repassados.</p>
<p><span style="font-weight: bold;">4.6</span> Os recursos transferidos à {!! $contrato->nome_ict!!}, enquanto não utilizados, seguirão as normas da Secretaria do Tesouro Nacional – STN, no que tange à aplicação, rendimentos e outras formas de correção.</p>
<p><span style="font-weight: bold;">4.7</span> Eventual saldo de recurso transferido pelo parceiro ao {!! $contrato->nome_ict!!}, não utilizado no objeto deste Acordo, após a sua conclusão, será restituído ao parceiro, corrigidos nos termos da Secretaria do Tesouro Nacional - STN.</p>
<p><span style="font-weight: bold;">4.8</span> A(O) {!! $contrato->nome_ict!!} não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.</p>
<p><span style="font-weight: bold;">4.9</span> A(O) {!! $contrato->nome_ict!!} não disponibilizará recursos orçamentários e financeiros próprios na execução deste Acordo de Parceria, suspendendo sua execução, caso o repasse não seja efetivado conforme previsto no Plano de Trabalho.</p>
<p><span style="font-weight: bold;">4.10</span> Qualquer aumento ao orçamento do Plano de Trabalho executado por este Acordo de Parceria, que torne necessário o aporte de recursos adicionais pelo {!! $contrato->nome_parceiro !!} deverá ser prévia e formalmente analisado e aprovado pelas Parceiros, devendo ser implementado tão somente após celebração de termo aditivo a este Acordo de Parceria.</p>
<p><span style="font-weight: bold;">4.11</span> A transposição, o remanejamento ou a transferência de recursos de categoria de programação para outra poderão ocorrer com o objetivo de conferir eficácia e eficiência às atividades de ciência, tecnologia e inovação.</p>
<p><span style="font-weight: bold;">4.11.1</span> No âmbito deste projeto de pesquisa, desenvolvimento e inovação, o coordenador indicará a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</p>
<p><span style="font-weight: bold;">4.11.2</span> Por ocasião da ocorrência de quaisquer das ações previstas no item anterior, a {!! $contrato->nome_ict!!} poderá alterar a distribuição inicialmente acordada, promover modificações internas ao seu orçamento, alterar rubricas ou itens de despesas, desde que não modifique o valor total do projeto.</p>

<p><b>4.12</b> São dispensáveis de formalização por meio de Termo Aditivo as alterações previstas no item 4.9 que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</p>

<p><span style="font-weight: bold;">4.12.1</span> Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, necessárias para efetiva execução do projeto, ficarão dispensadas de prévia anuência do {!! $contrato->nome_parceiro !!}, hipótese em que o coordenador do projeto solicitará a alteração à {!! $contrato->nome_ict!!}, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.</p>
<p><span style="font-weight: bold;">4.13</span> A(O) {!! $contrato->nome_ict!!} não responderá pela suplementação de recursos para fazer frente a despesas decorrentes de quaisquer fatores externos ao seu controle, como flutuação cambial e alterações nos valores de taxas escolares.</p>
<p><span style="font-weight: bold;">4.14</span> Do valor total repassado, à {!! $contrato->nome_ict!!} poderá utilizar até 15% (quinze por cento) para custear despesas operacionais, definidas e justificadas no Plano de Trabalho.</p>



<h5 style="font-weight: bold;">CLÁUSULA QUINTA - DO PESSOAL</h5>
<p><span style="font-weight: bold;">5.1</span> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício ou de qualquer outra natureza com a EMPRESA PARCERIA e o pessoal da {!! $contrato->nome_ict_com_fund_apoio!!}  e vice-versa, cabendo a cada PARCEIRO a responsabilidade pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.</p>



<h5 style="font-weight: bold;">CLÁUSULA SEXTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h5>
<!-- <p style="display: none;">{{$count = 0}}</p> -->
@if($contrato->clausula_edit_6_1 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_1 !!}</p>
@endif

@if($contrato->clausula_edit_6_2 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_2 !!}</p>
@endif

@if($contrato->clausula_edit_6_3 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_3 !!}</p>
@endif

@if($contrato->clausula_edit_6_4 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_4 !!}</p>
@endif

@if($contrato->clausula_edit_6_5 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_5 !!}</p>
@endif

@if($contrato->clausula_edit_6_6 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_6 !!}</p>
@endif

@if($contrato->clausula_edit_6_7 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_7 !!}</p>
@endif

@if($contrato->clausula_edit_6_8 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_8 !!}</p>
@endif

@if($contrato->clausula_edit_6_9 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_9 !!}</p>
@endif

@if($contrato->clausula_edit_6_10 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_10 !!}</p>
@endif

@if($contrato->clausula_edit_6_11 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_11 !!}</p>
@endif

@if($contrato->clausula_edit_6_12 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_12 !!}</p>
@endif

@if($contrato->clausula_edit_6_13 == '')
@else
<p><span style="font-weight: bold;">6.{{++$count}}</span> {!! $contrato->clausula_edit_6_13 !!}</p>
@endif



<h5 style="font-weight: bold;">CLÁUSULA SÉTIMA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h5>

<p><span style="font-weight: bold;">7.1</span> Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao contrato ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito da PARTE referida.</p>
<p><span style="font-weight: bold;">7.2</span> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.</p>
<p><span style="font-weight: bold;">7.3</span> Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem.</p>
<p><span style="font-weight: bold;">7.4</span> As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS.</p>

<h5 style="font-weight: bold;">CLÁUSULA OITAVA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h5>

<p><span style="font-weight: bold;">8.1</span> Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO.</p>
<p><span style="font-weight: bold;">8.2</span> Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer.</p>
<p><span style="font-weight: bold;">8.3</span> As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade.</p>
<p><span style="font-weight: bold;">8.4</span> Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses:</p>
<p><span style="font-weight: bold;">8.4.1</span> Informações técnicas ou comerciais que já sejam do conhecimento das PARTES na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pela PARCEIRO que a revele;</p>
<p><span style="font-weight: bold;">8.4.2</span> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S);</p>
<p><span style="font-weight: bold;">8.4.2.1</span>  Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público.</p>
<p><span style="font-weight: bold;">8.4.3</span> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade;</p>
<p><span style="font-weight: bold;">8.4.4</span> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa;</p>
<p><span style="font-weight: bold;">8.4.5</span> Revelação expressamente autorizada, por escrito, pelas PARTES.</p>
<p><span style="font-weight: bold;">8.5</span> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada.</p>
<!-- <p style="display: none;">{{$count = 5}}</p> -->
@if($contrato->clausula_edit_8_6 == '')
@else
<p><span style="font-weight: bold;">8.{{++$count}}</span> {!! $contrato->clausula_edit_8_6 !!}</p>
@endif

@if($contrato->clausula_edit_8_7 == '')
@else
<p><span style="font-weight: bold;">8.{{++$count}}</span> {!! $contrato->clausula_edit_8_7 !!}</p>
@endif

@if($contrato->clausula_edit_8_8 == '')
@else
<p><span style="font-weight: bold;">8.{{++$count}}</span> {!! $contrato->clausula_edit_8_8 !!}</p>
@endif



<h5 style="font-weight: bold;">CLÁUSULA NONA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h5>
<!-- <p style="display: none;">{{$count = 0}}</p> -->
@if($contrato->clausula_edit_9_1 == '')
@else
<p><span style="font-weight: bold;">9.{{++$count}}</span> {!! $contrato->clausula_edit_9_1 !!}</p>
@endif

@if($contrato->clausula_edit_9_2 == '')
@else
<p><span style="font-weight: bold;">9.{{++$count}}</span> {!! $contrato->clausula_edit_9_2 !!}</p>
@endif

@if($contrato->clausula_edit_9_3 == '')
@else
<p><span style="font-weight: bold;">9.{{++$count}}</span> {!! $contrato->clausula_edit_9_3 !!}</p>
@endif

@if($contrato->clausula_edit_9_4 == '')
@else
<p><span style="font-weight: bold;">9.{{++$count}}</span> {!! $contrato->clausula_edit_9_4 !!}</p>
@endif
<!-- 	<p style="display: none;">{{ $count_letter = 'z' }}</p>	 -->
@if($contrato->clausula_edit_9_a == '')
@else
<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</span> {!! $contrato->clausula_edit_9_a !!}</h6>
@endif

@if($contrato->clausula_edit_9_b == '')
@else
<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</span> {!! $contrato->clausula_edit_9_b !!}</h6>
@endif

@if($contrato->clausula_edit_9_c == '')
@else
<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</span> {!! $contrato->clausula_edit_9_c !!}</h6>
@endif

@if($contrato->clausula_edit_9_d == '')
@else
<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</span> {!! $contrato->clausula_edit_9_d !!}</h6>
@endif

@if($contrato->clausula_edit_9_e == '')
@else
<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</span> {!! $contrato->clausula_edit_9_e !!}</h6>
@endif


<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA - DO ACOMPANHAMENTO</h5>

<p><span style="font-weight: bold;">10.1</span> Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades.</p>
<p><span style="font-weight: bold;">10.2</span> O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas.</p>
<p><span style="font-weight: bold;">10.3</span> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros.</p>
<p><span style="font-weight: bold;">10.4</span> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo.</p>


<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA PRIMEIRA - DA VIGÊNCIA E DA PRORROGAÇÃO</h5>

<p><span style="font-weight: bold;">11.1</span> O presente Acordo de Parceria para PD&I vigerá pelo prazo de {!! $contrato->prazo_vigencia !!} anos, a partir da data de sua assinatura, prorrogáveis.</p>
<p><span style="font-weight: bold;">11.2</span> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>



<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA SEGUNDA - DAS ALTERAÇÕES</h5>

<p><span style="font-weight: bold;">12.1</span> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo.</p>
<p><span style="font-weight: bold;">12.2</span> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento.</p>
<p><span style="font-weight: bold;">12.3</span> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou.</p>
<p><span style="font-weight: bold;">12.4</span> São dispensáveis de formalização por meio de Termo Aditivo as alterações que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.</p>
<!-- <p style="display: none;">{{$count = 4}}</p> -->
@if($contrato->clausula_edit_12_4_1 == '')
@else
<p><span style="font-weight: bold;">12.{{++$count}}</span> {!! $contrato->clausula_edit_12_4_1 !!}</p>
@endif

@if($contrato->clausula_edit_12_4_2 == '')
@else
<p><span style="font-weight: bold;">12.{{++$count}}</span> {!! $contrato->clausula_edit_12_4_2 !!}</p>
@endif


<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA TERCEIRA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h5>

<p><b>13.1</b> Os PARCEIROS exercerão a fiscalização técnico-financeira das atividades do presente Acordo.</p>

@if($contrato->clausula_edit_13_2 == '')
@else
<p><b>13.2</b> {!! $contrato->clausula_edit_13_2 !!}.</p>
@endif
<!-- 	<p style="display: none;">{{ $count_letter = 'z' }}</p>	 -->
@if($contrato->clausula_edit_13_2_a == '')
@else
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</b> {!! $contrato->clausula_edit_13_2_a !!}</p>
@endif

@if($contrato->clausula_edit_13_2_b == '')
@else
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">{{str_split(++$count_letter)[1]}})</b> {!! $contrato->clausula_edit_13_2_b !!}</p>
@endif

<p><b>13.3</b> No Formulário de Resultado de que trata a subcláusula 13.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas.</p>
<p><b>13.4</b> Caberá a cada PARCEIRO adotar as providências necessárias julgadas cabíveis, caso os relatórios parciais de que trata a subcláusula primeira demonstrem inconsistências na execução do objeto deste Acordo.</p>

<!-- <p style="display: none;">{{$count = 4}}</p> -->
@if($contrato->clausula_edit_13_5 == '')
@else
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">13.{{++$count}}</b> {!! $contrato->clausula_edit_13_5 !!}</p>
@endif
@if($contrato->clausula_edit_13_6 == '')
@else
<p style="margin-left: 16px !important"><b style="margin-right: 8px !important">13.{{++$count}}</b> {!! $contrato->clausula_edit_13_6 !!}</p>
@endif

<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA QUARTA – DA EXTINÇÃO DO ACORDO</h5>

<p><span style="font-weight: bold;">14.1</span> Este Acordo poderá, a qualquer tempo, ser denunciado pelos PARCEIROS, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de 60 (sessenta) dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os PARCEIROS, creditando eventuais benefícios adquiridos no período.</p>
<!-- <p style="display: none;">{{$count = 1}}</p> -->
@if($contrato->clausula_edit_14_2 == '')
@else
<p><span style="font-weight: bold;">14.{{++$count}}</span> {!! $contrato->clausula_edit_14_2 !!}.</p>
@endif

@if($contrato->clausula_edit_14_2_1 == '')
@else
<p><span style="font-weight: bold;">14.{{++$count}}</span> {!! $contrato->clausula_edit_14_2_1 !!}.</p>
@endif

@if($contrato->clausula_edit_14_2_2 == '')
@else
<p><span style="font-weight: bold;">14.{{++$count}}</span> {!! $contrato->clausula_edit_14_2_2 !!}.</p>
@endif

@if($contrato->clausula_edit_14_3 == '')
@else
<p><span style="font-weight: bold;">14.{{++$count}}</span> {!! $contrato->clausula_edit_14_3 !!}</p>
@endif

@if($contrato->clausula_edit_14_4 == '')
@else
<p><span style="font-weight: bold;">14.{{++$count}}</span> {!! $contrato->clausula_edit_14_4 !!}</p>
@endif

<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA QUINTA - DA PUBLICIDADE</h5>

<p><span style="font-weight: bold;">15.1</span> {!! $contrato->clausula_edit_15_1 !!}</p>

<h5 style="font-weight: bold;">CLAUSULA DÉCIMA SEXTA – DOS BENS</h5>
<!-- <p style="display: none;">{{$count = 0}}</p> -->
@if($contrato->clausula_edit_16_1 == '')
@else
<p><span style="font-weight: bold;">16.{{++$count}}</span> {!! $contrato->clausula_edit_16_1 !!}</p>
@endif

@if($contrato->clausula_edit_16_2 == '')
@else
<p><span style="font-weight: bold;">16.{{++$count}}</span> {!! $contrato->clausula_edit_16_2 !!}</p>
@endif


<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA SÉTIMA – DAS NOTIFICAÇÕES</h5>

<p><b>17.1</b> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no respectivo endereço do PARCEIRO notificado, conforme as seguintes informações:</p>


<p><b>Do PARCEIRO PÚBLICO:</b></p>
<p><b>Endereço:</b> {!! $contrato->parceiro_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->parceiro_contato_telefone !!}, <b>Celular:</b> {!! $contrato->parceiro_contato_celular !!}, <b>E-mail:</b> {!! $contrato->parceiro_contato_email !!}</p>

<p><b>Do PARCEIRO PRIVADO:</b></p>
<p><b>Endereço:</b> {!! $contrato->privado_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->privado_contato_telefone !!}, <b>Celular:</b> {!! $contrato->privado_contato_celular !!}, <b>E-mail:</b> {!! $contrato->privado_contato_email !!}</p>

<p><b>Da FUNDAÇÃO DE APOIO:</b></p>
<p><b>Endereço:</b> {!! $contrato->apoio_contato_endereço !!}, <b>Telefone:</b> {!! $contrato->apoio_contato_telefone !!}, <b>Celular:</b> {!! $contrato->apoio_contato_celular !!}, <b>E-mail:</b> {!! $contrato->apoio_contato_email !!}</p>
<!-- <p style="display: none;">{{$count = 1}}</p> -->
<!-- <p style="display: none;">{{$sub_count = 0}}</p> -->
@if($contrato->clausula_edit_17_2 == '')
@else
<p><span style="font-weight: bold;">17.{{++$count}}</span> {!! $contrato->clausula_edit_17_2 !!}</p>
@endif
@if($contrato->clausula_edit_17_2_1 == '')
@else
<p><span style="font-weight: bold;">17.2.{{++$sub_count}}</span> {!! $contrato->clausula_edit_17_2_1 !!}</p>
@endif
@if($contrato->clausula_edit_17_2_2 == '')
@else
<p><span style="font-weight: bold;">17.2.{{++$sub_count}}</span> {!! $contrato->clausula_edit_17_2_2 !!}</p>
@endif
@if($contrato->clausula_edit_17_2_3 == '')
@else
<p><span style="font-weight: bold;">17.2.{{++$sub_count}}</span> {!! $contrato->clausula_edit_17_2_3 !!}</p>
@endif
@if($contrato->clausula_edit_17_2_4 == '')
@else
<p><span style="font-weight: bold;">17.2.{{++$sub_count}}</span> {!! $contrato->clausula_edit_17_2_4 !!}</p>
@endif
@if($contrato->clausula_edit_17_3 == '')
@else
<p><span style="font-weight: bold;">17.{{++$count}}</span> {!! $contrato->clausula_edit_17_3 !!}</p>
@endif

<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA OITAVA – DISPOSIÇÕES GERAIS</h5>
<p><b>18.1</b> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar com alguma inovação.</p>

<h5 style="font-weight: bold;">CLÁUSULA DÉCIMA NONA - DO FORO</h5>

<p>
<span style="font-weight:bold;">19.1. </span>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de {{$contrato->estado_foro}}, cidade de {{$contrato->cidade_foro}}, para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109 da Constituição Federal.  {{$contrato->clausula_edit_17_1}}<br/>
</p>
<br/>
<p style="font-weight: bold;">{{$contrato->cidade_foro}}/{{$contrato->estado_foro}}, {{$contrato->data_foro}}.</p><br/>

<p style="text-align: center;">Pelo(a) {{$contrato->nome_ict}}:</p>
<p style="text-align: center;">______________________________________________</p>
<p style="text-align: center;">{{$contrato->rep_legal}}</p>
<p style="text-align: center;">{{$contrato->cargo_rep_foro}}</p>
<br/>
<p style="text-align: center;">Pelo(a) {{$contrato->nome_parceiro}}:</p>
<p style="text-align: center;">______________________________________________</p>
<p style="text-align: center;">{{$contrato->parceiro_rep_legal}}</p>
<p style="text-align: center;">{{$contrato->parceiro_cargo}}</p>
<br/>
@if($contrato->nome_inst_fundacao == '')
@else
<p style="text-align: center;">Pelo(a) {{$contrato->nome_inst_fundacao}}:</p>
<p style="text-align: center;">______________________________________________</p>
<p style="text-align: center;">{{$contrato->nome_rep_fund_apoio}}</p>
<p style="text-align: center;">{{$contrato->cargo_rep_fund_apoio}}</p>
@endif