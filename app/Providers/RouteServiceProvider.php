<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
		Route::model('apples', 'App\Apple');// generated by scaffold - Apple
		Route::model('apples', 'App\Apple');// generated by scaffold - Apple
		Route::model('apples', 'App\Apple');// generated by scaffold - Apple
		Route::model('apples', 'App\Apple');// generated by scaffold - Apple
		Route::model('apples', 'App\Apple');// generated by scaffold - Apple
		Route::model('menus', 'App\Menu');// generated by scaffold - Menu
		Route::model('banderas', 'App\Bandera');// generated by scaffold - Bandera
		Route::model('lectivos', 'App\Lectivo');// generated by scaffold - Lectivo
		Route::model('menus', 'App\Menu');// generated by scaffold - Menu
		Route::model('plantels', 'App\Plantel');// generated by scaffold - Plantel
		Route::model('banderas', 'App\Bandera');// generated by scaffold - Bandera
		Route::model('lectivos', 'App\Lectivo');// generated by scaffold - Lectivo
		Route::model('plantels', 'App\Plantel');// generated by scaffold - Plantel
		Route::model('areas', 'App\Area');// generated by scaffold - Area
		Route::model('puestos', 'App\Puesto');// generated by scaffold - Puesto
		Route::model('stPuestos', 'App\StPuesto');// generated by scaffold - StPuesto
		Route::model('empleados', 'App\Empleado');// generated by scaffold - Empleado
		Route::model('stEmpleados', 'App\StEmpleado');// generated by scaffold - StEmpleado
		Route::model('stClientes', 'App\StCliente');// generated by scaffold - StCliente
		Route::model('ofertas', 'App\Ofertum');// generated by scaffold - Ofertum
		Route::model('medios', 'App\Medio');// generated by scaffold - Medio
		Route::model('tareas', 'App\Tarea');// generated by scaffold - Tarea
		Route::model('estados', 'App\Estado');// generated by scaffold - Estado
		Route::model('municipios', 'App\Municipio');// generated by scaffold - Municipio
		Route::model('clientes', 'App\Cliente');// generated by scaffold - Cliente
		Route::model('preguntas', 'App\Preguntum');// generated by scaffold - Preguntum
		Route::model('preguntaClientes', 'App\PreguntaCliente');// generated by scaffold - PreguntaCliente
		Route::model('periodos', 'App\Periodo');// generated by scaffold - Periodo
		Route::model('plantillas', 'App\Plantilla');// generated by scaffold - Plantilla
		Route::model('nivels', 'App\Nivel');// generated by scaffold - Nivel
		Route::model('grados', 'App\Grado');// generated by scaffold - Grado
		Route::model('cursos', 'App\Curso');// generated by scaffold - Curso
		Route::model('subcursos', 'App\Subcurso');// generated by scaffold - Subcurso
		Route::model('diplomados', 'App\Diplomado');// generated by scaffold - Diplomado
		Route::model('subdiplomados', 'App\Subdiplomado');// generated by scaffold - Subdiplomado
		Route::model('otros', 'App\Otro');// generated by scaffold - Otro
		Route::model('subotros', 'App\Subotro');// generated by scaffold - Subotro
		Route::model('promocions', 'App\Promocion');// generated by scaffold - Promocion
		Route::model('tpoCorreos', 'App\TpoCorreo');// generated by scaffold - TpoCorreo
		Route::model('sms', 'App\Sm');// generated by scaffold - Sm
		Route::model('correos', 'App\Correo');// generated by scaffold - Correo
		Route::model('params', 'App\Param');// generated by scaffold - Param
		Route::model('stTareas', 'App\StTarea');// generated by scaffold - StTarea
		Route::model('asignacionTareas', 'App\AsignacionTarea');// generated by scaffold - AsignacionTarea
		Route::model('seguimientoTareas', 'App\SeguimientoTarea');// generated by scaffold - SeguimientoTarea
		Route::model('asuntos', 'App\Asunto');// generated by scaffold - Asunto
		Route::model('tpoPlantels', 'App\TpoPlantel');// generated by scaffold - TpoPlantel
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}