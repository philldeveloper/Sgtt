<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoCorrecaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_correcaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('correcao');

            $table->integer('contrato_sr_id')->unsigned(); //referencia a tabela de users
            $table->foreign('contrato_sr_id')->references('id')->on('contrato_srs');

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
        Schema::dropIfExists('contrato_correcaos');
    }
}
