{{-- include_area_app_common_start --}}
@include('apples._common'){{-- generated by scaffold - Apple --}}
@include('apples._common'){{-- generated by scaffold - Apple --}}
@include('apples._common'){{-- generated by scaffold - Apple --}}
@include('apples._common'){{-- generated by scaffold - Apple --}}
@include('apples._common'){{-- generated by scaffold - Apple --}}
@include('menus._common'){{-- generated by scaffold - Menu --}}
@include('banderas._common'){{-- generated by scaffold - Bandera --}}
@include('lectivos._common'){{-- generated by scaffold - Lectivo --}}
@include('menus._common'){{-- generated by scaffold - Menu --}}
@include('plantels._common'){{-- generated by scaffold - Plantel --}}
@include('banderas._common'){{-- generated by scaffold - Bandera --}}
@include('lectivos._common'){{-- generated by scaffold - Lectivo --}}
@include('plantels._common'){{-- generated by scaffold - Plantel --}}
@include('areas._common'){{-- generated by scaffold - Area --}}
@include('puestos._common'){{-- generated by scaffold - Puesto --}}
@include('stPuestos._common'){{-- generated by scaffold - StPuesto --}}
@include('empleados._common'){{-- generated by scaffold - Empleado --}}
@include('stEmpleados._common'){{-- generated by scaffold - StEmpleado --}}
@include('stClientes._common'){{-- generated by scaffold - StCliente --}}
@include('ofertas._common'){{-- generated by scaffold - Ofertum --}}
@include('medios._common'){{-- generated by scaffold - Medio --}}
@include('tareas._common'){{-- generated by scaffold - Tarea --}}
@include('estados._common'){{-- generated by scaffold - Estado --}}
@include('municipios._common'){{-- generated by scaffold - Municipio --}}
@include('clientes._common'){{-- generated by scaffold - Cliente --}}
@include('preguntas._common'){{-- generated by scaffold - Preguntum --}}
@include('preguntaClientes._common'){{-- generated by scaffold - PreguntaCliente --}}
@include('periodos._common'){{-- generated by scaffold - Periodo --}}
@include('plantillas._common'){{-- generated by scaffold - Plantilla --}}
@include('nivels._common'){{-- generated by scaffold - Nivel --}}
@include('grados._common'){{-- generated by scaffold - Grado --}}
@include('cursos._common'){{-- generated by scaffold - Curso --}}
@include('subcursos._common'){{-- generated by scaffold - Subcurso --}}
@include('diplomados._common'){{-- generated by scaffold - Diplomado --}}
@include('subdiplomados._common'){{-- generated by scaffold - Subdiplomado --}}
@include('otros._common'){{-- generated by scaffold - Otro --}}
@include('subotros._common'){{-- generated by scaffold - Subotro --}}
@include('promocions._common'){{-- generated by scaffold - Promocion --}}
@include('tpoCorreos._common'){{-- generated by scaffold - TpoCorreo --}}
@include('sms._common'){{-- generated by scaffold - Sm --}}
@include('correos._common'){{-- generated by scaffold - Correo --}}
@include('params._common'){{-- generated by scaffold - Param --}}
@include('stTareas._common'){{-- generated by scaffold - StTarea --}}
@include('asignacionTareas._common'){{-- generated by scaffold - AsignacionTarea --}}
@include('asignacionTareas._common'){{-- generated by scaffold - AsignacionTarea --}}
@include('seguimientoTareas._common'){{-- generated by scaffold - SeguimientoTarea --}}
@include('asignacionTareas._common'){{-- generated by scaffold - AsignacionTarea --}}
@include('asuntos._common'){{-- generated by scaffold - Asunto --}}
@include('tpoPlantels._common'){{-- generated by scaffold - TpoPlantel --}}
{{-- include_area_app_common_end --}}

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu level 1<span class="caret"></span></a>
                        <ul id="app_navi" class="dropdown-menu" role="menu">
                        <li{!! Request::is('apples*') ? ' class="active"' : '' !!}><a href="/apples/">@yield('applesAppTitle')</a></li>{{-- generated by scaffold - Apple --}}
                        <li{!! Request::is('apples*') ? ' class="active"' : '' !!}><a href="/apples/">@yield('applesAppTitle')</a></li>{{-- generated by scaffold - Apple --}}
                        <li{!! Request::is('apples*') ? ' class="active"' : '' !!}><a href="/apples/">@yield('applesAppTitle')</a></li>{{-- generated by scaffold - Apple --}}
                        <li{!! Request::is('apples*') ? ' class="active"' : '' !!}><a href="/apples/">@yield('applesAppTitle')</a></li>{{-- generated by scaffold - Apple --}}
                        <li{!! Request::is('apples*') ? ' class="active"' : '' !!}><a href="/apples/">@yield('applesAppTitle')</a></li>{{-- generated by scaffold - Apple --}}
                        <li{!! Request::is('menus*') ? ' class="active"' : '' !!}><a href="/menus/">@yield('menusAppTitle')</a></li>{{-- generated by scaffold - Menu --}}
                        <li{!! Request::is('banderas*') ? ' class="active"' : '' !!}><a href="/banderas/">@yield('banderasAppTitle')</a></li>{{-- generated by scaffold - Bandera --}}
                        <li{!! Request::is('lectivos*') ? ' class="active"' : '' !!}><a href="/lectivos/">@yield('lectivosAppTitle')</a></li>{{-- generated by scaffold - Lectivo --}}
                        <li{!! Request::is('menus*') ? ' class="active"' : '' !!}><a href="/menus/">@yield('menusAppTitle')</a></li>{{-- generated by scaffold - Menu --}}
                        <li{!! Request::is('plantels*') ? ' class="active"' : '' !!}><a href="/plantels/">@yield('plantelsAppTitle')</a></li>{{-- generated by scaffold - Plantel --}}
                        <li{!! Request::is('banderas*') ? ' class="active"' : '' !!}><a href="/banderas/">@yield('banderasAppTitle')</a></li>{{-- generated by scaffold - Bandera --}}
                        <li{!! Request::is('lectivos*') ? ' class="active"' : '' !!}><a href="/lectivos/">@yield('lectivosAppTitle')</a></li>{{-- generated by scaffold - Lectivo --}}
                        <li{!! Request::is('plantels*') ? ' class="active"' : '' !!}><a href="/plantels/">@yield('plantelsAppTitle')</a></li>{{-- generated by scaffold - Plantel --}}
                        <li{!! Request::is('areas*') ? ' class="active"' : '' !!}><a href="/areas/">@yield('areasAppTitle')</a></li>{{-- generated by scaffold - Area --}}
                        <li{!! Request::is('puestos*') ? ' class="active"' : '' !!}><a href="/puestos/">@yield('puestosAppTitle')</a></li>{{-- generated by scaffold - Puesto --}}
                        <li{!! Request::is('stPuestos*') ? ' class="active"' : '' !!}><a href="/stPuestos/">@yield('stPuestosAppTitle')</a></li>{{-- generated by scaffold - StPuesto --}}
                        <li{!! Request::is('empleados*') ? ' class="active"' : '' !!}><a href="/empleados/">@yield('empleadosAppTitle')</a></li>{{-- generated by scaffold - Empleado --}}
                        <li{!! Request::is('stEmpleados*') ? ' class="active"' : '' !!}><a href="/stEmpleados/">@yield('stEmpleadosAppTitle')</a></li>{{-- generated by scaffold - StEmpleado --}}
                        <li{!! Request::is('stClientes*') ? ' class="active"' : '' !!}><a href="/stClientes/">@yield('stClientesAppTitle')</a></li>{{-- generated by scaffold - StCliente --}}
                        <li{!! Request::is('ofertas*') ? ' class="active"' : '' !!}><a href="/ofertas/">@yield('ofertasAppTitle')</a></li>{{-- generated by scaffold - Ofertum --}}
                        <li{!! Request::is('medios*') ? ' class="active"' : '' !!}><a href="/medios/">@yield('mediosAppTitle')</a></li>{{-- generated by scaffold - Medio --}}
                        <li{!! Request::is('tareas*') ? ' class="active"' : '' !!}><a href="/tareas/">@yield('tareasAppTitle')</a></li>{{-- generated by scaffold - Tarea --}}
                        <li{!! Request::is('estados*') ? ' class="active"' : '' !!}><a href="/estados/">@yield('estadosAppTitle')</a></li>{{-- generated by scaffold - Estado --}}
                        <li{!! Request::is('municipios*') ? ' class="active"' : '' !!}><a href="/municipios/">@yield('municipiosAppTitle')</a></li>{{-- generated by scaffold - Municipio --}}
                        <li{!! Request::is('clientes*') ? ' class="active"' : '' !!}><a href="/clientes/">@yield('clientesAppTitle')</a></li>{{-- generated by scaffold - Cliente --}}
                        <li{!! Request::is('preguntas*') ? ' class="active"' : '' !!}><a href="/preguntas/">@yield('preguntasAppTitle')</a></li>{{-- generated by scaffold - Preguntum --}}
                        <li{!! Request::is('preguntaClientes*') ? ' class="active"' : '' !!}><a href="/preguntaClientes/">@yield('preguntaClientesAppTitle')</a></li>{{-- generated by scaffold - PreguntaCliente --}}
                        <li{!! Request::is('periodos*') ? ' class="active"' : '' !!}><a href="/periodos/">@yield('periodosAppTitle')</a></li>{{-- generated by scaffold - Periodo --}}
                        <li{!! Request::is('plantillas*') ? ' class="active"' : '' !!}><a href="/plantillas/">@yield('plantillasAppTitle')</a></li>{{-- generated by scaffold - Plantilla --}}
                        <li{!! Request::is('nivels*') ? ' class="active"' : '' !!}><a href="/nivels/">@yield('nivelsAppTitle')</a></li>{{-- generated by scaffold - Nivel --}}
                        <li{!! Request::is('grados*') ? ' class="active"' : '' !!}><a href="/grados/">@yield('gradosAppTitle')</a></li>{{-- generated by scaffold - Grado --}}
                        <li{!! Request::is('cursos*') ? ' class="active"' : '' !!}><a href="/cursos/">@yield('cursosAppTitle')</a></li>{{-- generated by scaffold - Curso --}}
                        <li{!! Request::is('subcursos*') ? ' class="active"' : '' !!}><a href="/subcursos/">@yield('subcursosAppTitle')</a></li>{{-- generated by scaffold - Subcurso --}}
                        <li{!! Request::is('diplomados*') ? ' class="active"' : '' !!}><a href="/diplomados/">@yield('diplomadosAppTitle')</a></li>{{-- generated by scaffold - Diplomado --}}
                        <li{!! Request::is('subdiplomados*') ? ' class="active"' : '' !!}><a href="/subdiplomados/">@yield('subdiplomadosAppTitle')</a></li>{{-- generated by scaffold - Subdiplomado --}}
                        <li{!! Request::is('otros*') ? ' class="active"' : '' !!}><a href="/otros/">@yield('otrosAppTitle')</a></li>{{-- generated by scaffold - Otro --}}
                        <li{!! Request::is('subotros*') ? ' class="active"' : '' !!}><a href="/subotros/">@yield('subotrosAppTitle')</a></li>{{-- generated by scaffold - Subotro --}}
                        <li{!! Request::is('promocions*') ? ' class="active"' : '' !!}><a href="/promocions/">@yield('promocionsAppTitle')</a></li>{{-- generated by scaffold - Promocion --}}
                        <li{!! Request::is('tpoCorreos*') ? ' class="active"' : '' !!}><a href="/tpoCorreos/">@yield('tpoCorreosAppTitle')</a></li>{{-- generated by scaffold - TpoCorreo --}}
                        <li{!! Request::is('sms*') ? ' class="active"' : '' !!}><a href="/sms/">@yield('smsAppTitle')</a></li>{{-- generated by scaffold - Sm --}}
                        <li{!! Request::is('correos*') ? ' class="active"' : '' !!}><a href="/correos/">@yield('correosAppTitle')</a></li>{{-- generated by scaffold - Correo --}}
                        <li{!! Request::is('params*') ? ' class="active"' : '' !!}><a href="/params/">@yield('paramsAppTitle')</a></li>{{-- generated by scaffold - Param --}}
                        <li{!! Request::is('stTareas*') ? ' class="active"' : '' !!}><a href="/stTareas/">@yield('stTareasAppTitle')</a></li>{{-- generated by scaffold - StTarea --}}
                        <li{!! Request::is('asignacionTareas*') ? ' class="active"' : '' !!}><a href="/asignacionTareas/">@yield('asignacionTareasAppTitle')</a></li>{{-- generated by scaffold - AsignacionTarea --}}
                        <li{!! Request::is('seguimientoTareas*') ? ' class="active"' : '' !!}><a href="/seguimientoTareas/">@yield('seguimientoTareasAppTitle')</a></li>{{-- generated by scaffold - SeguimientoTarea --}}
                        <li{!! Request::is('asuntos*') ? ' class="active"' : '' !!}><a href="/asuntos/">@yield('asuntosAppTitle')</a></li>{{-- generated by scaffold - Asunto --}}
                        <li{!! Request::is('tpoPlantels*') ? ' class="active"' : '' !!}><a href="/tpoPlantels/">@yield('tpoPlantelsAppTitle')</a></li>{{-- generated by scaffold - TpoPlantel --}}
                        



                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>