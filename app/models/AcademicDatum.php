<?php

class AcademicDatum extends \Eloquent {
	protected $fillable = ['id','maestria','especialidad','lic','ing','tsu','carrera tecnica','bachillerato','especificar','documento','user_id'];

	public function User()
	{
		return $this->belongsTo('AcademicDatum');
	}
}