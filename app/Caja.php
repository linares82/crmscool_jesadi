<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Caja extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\Cliente, 'nombre' );  // generated by relation command - Cliente,Caja
		$this->addRelationApp( new \App\Plantel, 'razon' );  // generated by relation command - Plantel,Caja
		$this->addRelationApp( new \App\FormaPago, 'name' );  // generated by relation command - FormaPago,Caja
		$this->addRelationApp( new \App\StCaja, 'name' );  // generated by relation command - StCaja,Caja
    } 

	//Mass Assignment
	protected $fillable = ['cliente_id','plantel_id','subtotal','descuento','recargo','total','forma_pago_id','autorizacion_descuento','fecha','st_caja_id','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Cliente,Caja - start
	public function cliente() {
		return $this->belongsTo('App\Cliente');
	}// end

	// generated by relation command - Plantel,Caja - start
	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end

	// generated by relation command - FormaPago,Caja - start
	public function formaPago() {
		return $this->belongsTo('App\FormaPago');
	}// end

	// generated by relation command - Caja,CajaLn - start
	public function cajaLns() {
		return $this->hasMany('App\CajaLn');
	}// end

	// generated by relation command - StCaja,Caja - start
	public function stCaja() {
		return $this->belongsTo('App\StCaja');
	}// end

	// generated by relation command - Caja,Adeudo - start
	public function adeudos() {
		return $this->hasMany('App\Adeudo');
	}// end
}