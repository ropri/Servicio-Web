<?php

class Training extends \Eloquent {
	protected $fillable = ['id', 'nombre_curso', 'duracion', 'empresa_impartio', 'documento', 'user_id'];

	public function User()
	{
		return $this->belongsTo('Training');
	}
}