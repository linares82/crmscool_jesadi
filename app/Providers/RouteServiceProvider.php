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
		Route::model('especialidads', 'App\Especialidad');// generated by scaffold - Especialidad
		Route::model('seguimientos', 'App\Seguimiento');// generated by scaffold - Seguimiento
		Route::model('stSeguimientos', 'App\StSeguimiento');// generated by scaffold - StSeguimiento
		Route::model('avisos', 'App\Aviso');// generated by scaffold - Aviso
		Route::model('cambioStSeguimientos', 'App\CambioStSeguimiento');// generated by scaffold - CambioStSeguimiento
		Route::model('avisoGrals', 'App\AvisoGral');// generated by scaffold - AvisoGral
		Route::model('avisoGrals', 'App\AvisoGral');// generated by scaffold - AvisoGral
		Route::model('docEmpleados', 'App\DocEmpleado');// generated by scaffold - DocEmpleado
		Route::model('pivotDocEmpleados', 'App\PivotDocEmpleado');// generated by scaffold - PivotDocEmpleado
		Route::model('pivotAvisoGralEmpleados', 'App\PivotAvisoGralEmpleado');// generated by scaffold - PivotAvisoGralEmpleado
		Route::model('asuntos', 'App\Asunto');// generated by scaffold - Asunto
		Route::model('alumnos', 'App\Alumno');// generated by scaffold - Alumno
		Route::model('jornadas', 'App\Jornada');// generated by scaffold - Jornada
		Route::model('salons', 'App\Salon');// generated by scaffold - Salon
		Route::model('periodos', 'App\Periodo');// generated by scaffold - Periodo
		Route::model('periodoEstudios', 'App\PeriodoEstudio');// generated by scaffold - PeriodoEstudio
		Route::model('grupos', 'App\Grupo');// generated by scaffold - Grupo
		Route::model('materias', 'App\Materium');// generated by scaffold - Materium
		Route::model('stAlumnos', 'App\StAlumno');// generated by scaffold - StAlumno
		Route::model('inscripcions', 'App\Inscripcion');// generated by scaffold - Inscripcion
		Route::model('docAlumnos', 'App\DocAlumno');// generated by scaffold - DocAlumno
		Route::model('stPlantels', 'App\StPlantel');// generated by scaffold - StPlantel
		Route::model('dias', 'App\Dium');// generated by scaffold - Dium
		Route::model('asignacionAcademicas', 'App\AsignacionAcademica');// generated by scaffold - AsignacionAcademica
		Route::model('horarios', 'App\Horario');// generated by scaffold - Horario
		Route::model('stMaterias', 'App\StMateria');// generated by scaffold - StMateria
		Route::model('tpoExamens', 'App\TpoExaman');// generated by scaffold - TpoExaman
		Route::model('hacademicas', 'App\Hacademica');// generated by scaffold - Hacademica
		Route::model('calificacions', 'App\Calificacion');// generated by scaffold - Calificacion
		Route::model('ponderacions', 'App\Ponderacion');// generated by scaffold - Ponderacion
		Route::model('cargaPonderacions', 'App\CargaPonderacion');// generated by scaffold - CargaPonderacion
		Route::model('calificacionPonderacions', 'App\CalificacionPonderacion');// generated by scaffold - CalificacionPonderacion
		Route::model('hsSeguimientos', 'App\HsSeguimiento');// generated by scaffold - HsSeguimiento
		Route::model('calendarioEvaluacions', 'App\CalendarioEvaluacion');// generated by scaffold - CalendarioEvaluacion
		Route::model('asuntos', 'App\Asunto');// generated by scaffold - Asunto
		Route::model('giros', 'App\Giro');// generated by scaffold - Giro
		Route::model('empresas', 'App\Empresa');// generated by scaffold - Empresa
		Route::model('asistenciasCs', 'App\AsistenciasC');// generated by scaffold - AsistenciasC
		Route::model('estAsistencias', 'App\EstAsistencium');// generated by scaffold - EstAsistencium
		Route::model('asistenciaRs', 'App\AsistenciaR');// generated by scaffold - AsistenciaR
		Route::model('modulos', 'App\Modulo');// generated by scaffold - Modulo
		Route::model('grupoPeriodoEstudios', 'App\GrupoPeriodoEstudio');// generated by scaffold - GrupoPeriodoEstudio
		Route::model('materiumPeriodos', 'App\MateriumPeriodo');// generated by scaffold - MateriumPeriodo
		Route::model('actividadEmpresas', 'App\ActividadEmpresa');// generated by scaffold - ActividadEmpresa
		Route::model('actividadEmpresas', 'App\ActividadEmpresa');// generated by scaffold - ActividadEmpresa
		Route::model('combinacionEmpresas', 'App\CombinacionEmpresa');// generated by scaffold - CombinacionEmpresa
		Route::model('stCuestionarios', 'App\StCuestionario');// generated by scaffold - StCuestionario
		Route::model('cuestionarios', 'App\Cuestionario');// generated by scaffold - Cuestionario
		Route::model('cuestionarioPreguntas', 'App\CuestionarioPregunta');// generated by scaffold - CuestionarioPregunta
		Route::model('cuestionarioRespuestas', 'App\CuestionarioRespuesta');// generated by scaffold - CuestionarioRespuesta
		Route::model('cuestionarioDatos', 'App\CuestionarioDato');// generated by scaffold - CuestionarioDato
		Route::model('combinacionClientes', 'App\CombinacionCliente');// generated by scaffold - CombinacionCliente
		Route::model('combinacionClientes', 'App\CombinacionCliente');// generated by scaffold - CombinacionCliente
		Route::model('diaNoHabils', 'App\DiaNoHabil');// generated by scaffold - DiaNoHabil
		Route::model('diaNoHabils', 'App\DiaNoHabil');// generated by scaffold - DiaNoHabil
		Route::model('ccuestionarios', 'App\Ccuestionario');// generated by scaffold - Ccuestionario
		Route::model('ccuestionarioPreguntas', 'App\CcuestionarioPreguntum');// generated by scaffold - CcuestionarioPreguntum
		Route::model('ccuestionarioRespuestas', 'App\CcuestionarioRespuestum');// generated by scaffold - CcuestionarioRespuestum
		Route::model('ccuestionarioDatos', 'App\CcuestionarioDato');// generated by scaffold - CcuestionarioDato
		Route::model('pagosLectivos', 'App\PagosLectivo');// generated by scaffold - PagosLectivo
		Route::model('cuentaContables', 'App\CuentaContable');// generated by scaffold - CuentaContable
		Route::model('reglaRecargos', 'App\ReglaRecargo');// generated by scaffold - ReglaRecargo
		Route::model('pagosLectivosLns', 'App\PagosLectivosLn');// generated by scaffold - PagosLectivosLn
		Route::model('planCampoFiltros', 'App\PlanCampoFiltro');// generated by scaffold - PlanCampoFiltro
		Route::model('planCondicionFiltros', 'App\PlanCondicionFiltro');// generated by scaffold - PlanCondicionFiltro
		Route::model('tpoInformes', 'App\TpoInforme');// generated by scaffold - TpoInforme
		Route::model('avisosInicios', 'App\AvisosInicio');// generated by scaffold - AvisosInicio
		Route::model('smsPredefinidos', 'App\SmsPredefinido');// generated by scaffold - SmsPredefinido
		Route::model('cajaConceptos', 'App\CajaConcepto');// generated by scaffold - CajaConcepto
		Route::model('cuentaContables', 'App\CuentaContable');// generated by scaffold - CuentaContable
		Route::model('planPagos', 'App\PlanPago');// generated by scaffold - PlanPago
		Route::model('planPagoLns', 'App\PlanPagoLn');// generated by scaffold - PlanPagoLn
		Route::model('formaPagos', 'App\FormaPago');// generated by scaffold - FormaPago
		Route::model('reglaRecargos', 'App\ReglaRecargo');// generated by scaffold - ReglaRecargo
		Route::model('tipoReglas', 'App\TipoRegla');// generated by scaffold - TipoRegla
		Route::model('adeudos', 'App\Adeudo');// generated by scaffold - Adeudo
		Route::model('cajas', 'App\Caja');// generated by scaffold - Caja
		Route::model('cajaLns', 'App\CajaLn');// generated by scaffold - CajaLn
		Route::model('stCajas', 'App\StCaja');// generated by scaffold - StCaja
		Route::model('segmentoMercados', 'App\SegmentoMercado');// generated by scaffold - SegmentoMercado
		Route::model('pagos', 'App\Pago');// generated by scaffold - Pago
		Route::model('pagos', 'App\Pago');// generated by scaffold - Pago
		Route::model('paises', 'App\Paise');// generated by scaffold - Paise
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
