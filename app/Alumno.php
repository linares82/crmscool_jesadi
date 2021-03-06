<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use RelationManagerTrait,GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
		$this->addRelationApp( new \App\Plantel, 'razon' );  // generated by relation command - Plantel,Alumno
		$this->addRelationApp( new \App\Especialidad, 'name' );  // generated by relation command - Especialidad,Alumno
		$this->addRelationApp( new \App\Nivel, 'name' );  // generated by relation command - Nivel,Alumno
		$this->addRelationApp( new \App\Grado, 'name' );  // generated by relation command - Grado,Alumno
		$this->addRelationApp( new \App\StAlumno, 'name' );  // generated by relation command - StCliente,Alumno
		$this->addRelationApp( new \App\Estado, 'name' );  // generated by relation command - Estado,Alumno
		$this->addRelationApp( new \App\Municipio, 'name' );  // generated by relation command - Municipio,Alumno
		$this->addRelationApp( new \App\Grupo, 'name' );  // generated by relation command - Grupo,Alumno
		$this->addRelationApp( new \App\Lectivo, 'name' );  // generated by relation command - Grupo,Alumno
    } 

	//Mass Assignment
	protected $fillable = ['matricula',	'nombre','nombre2','ape_paterno','ape_materno','genero','curp',
	'fec_nacimiento','lugar_nacimiento','extranjero','fec_inscripcion','tel_fijo','tel_cel','cel_empresa',
	'mail','mail_empresa','calle','no_interior','no_exterior','colonia','cp','municipio_id','estado_id',
	'st_alumno_id','distancia_escuela','peso','estatura','tipo_sangre','alergias','medicinas_contraindicadas',
	'color_piel','color_cabello','senas_particulares','nombre_padre','curp_padre','dir_padre','tel_padre',
	'cel_padre','tel_ofi_padre','mail_padre','nombre_madre','curp_madre','dir_madre','tel_madre','cel_madre',
	'tel_ofi_madre','mail_madre','nombre_acudiente','curp_acudiente','dir_acudiente','tel_acudiente',
	'cel_acudiente','tel_ofi_acudiente','mail_acudiente','plantel_id','especialidad_id','nivel_id','grado_id',
	'grupo_id','lectivo_id','cve_alumno','usu_alta_id','usu_mod_id'];

	public function usu_alta() {
		return $this->hasOne('App\User', 'id', 'usu_alta_id');
	}// end

	public function usu_mod() {
		return $this->hasOne('App\User', 'id', 'usu_mod_id');
	}// end


    protected $dates = ['deleted_at'];

	// generated by relation command - Plantel,Alumno - start
	public function plantel() {
		return $this->belongsTo('App\Plantel');
	}// end

	// generated by relation command - Especialidad,Alumno - start
	public function especialidad() {
		return $this->belongsTo('App\Especialidad');
	}// end

	// generated by relation command - Nivel,Alumno - start
	public function nivel() {
		return $this->belongsTo('App\Nivel');
	}// end

	// generated by relation command - Grado,Alumno - start
	public function grado() {
		return $this->belongsTo('App\Grado');
	}// end

	// generated by relation command - StCliente,Alumno - start
	public function stAlumno() {
		return $this->belongsTo('App\StAlumno');
	}// end

	// generated by relation command - Estado,Alumno - start
	public function estado() {
		return $this->belongsTo('App\Estado');
	}// end

	// generated by relation command - Municipio,Alumno - start
	public function municipio() {
		return $this->belongsTo('App\Municipio');
	}// end

	// generated by relation command - Grupo,Alumno - start
	public function grupo() {
		return $this->belongsTo('App\Grupo');
	}// end
	public function lectivo() {
		return $this->belongsTo('App\Lectivo');
	}// end
}