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
    ];

    public function users () {
        return $this->belongsTo('App\Contrato_sr', 'user_id');
    }
}
