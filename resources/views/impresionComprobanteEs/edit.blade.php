@extends('plantillas.admin_template')

@include('impresionComprobanteEs._common')

@section('header')

	<ol class="breadcrumb">
	    <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('impresionComprobanteEs.index') }}">@yield('impresionComprobanteEsAppTitle')</a></li>
	    <li><a href="{{ route('impresionComprobanteEs.show', $impresionComprobanteE->id) }}">{{ $impresionComprobanteE->id }}</a></li>
	    <li class="active">Editar</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-edit"></i> @yield('impresionComprobanteEsAppTitle') / Editar {{$impresionComprobanteE->id}}</h3>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($impresionComprobanteE, array('route' => array('impresionComprobanteEs.update', $impresionComprobanteE->id),'method' => 'post')) !!}

@include('impresionComprobanteEs._form')

                <div class="row">
                </div>

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-link pull-right" href="{{ route('impresionComprobanteEs.index') }}"><i class="glyphicon glyphicon-backward"></i>  Regresar</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection