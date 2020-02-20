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
