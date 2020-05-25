
<div style="width: 100%; margin-top: 1.5cm !important; margin-left: 1.5cm !important; margin-right:1cm !important; margin-bottom: 1cm !important">
<h4 style="font-weight: bold; text-transform: uppercase; font-size: 12pt;">
SERVIÇO PÚBLICO FEDERAL<br/>MINISTÉRIO DA EDUCAÇÃO<br/>
SECRETARIA DE EDUCAÇÃO PROFISSIONAL E TECNOLÓGICA</h4>
	<br/><br/>
<h4 style="font-weight: bold; text-transform: uppercase !important; font-size: 12pt;">ACORDO DE COOPERAÇÃO TÉCNICA QUE ENTRE SI CELEBRAM {{strtoupper($contrato->nome_ict)}}, POR MEIO DO NÚCLEO DE INOVAÇÃO TECNOLÓGICA E {{strtoupper($contrato->nome_parceiro)}}, PARA FINS QUE ESPECIFICA.</h4>
	<br/><br/>
<h5 style="font-weight:bold;">1º PARCEIRO</h5>
<p>
<span style="font-weight:bold;">Nome:</span> {{$contrato->nome_teste}}<br/>
<span style="font-weight:bold;">Natureza Jurídica:</span> {{$contrato->nat_juridica}}<br/>
<span style="font-weight:bold;">CNPJ nº:</span> {{$contrato->cnpj}}<br/>
<span style="font-weight:bold;">Endereço:</span> {{$contrato->endereco}}<br/>
<span style="font-weight:bold;">Cidade:</span> {{$contrato->cidade}}, <span style="font-weight:bold;">UF:</span> {{$contrato->uf}}, <span style="font-weight:bold;">CEP:</span> {{$contrato->cep}}<br/>
<span style="font-weight:bold;">Representante Legal:</span> {{$contrato->rep_legal}}<br/>
<span style="font-weight:bold;">C.P.F / M.F:</span> {{$contrato->cpf}}<br/>
<span style="font-weight:bold;">Identidade n.º:</span> {{$contrato->rg}}<br/>
<span style="font-weight:bold;">Órgão expedido:</span> {{$contrato->orgao_exp}}<br/>
<span style="font-weight:bold;">Nacionalidade:</span> {{$contrato->nacionalidade}}<br/>
<span style="font-weight:bold;">Estado Civil:</span> {{$contrato->est_civil}}<br/>
<span style="font-weight:bold;">Cargo:</span> {{$contrato->ato_nomeacao}}<br/>
<span style="font-weight:bold;">Doravante denominado:</span> {{$contrato->doravante_denominado}}<br/>
</p>
	
<h5 style="font-weight:bold;">2º PARCEIRO</h5>
<p>
<span style="font-weight:bold;">Nome:</span> {{$contrato->nome_parceiro_instituicao}}<br/>
<span style="font-weight:bold;">Natureza Jurídica:</span> {{$contrato->parceiro_nat_juridica}}<br/>
<span style="font-weight:bold;">CNPJ nº:</span> {{$contrato->parceiro_cnpj}}<br/>
<span style="font-weight:bold;">Endereço:</span> {{$contrato->parceiro_endereco}}<br/>
<span style="font-weight:bold;">Cidade:</span> {{$contrato->parceiro_cidade}},
<span style="font-weight:bold;">UF:</span> {{$contrato->parceiro_uf}}, 
<span style="font-weight:bold;">CEP:</span> {{$contrato->parceiro_cep}}<br/>
<span style="font-weight:bold;">Representante Legal:</span> {{$contrato->parceiro_rep_legal}}<br/>
<span style="font-weight:bold;">C.P.F / M.F:</span> {{$contrato->parceiro_cpf}}<br/>
<span style="font-weight:bold;">Identidade n.º:</span> {{$contrato->parceiro_rg}}<br/>
<span style="font-weight:bold;">Órgão expedido:</span> {{$contrato->parceiro_orgao_exp}}<br/>
<span style="font-weight:bold;">Cargo:</span> {{$contrato->parceiro_cargo}}<br/>
</p><br/>

