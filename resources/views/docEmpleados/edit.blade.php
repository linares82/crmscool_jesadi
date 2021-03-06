@extends('plantillas.admin_template')

@include('docEmpleados._common')

@section('header')

	<ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('docEmpleados.index') }}">@yield('docEmpleadosAppTitle')</a></li>
	    <li><a href="{{ route('docEmpleados.show', $docEmpleado->id) }}">{{ $docEmpleado->id }}</a></li>
	    <li class="active">Editar</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-edit"></i> @yield('docEmpleadosAppTitle') / Editar {{$docEmpleado->id}}</h3>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($docEmpleado, array('route' => array('docEmpleados.update', $docEmpleado->id),'method' => 'post')) !!}

@include('docEmpleados._form')

                <div class="row">
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-link pull-right" href="{{ route('docEmpleados.index') }}"><i class="glyphicon glyphicon-backward"></i>  Regresar</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection