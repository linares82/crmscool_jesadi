<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocVinculacionVinculacion extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\DocVinculacion, 'name' );  // generated by relation command - DocVinculacion,DocVinculacionVinculacion
		$this->addRelationApp( new \App\Vinculacion, 'lugar_practica' );  // generated by relation command - Vinculacion,DocVinculacionVinculacion
    } 

	//Mass Assignment
	protected $fillable = ['doc_vinculacion_id','vinculacion_id','archivo','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - DocVinculacion,DocVinculacionVinculacion - start
	public function docVinculacion() {
		return $this->belongsTo('App\DocVinculacion');
	}// end

	// generated by relation command - Vinculacion,DocVinculacionVinculacion - start
	public function vinculacion() {
		return $this->belongsTo('App\Vinculacion');
	}// end
}