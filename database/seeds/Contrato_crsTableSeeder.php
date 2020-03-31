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
		    'cpf' => '0000000',
		    'rg' => '000000000',
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
			'ict_plano_trabalho' => 'Lorem Ipsum',

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
			'clausula_edit_3l' => 'Lorem Ipsum',
			'clausula_edit_3m' => 'Lorem Ipsum',
			'clausula_edit_3n' => 'Lorem Ipsum',
			'clausula_edit_3_3' => 'Lorem Ipsum',

			'clausula_edit_4_8' => 'Lorem Ipsum',  
			'clausula_edit_4_8_1' => 'Lorem Ipsum',  
			'clausula_edit_4_8_2' => 'Lorem Ipsum',  
			'clausula_edit_4_9' => 'Lorem Ipsum',  
			'clausula_edit_4_9_1' => 'Lorem Ipsum',  
			'clausula_edit_4_10' => 'Lorem Ipsum', 

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

			'clausula_edit_14_2' => 'Lorem Ipsum',  
			'clausula_edit_14_2_1' => 'Lorem Ipsum',  
			'clausula_edit_14_2_2' => 'Lorem Ipsum',  
			'clausula_edit_14_3' => 'Lorem Ipsum',  
			'clausula_edit_14_4' => 'Lorem Ipsum',  

			'clausula_edit_16_1' => 'Lorem Ipsum',  
			'clausula_edit_16_2' => 'Lorem Ipsum',  

			'nome_inst_ict' => 'lorem ipsum', //clausula_3
			'nome_coordenador_ict' => 'lorem ipsum', 
			'nome_coordenador_privado' => 'lorem ipsum', 
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
		    'user_id' => '2',

		]);
    }
}
