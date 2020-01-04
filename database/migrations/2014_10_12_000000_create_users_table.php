<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->char('cpf')->unique();
            $table->char('nome');
            $table->char('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->char('telefone', 14);
            $table->char('celular', 15);
            $table->boolean('ativo')->default(true);
            $table->boolean('admin')->default(false);
            

            $table->string('password');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
