@extends('plantillas.admin_template')

@include('impresionComprobanteEs._common')

@section('header')

    <ol class="breadcrumb">
    	<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <!--
        @if ( $query_params = Request::input('q') )

            <li class="active"><a href="{{ route('impresionComprobanteEs.index') }}">@yield('impresionComprobanteEsAppTitle')</a></li>
            <li class="active">condition(  

            @foreach( $query_params as $key => $value )
                @if (!$loop->first) / @endif {{ $key }} : {{ $value }}
            @endforeach
            )</li>
        @else
            <li class="active">@yield('impresionComprobanteEsAppTitle')</li>
        @endif
        -->
        <li class="active">@yield('impresionComprobanteEsAppTitle')</li>
    </ol>

    <div class="">
        <h3>
            <i class="glyphicon glyphicon-align-justify"></i> @yield('impresionComprobanteEsAppTitle')
            @permission('impresionComprobanteEs.create')
            <a class="btn btn-success pull-right" href="{{ route('impresionComprobanteEs.create') }}"><i class="glyphicon glyphicon-plus"></i> Crear</a>
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
                    <form class="ImpresionComprobanteE_search" id="search" action="{{ route('impresionComprobanteEs.index') }}" accept-charset="UTF-8" method="get">
                        <input type="hidden" name="q[s]" value="{{ @(Request::input('q')['s']) ?: '' }}" />
                        <div class="form-horizontal">

                            <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_inscripcion_id_gt">INSCRIPCION_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['inscripcion_id_gt']) ?: '' }}" name="q[inscripcion_id_gt]" id="q_inscripcion_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['inscripcion_id_lt']) ?: '' }}" name="q[inscripcion_id_lt]" id="q_inscripcion_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_inscripcion_id_cont">INSCRIPCION_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['inscripcion_id_cont']) ?: '' }}" name="q[inscripcion_id_cont]" id="q_inscripcion_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_cliente_id_gt">CLIENTE_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['cliente_id_gt']) ?: '' }}" name="q[cliente_id_gt]" id="q_cliente_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['cliente_id_lt']) ?: '' }}" name="q[cliente_id_lt]" id="q_cliente_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_cliente_id_cont">CLIENTE_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['cliente_id_cont']) ?: '' }}" name="q[cliente_id_cont]" id="q_cliente_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_plantel_id_gt">PLANTEL_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['plantel_id_gt']) ?: '' }}" name="q[plantel_id_gt]" id="q_plantel_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['plantel_id_lt']) ?: '' }}" name="q[plantel_id_lt]" id="q_plantel_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_plantel_id_cont">PLANTEL_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['plantel_id_cont']) ?: '' }}" name="q[plantel_id_cont]" id="q_plantel_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_especialidad_id_gt">ESPECIALIDAD_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['especialidad_id_gt']) ?: '' }}" name="q[especialidad_id_gt]" id="q_especialidad_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['especialidad_id_lt']) ?: '' }}" name="q[especialidad_id_lt]" id="q_especialidad_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_especialidad_id_cont">ESPECIALIDAD_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['especialidad_id_cont']) ?: '' }}" name="q[especialidad_id_cont]" id="q_especialidad_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_nivel_id_gt">NIVEL_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nivel_id_gt']) ?: '' }}" name="q[nivel_id_gt]" id="q_nivel_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nivel_id_lt']) ?: '' }}" name="q[nivel_id_lt]" id="q_nivel_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_nivel_id_cont">NIVEL_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['nivel_id_cont']) ?: '' }}" name="q[nivel_id_cont]" id="q_nivel_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_turno_id_gt">TURNO_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['turno_id_gt']) ?: '' }}" name="q[turno_id_gt]" id="q_turno_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['turno_id_lt']) ?: '' }}" name="q[turno_id_lt]" id="q_turno_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_turno_id_cont">TURNO_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['turno_id_cont']) ?: '' }}" name="q[turno_id_cont]" id="q_turno_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_lectivo_id_gt">LECTIVO_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['lectivo_id_gt']) ?: '' }}" name="q[lectivo_id_gt]" id="q_lectivo_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['lectivo_id_lt']) ?: '' }}" name="q[lectivo_id_lt]" id="q_lectivo_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_lectivo_id_cont">LECTIVO_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['lectivo_id_cont']) ?: '' }}" name="q[lectivo_id_cont]" id="q_lectivo_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_periodo_estudio_id_gt">PERIODO_ESTUDIO_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['periodo_estudio_id_gt']) ?: '' }}" name="q[periodo_estudio_id_gt]" id="q_periodo_estudio_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['periodo_estudio_id_lt']) ?: '' }}" name="q[periodo_estudio_id_lt]" id="q_periodo_estudio_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_periodo_estudio_id_cont">PERIODO_ESTUDIO_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['periodo_estudio_id_cont']) ?: '' }}" name="q[periodo_estudio_id_cont]" id="q_periodo_estudio_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_grado_id_gt">GRADO_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grado_id_gt']) ?: '' }}" name="q[grado_id_gt]" id="q_grado_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grado_id_lt']) ?: '' }}" name="q[grado_id_lt]" id="q_grado_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_grado_id_cont">GRADO_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grado_id_cont']) ?: '' }}" name="q[grado_id_cont]" id="q_grado_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_grupo_id_gt">GRUPO_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grupo_id_gt']) ?: '' }}" name="q[grupo_id_gt]" id="q_grupo_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grupo_id_lt']) ?: '' }}" name="q[grupo_id_lt]" id="q_grupo_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_grupo_id_cont">GRUPO_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['grupo_id_cont']) ?: '' }}" name="q[grupo_id_cont]" id="q_grupo_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_token_gt">TOKEN</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['token_gt']) ?: '' }}" name="q[token_gt]" id="q_token_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['token_lt']) ?: '' }}" name="q[token_lt]" id="q_token_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_token_cont">TOKEN</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['token_cont']) ?: '' }}" name="q[token_cont]" id="q_token_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_usu_alta_id_gt">USU_ALTA_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_alta_id_gt']) ?: '' }}" name="q[usu_alta_id_gt]" id="q_usu_alta_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_alta_id_lt']) ?: '' }}" name="q[usu_alta_id_lt]" id="q_usu_alta_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_usu_alta_id_cont">USU_ALTA_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_alta_id_cont']) ?: '' }}" name="q[usu_alta_id_cont]" id="q_usu_alta_id_cont" />
                                </div>
                            </div>
                                                    <!--
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_usu_mod_id_gt">USU_MOD_ID</label>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_mod_id_gt']) ?: '' }}" name="q[usu_mod_id_gt]" id="q_usu_mod_id_gt" />
                                </div>
                                <div class=" col-sm-1 text-center"> - </div>
                                <div class=" col-sm-4">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_mod_id_lt']) ?: '' }}" name="q[usu_mod_id_lt]" id="q_usu_mod_id_lt" />
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_usu_mod_id_cont">USU_MOD_ID</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="{{ @(Request::input('q')['usu_mod_id_cont']) ?: '' }}" name="q[usu_mod_id_cont]" id="q_usu_mod_id_cont" />
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

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($impresionComprobanteEs->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>@include('plantillas.getOrderLink', ['column' => 'id', 'title' => 'ID'])</th>
                            <th>@include('CrudDscaffold::getOrderlink', ['column' => 'inscripcion_id', 'title' => 'INSCRIPCION_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'cliente_id', 'title' => 'CLIENTE_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'plantel_id', 'title' => 'PLANTEL_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'especialidad_id', 'title' => 'ESPECIALIDAD_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'nivel_id', 'title' => 'NIVEL_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'turno_id', 'title' => 'TURNO_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'lectivo_id', 'title' => 'LECTIVO_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'periodo_estudio_id', 'title' => 'PERIODO_ESTUDIO_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'grado_id', 'title' => 'GRADO_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'grupo_id', 'title' => 'GRUPO_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'token', 'title' => 'TOKEN'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'usu_alta_id', 'title' => 'USU_ALTA_ID'])</th>
                        <th>@include('CrudDscaffold::getOrderlink', ['column' => 'usu_mod_id', 'title' => 'USU_MOD_ID'])</th>
                            <th class="text-right">OPCIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($impresionComprobanteEs as $impresionComprobanteE)
                            <tr>
                                <td><a href="{{ route('impresionComprobanteEs.show', $impresionComprobanteE->id) }}">{{$impresionComprobanteE->id}}</a></td>
                                <td>{{$impresionComprobanteE->inscripcion_id}}</td>
                    <td>{{$impresionComprobanteE->cliente_id}}</td>
                    <td>{{$impresionComprobanteE->plantel_id}}</td>
                    <td>{{$impresionComprobanteE->especialidad_id}}</td>
                    <td>{{$impresionComprobanteE->nivel_id}}</td>
                    <td>{{$impresionComprobanteE->turno_id}}</td>
                    <td>{{$impresionComprobanteE->lectivo_id}}</td>
                    <td>{{$impresionComprobanteE->periodo_estudio_id}}</td>
                    <td>{{$impresionComprobanteE->grado_id}}</td>
                    <td>{{$impresionComprobanteE->grupo_id}}</td>
                    <td>{{$impresionComprobanteE->token}}</td>
                    <td>{{$impresionComprobanteE->usu_alta_id}}</td>
                    <td>{{$impresionComprobanteE->usu_mod_id}}</td>
                                <td class="text-right">
                                    @permission('impresionComprobanteEs.edit')
                                    <a class="btn btn-xs btn-primary" href="{{ route('impresionComprobanteEs.duplicate', $impresionComprobanteE->id) }}"><i class="glyphicon glyphicon-duplicate"></i> Duplicate</a>
                                    @endpermission
                                    @permission('impresionComprobanteEs.edit')
                                    <a class="btn btn-xs btn-warning" href="{{ route('impresionComprobanteEs.edit', $impresionComprobanteE->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    @endpermission
                                    @permission('impresionComprobanteEs.destroy')
                                    {!! Form::model($impresionComprobanteE, array('route' => array('impresionComprobanteEs.destroy', $impresionComprobanteE->id),'method' => 'delete', 'style' => 'display: inline;', 'onsubmit'=> "if(confirm('¿Borrar? ¿Esta seguro?')) { return true } else {return false };")) !!}
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Borrar</button>
                                    {!! Form::close() !!}
                                    @endpermission
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $impresionComprobanteEs->appends(Request::except('page'))->render() !!}
            @else
                <h3 class="text-center alert alert-info">Vacio!</h3>
            @endif

        </div>
    </div>

@endsection