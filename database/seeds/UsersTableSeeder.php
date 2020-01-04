<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::create ([
		  'nome' => 'Administrador',
		  'cpf' => 123465,
		  'telefone' => 45789,
		  'celular' => 45789,
		  'ativo' => 1,
		  'admin' => 1,
		  'email' => 'admin@email.com',
		  'password' => bcrypt('kmzwa8awaa'),
		]);

		User::create ([
		  'nome' => 'Pesquisador',
		  'cpf' => 1234765,
		  'telefone' => 45789,
		  'celular' => 45789,
		  'ativo' => 1,
		  'admin' => 0,
		  'email' => 'pesquisador@email.com',
		  'password' => bcrypt('kmzwa8awaa'),
		]);
    }
}
