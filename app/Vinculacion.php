<?php

namespace App;

use App\Traits\GetAllDataTrait;
use App\Traits\RelationManagerTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vinculacion extends Model
{
    use RelationManagerTrait, GetAllDataTrait;
    use SoftDeletes;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->addRelationApp(new \App\Cliente, 'nombre'); // generated by relation command - Cliente,Vinculacion
        $this->addRelationApp(new \App\StVinculacion, 'name'); // generated by relation command - Cliente,Vinculacion
        $this->addRelationApp(new \App\Clasificacion, 'name'); // generated by relation command - Clasificacion,Vinculacion
    }

    //Mass Assignment
    protected $fillable = ['cliente_id', 'lugar_practica', 'tel_fijo', 'tel_cel', 'nombre_contacto', 'mail_contacto',
        'fec_inicio', 'fec_fin', 'bnd_constancia_entregada', 'usu_alta_id', 'usu_mod_id', 'csc_vinculacion', 'st_vinculacion_id',
        'clasificacion_id'];

    public function usu_alta()
    {
        return $this->hasOne('App\User', 'id', 'usu_alta_id');
    } // end

    public function usu_mod()
    {
        return $this->hasOne('App\User', 'id', 'usu_mod_id');
    } // end

    protected $dates = ['deleted_at'];

    // generated by relation command - Cliente,Vinculacion - start
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    } // end

    // generated by relation command - Vinculacion,DocVinculacionVinculacion - start
    public function docVinculacionVinculacions()
    {
        return $this->hasMany('App\DocVinculacionVinculacion');
    } // end

    // generated by relation command - Vinculacion,VinculacionHora - start
    public function vinculacionHoras()
    {
        return $this->hasMany('App\VinculacionHora');
    } // end

    // generated by relation command - StVinculacion,Vinculacion - start
    public function stVinculacion()
    {
        return $this->belongsTo('App\StVinculacion');
    } // end

    // generated by relation command - Clasificacion,Vinculacion - start
    public function clasificacion()
    {
        return $this->belongsTo('App\Clasificacion');
    } // end
}
