<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get(
    '/cliente/findBy',
    array(
        'as' => 'cliente.findBy',
        'uses' => 'ClientesController@findBy'
    )
);

Route::post(
    '/ebanxes/notificacion',
    array(
        'as' => 'ebanxes.notificacion',
        'uses' => 'EbanxesController@notificacion'
    )
);

Route::get('/ebanxes/paisesWeb', 'EbanxesController@paisesWeb');

Route::get(
    '/ebanxes/ofertaEmm',
    array(
        'as' => 'ebanxes.ofertaEmm',
        'uses' => 'EbanxesController@ofertaEmm'
    )
);

Route::get(
    '/ebanxes/cmbOfertaEmm',
    array(
        'as' => 'ebanxes.cmbOfertaEmm',
        'uses' => 'EbanxesController@cmbOfertaEmm'
    )
);

Route::get(
    '/ebanxes/ofertaCedva',
    array(
        'as' => 'ebanxes.ofertaCedva',
        'uses' => 'EbanxesController@ofertaCedva'
    )
);

Route::get(
    '/ebanxes/cmbOfertaCedva',
    array(
        'as' => 'ebanxes.cmbOfertaCedva',
        'uses' => 'EbanxesController@cmbOfertaCedva'
    )
);

Route::post(
    '/ebanxes/cargaCliente',
    array(
        'as' => 'ebanxes.cargaCliente',
        'uses' => 'EbanxesController@cargaCliente'
    )
);

//Api para consultas en la web del cliente
Route::get(
    '/adeudos/adeudosXCliente',
    array(
        'as' => 'adeudos.adeudosXCliente',
        'uses' => 'AdeudosController@adeudosXCliente'
    )
);

Route::get(
    '/inscripcions/historiaCalificaciones',
    array(
        'as' => 'inscripcions.historiaCalificaciones',
        'uses' => 'InscripcionsController@historiaCalificaciones'
    )
);


Route::get(
    '/hacademicas/lectivosXalumno',
    array(
        'as' => 'hacademicas.lectivosXalumno',
        'uses' => 'hacademicasController@lectivosXalumno'
    )
);

Route::get(
    '/hacademicas/materiasXalumno',
    array(
        'as' => 'hacademicas.materiasXalumno',
        'uses' => 'hacademicasController@materiasXalumno'
    )
);

Route::get(
    '/hacademicas/gruposXalumno',
    array(
        'as' => 'hacademicas.gruposXalumno',
        'uses' => 'hacademicasController@gruposXalumno'
    )
);

Route::get(
    '/asignacion_academicas/asistenciasXAsignacion',
    array(
        'as' => 'asignacion_academicas.asistenciasXAsignacion',
        'uses' => 'AsignacionAcademicasController@asistenciasXAsignacion'
    )
);

