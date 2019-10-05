<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\CategoriaArticulo, 'name' );  // generated by relation command - CategoriaArticulo,Articulo
		$this->addRelationApp( new \App\TpoArticulo, 'name' );  // generated by relation command - TpoArticulo,Articulo
    } 

	//Mass Assignment
	protected $fillable = ['name','unidad_uso','categoria_articulo_id','usu_alta_id','usu_mod_id','tpo_articulo_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - CategoriaArticulo,Articulo - start
	public function categoriaArticulo() {
		return $this->belongsTo('App\CategoriaArticulo');
	}// end

	// generated by relation command - Articulo,Existencium - start
	public function existencia() {
		return $this->hasMany('App\Existencium');
	}// end

	// generated by relation command - Articulo,Movimiento - start
	public function movimientos() {
		return $this->hasMany('App\Movimiento');
	}// end

	// generated by relation command - TpoArticulo,Articulo - start
	public function tpoArticulo() {
		return $this->belongsTo('App\TpoArticulo');
	}// end

	// generated by relation command - Articulo,Mueble - start
	public function muebles() {
		return $this->hasMany('App\Mueble');
	}// end
}