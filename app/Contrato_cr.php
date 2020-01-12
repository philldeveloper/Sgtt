<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_cr extends Model
{
	// os campos da table abaixo seguem a ordem especificada na view de contrato sem repasse.
	//quaisquer alterações de ordem favor realizar também aqui.

	protected $fillable = [
    	'nome_ict', //ict-ente_pub
    	'nome_parceiro', //ict-ente_pub
        'nome',  //ict-ente_pub
        'nat_juridica', //ict-ente_pub
        'cnpj', //ict-ente_pub
        'endereco', //ict-ente_pub
        'cidade', //ict-ente_pub
        'uf', //ict-ente_pub
        'cep', //ict-ente_pub
        'rep_legal', //ict-ente_pub
        'cpf', //ict-ente_pub
        'rg', //ict-ente_pub
        'orgao_exp', //ict-ente_pub
        'nacionalidade', //ict-ente_pub
        'est_civil', //ict-ente_pub
        'ato_nomeacao', //ict-ente_pub
        'doravante_denominado', //ict-ente_pub

        'nome_parceiro_instituicao', //2_parceiro
        'parceiro_nat_juridica', //2_parceiro
        'parceiro_cnpj', //2_parceiro
        'parceiro_endereco', //2_parceiro
        'parceiro_cidade', //2_parceiro
        'parceiro_uf', //2_parceiro
        'parceiro_cep', //2_parceiro
        'parceiro_rep_legal', //2_parceiro
        'parceiro_cpf', //2_parceiro
        'parceiro_rg', //2_parceiro
        'parceiro_orgao_exp', //2_parceiro
        'parceiro_cargo', //2_parceiro
        'parceiro_doravante_denominado', //2_parceiro


        'clausula_descricao', //clausula_1

        'nome_inst_ict', //clausula_3
        'nome_inst_privado', //clausula_3
        'nome_inst_fundacao', //clausula_3

        'nome_parceiro_privado', //clausula_4
        'valor_financeiro', //clausula_4
        'nome_fund_apoio', //clausula_4

        'prazo_vigencia', //clausula_11
        
        'estado_foro', //clausula_19
        'cidade_foro', //clausula_19
        'cidade_uf_dia_foro', //clausula_19
        'ict_inst_foro', //clausula_19
        'nome_rep_foro', //clausula_19
        'cargo_rep_foro', //clausula_19
        'nome_inst_privado_foro', //clausula_19
        'nome_rep_privado_foro', //clausula_19
        'cargo_rep_privado_foro', //clausula_19
        'user_id'
    ];

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }
}
