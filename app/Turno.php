<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turno extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
            $this->addRelationApp( new \App\Nivel, 'name' );  // generated by relation command - Municipio,Cliente
            $this->addRelationApp( new \App\Plantel, 'razon' );  // generated by relation command - Area,Empleado
            $this->addRelationApp( new \App\Especialidad, 'name' );  // generated by relation command - Municipio,Cliente
            $this->addRelationApp( new \App\Grado, 'name' );  // generated by relation command - Municipio,Cliente
    } 

	//Mass Assignment
	protected $fillable = ['plantel_id', 'especialidad_id', 'nivel_id', 'grado_id','name','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end
        
        public function nivel() {
		return $this->belongsTo('App\Nivel');
	}// end
	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end
	public function especialidad() {
		return $this->belongsTo('App\Especialidad');
	}// end
        public function grado() {
		return $this->belongsTo('App\Grado');
	}// end

    protected $dates = ['deleted_at'];

	// generated by relation command - Turno,CombinacionCliente - start
	public function combinacionClientes() {
		return $this->hasMany('App\CombinacionCliente');
	}// end
}