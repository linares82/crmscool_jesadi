<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoPlanLn extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\PlanPagoLn, 'monto' );  // generated by relation command - PlanPagoLn,PromoPlanLn
    } 

	//Mass Assignment
	protected $fillable = ['plan_pago_ln_id','fec_inicio','fec_fin','descuento','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - PlanPagoLn,PromoPlanLn - start
	public function planPagoLn() {
		return $this->belongsTo('App\PlanPagoLn');
	}// end
}