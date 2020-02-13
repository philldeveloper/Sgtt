<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_sr extends Model
{
	// os campos da table abaixo seguem a ordem especificada na view de contrato sem repasse.
	//quaisquer alterações de ordem favor realizar também aqui.

    protected $fillable = [
    	'nome_ict',
    	'nome_parceiro',
        'nome_teste', 
        'nat_juridica',
        'cnpj',
        'endereco',
        'cidade',
        'uf',
        'cep',
        'rep_legal',
        'cpf',
        'rg',
        'orgao_exp',
        'nacionalidade',
        'est_civil',
        'ato_nomeacao',
        'doravante_denominado',
        'nome_parceiro_instituicao',
        'parceiro_nat_juridica',
        'parceiro_cnpj',
        'parceiro_endereco',
        'parceiro_cidade',
        'parceiro_uf',
        'parceiro_cep',
        'parceiro_rep_legal',
        'parceiro_cpf',
        'parceiro_rg',
        'parceiro_orgao_exp',
        'parceiro_cargo',
        'clausula_descricao',
        'clausula_objetivo',
        'clausula_edit_2',//clausulas editaveis
        'clausula_edit_3',
        'clausula_edit_5',
        'clausula_edit_6',
        'clausula_edit_7',
        'clausula_edit_8',
        'clausula_edit_12',
        'clausula_edit_13',
        'nome_inst_ict',
        'nome_inst_privado',
        'nome_inst_fundacao',
        'nome_empresa_parceira',
        'nome_ict_parceira',
        'prazo_vigencia',
        'estado_foro',
        'cidade_foro',
        'cidade_uf_dia_foro',
        'ict_inst_foro',
        'nome_rep_foro',
        'cargo_rep_foro',
        'nome_inst_privado_foro',
        'nome_rep_privado_foro',
        'cargo_rep_privado_foro',
        'check_clausula', //recebe 1 por default
        'user_id'
    ];

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function correcoes()
    {
        return $this->hasMany('App\ContratoCorrecao', 'contrato_sr_id');
    }

}
