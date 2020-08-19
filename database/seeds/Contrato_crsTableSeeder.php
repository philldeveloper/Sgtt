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
			'nome_parceiro' => 'Nubank S.A',
		    'nome_teste' => 'Tauan Almeida', 
		    'nat_juridica' => 'Empresa',
		    'cnpj' => '13246589',
		    'endereco' => 'Rua das Bananeiras, 250',
		    'cidade' => 'Petrolina',
		    'uf' => 'Pernambuco',
		    'cep' => '48904137',
		    'rep_legal' => 'Tauan',
		    'cpf' => '0000000',
		    'rg' => '000000000',
		    'orgao_exp' => 'SSP',
		    'nacionalidade' => 'Brasileiro',
		    'est_civil' => 'Solteiro',
		    'ato_nomeacao' => 'Nao sei',
		    'cargo_rep_foro' => 'Diretor',
		    'doravante_denominado' => 'Lorem Ipsum',

		    'nome_parceiro_instituicao' => 'Nubank S.A',
		    'parceiro_nat_juridica' => 'Lorem Ipsum',
		    'parceiro_cnpj' => '465789123',
		    'parceiro_endereco' => 'Lorem Ipsum',
		    'parceiro_cidade' => 'Lorem Ipsum',
		    'parceiro_uf' => 'Lorem Ipsum',
		    'parceiro_cep' => '456798145',
		    'parceiro_rep_legal' => 'Diego Vellez',
		    'parceiro_cpf' => '123456784',
		    'parceiro_rg' => '46798123',
		    'parceiro_orgao_exp' => 'Lorem Ipsum',
		    'parceiro_cargo' => 'CEO',
		    'parceiro_doravante_denominado' => 'Lorem Ipsum',

			'clausula_descricao' => 'Lorem Ipsum',

			'clausula_edit_2_2' => 'Lorem Ipsum sadsads',
			'clausula_edit_2_3' => 'Lorem Ipsum',
			'clausula_edit_2_4' => 'Lorem Ipsum',
			'clausula_edit_2_5' => 'Lorem Ipsum',
			'clausula_edit_2_6' => 'Lorem Ipsum',

			'clausula_edit_3a' => 'Lorem Ipsum',
			'clausula_edit_3b' => 'Lorem Ipsum',
			'clausula_edit_3c' => 'Lorem Ipsum',
			'clausula_edit_3d' => 'Lorem Ipsum',
			'clausula_edit_3e' => 'Lorem Ipsum',
			'clausula_edit_3f' => 'Lorem Ipsum',
			'clausula_edit_3g' => 'Lorem Ipsum',
			'clausula_edit_3h' => 'Lorem Ipsum',
			'clausula_edit_3i' => 'Lorem Ipsum',
			'clausula_edit_3j' => 'Lorem Ipsum',
			'clausula_edit_3k' => 'Lorem Ipsum',
			'clausula_edit_3l' => 'Lorem Ipsum',
			'clausula_edit_3m' => 'Lorem Ipsum',
			'clausula_edit_3n' => 'Lorem Ipsum',
			'clausula_edit_3_3' => 'Lorem Ipsum',

			'clausula_edit_4_3' => 'O PARCEIRO PRIVADO deverá comunicar a ICT/AGÊNCIA DE FOMENTO as transferências financeiras até o primeiro dia útil seguinte à(s) data(s) do (s) depósito(s) bancário(s). (SE HOUVER NECESSIDADE, ESPECIFICAR A FORMA DE COMUNICAÇÃO: por meio de ...).',  
			'clausula_edit_4_8' => 'Lorem Ipsum',  
			'clausula_opcional_4_6' => 'podendo',  
			'clausula_edit_4_8_1' => 'Lorem Ipsum',  
			'clausula_edit_4_8_2' => 'Lorem Ipsum',  
			'clausula_edit_4_9' => 'Lorem Ipsum',  
			'clausula_edit_4_9_1' => 'Lorem Ipsum',  
			'clausula_edit_4_10' => 'Lorem Ipsum', 
			'input_4_10_parceiro' => 'Parceiros, devendo ser', 

			'nome_ict_com_fund_apoio' => 'IFSErtão e NuPagamento S.A', 

			'clausula_edit_6_1' => 'Lorem Ipsum',  
			'clausula_edit_6_2' => 'Lorem Ipsum',  
			'clausula_edit_6_3' => 'Lorem Ipsum',  
			'clausula_edit_6_4' => 'Lorem Ipsum',  
			'clausula_edit_6_5' => 'Lorem Ipsum',  
			'clausula_edit_6_6' => 'Lorem Ipsum',  
			'clausula_edit_6_7' => 'Lorem Ipsum',  
			'clausula_edit_6_8' => 'Lorem Ipsum',  
			'clausula_edit_6_9' => 'Lorem Ipsum',  
			'clausula_edit_6_10' => 'Lorem Ipsum',  
			'clausula_edit_6_11' => 'Lorem Ipsum',  
			'clausula_edit_6_12' => 'Lorem Ipsum',  
			'clausula_edit_6_13' => 'Lorem Ipsum',  
			
			'clausula_edit_8_6' => 'Lorem Ipsum',  
			'clausula_edit_8_7' => 'Lorem Ipsum',  
			'clausula_edit_8_8' => 'Lorem Ipsum',  

			'clausula_edit_9_1' => 'Lorem Ipsum',  
			'clausula_edit_9_2' => 'Lorem Ipsum',  
			'clausula_edit_9_3' => 'Lorem Ipsum',  
			'clausula_edit_9_4' => 'Lorem Ipsum',  
			'clausula_edit_9_a' => 'Lorem Ipsum',  
			'clausula_edit_9_b' => 'Lorem Ipsum',  
			'clausula_edit_9_c' => 'Lorem Ipsum',  
			'clausula_edit_9_d' => 'Lorem Ipsum',  
			'clausula_edit_9_e' => 'Lorem Ipsum',  

			'clausula_edit_12_4_1' => 'Lorem Ipsum',  
			'clausula_edit_12_4_2' => 'Lorem Ipsum',  

			'clausula_edit_13_2' => 'Lorem Ipsum',  
			'clausula_edit_13_a' => 'Lorem Ipsum',  
			'clausula_edit_13_b' => 'Lorem Ipsum', 
			'clausula_edit_13_5' => 'O pesquisador deverá apresentar a prestação de contas financeira, em até 180 (cento e oitenta) dias, contados do termo final do prazo de vigência previsto neste Acordo.', 
			'clausula_edit_13_6' => 'A prestação de contas será simplificada, privilegiando os resultados da pesquisa, e seguirá as regras previstas no artigo 58 do Decreto nº 9.283/18 e/ou na Política de Inovação da entidade pública.', 

			'clausula_edit_14_2' => 'Lorem Ipsum',  
			'clausula_edit_14_2_1' => 'Lorem Ipsum',  
			'clausula_edit_14_2_2' => 'Lorem Ipsum',  
			'clausula_edit_14_3' => 'Lorem Ipsum',  
			'clausula_edit_14_4' => 'A publicação do extrato do presente Acordo de Parceria para PD&I no Diário Oficial da União (DOU) é condição indispensável para sua eficácia e será providenciada pelo  ICT/AGÊNCIA DE FOMENTO no prazo de até 20 (vinte) dias da sua assinatura.',  

			'clausula_edit_15_1' => 'Lorem Ipsum',  

			'clausula_edit_16_1' => 'Lorem Ipsum',  
			'clausula_edit_16_2' => 'Lorem Ipsum', 

			'clausula_edit_17_1' => 'E como prova de assim haverem livremente pactuado, firmam os PARCEIROS o presente instrumento em 3 (três) vias, de igual teor e forma, para que produza entre si os efeitos legais.', 
			'clausula_edit_17_2' => 'Lorem Ipsum', 
			'clausula_edit_17_2_1' => 'Lorem Ipsum', 
			'clausula_edit_17_2_2' => 'Lorem Ipsum', 
			'clausula_edit_17_2_3' => 'Lorem Ipsum', 
			'clausula_edit_17_2_4' => 'Lorem Ipsum', 
			'clausula_edit_17_3' => 'Lorem Ipsum', 

			'nome_coordenador_ict' => 'lorem ipsum', 
			'nome_coordenador_privado' => 'lorem ipsum', 
        	'nome_inst_fundacao' => 'lorem ipsum', //clausula_3

		    'valor_financeiro' => 'Lorem Ipsum',
		    'nome_fund_apoio' => 'Lorem Ipsum',

		    'prazo_vigencia' => '02',

		    'estado_foro' => 'PE',
		    'cidade_foro' => 'Petrolina',
		    'data_foro' => '2020-04-30',
		    'ict_inst_foro' => 'Univasf',
		    'nome_rep_foro' => 'Calors',
		    'cargo_rep_foro' => 'Diretor',
		    'nome_inst_privado_foro' => 'Nu Pagamentos S.A',
		    'nome_rep_privado_foro' => 'Diego Alvez',
			'cargo_rep_privado_foro' => 'CEO',
			//17.1 contato publico
			'parceiro_contato_endereco' => 'Lorem Ispum',
			'parceiro_contato_telefone' => 'Lorem Ispum',
			'parceiro_contato_celular' => 'Lorem Ispum',
			'parceiro_contato_email' => 'Lorem Ispum',
			//17.1 contato privado
			'privado_contato_endereco' => 'Lorem Ispum',
			'privado_contato_telefone' => 'Lorem Ispum',
			'privado_contato_celular' => 'Lorem Ispum',
			'privado_contato_email' => 'Lorem Ispum',
			//17.1 contato fundacao apoio
			'apoio_contato_endereco' => 'Lorem Ispum',
			'apoio_contato_telefone' => 'Lorem Ispum',
			'apoio_contato_celular' => 'Lorem Ispum',
			'apoio_contato_email' => 'Lorem Ispum',

			'nome_rep_fund_apoio' => 'Alex Salles',
			'cargo_rep_fund_apoio' => 'CEO',
			
		    'tipo' => 'Com Repasse',
		    'user_id' => '2',

		]);
    }
}
