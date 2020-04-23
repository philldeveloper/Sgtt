<?php

use Illuminate\Database\Seeder;
use App\Contrato_sr;
use App\ContratoCorrecao;

class Contrato_srsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Contrato_sr::create ([
		    'nome_ict' => 'If sertao',
			'nome_parceiro' => 'Univasf',
		    'nome_teste' => 'Philip Ramon', 
		    'nat_juridica' => 'Empresa',
		    'cnpj' => '13246789',
		    'endereco' => 'Rua das Bananeiras, 250',
		    'cidade' => 'Juazeiro',
		    'uf' => 'Bahia',
		    'cep' => '48904137',
		    'rep_legal' => 'Philip',
		    'cpf' => '054789451',
		    'rg' => '13246598',
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
			
		    'clausula_descricao' => 'Lorem Ipsum',
		    'clausula_objetivo' => 'Lorem Ipsum',

			'clausula_edit_2_3' => 'Na execução do Plano de Trabalho, a atuação dos PARCEIROS dar-se-á sempre de forma associada. Para tanto, os PARCEIROS indicam, na forma do item 3.1, seus respectivos Coordenadores de Projeto, que serão responsáveis pela supervisão e pela gerência das atividades correspondentes ao Plano de Trabalho.',
			'clausula_edit_2_4' => 'Recaem sobre o Coordenador do Projeto, designado pela ICT nos termos da alínea c, item 3.1.1., as responsabilidades técnicas e de articulação correspondentes.',
			'clausula_edit_2_5' => 'Situações capazes de afetar sensivelmente as especificações ou os resultados esperados para o Plano de Trabalho deverão ser formalmente comunicadas pelos Coordenadores de Projeto ao setor responsável, aos quais competirá avaliá-las e tomar as providências cabíveis.',
			'clausula_edit_2_6' => 'A impossibilidade técnica e científica quanto ao cumprimento de qualquer fase do Plano de Trabalho que seja devidamente comprovada e justificada acarretará a suspensão de suas respectivas atividades até que haja acordo entre os PARCEIROS quanto à alteração, à adequação ou ao término do Plano de Trabalho e à consequente extinção deste Acordo.',

			'nome_coordenador_ict' => 'Philip',
			
			'clausula_edit_3_1_b' => 'Prestar ao(s) parceiro(s) informações sobre os recursos recebidos e a respectiva situação de execução dos projetos aprovados, nos termos deste Acordo;',
			'clausula_edit_3_1_c' => 'Demais...',

			'nome_coordenador_privado' => 'Tauan',

			'clausula_edit_3_1_2_c' => 'Demais...',
			'clausula_edit_3_3' => 'Os PARCEIROS são responsáveis, nos limites de suas obrigações, respondendo por perdas e danos quando causarem prejuízo em razão da inexecução do objeto do presente Acordo de Parceria para PD&I ou de publicações a ele referentes.',

			'clausula_edit_5_1' => 'Todos os dados, técnicas, tecnologia, know-how, marcas, patentes e quaisquer outros bens ou direitos de propriedade intelectual/industrial de um parceiro que este venha a utilizar para execução do Projeto continuarão a ser de sua propriedade exclusiva, não podendo o outro parceiro cedê-los, transferi-los, aliená-los, divulgá-los ou empregá-los em quaisquer outros projetos ou sob qualquer outra forma sem o prévio consentimento escrito do seu proprietário.',
			'clausula_edit_5_2' => 'Todo desenvolvimento tecnológico passível de proteção intelectual, em qualquer modalidade, proveniente da execução do presente Acordo de Parceria, deverá ter a sua propriedade compartilhada entre os PARCEIROS, na mesma proporção em que cada instituição contribuiu com recursos humanos, além do conhecimento pré-existente aplicado, conforme previsto no art. 9º, § 3°, da Lei nº 10.973/2004.',
			'clausula_edit_5_3' => 'A divisão da titularidade sobre a propriedade intelectual prevista na cláusula anterior será definida por meio de instrumento próprio, respeitando-se o percentual de x% (x por cento) para a ICT/AGÊNCIA DE FOMENTO.',
			'clausula_edit_5_4' => 'O instrumento previsto na subcláusula 5.3 deverá observar os requisitos legais e formais necessários para sua celebração e averbação junto aos órgãos competentes.',
			'clausula_edit_5_5' => 'Eventuais impedimentos de um dos parceiros não prejudicará a titularidade e/ou a exploração dos direitos da Propriedade Intelectual pelos demais.',
			'clausula_edit_5_6' => 'Os PARCEIROS devem assegurar, na medida de suas respectivas responsabilidades, que os projetos propostos e que a alocação dos recursos tecnológicos correspondentes não infrinjam direitos autorais, patentes ou outros direitos intelectuais, assim como direitos de terceiros.',
			'clausula_edit_5_7' => 'Na hipótese de eventual infração de qualquer direito de propriedade intelectual relacionada às tecnologias resultantes, os parceiros concordam que as medidas judiciais cabíveis visando coibir a infração do respectivo direito podem ser adotadas em conjunto ou separadamente.',
			'clausula_edit_5_8' => 'Os depósitos de pedidos de proteção de propriedade intelectual devem ser iniciados necessariamente junto ao Instituto Nacional de Propriedade Industrial - INPI e registrados no sistema de acompanhamento da ICT/AGÊNCIA DE FOMENTO.',
			'clausula_edit_5_9' => 'Caberá ao PARCEIRO PRIVADO, com exclusividade, a responsabilidade de preparar, arquivar, processar e manter pedidos de patente no Brasil e em ouros países.',
			'clausula_edit_5_10' => 'As decisões relacionadas à preparação, processamento e manutenção de pedido de patente das tecnologias resultantes deste instrumento, no Brasil e em outros países, devem ser tomadas em conjunto pelos PARCEIROS ora acordantes.',
			'clausula_edit_5_11' => 'Na hipótese de eventual infração de qualquer patente relacionada às tecnologias resultantes, os PARCEIROS concordam que as medidas judiciais cabíveis visando a coibir a infração da respectiva patente podem ser adotadas pelos PARCEIROS, em conjunto ou separadamente.',
			'clausula_edit_5_12' => 'Tanto no que se refere à proteção da propriedade intelectual quanto às medidas judiciais, os PARCEIROS concordam que as despesas deverão ser suportadas de acordo com os percentuais definidos na exploração comercial das tecnologias.',
			'clausula_edit_5_13' => 'A ICT/AGÊNCIA DE FOMENTO poderá outorgar poderes ao PARCEIRO PRIVADO para praticar todo e qualquer ato necessário para o depósito, acompanhamento e manutenção de pedido de patente das tecnologias resultantes do presente instrumento, no Brasil e em outros países.',
		
		    'clausula_edit_7_6' => 'As obrigações de sigilo em relação às INFORMAÇÕES CONFIDENCIAIS serão mantidas durante o período de vigência deste Acordo e pelo prazo de 5 (cinco) anos após sua extinção.',
			'clausula_edit_7_7' => 'Para efeito dessa cláusula, todas as informações referentes ao “processo/serviço/projeto........” serão consideradas como INFORMAÇÃO CONFIDENCIAL, retroagindo às informações obtidas antes da assinatura do acordo.',
			'clausula_edit_7_8' => 'Para efeito dessa cláusula, a classificação das informações como confidenciais será de responsabilidade de seu titular, devendo indicar os conhecimentos ou informações classificáveis como CONFIDENCIAIS por qualquer meio.',
			
		    'clausula_edit_8_1' => 'Os PARCEIROS obrigam-se a observar rigidamente as condições contidas nos itens abaixo, sob pena de imediata e justificada rescisão do acordo.',
			'clausula_edit_8_2' => 'Os PARCEIROS declaram-se cientes de que seus Departamentos Jurídicos e/ou advogados contratados estão autorizados, em caso de práticas que atentem contra os preceitos dessa cláusula, a solicitar a imediata abertura dos procedimentos criminais, cíveis e administrativos cabíveis à cada hipótese:',
			'clausula_edit_8_2_a' => 'Os PARCEIROS não poderão, em hipótese alguma, dar ou oferecer nenhum tipo de presente, viagens, vantagens a qualquer empregado, servidor, preposto ou diretor de outro PARCEIRO, especialmente àqueles responsáveis pela fiscalização do presente Acordo. Serão admitidos apenas, em épocas específicas, a entrega de brindes, tais como canetas, agendas, folhinhas, cadernos etc;',
			'clausula_edit_8_2_b' => 'Os PARCEIROS somente poderão representar outro PARCEIRO perante órgãos públicos quando devidamente autorizado para tal, seja no corpo do próprio Acordo, seja mediante autorização prévia, expressa e escrita de seu representante com poderes para assim proceder;',
			'clausula_edit_8_2_c' => 'Os PARCEIROS e seus empregados/prepostos, quando agirem em nome ou defendendo interesses deste Acordo perante órgãos, autoridades ou agentes públicos, não poderão dar, receber ou oferecer quaisquer presentes, vantagens ou favores a agentes públicos, sobretudo no intuito de obter qualquer tipo de favorecimento para os PARCEIROS;',
			'clausula_edit_8_2_d' => 'Os PARCEIROS, quando agirem em nome ou defendendo seus interesses, não poderão fornecer informações sigilosas a terceiros ou a agentes públicos, mesmo que isso venha a facilitar, de alguma forma, o cumprimento desse Acordo;',
			'clausula_edit_8_2_e' => 'Os PARCEIROS, ao tomar conhecimento de que algum de seus prepostos ou empregados descumpriram as premissas e obrigações acima pactuadas, denunciarão espontaneamente o fato, de forma que, juntas, elaborem e executem um plano de ação para (i) afastar o empregado ou preposto imediatamente; (ii) evitar que tais atos se repitam e (iii) garantir que o Acordo tenha condições de continuar vigente.',

			'prazo_vigencia' => '10',

			'clausula_edit_12_a' => 'Formulário de Resultado Parcial: anualmente, até o último dia útil do mês de dezembro de cada ano de vigência deste Acordo, em conformidade com os indicadores estabelecidos no respectivo Plano de Trabalho;',
			'clausula_prazo_12_b' => '120 (cento e vinte)',

			'clausula_edit_13_2' => 'Constituem motivos para rescisão de pleno direito o inadimplemento de quaisquer das cláusulas pactuadas neste Acordo, o descumprimento das normas estabelecidas na legislação vigente ou a superveniência de norma legal ou fato que tome material ou formalmente inexequível o Acordo de Parceria para PD&I, imputando-se aos PARCEIROS as responsabilidades pelas obrigações até então assumidas, devendo o PARCEIRO que se julgar prejudicado notificar o parceiro para que apresente esclarecimentos no prazo de 15 (quinze) dias corridos.',
			'clausula_edit_13_2_1' => 'Prestados os esclarecimentos, os PARCEIROS deverão, por mútuo consenso, decidir pela rescisão ou manutenção do Acordo.',
			'clausula_edit_13_2_2' => 'Decorrido o prazo para esclarecimentos, caso não haja resposta, o Acordo será rescindido de pleno direito, independentemente de notificações ou interpelações, judiciais ou extrajudiciais',
			'clausula_edit_13_3' => 'O Acordo de Parceria será rescindido em caso de decretação de falência, liquidação extrajudicial ou judicial, ou insolvência de qualquer dos PARCEIROS, ou, ainda, no caso de  10/11 propositura de quaisquer medidas ou procedimentos contra qualquer dos PARCEIROS para sua liquidação e/ou dissolução;',
			
			'parceiro_contato_endereco' => 'Rua Onze',
			'parceiro_contato_telefone' => '3864-0000',
			'parceiro_contato_celular' => '87 8832-6362',
			'parceiro_contato_email' => 'loremipsum@lorem.com',

			'privado_contato_endereco' => 'Rua Doze',
			'privado_contato_telefone' => '3864-1111',
			'privado_contato_celular' => '87 9619-5263',
			'privado_contato_email' => 'loremipsum_privado@lorem.com',
			
		    'estado_foro' => 'Lorem Ipsum',
		    'cidade_foro' => 'Lorem Ipsum',
		    'cidade_uf_dia_foro' => 'Lorem Ipsum',
		    'ict_inst_foro' => 'Lorem Ipsum',
		    'nome_rep_foro' => 'Lorem Ipsum',
			'cargo_rep_foro' => 'Lorem Ipsum',
			
		    'nome_inst_privado_foro' => 'Lorem Ipsum',
		    'nome_rep_privado_foro' => 'Lorem Ipsum',
			'cargo_rep_privado_foro' => 'Lorem Ipsum',

			'nome_testemunha_1' => 'Philip Ramon',
			'nome_testemunha_2' => 'Mark Zukenberg',
			
		    'user_id' => '1',
		    'tipo' => 'Sem Repasse',
		]);
    }
}
