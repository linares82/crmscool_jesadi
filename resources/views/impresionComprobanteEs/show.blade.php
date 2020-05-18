@extends('plantillas.admin_template')

@include('impresionComprobanteEs._common')

@section('header')

<ol class="breadcrumb">
	<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
    <li><a href="{{ route('impresionComprobanteEs.index') }}">@yield('impresionComprobanteEsAppTitle')</a></li>
    <li class="active">{{ $impresionComprobanteE->name }}</li>
</ol>

<div class="page-header">
        <h1>@yield('impresionComprobanteEsAppTitle') / Mostrar {{$impresionComprobanteE->id}}

            {!! Form::model($impresionComprobanteE, array('route' => array('impresionComprobanteEs.destroy', $impresionComprobanteE->id),'method' => 'delete', 'style' => 'display: inline;', 'onsubmit'=> "if(confirm('¿Borrar? Estas seguro?')) { return true } else {return false };")) !!}
                <div class="btn-group pull-right" role="group" aria-label="...">
                    @permission('impresionComprobanteE.edit')
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('impresionComprobanteEs.edit', $impresionComprobanteE->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                    @endpermission
                    @permission('impresionComprobanteE.destroy')
                    <button type="submit" class="btn btn-danger">Borrar <i class="glyphicon glyphicon-trash"></i><
                    /button>
                    @endpermission
                </div>
            {!! Form::close() !!}

        </h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group col-sm-4">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$impresionComprobanteE->id}}</p>
                </div>
                <div class="form-group">
                     <label for="inscripcion_id">INSCRIPCION_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->inscripcion_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="cliente_id">CLIENTE_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->cliente_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="plantel_id">PLANTEL_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->plantel_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="especialidad_id">ESPECIALIDAD_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->especialidad_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="nivel_id">NIVEL_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->nivel_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="turno_id">TURNO_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->turno_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="lectivo_id">LECTIVO_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->lectivo_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="periodo_estudio_id">PERIODO_ESTUDIO_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->periodo_estudio_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="grado_id">GRADO_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->grado_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="grupo_id">GRUPO_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->grupo_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="token">TOKEN</label>
                     <p class="form-control-static">{{$impresionComprobanteE->token}}</p>
                </div>
                    <div class="form-group">
                     <label for="usu_alta_id">USU_ALTA_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->usu_alta_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="usu_mod_id">USU_MOD_ID</label>
                     <p class="form-control-static">{{$impresionComprobanteE->usu_mod_id}}</p>
                </div>
            </form>

            <div class="row">
                </div>

            <a class="btn btn-link" href="{{ route('impresionComprobanteEs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Regresar</a>

        </div>
    </div>

@endsection