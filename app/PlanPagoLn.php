<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlanPagoLn extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\CuentaContable, 'name' );  // generated by relation command - CuentaContable,PlanPagoLn
		$this->addRelationApp( new \App\CajaConcepto, 'name' );  // generated by relation command - CajaConcepto,PlanPagoLn
    } 

	//Mass Assignment
	protected $fillable = ['plan_pago_id','caja_concepto_id','cuenta_contable_id','cuenta_recargo_id','fecha_pago','monto','inicial_bnd','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - CuentaContable,PlanPagoLn - start
	public function cuentaContable() {
		return $this->belongsTo('App\CuentaContable');
	}// end
        
        // generated by relation command - CuentaContable,PlanPagoLn - start
	public function cuentaRecargo() {
		return $this->belongsTo('App\CuentaContable');
	}// end

	// generated by relation command - CajaConcepto,PlanPagoLn - start
	public function cajaConcepto() {
		return $this->belongsTo('App\CajaConcepto');
	}// end
        
        public function reglaRecargos() {
		return $this->belongsToMany('App\ReglaRecargo');
	}// end

	// generated by relation command - PlanPagoLn,Adeudo - start
	public function adeudos() {
		return $this->hasMany('App\Adeudo');
	}// end

	// generated by relation command - PlanPagoLn,PromoPlanLn - start
	public function promoPlanLns() {
		return $this->hasMany('App\PromoPlanLn');
	}// end
}