<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipio extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\Estado, 'name' );  // generated by relation command - Estado,Municipio
    } 

	//Mass Assignment
	protected $fillable = ['name','estado_id','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Estado,Municipio - start
	/*public function estado() {
		return $this->belongsTo('App\Estado');
	}// end
*/
	// generated by relation command - Municipio,Cliente - start
	public function clientes() {
		return $this->hasMany('App\Cliente');
	}// end


}