<!-- PAGINA 2 -->
<p style="text-align: justify;"><span style="margin-left: 32px !important">Os <b>PARCEIROS</b></span>, anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:</p>

<h5 style="font-weight:bold;">CLÁUSULA PRIMEIRA - DO OBJETO</h5>

<p><span style="font-weight:bold;">1.1.</span> O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARCEIROS para desenvolver o {{$contrato->clausula_descricao}}, a ser executado nos termos do Plano de Trabalho, anexo, visando {{$contrato->clausula_objetivo}} e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.</p>

<h5 style="font-weight:bold;">CLÁUSULA SEGUNDA - DO PLANO DE TRABALHO</h5>


<p><span style="font-weight:bold;">2.1.</span> O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores.</p>
<p><span style="font-weight:bold;">2.2.</span> Respeitadas as previsões contidas na legislação em vigor, a(o) {{$contrato->nome_ict}} ICT com a interveniência da FUNDAÇÃO DE APOIO, fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo.</p>

@if($contrato->clausula_edit_2_3 == '')
@else
<p><span style="font-weight:bold;">2.3.</span> {!! $contrato->clausula_edit_2_3 !!}</p>
@endif

@if($contrato->clausula_edit_2_4 == '')
@else
<p><span style="font-weight:bold;">2.4.</span> {!! $contrato->clausula_edit_2_4 !!}</p>
@endif

@if($contrato->clausula_edit_2_5 == '')
@else
<p><span style="font-weight:bold;">2.5.</span> {!! $contrato->clausula_edit_2_5 !!}</p>
@endif

