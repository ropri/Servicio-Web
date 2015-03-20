<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			//Users
			$table->increments('id');
			$table->integer('username');
			$table->string('password');
			$table->string('rol');
			$table->boolean('activo');
			//Datos Personales
			$table->integer('num_empleado');
			$table->string('nombre');
			$table->string('apellidos');
			$table->string('rfc');
			$table->string('curp');
			$table->date('fecha_nac');
			$table->string('nss');
			$table->string('domicilio');
			$table->string('estado_civil');
			$table->integer('edad');
			$table->string('sexo');
			$table->integer('tel_casa');
			$table->integer('tel_celular');
			$table->string('email');
			$table->string('tipo_lic');
			$table->integer('num_lic');
			$table->string('nacionalidad');
			$table->string('disp_viajar');
			$table->binary('Acta_Nac');
			//Trayectoria Dentro de la Empresa
			$table->string('puesto_act');
			$table->date('fecha_ingreso');
			$table->string('antiguedad');
			$table->double('sueldo_actual');
			$table->string('departamento');
			//Información Médica
			$table->string('tipo_sangre');
			$table->string('enfermedades_cronicas');
			$table->integer('tel_emergencias');
			//Desempeño
			$table->string('nombre_reconocimiento');
			$table->binary('ultimo_reconocimiento');
			$table->string('resultado_desempeno');
			$table->binary('resultados_desempeno');
			$table->string('nombre_evareem');
			$table->binary('evaluacion_reem');
			$table->string('motivo_acta');
			//Datos Familiares
			$table->string('personas_dependientes');
			$table->string('nombre_conyuge');
			$table->string('ocupacion_conyuge');
			$table->string('nombre_hijos');
			$table->string('ocupacion_hijos');
			$table->string('nombre_padre');
			$table->string('ocupacion_padre');
			$table->string('nombre_madre');
			$table->string('ocupacion_madre');
			$table->integer('tel_conyuge');
			$table->integer('tel_padre');
			$table->integer('tel_madre');
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
		Schema::drop('users');
	}

}
