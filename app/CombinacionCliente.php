<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class CombinacionCliente extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\Cliente, 'nombre' );  // generated by relation command - Cliente,CombinacionCliente
		$this->addRelationApp( new \App\Plantel, 'razon' );  // generated by relation command - Plantel,CombinacionCliente
    } 

	//Mass Assignment
	protected $fillable = ['cliente_id','plantel_id','especialidad_id','nivel_id','grado_id','turno_id','bnd_inscrito','fecha_inscrito'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Cliente,CombinacionCliente - start
	public function cliente() {
		return $this->belongsTo('App\Cliente');
	}// end

	// generated by relation command - Plantel,CombinacionCliente - start
	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end
        
        public function especialidad() {
		return $this->belongsTo('App\Especialidad');
	}// end
        
        public function nivel() {
		return $this->belongsTo('App\nivel');
	}// end
        
        public function grado() {
		return $this->belongsTo('App\Grado');
	}// end
        
        public function turno() {
		return $this->belongsTo('App\Turno');
	}// end
}