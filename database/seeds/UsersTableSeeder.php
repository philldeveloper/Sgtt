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
		  'name' => 'Administrador',
		  'ativo' => 1,
		  'admin' => 1,
		  'email' => 'admin@email.com',
		  'password' => bcrypt('123'),
		]);

		User::create ([
		  'name' => 'Pesquisador',
		  'ativo' => 1,
		  'admin' => 0,
		  'email' => 'pesquisador@email.com',
		  'password' => bcrypt('123'),
		]);
    }
}
