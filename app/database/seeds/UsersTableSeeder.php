<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
		['rol' => '1', 'username' => 13456, 'password' => 111, 'activo' => true, 'num_empleado' => 13456, 'nombre' => 'richi', 'apellidos' => 'apellido1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['rol' => '2', 'username' => 13678, 'password' => 111, 'activo' => true, 'num_empleado' => 13678, 'nombre' => 'salin', 'apellidos' => 'apellido2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['rol' => '3', 'username' => 13564,  'password' => 111, 'activo' => true, 'num_empleado' => 13564, 'nombre' => 'primi', 'apellidos' => 'apellido3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['rol' => '4', 'username' => 13535, 'password' => 111, 'activo' => true, 'num_empleado' => 13535, 'nombre' => 'emili', 'apellidos' => 'apellidos4', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
		DB::table('users')->insert($users);
	}

}