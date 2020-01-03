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
            $table->integer('cnpj');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('rep_legal');
            $table->integer('cpf');
            $table->integer('rg');
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
            $table->integer('parceiro_cpf');
            $table->integer('parceiro_rg');
            $table->string('parceiro_orgao_exp');
            $table->string('parceiro_cargo');
            $table->string('clausula_descricao')->nullable()->default(null);
            $table->string('clausula_objetivo')->nullable()->default(null);;
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
