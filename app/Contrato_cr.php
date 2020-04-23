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
        'nome_teste',  //ict-ente_pub
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
        'nacionalidade', //ic-tente_pub
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
        'ict_plano_trabalho', //clausula 2 *Novo*

        'clausula_edit_2_3',
        'clausula_edit_2_4',
        'clausula_edit_2_5',
        'clausula_edit_2_6',

        'clausula_edit_3a',
        'clausula_edit_3b',
        'clausula_edit_3c',
        'clausula_edit_3d',
        'clausula_edit_3e',
        'clausula_edit_3f',
        'clausula_edit_3g',
        'clausula_edit_3h',
        'clausula_edit_3i',
        'clausula_edit_3j',
        'clausula_edit_3k',
        'clausula_edit_3l',
        'clausula_edit_3m',
        'clausula_edit_3n',
        'clausula_edit_3_3',

        'clausula_edit_4_8',
        'clausula_opcional_4_6',
        'clausula_edit_4_8_1',
        'clausula_edit_4_8_2',
        'clausula_edit_4_9',
        'clausula_edit_4_9_1',
        'clausula_edit_4_10',

        'clausula_edit_6_1',
        'clausula_edit_6_2',
        'clausula_edit_6_3',
        'clausula_edit_6_4',
        'clausula_edit_6_5',
        'clausula_edit_6_6',
        'clausula_edit_6_7',
        'clausula_edit_6_8',
        'clausula_edit_6_9',
        'clausula_edit_6_10',
        'clausula_edit_6_11',
        'clausula_edit_6_12',
        'clausula_edit_6_13',

        'clausula_edit_8_6',
        'clausula_edit_8_7',
        'clausula_edit_8_8',

        'clausula_edit_9_1',
        'clausula_edit_9_2',
        'clausula_edit_9_3',
        'clausula_edit_9_4',
        'clausula_edit_9_a',
        'clausula_edit_9_b',
        'clausula_edit_9_c',
        'clausula_edit_9_d',
        'clausula_edit_9_e',

        'clausula_edit_12_4_1',
        'clausula_edit_12_4_2',

        'clausula_edit_13_2',
        'clausula_edit_13_a',
        'clausula_edit_13_b',

        'clausula_edit_14_2',
        'clausula_edit_14_2_1',
        'clausula_edit_14_2_2',
        'clausula_edit_14_3',
        'clausula_edit_14_4',

        'clausula_edit_16_1',
        'clausula_edit_16_2',
        //17.1 contato publico
        'parceiro_contato_endereço',
        'parceiro_contato_telefone',
        'parceiro_contato_celular',
        'parceiro_contato_email',
        //17.1 contato privado
        'privado_contato_endereço',
        'privado_contato_telefone',
        'privado_contato_celular',
        'privado_contato_email',
        //17.1 contato fundacao apoio
        'apoio_contato_endereço',
        'apoio_contato_telefone',
        'apoio_contato_celular',
        'apoio_contato_email',
        
        'nome_inst_ict', //clausula_3
        'nome_coordenador_ict', //clausula_3 *Novo
        'nome_coordenador_privado',//clausula_3 *Novo
        'nome_inst_privado', //clausula_3
        'nome_inst_fundacao', //clausula_3

        'nome_parceiro_privado', //clausula_4
        'valor_financeiro', //clausula_4
        'nome_fund_apoio', //clausula_4

        'prazo_vigencia', //clausula_11
        
        'estado_foro', //clausula_19
        'cidade_foro', //clausula_19
        'data_foro', //clausula_19
        'ict_inst_foro', //clausula_19
        'nome_rep_foro', //clausula_19
        'cargo_rep_foro', //clausula_19
        'nome_inst_privado_foro', //clausula_19
        'nome_rep_privado_foro', //clausula_19
        'cargo_rep_privado_foro', //clausula_19

        'nome_testemunha_1', 
        'nome_testemunha_2', 
        
        'tipo',
        'user_id'
    ];

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }
}
