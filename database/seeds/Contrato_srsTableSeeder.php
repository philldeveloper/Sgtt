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
		    'nome_inst_ict' => 'Lorem Ipsum',
		    'nome_inst_privado' => 'Lorem Ipsum',
		    'nome_inst_fundacao' => 'Lorem Ipsum',
		    'nome_empresa_parceira' => 'Lorem Ipsum',
		    'nome_ict_parceira' => 'Lorem Ipsum',
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
		    'user_id' => '1',
		]);

		Contrato_sr::create ([
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
		    'clausula_descricao' => 'Lorem Ipsum',
		    'clausula_objetivo' => 'Lorem Ipsum',
		    'nome_inst_ict' => 'Lorem Ipsum',
		    'nome_inst_privado' => 'Lorem Ipsum',
		    'nome_inst_fundacao' => 'Lorem Ipsum',
		    'nome_empresa_parceira' => 'Lorem Ipsum',
		    'nome_ict_parceira' => 'Lorem Ipsum',
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
		    'user_id' => '2',
		]);

		ContratoCorrecao::create ([
			'correcao' => 'This is a tinny test.',
		    'contrato_sr_id' => '1'
		]);

		ContratoCorrecao::create ([
			'correcao' => 'Ghost Love Score',
		    'contrato_sr_id' => '2',
		]);
    }
}
