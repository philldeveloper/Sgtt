<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoCrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_crs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_ict');
            $table->string('nome_parceiro');
            $table->string('nome_teste');
            $table->string('nat_juridica');
            $table->string('cnpj');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('rep_legal');
            $table->string('cpf');
            $table->string('rg');
            $table->string('orgao_exp');
            $table->string('nacionalidade');
            $table->string('est_civil');
            $table->string('ato_nomeacao');
            $table->string('doravante_denominado');
            $table->string('nome_parceiro_instituicao');
            $table->string('parceiro_nat_juridica');
            $table->string('parceiro_cnpj');
            $table->string('parceiro_endereco');
            $table->string('parceiro_cidade');
            $table->string('parceiro_uf');
            $table->string('parceiro_cep');
            $table->string('parceiro_rep_legal');
            $table->string('parceiro_cpf');
            $table->string('parceiro_rg');
            $table->string('parceiro_orgao_exp');
            $table->string('parceiro_cargo');
            $table->string('parceiro_doravante_denominado');
            $table->string('clausula_descricao')->nullable()->default(null);

            $table->longText('clausula_edit_2_2')->nullable()->default(null);
            $table->longText('clausula_edit_2_3')->nullable()->default(null);
            $table->longText('clausula_edit_2_4')->nullable()->default(null);
            $table->longText('clausula_edit_2_5')->nullable()->default(null);
            $table->longText('clausula_edit_2_6')->nullable()->default(null);

            
            $table->longText('clausula_edit_3a')->nullable()->default(null);
            $table->longText('clausula_edit_3b')->nullable()->default(null);
            $table->longText('clausula_edit_3c')->nullable()->default(null);
            $table->longText('clausula_edit_3d')->nullable()->default(null);
            $table->longText('clausula_edit_3e')->nullable()->default(null);
            $table->longText('clausula_edit_3f')->nullable()->default(null);
            $table->longText('clausula_edit_3g')->nullable()->default(null);
            $table->longText('clausula_edit_3h')->nullable()->default(null);
            $table->longText('clausula_edit_3i')->nullable()->default(null);
            $table->longText('clausula_edit_3j')->nullable()->default(null);
            $table->longText('clausula_edit_3k')->nullable()->default(null);
            $table->longText('clausula_edit_3l')->nullable()->default(null);
            $table->longText('clausula_edit_3m')->nullable()->default(null);
            $table->longText('clausula_edit_3n')->nullable()->default(null);
            $table->longText('clausula_edit_3_3')->nullable()->default(null);
            
            $table->longText('clausula_edit_4_3')->nullable()->default(null);
            $table->longText('clausula_edit_4_8')->nullable()->default(null);
            $table->longText('clausula_opcional_4_6')->nullable()->default(null);
            $table->longText('clausula_edit_4_8_1')->nullable()->default(null);
            $table->longText('clausula_edit_4_8_2')->nullable()->default(null);
            $table->longText('clausula_edit_4_9')->nullable()->default(null);
            $table->longText('clausula_edit_4_9_1')->nullable()->default(null);
            $table->longText('clausula_edit_4_10')->nullable()->default(null);
            $table->string('input_4_10_parceiro');

            $table->string('nome_ict_com_fund_apoio');
            
            $table->longText('clausula_edit_6_1')->nullable()->default(null);
            $table->longText('clausula_edit_6_2')->nullable()->default(null);
            $table->longText('clausula_edit_6_3')->nullable()->default(null);
            $table->longText('clausula_edit_6_4')->nullable()->default(null);
            $table->longText('clausula_edit_6_5')->nullable()->default(null);
            $table->longText('clausula_edit_6_6')->nullable()->default(null);
            $table->longText('clausula_edit_6_7')->nullable()->default(null);
            $table->longText('clausula_edit_6_8')->nullable()->default(null);
            $table->longText('clausula_edit_6_9')->nullable()->default(null);
            $table->longText('clausula_edit_6_10')->nullable()->default(null);
            $table->longText('clausula_edit_6_11')->nullable()->default(null);
            $table->longText('clausula_edit_6_12')->nullable()->default(null);
            $table->longText('clausula_edit_6_13')->nullable()->default(null);

            $table->longText('clausula_edit_8_6')->nullable()->default(null);
            $table->longText('clausula_edit_8_7')->nullable()->default(null);
            $table->longText('clausula_edit_8_8')->nullable()->default(null);

            $table->longText('clausula_edit_9_1')->nullable()->default(null);
            $table->longText('clausula_edit_9_2')->nullable()->default(null);
            $table->longText('clausula_edit_9_3')->nullable()->default(null);
            $table->longText('clausula_edit_9_4')->nullable()->default(null);
            $table->longText('clausula_edit_9_a')->nullable()->default(null);
            $table->longText('clausula_edit_9_b')->nullable()->default(null);
            $table->longText('clausula_edit_9_c')->nullable()->default(null);
            $table->longText('clausula_edit_9_d')->nullable()->default(null);
            $table->longText('clausula_edit_9_e')->nullable()->default(null);

            $table->longText('clausula_edit_12_4_1')->nullable()->default(null);
            $table->longText('clausula_edit_12_4_2')->nullable()->default(null);


            $table->longText('clausula_edit_13_2')->nullable()->default(null);
            $table->longText('clausula_edit_13_a')->nullable()->default(null);
            $table->longText('clausula_edit_13_b')->nullable()->default(null);
            $table->longText('clausula_edit_13_5')->nullable()->default(null);
            $table->longText('clausula_edit_13_6')->nullable()->default(null);

            $table->longText('clausula_edit_14_2')->nullable()->default(null);
            $table->longText('clausula_edit_14_2_1')->nullable()->default(null);
            $table->longText('clausula_edit_14_2_2')->nullable()->default(null);
            $table->longText('clausula_edit_14_3')->nullable()->default(null);
            $table->longText('clausula_edit_14_4')->nullable()->default(null);

            $table->longText('clausula_edit_15_1')->nullable()->default(null);

            $table->longText('clausula_edit_16_1')->nullable()->default(null);
            $table->longText('clausula_edit_16_2')->nullable()->default(null);

            $table->longText('clausula_edit_17_1')->nullable()->default(null);
            $table->longText('clausula_edit_17_2')->nullable()->default(null);
            $table->longText('clausula_edit_17_2_1')->nullable()->default(null);
            $table->longText('clausula_edit_17_2_2')->nullable()->default(null);
            $table->longText('clausula_edit_17_2_3')->nullable()->default(null);
            $table->longText('clausula_edit_17_2_4')->nullable()->default(null);
            $table->longText('clausula_edit_17_3')->nullable()->default(null);

            $table->string('nome_coordenador_ict');
            $table->string('nome_coordenador_privado');
            $table->string('nome_inst_fundacao')->nullable();
            $table->string('valor_financeiro');
            $table->string('prazo_vigencia');
            $table->string('nome_fund_apoio')->nullable()->default(null);
            $table->string('estado_foro');
            $table->string('cidade_foro');
            $table->string('data_foro');
            $table->string('ict_inst_foro');
            $table->string('nome_rep_foro');
            $table->string('cargo_rep_foro');
            $table->string('nome_inst_privado_foro');
            $table->string('nome_rep_privado_foro');
            $table->string('cargo_rep_privado_foro');

            $table->string('parceiro_contato_endereco')->nullable()->default(null);
            $table->string('parceiro_contato_telefone')->nullable()->default(null);
            $table->string('parceiro_contato_celular')->nullable()->default(null);
            $table->string('parceiro_contato_email')->nullable()->default(null);
            
            $table->string('privado_contato_endereco')->nullable()->default(null);
            $table->string('privado_contato_telefone')->nullable()->default(null);
            $table->string('privado_contato_celular')->nullable()->default(null);
            $table->string('privado_contato_email')->nullable()->default(null);

            $table->string('apoio_contato_endereco')->nullable()->default(null);
            $table->string('apoio_contato_telefone')->nullable()->default(null);
            $table->string('apoio_contato_celular')->nullable()->default(null);
            $table->string('apoio_contato_email')->nullable()->default(null);

            $table->string('nome_rep_fund_apoio')->nullable()->default(null);
            $table->string('cargo_rep_fund_apoio')->nullable()->default(null);

            /* $table->string('nome_testemunha_1');
            $table->string('nome_testemunha_2'); */


            $table->string('tipo')->nullable()->default(null);

            $table->integer('user_id')->unsigned(); //referencia a tabela de users
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrato_crs');
    }
}
