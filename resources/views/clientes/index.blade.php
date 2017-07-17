@extends('plantillas.admin_template')

@include('clientes._common')

@section('header')

    <ol class="breadcrumb">
    	<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <!--
        @if ( $query_params = Request::input('q') )

            <li class="active"><a href="{{ route('clientes.index') }}">@yield('clientesAppTitle')</a></li>
            <li class="active">condition(  

            @foreach( $query_params as $key => $value )
                @if (!$loop->first) / @endif {{ $key }} : {{ $value }}
            @endforeach
            )</li>
        @else
            <li class="active">@yield('clientesAppTitle')</li>
        @endif
        -->
        <li class="active">@yield('clientesAppTitle')</li>
    </ol>

    <div class="">
        <h3>
            <i class="glyphicon glyphicon-align-justify"></i> @yield('clientesAppTitle')
            @permission('clientes.create')
            <a class="btn btn-success pull-right" href="{{ route('clientes.create') }}"><i class="glyphicon glyphicon-plus"></i> Crear</a>
            @endpermission
            @permission('clientes.carga')
            <a class="btn btn-warning pull-right" href="{{ route('clientes.carga') }}"><i class="glyphicon glyphicon-plus"></i> Carga Archivo</a>
            @endpermission
        </h3>

    </div>

    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
        <div class="panel panel-default">
            <div id="headingOne" role="tab" class="panel-heading">
                <h4 class="panel-title">
                <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne" data-parent="#accordion" data-toggle="collapse" role="button">
                    <span aria-hidden="true" class="glyphicon glyphicon-search"></span> Buscar
                </a>
                </h4>
            </div>
            <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <form class="Cliente_search" id="search" action="{{ route('clientes.index') }}" accept-charset="UTF-8" method="get">
                        <input type="hidden" name="q[s]" value="{{ @(Request::input('q')['s']) ?: '' }}" />
                        <div class="form-horizontal">

                            <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_cve_cliente_gt">CVE_CLIENTE</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['cve_cliente_gt']) ?: '' }}" name="q[cve_cliente_gt]" id="q_cve_cliente_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['cve_cliente_lt']) ?: '' }}" name="q[cve_cliente_lt]" id="q_cve_cliente_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_matericula_cont">MATRICULA</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['matricula_cont']) ?: '' }}" name="q[matricula_cont]" id="q_matricula_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_nombre_gt">NOMBRE</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nombre_gt']) ?: '' }}" name="q[nombre_gt]" id="q_nombre_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nombre_lt']) ?: '' }}" name="q[nombre_lt]" id="q_nombre_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_nombre_cont">PRIMER NOMBRE</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nombre_cont']) ?: '' }}" name="q[nombre_cont]" id="q_nombre_cont" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_nombre2_cont">SEGUNDO NOMBRE</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nombre2_cont']) ?: '' }}" name="q[nombre2_cont]" id="q_nombre2_cont" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_ape_paterno_cont">APELLIDO PATERNO</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['ape_paterno_cont']) ?: '' }}" name="q[ape_paterno_cont]" id="q_ape_paterno_cont" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_ape_materno_cont">APELLIDO MATERNO</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['ape_materno_cont']) ?: '' }}" name="q[ape_materno_cont]" id="q_ape_materno_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_fec_registro_gt">FEC_REGISTRO</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['fec_registro_gt']) ?: '' }}" name="q[fec_registro_gt]" id="q_fec_registro_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['fec_registro_lt']) ?: '' }}" name="q[fec_registro_lt]" id="q_fec_registro_lt" />
                                </div>
                            </div>
                            -->
                            
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_st_clientes.name_cont">ESTATUS</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['st_clientes.name_cont']) ?: '' }}" name="q[st_clientes.name_cont]" id="q_st_clientes.name_cont" />
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_plantels.razon_cont">PLANTEL</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['plantels.razon_cont']) ?: '' }}" name="q[plantels.razon_cont]" id="q_plantels.razon_cont" />
                                </div>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label class="col-sm-12 control-label" for="q_empleados.nombre_cont">EMPLEADO</label>
                                <div class="col-sm-12">
                                    <input class="form-control input-sm" type="hiden" value="{{ @(Request::input('q')['empleados.nombre_cont']) ?: '' }}" name="q[empleados.nombre_cont]" id="q_empleados.nombre_cont" />
                                    
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input type="submit" name="commit" value="Buscar" class="btn btn-default btn-xs" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        @if(session('message'))
            <div class="alert alert-danger">
                {!! session('message') !!}
            </div>
        @endif
        
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($clientes->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>@include('plantillas.getOrderLink', ['column' => 'id', 'title' => 'ID'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'matricula', 'title' => 'MATRICULA'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'nombre', 'title' => 'PRIMER NOMBRE'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'nombre2', 'title' => 'SEGUNDO NOMBRE'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'ape_paterno', 'title' => 'APELLIDO PATERNO'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'ape_materno', 'title' => 'APELLIDO MATERNO'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'st_clientes.name', 'title' => 'ESTATUS'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'empleados.nombre', 'title' => 'EMPLEADO'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'plantels.razon', 'title' => 'PLANTEL'])</th>
                            <th class="text-right">OPCIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td><a href="{{ route('clientes.show', $cliente->id) }}">{{$cliente->id}}</a></td>
                                <td>{{$cliente->matricula}}</td>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->nombre2}}</td>
                                <td>{{$cliente->ape_paterno}}</td>
                                <td>{{$cliente->ape_materno}}</td>
                                <td>{{$cliente->stCliente->name}}</td>
                                <td>{{$cliente->empleado->nombre}}</td>
                                <td>{{$cliente->plantel->razon}}</td>
                                <td class="text-right">
                                    @permission('clientes.edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('clientes.duplicate', $cliente->id) }}"><i class="glyphicon glyphicon-duplicate"></i> Duplicate</a>
                                    @endpermission
                                    @permission('clientes.edit')
                                    <a class="btn btn-xs btn-warning" href="{{ route('clientes.edit', $cliente->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    @endpermission
                                    @permission('clientes.destroy')
                                    {!! Form::model($cliente, array('route' => array('clientes.destroy', $cliente->id),'method' => 'delete', 'style' => 'display: inline;', 'onsubmit'=> "if(confirm('¿Borrar? ¿Esta seguro?')) { return true } else {return false };")) !!}
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Borrar</button>
                                    {!! Form::close() !!}
                                    @endpermission
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $clientes->appends(Request::except('page'))->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vacio!</h3>
            @endif

        </div>
    </div>

@endsection

@push('scripts')
  <script>
  
    $(document).ready(function() {
        // assuming the controls you want to attach the plugin to
          // have the "datepicker" class set
          //Campo de fecha
          $('#q_fec_registro_cont').Zebra_DatePicker({
            days:['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
            months:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            readonly_element: false,
            lang_clear_date: 'Limpiar',
            show_select_today: 'Hoy',
          });  
       
        });


  </script>
@endpush