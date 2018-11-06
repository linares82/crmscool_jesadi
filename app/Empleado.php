<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\Area, 'name' );  // generated by relation command - Area,Empleado
		$this->addRelationApp( new \App\Puesto, 'name' );  // generated by relation command - Puesto,Empleado
		$this->addRelationApp( new \App\Plantel, 'razon');  // generated by relation command - Plantel,Empleado
		$this->addRelationApp( new \App\StEmpleado, 'name');  // generated by relation command - Estatus Empleado,Empleado
		$this->addRelationApp( new \App\User, 'name');  // generated by relation command - Estatus Empleado,Empleado
		//$this->addRelationApp( new \App\Cliente, 'nombre');  // generated by relation command - Plantel,Empleado
		
    } 

	//Mass Assignment
	protected $fillable = ['cve_empleado','nombre','ape_paterno','ape_materno','puesto_id','area_id','rfc','curp',
						   'direccion','tel_fijo','tel_cel','cel_empresa','mail','mail_empresa','foto',
						   'identificacion','contrato','evaluacion_psico','plantel_id','st_empleado_id', 
						   'pendientes', 'user_id','usu_alta_id','usu_mod_id', 'jefe_bnd', 'jefe_id', 'alerta_bnd', 
						   'dias_alerta', 'resp_alerta_id', 'fin_contrato','extranjero_bnd', 'genero', 'alimenticia_bnd'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Area,Empleado - start
	public function area() {
		return $this->belongsTo('App\Area');
	}// end

	// generated by relation command - Puesto,Empleado - start
	public function puesto() {
		return $this->belongsTo('App\Puesto');
	}// end

	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end

	public function st_empleado() {
		return $this->belongsTo('App\StEmpleado');
	}// end

	public function jefe() {
		return $this->belongsTo('App\Empleado');
	}// end

	public function responsable() {
		return $this->belongsTo('App\Empleado');
	}// end

	public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

	public function pivotDocEmpleado() {
		return $this->hasMany('App\PivotDocEmpleado');
	}// end

	// generated by relation command - StCliente,Cliente - start
	public function pivotAvisoGralEmpleado() {
		return $this->hasMany('App\PivotAvisoGralEmpleado');
	}// end
	
    /*public function cliente() {
		return $this->belongsTo('App\Cliente');
	}// end
	*/

	// generated by relation command - Empleado,AsignacionAcademica - start
	/*public function asignacionAcademicas() {
		return $this->hasMany('App\AsignacionAcademica');
	}*/// end

	// generated by relation command - Empleado,AsistenciasC - start
	public function asistenciasCs() {
		return $this->hasMany('App\AsistenciasC');
	}// end

	// generated by relation command - Empleado,Historial - start
	public function historials() {
		return $this->hasMany('App\Historial');
	}// end
	
}