@if($contrato->clausula_edit_2_6 == '')
@else
<p><span style="font-weight:bold;">2.6.</span> {!! $contrato->clausula_edit_2_6 !!}</p>
@endif
<h5 style="font-weight:bold;">CLÁUSULA TERCEIRA - DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5>
		<p><span style="font-weight:bold;">3.1</span> São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I:</p>
		<p><span style="font-weight:bold;">3.1.1. Do(a) ICT:</span> {{$contrato->nome_inst_ict}}</p>
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">a)</span> Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;</h6>
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">b)</span> Prestar ao(s) parceiro(s) informações sobre a situação de execução dos projetos, nos termos deste Acordo;</h6>
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">c)</span> Demais</h6>  
		
		<p><span style="font-weight:bold;">3.1.2. Do(a) (PARCEIRO PRIVADO):</span> {{$contrato->nome_inst_ict}}</p>
	
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">a)</span> Indicar coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução;</h6> 
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">b)</span> Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos;</h6> 
		<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">a)</span> Demais</h6> 
		
	<p><span style="font-weight:bold;">3.1.3. Do(a) :</span> (FUNDAÇÃO DE APOIO - QUANDO HOUVER)</p>


	<h6 style="margin-left: 16pt;">a) Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I; </h6>
	<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">b)</span> Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;</h6>
	<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">c)</span> Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;</h6>
	<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">d)</span> Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;</h6>
	<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">e)</span> Informar previamente ao PARCEIRO PRIVADO os dados bancários e cadastrais necessários à realização dos aportes financeiros, cuidando para que a conta corrente a qual serão destinados os recursos seja específica para o projeto executado em conformidade com este Acordo de Parceria.</h6>
	<h6 style="margin-left: 16px;"><span style="margin-right: 8px;">f)</span> Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, inclusive os provenientes das receitas obtidas nas aplicações financeiras realizadas, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;</h6>


	<p><span style="font-weight:bold;">3.2.</span> Os Coordenadores de projeto poderão ser substituídos a qualquer tempo, competindo a  cada PARCEIRO comunicar ao (s) outro (s) acerca desta alteração.</p>

	<p style="font-weight:bold;">{!! $contrato->clausula_edit_3 !!}</p>

	<h5 style="font-weight:bold;">CLÁUSULA QUARTA - DO PESSOAL</h5>

	<p><span style="font-weight:bold;">4.1</span> Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício ou de qualquer outra natureza com a <span style="text-transform: uppercase !important; font-weight: bold !important">{{$contrato->nome_parceiro}}</span> e o pessoal da <span style="text-transform: uppercase !important; font-weight: bold !important">{!! $contrato->nome_ict !!}</span> e vice-versa, cabendo a cada PARCEIRO a responsabilidade pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.</p>



	<h5 style="font-weight:bold;">CLÁUSULA QUINTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h5>
	
	@if($contrato->clausula_edit_5_1 == '')
	@else
	<p><span style="font-weight:bold;">5.1</span> {!! $contrato->clausula_edit_5_1 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_2 == '')
	@else
	<p><span style="font-weight:bold;">5.2</span> {!! $contrato->clausula_edit_5_2 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_3 == '')
	@else
	<p><span style="font-weight:bold;">5.3</span> {!! $contrato->clausula_edit_5_3 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_4 == '')
	@else
	<p><span style="font-weight:bold;">5.4</span> {!! $contrato->clausula_edit_5_4 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_5 == '')
	@else
	<p><span style="font-weight:bold;">5.5</span> {!! $contrato->clausula_edit_5_5 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_6 == '')
	@else
	<p><span style="font-weight:bold;">5.6</span> {!! $contrato->clausula_edit_5_6 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_7 == '')
	@else
	<p><span style="font-weight:bold;">5.7</span> {!! $contrato->clausula_edit_5_7 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_8 == '')
	@else
	<p><span style="font-weight:bold;">5.8</span> {!! $contrato->clausula_edit_5_8 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_9 == '')
	@else
	<p><span style="font-weight:bold;">5.9</span> {!! $contrato->clausula_edit_5_9 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_10 == '')
	@else
	<p><span style="font-weight:bold;">5.10</span> {!! $contrato->clausula_edit_5_10 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_11 == '')
	@else
	<p><span style="font-weight:bold;">5.11</span> {!! $contrato->clausula_edit_5_11 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_12 == '')
	@else
	<p><span style="font-weight:bold;">5.12</span> {!! $contrato->clausula_edit_5_12 !!}</p>
	@endif

	@if($contrato->clausula_edit_5_13 == '')
	@else
	<p><span style="font-weight:bold;">5.13</span> {!! $contrato->clausula_edit_5_13 !!}</p>
	@endif




	<h5 style="font-weight:bold;">CLÁUSULA SEXTA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h5>

	<p><span style="font-weight:bold;">6.1</span> Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao acordo ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito do PARCEIRO referido.</p>



	<h5 style="font-weight:bold;">CLÁUSULA SÉTIMA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h5>

	<p><span style="font-weight:bold;">7.1</span> Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO. </p>
	<p><span style="font-weight:bold;">7.2</span> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer. </p>
	<p><span style="font-weight:bold;">7.3</span> As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade. </p>
	<p><span style="font-weight:bold;">7.4</span> Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses: </p>
	<p><span style="font-weight:bold;">7.4.1.</span> Informações técnicas ou comerciais que já sejam do conhecimento dos PARCEIROS na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pelo PARCEIRO que a revele; </p>
	<p><span style="font-weight:bold;">7.4.2.</span> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S); </p>
	<p><span style="font-weight:bold;">7.4.2.1.</span> Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público. </p>
	<p><span style="font-weight:bold;">7.4.3.</span> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade; </p>
	<p><span style="font-weight:bold;">7.4.4.</span> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa; </p>
	<p><span style="font-weight:bold;">7.4.5.</span> Revelação expressamente autorizada, por escrito, pelos PARCEIROS. </p>
	<p><span style="font-weight:bold;">7.5.</span> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. </p>

	@if($contrato->clausula_edit_7_6 == '')
	@else
	<p><span style="font-weight:bold;">7.6</span> {!! $contrato->clausula_edit_7_6 !!}</p>
	@endif

	@if($contrato->clausula_edit_7_7 == '')
	@else
	<p><span style="font-weight:bold;">7.7</span> {!! $contrato->clausula_edit_7_7 !!}</p>
	@endif

	@if($contrato->clausula_edit_7_8 == '')
	@else
	<p><span style="font-weight:bold;">7.8</span> {!! $contrato->clausula_edit_7_8 !!}</p>
	@endif



	<h5 style="font-weight:bold;">CLÁUSULA OITAVA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h5>
	
	@if($contrato->clausula_edit_8_1 == '')
	@else
	<p><span style="font-weight:bold;">8.1</span> {!! $contrato->clausula_edit_8_1 !!}</p>
	@endif

	@if($contrato->clausula_edit_8_2 == '')
	@else 
	<p><span style="font-weight:bold;">8.2</span> {!! $contrato->clausula_edit_8_2 !!}</p>
	@endif

	@if($contrato->clausula_edit_8_2_a == '')
	@else
	<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">a)</span> {!! $contrato->clausula_edit_8_2_a !!}</h6>
	@endif

	@if($contrato->clausula_edit_8_2_b == '')
	@else
	<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">b)</span> {!! $contrato->clausula_edit_8_2_b !!}</h6>
	@endif

	@if($contrato->clausula_edit_8_2_c == '')
	@else
	<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">c)</span> {!! $contrato->clausula_edit_8_2_c !!}</h6>
	@endif

	@if($contrato->clausula_edit_8_2_d == '')
	@else
	<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">d)</span> {!! $contrato->clausula_edit_8_2_d !!}</h6>
	@endif

	@if($contrato->clausula_edit_8_2_e == '')
	@else
	<h6 style="margin-left: 16px !important"><span style="margin-right: 8px !important">e)</span> {!! $contrato->clausula_edit_8_2_e !!}</h6>
	@endif
	


	<h5 style="font-weight:bold;">CLÁUSULA NONA - DO ACOMPANHAMENTO</h5>

	<p><span style="font-weight:bold;">9.1</span> Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades. </p>
	<p><span style="font-weight:bold;">9.2</span> O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. </p>
	<p><span style="font-weight:bold;">9.3</span> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros. </p>
	<p><span style="font-weight:bold;">9.4</span> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. </p>



	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA - DA VIGÊNCIA E DA PRORROGAÇÃO</h5>
	<p><span style="font-weight:bold;">10.1</span> O presente Acordo de Parceria para PD&I vigerá pelo prazo de {{$contrato->prazo_vigencia}} anos, a partir da data de sua assinatura, prorrogáveis.</p>
		

	<p><span style="font-weight:bold;">10.2</span> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica.</p>
	

	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA PRIMEIRA- DAS ALTERAÇÕES</h5>

	<p><span style="font-weight:bold;">11.1</span> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo. </p>
	<p><span style="font-weight:bold;">11.2</span> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento. </p>
	<p><span style="font-weight:bold;">11.3</span> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou. </p>
	


	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA SEGUNDA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h5>

	<p><span style="font-weight:bold;">12.1</span> Os PARCEIROS exercerão a fiscalização técnico-financeira das atividades do presente Acordo. </p>
	<p><span style="font-weight:bold;">12.2</span> O pesquisador deverá encaminhar ao Setor responsável ou COMISSÃO DA ICT: </p>
	
	@if($contrato->clausula_edit_12_a == '')
	@else
	<p style="margin-left: 16px !important"><span style="margin-right: 8px !important">a)</span> {!! $contrato->clausula_edit_12_a !!}</p>
	@endif

	@if($contrato->clausula_edit_12_b == '')
	@else
	<p style="margin-left: 16px !important"><span style="margin-right: 8px !important">b)</span> {!! $contrato->clausula_edit_12_b !!}</p>
	@endif

	<p><span style="font-weight:bold;">12.3</span> No Formulário de Resultado de que trata a subcláusula 12.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas. </p>
	<p><span style="font-weight:bold;">12.4</span> Caberá a cada PARCEIRO adotar as providências necessárias julgadas cabíveis</p>
	<p><span style="font-weight:bold;">12.5</span> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública. </p>




	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA TERCEIRA – DA EXTINÇÃO DO ACORDO</h5>

	<p><span style="font-weight:bold;">13.1</span> Este Acordo poderá, a qualquer tempo, ser denunciado pelos PARCEIROS, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de 60 (sessenta) dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os PARCEIROS, creditando eventuais benefícios adquiridos no período.. </p>
	
	@if($contrato->clausula_edit_13_2 == '')
	@else
	<p><span style="font-weight:bold;">13.2</span> {!! $contrato->clausula_edit_13_2 !!}</p>
	@endif

	@if($contrato->clausula_edit_13_2_1 == '')
	@else
	<p><span style="font-weight:bold;">13.2.1</span> {!! $contrato->clausula_edit_13_2_1 !!}</p>
	@endif

	@if($contrato->clausula_edit_13_2_2 == '')
	@else
	<p><span style="font-weight:bold;">13.2.2</span> {!! $contrato->clausula_edit_13_2_2 !!}</p>
	@endif

	@if($contrato->clausula_edit_13_3 == '')
	@else
	<p><span style="font-weight:bold;">13.3</span> {!! $contrato->clausula_edit_13_3 !!}</p>
	@endif

	<p><span style="font-weight:bold;">13.4 O</span> presente Acordo será extinto com o cumprimento do objeto ou com o decurso de prazo de vigência. </p>



	
	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA QUARTA - DA PUBLICIDADE </h5>
	<p>
		<span style="font-weight:bold;">14.1</span> A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da União (DOU) é condição indispensável para sua eficácia e será providenciada pela ICT no prazo de até 20 (vinte) dias da sua assinatura. <br/>
	</p>


	
	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES</h5>
	
	<p><span style="font-weight:bold;">15.1</span> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no respectivo endereço do PARCEIRO notificado, conforme as seguintes informações: PARCEIRO(S) PÚBLICO(S): (endereço completo, telefone, celular e e-mail) PARCEIRO(S) PÚBLICO(S): (endereço completo, telefone, celular e e-mail). </p>
	<p><span style="font-weight:bold;">15.2</span> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue: </p>
	<p><span style="font-weight:bold;">15.2.1</span> Quando entregue em mão a quem destinada, com o comprovante de recebimento; </p>
	<p><span style="font-weight:bold;">15.2.2</span> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro; </p>
	<p><span style="font-weight:bold;">15.2.3</span> Se enviada por fax, quando recebida pelo destinatário; </p>
	<p><span style="font-weight:bold;">15.2.4</span> Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada. </p>
	<p><span style="font-weight:bold;">15.3</span> Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas. </p>
	
	<br/><br/><br/>

	
	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA SEXTA – DISPOSIÇÕES GERAIS</h5>
	<p><span style="font-weight:bold;">16.1.</span> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar em alguma inovação. <br/></p>


	
	<h5 style="font-weight:bold;">CLÁUSULA DÉCIMA SETIMA – DO FORO</h5>
	<p>
		<span style="font-weight:bold;">17.1. </span>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de {{$contrato->estado_foro}}, cidade de {{$contrato->cidade_foro}}, para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109 da Constituição Federal. E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais. <br/>
	</p>
	<br/>
	<p style="font-weight:bold;margin-left: 9px !important">{{$contrato->cidade_foro}}, {{$contrato->estado_foro}}, {{$contrato->data_foro}}</p><br/>
	<p style="text-align: center;">______________________________________________</p>
	<p style="text-align: center; justify-content:center; align-items: center;">{{$contrato->nome_rep_foro}} <br/> {{$contrato->cargo_rep_foro}} do(a) {{$contrato->ict_inst_foro}}
	</p><br/>

	<p style="text-align: center;">______________________________________________</p>
	<p style="text-align: center; justify-content:center; align-items: center;">{{$contrato->nome_rep_privado_foro}} <br/> {{$contrato->nome_inst_privado_foro}}
	</p><br/>
	<p style="text-align: center;">______________________________________________</p>
	<p style="text-align: center; justify-content:center; align-items: center; margin-top: 0">{{$contrato->nome_testemunha_1}} <br/> Testemunha 1
	</p><br/>

	<p style="text-align: center;">______________________________________________</p>
	<p style="text-align: center; justify-content:center; align-items: center; margin-top: 0 !important">{{$contrato->nome_testemunha_2}} <br/> Testemunha 2
	</p>
	<br/>

</div>