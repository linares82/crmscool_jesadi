@extends('plantillas.admin_template')

@include('pivotAvisoGralEmpleados._common')

@section('header')

	<ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('pivotAvisoGralEmpleados.index') }}">@yield('pivotAvisoGralEmpleadosAppTitle')</a></li>
	    <li><a href="{{ route('pivotAvisoGralEmpleados.show', $pivotAvisoGralEmpleado->id) }}">{{ $pivotAvisoGralEmpleado->id }}</a></li>
	    <li class="active">Editar</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-edit"></i> @yield('pivotAvisoGralEmpleadosAppTitle') / Editar {{$pivotAvisoGralEmpleado->id}}</h3>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($pivotAvisoGralEmpleado, array('route' => array('pivotAvisoGralEmpleados.update', $pivotAvisoGralEmpleado->id),'method' => 'post')) !!}

@include('pivotAvisoGralEmpleados._form')

                <div class="row">
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-link pull-right" href="{{ route('pivotAvisoGralEmpleados.index') }}"><i class="glyphicon glyphicon-backward"></i>  Regresar</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection