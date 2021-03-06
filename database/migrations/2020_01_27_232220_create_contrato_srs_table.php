<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoSrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_srs', function (Blueprint $table) {
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
            $table->string('clausula_descricao')->nullable()->default(null);
            $table->string('clausula_objetivo')->nullable()->default(null);
            $table->longText('clausula_edit_2_3')->nullable()->default(null);
            $table->longText('clausula_edit_2_4')->nullable()->default(null);
            $table->longText('clausula_edit_2_5')->nullable()->default(null);
            $table->longText('clausula_edit_2_6')->nullable()->default(null);

            $table->longText('clausula_edit_3')->nullable()->default(null);

            $table->longText('clausula_edit_5_1')->nullable()->default(null);
            $table->longText('clausula_edit_5_2')->nullable()->default(null);
            $table->longText('clausula_edit_5_3')->nullable()->default(null);
            $table->longText('clausula_edit_5_4')->nullable()->default(null);
            $table->longText('clausula_edit_5_5')->nullable()->default(null);
            $table->longText('clausula_edit_5_6')->nullable()->default(null);
            $table->longText('clausula_edit_5_7')->nullable()->default(null);
            $table->longText('clausula_edit_5_8')->nullable()->default(null);
            $table->longText('clausula_edit_5_9')->nullable()->default(null);
            $table->longText('clausula_edit_5_10')->nullable()->default(null);
            $table->longText('clausula_edit_5_11')->nullable()->default(null);
            $table->longText('clausula_edit_5_12')->nullable()->default(null);
            $table->longText('clausula_edit_5_13')->nullable()->default(null);

            $table->longText('clausula_edit_6_2')->nullable()->default(null);
            $table->longText('clausula_edit_6_3')->nullable()->default(null);
            $table->longText('clausula_edit_6_4')->nullable()->default(null);

            $table->longText('clausula_edit_7_6')->nullable()->default(null);
            $table->longText('clausula_edit_7_7')->nullable()->default(null);
            $table->longText('clausula_edit_7_8')->nullable()->default(null);

            $table->longText('clausula_edit_8_1')->nullable()->default(null);
            $table->longText('clausula_edit_8_2')->nullable()->default(null);
            $table->longText('clausula_edit_8_2_a')->nullable()->default(null);
            $table->longText('clausula_edit_8_2_b')->nullable()->default(null);
            $table->longText('clausula_edit_8_2_c')->nullable()->default(null);
            $table->longText('clausula_edit_8_2_d')->nullable()->default(null);
            $table->longText('clausula_edit_8_2_e')->nullable()->default(null);

            $table->longText('clausula_edit_12_a')->nullable()->default(null);
            $table->longText('clausula_edit_12_b')->nullable()->default(null);
            
            $table->longText('clausula_edit_13_2')->nullable()->default(null);
            $table->longText('clausula_edit_13_2_1')->nullable()->default(null);
            $table->longText('clausula_edit_13_2_2')->nullable()->default(null);
            $table->longText('clausula_edit_13_3')->nullable()->default(null);

            $table->string('nome_inst_ict');
            $table->string('nome_inst_privado');
            $table->string('nome_inst_fundacao');
            $table->string('nome_empresa_parceira');
            $table->string('nome_ict_parceira');
            $table->string('prazo_vigencia');
            $table->string('estado_foro');
            $table->string('cidade_foro');
            $table->string('cidade_uf_dia_foro');
            $table->string('ict_inst_foro');
            $table->string('nome_rep_foro');
            $table->string('cargo_rep_foro');
            $table->string('nome_inst_privado_foro');
            $table->string('nome_rep_privado_foro');
            $table->string('cargo_rep_privado_foro');
            //$table->boolean('check_clausula')->default(true);
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
        Schema::dropIfExists('contrato_srs');
    }
}
