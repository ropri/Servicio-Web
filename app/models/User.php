<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	protected $fillable = ['id', 'rol', 'username', 'password', 'activo', 'num_empleado', 'nombre', 'apellidos', 'rfc', 'curp', 'fecha_nac', 'nss', 'domicilio', 'estado_civil', 'edad', 'sexo', 'tel_casa', 'tel_celular', 'email', 'tipo_lic', 'num_lic', 'nacionalidad', 'disp_viajar', 'Acta_Nac','puesto_act', 'fecha_ingreso', 'antiguedad', 'sueldo_actual', 'departamento', 'tipo_sangre', 'enfermedades_cronicas', 'tel_emergencias', 'nombre_reconocimiento', 'ultimo_reconocimiento', 'resultado_desempeno', 'resultados_desempeno', 'nombre_evareem', 'evaluacion_reem', 'motivo_acta', 'personas_dependientes', 'nombre_conyuge', 'ocupacion_conyuge', 'nombre_hijos', 'ocupacion_hijos', 'nombre_padre', 'ocupacion_padre', 'nombre_madre', 'ocupacion_madre', 'tel_conyuge', 'tel_padre', 'tel_madre'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function Training()
	{
		return $this->hasMany('Training');
	}

	public function TrayectoryOther()
	{
		return $this->hasMany('TrayectoryOther');
	}

	public function AcademicDatum()
	{
		return $this->hasMany('AcademicDatum');
	}

}
