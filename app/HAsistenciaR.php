<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class HAsistenciaR extends Model
{
	use RelationManagerTrait, GetAllDataTrait;
	use SoftDeletes;
	protected $table = 'h_asistencia_rs';

	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);
	}

	//Mass Assignment
	protected $fillable = ['id', 'asistencia_r_id', 'asignacion_academica_id', 'fecha', 'cliente_id', 'est_asistencia_id', 'usu_alta_id', 'usu_mod_id'];

	public function usu_alta()
	{
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	} // end

	public function usu_mod()
	{
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	} // end


	protected $dates = ['deleted_at'];
}
