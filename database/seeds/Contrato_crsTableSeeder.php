<?php

use Illuminate\Database\Seeder;
use App\Contrato_cr;
use App\ContratoCorrecao;

class Contrato_crsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Contrato_cr::create ([
		    'nome_ict' => 'Facape',
			'nome_parceiro' => 'Univasf',
		    'nome_teste' => 'Tauã Almeida', 
		    'nat_juridica' => 'Empresa',
		    'cnpj' => '13246589',
		    'endereco' => 'Rua das Bananeiras, 250',
		    'cidade' => 'Petrolina',
		    'uf' => 'Pernambuco',
		    'cep' => '48904137',
		    'rep_legal' => 'Tauã',
		    'cpf' => '054739451',
		    'rg' => '13256598',
		    'orgao_exp' => 'SSP',
		    'nacionalidade' => 'Brasileiro',
		    'est_civil' => 'Solteiro',
		    'ato_nomeacao' => 'Nao sei',
		    'doravante_denominado' => 'Lorem Ipsum',

		    'nome_parceiro_instituicao' => 'Lorem Ipsum',
		    'parceiro_nat_juridica' => 'Lorem Ipsum',
		    'parceiro_cnpj' => '465789123',
		    'parceiro_endereco' => 'Lorem Ipsum',
		    'parceiro_cidade' => 'Lorem Ipsum',
		    'parceiro_uf' => 'Lorem Ipsum',
		    'parceiro_cep' => '456798145',
		    'parceiro_rep_legal' => 'Lorem Ipsum',
		    'parceiro_cpf' => '123456784',
		    'parceiro_rg' => '46798123',
		    'parceiro_orgao_exp' => 'Lorem Ipsum',
		    'parceiro_cargo' => 'Lorem Ipsum',
		    'parceiro_doravante_denominado' => 'Lorem Ipsum',

		    'clausula_descricao' => 'Lorem Ipsum',

		    'clausula_edit_2' => '2.3 Na execução do Plano de Trabalho, a atuação dos PARCEIROS dar-se-á sempre de forma associada. Para tanto, os PARCEIROS indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.<br>2.4 Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.<br>2.5 Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.<br>2.6 A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.<br>',

		    'clausula_edit_3a' => 'D) Executar a gestão administrativa e financeira dos recursos transferidos para a execução do objeto deste Acordo, em conta específica.;<br>Restituir ao PARCEIRO PRIVADO os saldos financeiros remanescentes, pertinentes ao seu respectivo aporte, não utilizadas no objeto pactuado, no prazo máximo de 60 (sessenta), dias contados da data do término da vigência ou da denúncia deste Acordo de Parceria, sendo facultado ao PARCEIRO PRIVADO a doação dos valores ao PARCEIRO PÚBLICO ou destinar estes valores para outro projeto de pesquisa, desenvolvimento e inovação;<br>',
		    
		    'clausula_edit_3b' => 'G)  Responsabilizar-se pelo recolhimento de impostos, taxas, contribuições e outros encargos porventura devidos em decorrência das atividades vinculadas a este Acordo de Parceria;<br><br>H)  Manter, durante toda a execução do Acordo de Parceria, todas as condições de habilitação e de qualificação exigidas para a sua celebração, responsabilizando-se pela boa e integral execução das atividades ora descritas;<br><br>I)  Nas compras de bens e nas contratações de serviços, observar as regras do Decreto nº 8.241/2014;<br><br>H)  Observar os princípios da legalidade, eficiência, moralidade, publicidade, economicidade, legalidade e impessoalidade, nas aquisições e contratações realizadas, bem como no desenvolvimento de todas as suas ações no âmbito deste Acordo de Parceria;<br><br>K)  Manter registros contábeis, fiscais e financeiros completos e fidedignos relativamente à aplicação dos aportes recebidos do PARCEIRO PRIVADO por este Acordo de Parceria, fazendo-o em estrita observância às normas tributário-fiscais em vigor e, especialmente, à legislação que instituiu contrapartidas em atividades de PD&I para a concessão de incentivos ou de benefícios dos quais o PARCEIRO PRIVADO seja ou se torne beneficiária;<br><br>',

		    'clausula_edit_3c' => '3.3. Os PARCEIROS são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente Acordo de Parceria para PD&I ou de publicações a ele referentes.<br>',

		    'clausula_edit_4' => '4.8. A transposição, o remanejamento ou a transferência de recursos de categoria de programação para outra poderão ocorrer com o objetivo de conferir eficácia e eficiência às atividades de ciência, tecnologia e inovação.<br>4.8.1 No âmbito deste projeto de pesquisa, desenvolvimento e inovação, o coordenador geral indicará a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.<br>4.8.2 Por ocasião da ocorrência de quaisquer das ações previstas no item anterior, a ICT poderá alterar a distribuição inicialmente acordada, promover modificações internas ao seu orçamento, alterar rubricas ou itens de despesas, desde que não modifique o valor total do projeto.<br>4.9. São dispensáveis de formalização por meio de Termo Aditivo as alterações previstas no item 4.8 que importem em transposição, remanejamento ou transferência de recursos de categoria de programação para outra, com o objetivo de conferir eficácia e eficiência às atividades previstas no Plano de Trabalho, desde que não haja alteração do valor total do projeto.<br>4.9.1. Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, necessárias para efetiva execução do, ficarão dispensadas de prévia anuência d PARCEIRO PRIVADO, hipótese em que o coordenador do projeto solicitará a alteração à ICT, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.<br>4.10. A ICT/AGÊNCIA DE FOMENTO não responderá pela suplementação de recursos para fazer frente a despesas decorrentes de quaisquer fatores externos ao seu controle, como flutuação cambial e alterações nos valores de taxas escolares.<br>',

		    'clausula_edit_6' => '6.1. Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário.<br>6.2. Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre as duas convenentes, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da lei nº 10.973/2004.<br> 6.3. divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para o ICT/AGÊNCIA DE FOMENTO.<br> 6.4. O instrumento previsto na subcláusula 6.3 deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes.<br>6.5. Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais.<br>6.6. As Partes devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros.<br>6.7. Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente.<br>6.8. Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento d o ICT/AGÊNCIA DE FOMENTO.<br>6.9. Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países.<br>6.10. As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos partícipes ora acordantes.<br> 6.11. Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os partícipes concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos partícipes, em conjunto ou separadamente.<br>6.11. Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os partícipes concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias.<br>6.12. A FUNDAÇÃO DE APOIO não terá direitos sobre os resultados obtidos, passíveis ou não de proteção legal.<br> 6.13. O ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países.<br>',

		    'clausula_edit_8' => '8.6. As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção.<br> 8.7. Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo.<br> 8.8. Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio.<br>',

		    'clausula_edit_9' => '9.1. Os PARCEIROS deverão tomar todas as medidas necessárias, observados os princípios de civilidade e legalidade, e de acordo com as boas práticas empresariais para cumprir e assegurar que (i) seus conselheiros, diretores, empregados qualquer pessoa agindo em seu nome, inclusive prepostos e subcontratados, quando houver (todos doravante referidos como “Partes Relacionadas” e, cada uma delas, como “uma Parte Relacionada”) obedecerão a todas as leis aplicáveis, incluindo àquelas relativas ao combate à corrupção, suborno e lavagem de dinheiro, bem como àquelas relativas a sanções econômicas, vigentes nas jurisdições em que os PARCEIROS estão constituídos e na jurisdição em que o Acordo de Parceria será cumprido (se diferentes), para impedir qualquer atividade fraudulenta por si ou por uma Parte Relacionada com relação ao cumprimento deste Acordo de Parceria.<br>9.2. Um PARCEIRO deverá notificar imediatamente o outro sobre eventual suspeita de qualquer fraude tenha ocorrido, esteja ocorrendo, ou provavelmente ocorrerá, para que sejam tomadas as medidas necessárias para apurá-las.<br>9.3. Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo.<br>9.4. Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:<br>A) Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc;<br>B) Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder;<br>C) Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS;<br>D) Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo;<br>E) Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente. <br>',

		    'clausula_edit_12' => '12.4.1. Alterações na distribuição entre grupos de natureza de despesa e alterações de rubricas ou itens de despesas, que não ultrapassarem 20% (vinte por cento) do valor total do projeto, ficarão dispensadas de prévia anuência da concedente, hipótese em o interessado comunicará aos PARCEIROS, devendo constar as razões que ensejaram as alterações, indicando a necessidade de alteração das categorias de programação, as dotações orçamentárias e a distribuição entre grupos de natureza de despesa em referência ao projeto de pesquisa aprovado originalmente.<br>12.4.2. Alterações que superarem o percentual acima indicado dependerão de anuência prévia e expressa da concedente, que será formalizado por meio de ofício, nos termos da Cláusula 4.8. <br>',

		    'clausula_edit_13' => '13.2. O pesquisador deverá encaminhar ao Setor responsável ou COMISSÃO DA ICT ou à FUNDAÇÃO DE APOIO:<br> A) Formulário de Resultado Parcial: anualmente, até o último dia útil do mês de dezembro de cada ano de vigência deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho. <br>',

		    'clausula_edit_14' => '14.2. Constituem motivos para rescisão de pleno direito o inadimplemento de quaisquer das cláusulas pactuadas neste Acordo, o descumprimento das normas estabelecidas na legislação vigente ou a superveniência de norma legal ou fato que tome material ou formalmente inexequível o Acordo de Parceria para PD&I, imputando-se aos PARCEIROS as responsabilidades pelas obrigações até então assumidas, devendo o PARCEIRO que se julgar prejudicado notificar o parceiro para que apresente esclarecimentos no prazo de 15 (quinze) dias corridos.<br>14.2.1 Prestados os esclarecimentos, os PARCEIROS deverão, por mútuo consenso, decidir pela rescisão ou manutenção do Acordo.<br>14.2.2 Decorrido o prazo para esclarecimentos, caso não haja resposta, o Acordo será rescindido de pleno direito, independentemente de notificações ou interpelações, judiciais ou extrajudiciais.<br>14.3 O Acordo de Parceria será rescindido em caso de decretação de falência, liquidação extrajudicial ou judicial, ou insolvência de qualquer dos PARCEIROS, ou, ainda, no caso de 10/11 propositura de quaisquer medidas ou procedimentos contra qualquer dos PARCEIROS para sua liquidação e/ou dissolução.<br>',

		    'nome_inst_ict' => 'lorem ipsum', //clausula_3
        	'nome_inst_privado' => 'lorem ipsum', //clausula_3
        	'nome_inst_fundacao' => 'lorem ipsum', //clausula_3

		    'nome_parceiro_privado' => 'Lorem Ipsum',
		    'valor_financeiro' => 'Lorem Ipsum',
		    'nome_fund_apoio' => 'Lorem Ipsum',

		    'prazo_vigencia' => '02',

		    'estado_foro' => 'Lorem Ipsum',
		    'cidade_foro' => 'Lorem Ipsum',
		    'cidade_uf_dia_foro' => 'Lorem Ipsum',
		    'ict_inst_foro' => 'Lorem Ipsum',
		    'nome_rep_foro' => 'Lorem Ipsum',
		    'cargo_rep_foro' => 'Lorem Ipsum',
		    'nome_inst_privado_foro' => 'Lorem Ipsum',
		    'nome_rep_privado_foro' => 'Lorem Ipsum',
		    'cargo_rep_privado_foro' => 'Lorem Ipsum',

		    'tipo' => 'Com Repasse',
		    'user_id' => '1',

		]);
    }
}
