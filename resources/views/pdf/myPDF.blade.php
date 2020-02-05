<!DOCTYPE html>
<html>
<head>
	<title>Contrato</title>
    <!-- Styles -->
    <link href="../public/css/pdf.css" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <style type="text/css">
   	p, h1, h2, h3, h4, h5{
   		font-family: 'Times New Roman' !important;
   		text-align: justify;
   	}
   </style>
</head>
<body>
	<h1>{{$title}}</h1>
	<h5 class="text-uppercase font-weight-bold roboto-font text-black text-center mt-2"> ACORDO DE  PARCERIA  PARA  PESQUISA, DESENVOLVIMENTO E INOVAÇÃO - PD&I QUE ENTRE SI CELEBRAM {{$contrato->nome_ict}}" E {{$contrato->nome_parceiro}}" NA FORMA A SEGUIR.</h5><br>
	<h5 class="text-uppercase">1º PARCEIRO</h5><hr>
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
	<h5 class="text-uppercase">2º PARCEIRO</h5><hr>
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
	</p><br>
	<p>
		Os <span class="font-weight-bold">PARCEIROS, </span>anteriormente qualificados, resolvem celebrar o presente Acordo de Parceria para Pesquisa, Desenvolvimento e Inovação - PD&I, em conformidade com as normas legais vigentes no Marco Legal de Ciência, Tecnologia e Inovação (Emenda Constitucional nº 85/15, Lei nº 10.973/2004, Lei nº 13.243/2016 e Decreto nº 9.283/2018), que deverá ser executado com estrita observância das seguintes cláusulas e condições:
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">1. CLÁUSULA PRIMEIRA - DO OBJETO</h5><br>
	<p>
		<span>1.1.	</span>O presente Acordo de Parceria para PD&I tem por objeto a cooperação técnica e científica entre os PARCEIROS para desenvolver o {{$contrato->clausula_descricao}}, a ser executado nos termos do Plano de Trabalho, anexo, visando {{$contrato->clausula_objetivo}} e à execução técnica de projeto de pesquisa, desenvolvimento e inovação – PD&I.
	</p><br>
	<h5 class="font-weight-bold">2. CLÁUSULA SEGUNDA - DO PLANO DE TRABALHO</h5><br>
	<p>
		2.1. O Plano de Trabalho define os objetivos a serem atingidos com o presente Acordo de Parceria, apresenta o planejamento dos trabalhos que serão desenvolvidos, detalha as atividades e as atribuições de cada um dos PARCEIROS, a alocação de recursos humanos, materiais e financeiros, bem como o cronograma físico-financeiro do projeto, a fim de possibilitar a fiel consecução do objeto desta parceria, estabelecendo objetivos, metas e indicadores. <br>
		2.2. Respeitadas as previsões contidas na legislação em vigor, a ICT fomentará/executará as atividades de pesquisa e desenvolvimento, conforme o Plano de Trabalho, sob as condições aqui acordadas, sendo parte integrante e indissociável deste Acordo. <br>
		2.3. Na execução do Plano de Trabalho, a atuação dos PARCEIROS dar-se-á sempre de forma associada. Para tanto, os PARCEIROS indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho. <br>
		2.4. Recaem  sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c,  item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.  <br>
		2.5. Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis. <br>
		2.6. A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo. <br>
	</p>

	<!------clausula---->

	<h5 class="font-weight-bold">3. CLÁUSULA TERCEIRA - DAS ATRIBUIÇÕES E RESPONSABILIDADES</h5><br>
	<p>
		3.1. São responsabilidades e obrigações, além dos outros compromissos assumidos neste Acordo de Parceria em PD&I: <br>
		<span class="font-weight-bold">3.1.1. Do(a) ICT:{{$contrato->nome_inst_ict}}</span><br>
		a)	Indicar um coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução; <br>
		b)	Prestar ao(s) parceiro(s) informações sobre a situação de execução dos projetos, nos termos deste Acordo;
		c)	Demais <br>  
		<span class="font-weight-bold">3.1.2. Do(a) {{$contrato->nome_inst_privado}}:(PARCEIRO PRIVADO)</span><br>
		a)	Indicar coordenador, no prazo de 15 (quinze) dias úteis contados da assinatura deste Acordo, para acompanhar a sua execução; <br>
		b)	Colaborar, nos termos do plano de trabalho, para que o Acordo alcance os objetivos nele descritos; <br>
		c)	Demais <br>
		<span class="font-weight-bold">3.1.3. Do (a) {{$contrato->nome_inst_fundacao}}: (FUNDAÇÃO DE APOIO - QUANDO HOUVER)</span><br>
		<p style="margin-left: 20px !important">
			A)  Aplicar os recursos repassados exclusivamente nas atividades relacionadas à consecução do objeto deste Acordo de Parceria para PD& I; <br>
        	B)  Prestar à ICT informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;<br>
        	C)  Indicar coordenador, no prazo de 15 (quinze) dias úteis, contados da assinatura deste Acordo, para acompanhar a sua execução;<br>
        	D)  Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;<br>
        	E)  Informar previamente ao PARCEIRO PRIVADO os dados bancários e cadastrais necessários à realização dos aportes financeiros, cuidando para que a conta corrente a qual serão destinados os recursos seja específica para o projeto executado em conformidade com este Acordo de Parceria.<br>
        	F)  Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, inclusive os provenientes das receitas obtidas nas aplicações financeiras realizadas, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;<br>
        </p>
	</p>
	<p>
		<span class="font-weight-bold">3.2.</span>  Os Coordenadores de projeto poderão ser substituídos a qualquer tempo, competindo a  cada PARCEIRO comunicar ao (s) outro (s) acerca desta alteração. <br> 
		<span class="font-weight-bold">3.3.</span>  Os PARCEIROS são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente Acordo de Parceria para PD&I ou de publicações a ele referentes. <br>
	</p>
	<h5 class="font-weight-bold">4. CLÁUSULA QUARTA - DO PESSOAL</h5><br>
	<p>
		4.1. Cada PARCEIRO se responsabiliza, individualmente, pelo cumprimento das obrigações trabalhistas, previdenciárias, fundiárias e tributárias derivadas da relação existente entre si e seus empregados, servidores, administradores, prepostos e/ou contratados, que colaborarem na execução do objeto deste Acordo, de forma que não se estabelecerá, em hipótese alguma, vínculo empregatício ou de qualquer outra natureza com a {{$contrato->nome_empresa_parceira}} e o pessoal da {{$contrato->nome_ict_parceira}} e vice-versa, cabendo a cada PARCEIRO a responsabilidade pela condução, coordenação e remuneração de seu pessoal, e por administrar e arquivar toda a documentação comprobatória da regularidade na contratação.
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">5. CLÁUSULA QUINTA - DA PROPRIEDADE INTELECTUAL E DA CRIAÇÃO PROTEGIDA</h5><br>
	<p>
		<span class="font-weight-bold">5.1.</span>  Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário. <br>

		<span class="font-weight-bold">5.2.</span>  Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre os PARCEIROS, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da Lei nº 10.973/2004. <br>

		<span class="font-weight-bold">5.3.</span>  A divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para a ICT/AGÊNCIA DE FOMENTO. <br>

		<span class="font-weight-bold">5.4 </span> O instrumento previsto na subcláusula CINCO.TRES deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes. <br>

		<span class="font-weight-bold">5.5 </span> Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais. <br>

		<span class="font-weight-bold">5.6 </span> Os PARCEIROS devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros. <br>

		<span class="font-weight-bold">5.7 </span> Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente. <br>

		<span class="font-weight-bold">5.8 </span> Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento da ICT/AGÊNCIA DE FOMENTO. <br>

		<span class="font-weight-bold">5.9 </span> Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países. <br>

		<span class="font-weight-bold">5.10</span>  As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos PARCEIROS ora acordantes. <br>

		<span class="font-weight-bold">5.11</span>  Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os PARCEIROS concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos PARCEIROS, em conjunto ou separadamente. <br>

		<span class="font-weight-bold">5.12</span>  Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os PARCEIROS concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias. <br>

		<span class="font-weight-bold">5.13</span>  A ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países. <br>
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">6. CLÁUSULA SEXTA - DA DIVULGAÇÃO E DAS PUBLICAÇÕES</h5><br>
	<p>
		<span class="font-weight-bold">6.1</span> Os PARCEIROS concordam em não utilizar o nome do outro PARCEIRO ou de seus empregados em qualquer propaganda, informação à imprensa ou publicidade relativa ao acordo ou a qualquer produto ou serviço decorrente deste, sem a prévia aprovação por escrito do PARCEIRO referido. <br>

		<span class="font-weight-bold">6.2</span> Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos. <br>

		<span class="font-weight-bold">6.3</span> Os PARCEIROS não poderão utilizar o nome, logomarca ou símbolo um do outro em promoções e atividades afins alheias ao objeto deste Acordo, sem prévia autorização do respectivo PARCEIRO sob pena de responsabilidade civil em decorrência do uso indevido do seu nome e da imagem. <br>

		<span class="font-weight-bold">6.4</span> As publicações, materiais de divulgação e resultados materiais, relacionados com os recursos do presente Acordo, deverão mencionar expressamente o apoio recebido dos PARCEIROS. <br>
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">7. CLÁUSULA SÉTIMA - DAS INFORMAÇÕES CONFIDENCIAIS E SIGILOSAS</h5><br>
	<p>
		<span class="font-weight-bold">7.1  </span>Os PARCEIROS adotarão todas as medidas necessárias para proteger o sigilo das INFORMAÇÕES CONFIDENCIAIS recebidas em função da celebração, desenvolvimento e execução do presente Acordo de Parceria, inclusive na adoção de medidas que assegurem a tramitação do processo, não as divulgando a terceiros, sem a prévia e escrita autorização da outro PARCEIRO. <br>

		<span class="font-weight-bold">7.2  </span>Fica vedado aos PARCEIROS utilizar, no âmbito deste Acordo de Parceria, nomes, símbolos e imagens que caracterizem promoção pessoal de autoridades ou servidores públicos.Os PARCEIROS informarão aos seus funcionários e prestadores de serviços e consultores que necessitem ter acesso às informações e conhecimentos que envolvem o objeto do Acordo, acerca das obrigações de sigilo assumidas, responsabilizando-se integralmente por eventuais infrações que estes possam cometer. <br>

		<span class="font-weight-bold">7.3  </span>As PARCEIROS farão com que cada pessoa de sua organização, ou sob o seu controle, que receba informações confidenciais, assuma o compromisso de confidencialidade, por meio assinatura de Termo de Confidencialidade. <br>

		<span class="font-weight-bold">7.4  </span>Não haverá violação das obrigações de CONFIDENCIALIDADE previstas no Acordo de Parceria nas seguintes hipóteses: <br>

		<span class="font-weight-bold">7.4.1. </span> Informações técnicas ou comerciais que já sejam do conhecimento dos PARCEIROS na data da divulgação, ou que tenham sido comprovadamente desenvolvidas de maneira independente e sem relação com o Acordo pelo PARCEIRO que a revele; <br>

		<span class="font-weight-bold">7.4.2. </span> Informações técnicas ou comerciais que sejam ou se tornem de domínio público, sem culpa da(s) PARCEIROS (S); <br>

		<span class="font-weight-bold">7.4.2.1. </span>Qualquer informação que tenha sido revelada somente em termos gerais, não será considerada de conhecimento ou domínio público. <br>

		<span class="font-weight-bold">7.4.3. </span> Informações técnicas ou comerciais que sejam recebidas de um terceiro que não esteja sob obrigação de manter as informações técnicas ou comerciais em confidencialidade; <br>

		<span class="font-weight-bold">7.4.4. </span> Informações que possam ter divulgação exigida por lei, decisão judicial ou administrativa; <br>

		<span class="font-weight-bold">7.4.5. </span> Revelação expressamente autorizada, por escrito, pelos PARCEIROS. <br>

		<span class="font-weight-bold">7.5. </span> A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. A divulgação científica, por meio de artigos em congressos, revistas e outros meios, relacionada ao objeto deste instrumento poderá ser realizada mediante autorização por escrito dos PARCEIROS, e não deverá, em nenhum caso, exceder ao estritamente necessário para a execução das tarefas, deveres ou contratos relacionados com a informação divulgada. <br>

		<span class="font-weight-bold">7.6. </span>As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção. <br>

		<span class="font-weight-bold">7.7. </span>Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo. <br>

		<span class="font-weight-bold">7.8. </span>Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio. <br>
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">8. CLÁUSULA OITAVA - CONFORMIDADE COM AS LEIS ANTICORRUPÇÃO</h5><br>
	<p>
		<span class="font-weight-bold">8.1 </span> Os PARCEIROS deverão tomar todas as medidas necessárias, observados os princípios de civilidade e legalidade, e de acordo com as boas práticas empresariais para cumprir e assegurar que (i) seus conselheiros, diretores, empregados qualquer pessoa agindo em seu nome, inclusive prepostos e subcontratados, quando houver (todos doravante referidos como “Partes Relacionadas” e, cada uma delas, como “uma Parte Relacionada”) obedecerão a todas as leis aplicáveis, incluindo àquelas relativas ao combate à corrupção, suborno e lavagem de dinheiro, bem como àquelas relativas a sanções econômicas, vigentes nas jurisdições em que os PARCEIROS estão constituídos e na jurisdição em que o Acordo de Parceria será cumprido (se diferentes), para impedir qualquer atividade fraudulenta por si ou por uma Parte Relacionada com relação ao cumprimento deste Acordo de Parceria. <br>

		<span class="font-weight-bold">8.2 </span> Um PARCEIRO deverá notificar imediatamente o outro sobre eventual suspeita de qualquer fraude tenha ocorrido, esteja ocorrendo, ou provavelmente ocorrerá, para que sejam tomadas as medidas necessárias para apurá-las. <br>

		<span class="font-weight-bold">8.1*</span> Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo. <br>

		<span class="font-weight-bold">8.2*</span> Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese: <br>
		<p style="margin-left: 15px !important">
			<span class="font-weight-bold">A)</span> Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc; <br>
			
			<span class="font-weight-bold">B)</span> Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder; <br>
			
			<span class="font-weight-bold">C)</span> Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS; <br>
			
			<span class="font-weight-bold">D)</span> Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo; <br>
			
			<span class="font-weight-bold">E)</span> Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente. <br>
		</p>
	</p>
	
	<!------clausula---->

	<h5 class="font-weight-bold">9. CLÁUSULA NONA - DO ACOMPANHAMENTO</h5><br>
	<p>
		<span class="font-weight-bold">9.1</span> Aos coordenadores indicados pelos PARCEIROS competirá dirimir as dúvidas que surgirem na sua execução e de tudo dará ciência às respectivas autoridades. <br>

		<span class="font-weight-bold">9.2</span> O coordenador do projeto indicado pela ICT/AGÊNCIA DE FOMENTO anotará, em registro próprio, as ocorrências relacionadas com a execução do objeto, recomendando as medidas necessárias à autoridade competente para regularização das inconsistências observadas. <br>

		<span class="font-weight-bold">9.3</span> O acompanhamento do projeto pelos coordenadores não exclui nem reduz a responsabilidade dos PARCEIROS perante terceiros. <br>

		<span class="font-weight-bold">9.4</span> A impossibilidade técnica ou científica quanto ao cumprimento de qualquer fase do Plano de Trabalho, que seja devidamente comprovada e justificada, acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou término do Plano de Trabalho e consequente extinção deste Acordo. <br>
	</p>

	<!------clausula---->

	<h5 class="font-weight-bold">10. CLÁUSULA DÉCIMA - DA VIGÊNCIA E DA PRORROGAÇÃO</h5><br>
	<p>
		<span class="font-weight-bold">10.1</span> O presente Acordo de Parceria para PD&I vigerá pelo prazo de {{$contrato->prazo_vigencia}} anos, a partir da data de sua assinatura, prorrogáveis. <br>

		<span class="font-weight-bold">10.2</span> Este Acordo de Parceria poderá ser prorrogado por meio de termo aditivo, com as respectivas alterações no Plano de Trabalho, mediante a apresentação de justifica técnica. <br>
	</p><br>
	<h5 class="font-weight-bold">11. CLÁUSULA DÉCIMA PRIMEIRA- DAS ALTERAÇÕES</h5><br>
	<p>
		<span class="font-weight-bold">11.1</span> As cláusulas e condições estabelecidas no presente instrumento poderão ser alteradas mediante celebração de termo aditivo. <br>

		<span class="font-weight-bold">11.2</span> A proposta de alteração, devidamente justificada, deverá ser apresentada por escrito, dentro da vigência do instrumento. <br>

		<span class="font-weight-bold">11.3</span> É vedado o aditamento do presente Acordo com o intuito de alterar o seu objeto, sob pena de nulidade do ato e responsabilidade do agente que o praticou. <br>
	</p><br>
	
	<!------clausula---->

	<h5 class="font-weight-bold">12. CLÁUSULA DÉCIMA SEGUNDA – DO MONITORAMENTO, DA AVALIAÇÃO E DA PRESTAÇÃO DE CONTAS</h5><br>
	<p>
		<span class="font-weight-bold">12.1</span> Os PARCEIROS exercerão a fiscalização técnico-financeira das atividades do presente Acordo. <br>

		<span class="font-weight-bold">12.2</span> O pesquisador deverá encaminhar ao Setor responsável ou COMISSÃO DA ICT: <br>

		<p style="margin-left: 10px !important">
			<span class="font-weight-bold">A)</span> Formulário de Resultado Parcial: anualmente, até o último dia útil do mês de dezembro de cada ano de vigência deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho; e <br>

			<span class="font-weight-bold">B)</span> Formulário de Resultado Final: no prazo de até 120 (cento e vinte) dias contados da conclusão do objeto deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho. <br>
		</p>

		<span class="font-weight-bold">12.3</span> No Formulário de Resultado de que trata a subcláusula 12.2, deverá ser demonstrada a compatibilidade entre as metas previstas e as alcançadas no período, bem como apontadas as justificativas em caso de discrepância, consolidando dados e valores das ações desenvolvidas. <br>

		<span class="font-weight-bold">12.4</span> Caberá a cada PARCEIRO adotar as providências necessárias julgadas cabíveis, caso os <br>

		<span class="font-weight-bold">12.5</span> A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública. <br>
	</p><br>

	<!------clausula---->

	<h5 class="font-weight-bold">13. CLÁUSULA DÉCIMA TERCEIRA – DA EXTINÇÃO DO ACORDO</h5><br>
	<p>
		<span class="font-weight-bold">13.1</span> Este Acordo poderá, a qualquer tempo, ser denunciado pelos PARCEIROS, devendo o interessado externar formalmente a sua intenção nesse sentido, com a antecedência mínima de 60 (sessenta) dias da data em que se pretenda que sejam encerradas as atividades, respeitadas as obrigações assumidas com terceiros entre os PARCEIROS, creditando eventuais benefícios adquiridos no período.. <br>

		<span class="font-weight-bold">13.2</span> Constituem motivos para rescisão de pleno direito o inadimplemento de quaisquer das cláusulas pactuadas neste Acordo, o descumprimento das normas estabelecidas na legislação vigente ou a superveniência de norma legal ou fato que tome material ou formalmente inexequível o Acordo de Parceria para PD&I, imputando-se aos PARCEIROS as responsabilidades pelas obrigações até então assumidas, devendo o PARCEIRO que se julgar prejudicado notificar o parceiro para que apresente esclarecimentos no prazo de 15 (quinze) dias corridos. <br>

		<span class="font-weight-bold">13.2.1</span> Prestados os esclarecimentos, os PARCEIROS deverão, por mútuo consenso, decidir pela rescisão ou manutenção do Acordo. <br>

		<span class="font-weight-bold">13.2.2</span> Decorrido o prazo para esclarecimentos, caso não haja resposta, o Acordo será rescindido de pleno direito, independentemente de notificações ou interpelações, judiciais ou extrajudiciais. <br>

		<span class="font-weight-bold">13.3 O</span> Acordo de Parceria será rescindido em caso de decretação de falência, liquidação extrajudicial ou judicial, ou insolvência de qualquer dos PARCEIROS, ou, ainda, no caso de 10/11 propositura de quaisquer medidas ou procedimentos contra qualquer dos PARCEIROS para sua liquidação e/ou dissolução; <br>

		<span class="font-weight-bold">13.4 O</span> presente Acordo será extinto com o cumprimento do objeto ou com o decurso de prazo de vigência. <br>
	</p><br>

	<!------clausula---->
	
	<h5 class="font-weight-bold">14. CLÁUSULA DÉCIMA QUARTA - DA PUBLICIDADE </h5><br>
	<p>
		<span class="font-weight-bold">14.1</span> A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da União (DOU) é condição indispensável para sua eficácia e será providenciada pela ICT no prazo de até 20 (vinte) dias da sua assinatura. <br>
	</p><br>

	<!------clausula---->
	
	<h5 class="font-weight-bold">15. CLÁUSULA DÉCIMA QUINTA – DAS NOTIFICAÇÕES</h5><br>
	<p>
		<span class="font-weight-bold">15.1</span> Qualquer comunicação ou notificação relacionada ao Acordo de Parceria poderá ser feita pelos PARCEIROS, por e-mail, fax, correio ou entregue pessoalmente, diretamente no respectivo endereço do PARCEIRO notificado, conforme as seguintes informações: PARCEIRO(S) PÚBLICO(S): (endereço completo, telefone, celular e e-mail) PARCEIRO(S) PÚBLICO(S): (endereço completo, telefone, celular e e-mail). <br>

		<span class="font-weight-bold">15.2</span> Qualquer comunicação ou solicitação prevista neste Acordo de Parceria será considerada como tendo sido legalmente entregue: <br>

		<span class="font-weight-bold">15.2.1</span> Quando entregue em mão a quem destinada, com o comprovante de recebimento; <br>

		<span class="font-weight-bold">15.2.2</span> Se enviada por correio, registrada ou certificada, porte pago e devidamente endereçada, quando recebida pelo destinatário ou no 5° (quinto) dia seguinte à data do despacho, o que ocorrer primeiro; <br>

		<span class="font-weight-bold">15.2.3</span> Se enviada por fax, quando recebida pelo destinatário; <br>

		<span class="font-weight-bold">15.2.4</span> Se enviada por e-mail, desde que confirmado o recebimento pelo destinatário, ou, após transcorridos 5 (cinco) dias úteis, o que ocorrer primeiro. Na hipótese de transcurso do prazo sem confirmação, será enviada cópia por correio, considerando-se, todavia, a notificação devidamente realizada. <br>

		<span class="font-weight-bold">15.3</span> Qualquer dos PARCEIROS poderá, mediante comunicação por escrito, alterar o endereço para o qual as comunicações ou solicitações deverão ser enviadas. <br>
	</p><br>

	<!------clausula---->
	
	<h5 class="font-weight-bold">16. CLÁUSULA DÉCIMA SEXTA – DISPOSIÇÕES GERAIS</h5><br>
	<p>
		<span class="font-weight-bold">16.1.</span> É livre o acesso dos agentes da administração pública, do controle interno e do Tribunal de Contas aos documentos e às informações relacionados a esse Acordo, bem como aos locais de execução do respectivo objeto, ressalvadas as informações tecnológicas e dados das pesquisas que possam culminar em alguma inovação. <br>
	</p><br>

	<!------clausula---->
	
	<h5 class="font-weight-bold">17. CLÁUSULA DÉCIMA SETIMA – DO FORO</h5><br>
	<p>
		<span class="font-weight-bold">17.1. </span>Fica eleito o foro da Justiça Federal, Seção Judiciária do Estado de {{$contrato->estado_foro}}, cidade de {{$contrato->cidade_foro}}, para dirimir quaisquer litígios oriundos deste ACORDO, nos termos do inciso I do artigo 109 da Constituição Federal. E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais. <br>
		<br>
		<p class="font-weight-bold" style="margin-left: 9px !important">Cidade, UF, Dia do Mês e ano: {{$contrato->cidade_uf_dia_foro}}</p>
		<br>
		<p class="text-center mx-auto">
			<span class="font-weight-bold text-center">
				Pelo(a) {{$contrato->ict_inst_foro}}<br>
				{{$contrato->nome_rep_foro}}<br>
				{{$contrato->cargo_rep_foro}}.<br>
			</span>

			<span class="font-weight-bold text-center">
				Pelo(a) {{$contrato->nome_inst_privado_foro}}<br>
				{{$contrato->nome_rep_privado_foro}}<br>
				{{$contrato->cargo_rep_privado_foro}}<br>
			</span>
		</p>
	</p>
	<br>
</body>
</html>