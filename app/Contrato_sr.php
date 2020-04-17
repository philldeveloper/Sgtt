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

        //clausulas e variaveis na ordem em que aparecem no sistema.

        'clausula_descricao',
        'clausula_objetivo',

        'clausula_edit_2_3',
        'clausula_edit_2_4',
        'clausula_edit_2_5',
        'clausula_edit_2_6',

        'nome_coordenador_ict',

        'clausula_edit_3_1_b',
        'clausula_edit_3_1_c',

        'nome_coordenador_privado',

        'clausula_edit_3_1_2_c',//refeita
        'clausula_edit_3_3',//refeita

        'clausula_edit_5_1',
        'clausula_edit_5_2',
        'clausula_edit_5_3',
        'clausula_edit_5_4',
        'clausula_edit_5_5',
        'clausula_edit_5_6',
        'clausula_edit_5_7',
        'clausula_edit_5_8',
        'clausula_edit_5_9',
        'clausula_edit_5_10',
        'clausula_edit_5_11',
        'clausula_edit_5_12',
        'clausula_edit_5_13',

        'clausula_edit_7_6',
        'clausula_edit_7_7',
        'clausula_edit_7_8',

        'clausula_edit_8_1',
        'clausula_edit_8_2',
        'clausula_edit_8_2_a',
        'clausula_edit_8_2_b',
        'clausula_edit_8_2_c',
        'clausula_edit_8_2_d',
        'clausula_edit_8_2_e',

        'prazo_vigencia',

        'clausula_edit_12_a',
        'clausula_prazo_12_b',

        'clausula_edit_13_2',
        'clausula_edit_13_2_1',
        'clausula_edit_13_2_2',
        'clausula_edit_13_3',
        //fim das clausulas editaveis

        //15.1 contato publico
        'parceiro_contato_endereco',
        'parceiro_contato_telefone',
        'parceiro_contato_celular',
        'parceiro_contato_email',
        
        //15.1 contato privado
        'privado_contato_endereco',
        'privado_contato_telefone',
        'privado_contato_celular',
        'privado_contato_email',
        
        'estado_foro',
        'cidade_foro',
        'cidade_uf_dia_foro',
        'ict_inst_foro',
        'nome_rep_foro',
        'cargo_rep_foro',

        'nome_inst_privado_foro',
        'nome_rep_privado_foro',
        'cargo_rep_privado_foro',
        
        'tipo',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y',
    ];

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function correcoes()
    {
        return $this->hasMany('App\ContratoCorrecao', 'contrato_sr_id');
    }

}
