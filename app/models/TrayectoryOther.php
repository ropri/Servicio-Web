<?php

class TrayectoryOther extends \Eloquent {
	protected $fillable = ['id','puesto_desempenado','nombre_empresa','motivo_sep','user_id'];

	public function User()
	{
		return $this->belongsTo('TrayectoryOther');
	}
}