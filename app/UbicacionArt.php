<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class UbicacionArt extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp(new \App\Plantel, 'razon');  // generated by relation command - Plantel,Transference
    } 

	//Mass Assignment
	protected $fillable = ['plantel_id','ubicacion','usu_alta_id','usu_mod_id','clave'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Plantel,UbicacionArt - start
	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end

	// generated by relation command - UbicacionArt,Mueble - start
	public function muebles() {
		return $this->hasMany('App\Mueble');
	}// end
}