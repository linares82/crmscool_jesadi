@extends('plantillas.admin_template')

@include('seguimientos._common')

@section('header')

	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('clientes.index') }}">@yield('clientesAppTitle')</a></li>
	    <li class="active">Validar Ticket</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-plus"></i> @yield('seguimientosAppTitle') / Validar Ticket </h3>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(array('route' => 'impresionListaAsisten.validarListaR', 'id'=>'frm_reporte')) !!}

                <div class="form-group col-md-6 @if($errors->has('token')) has-error @endif">
                    <label for="plantel_f-field">Token:</label>
                    {!! Form::text("token", null, array("class" => "form-control", "id" => "token-field")) !!}
                    @if($errors->has("token"))
                    <span class="help-block">{{ $errors->first("token") }}</span>
                    @endif
                </div>
                
                <div class="row">
                </div>
                <div class="well well-sm">
                    <button id="submit_tbl" type="submit" class="btn btn-primary">Tabla</button>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-12">
        @if(isset($registro) and !is_null($registro))
            <h4>Información Impresa</h4>
            <table class="table table-condensed table-striped">
                <thead>
                    <th>Asignacion</th><th>Inscritos</th><th>Fecha Inicio</th><th>Fecha Fin</th><th>Fecha Impresion</th>
                </thead>
                <tbody>
                    <td>{{$registro->asignacion_id}}</td><td>{{$registro->inscritos}}</td><td>{{$registro->fecha_f}}</td>
                    <td>{{$registro->fecha_t}}</td><td>{{$registro->created_at}}</td>
                </tbody>
            </table>

        @else
            No hay información ligada al al token capturado
        @endif
    </div>    
    </div>
@endsection
@push('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
    $('#fecha_f-field').Zebra_DatePicker({
        days:['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        months:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        readonly_element: false,
        lang_clear_date: 'Limpiar',
        show_select_today: 'Hoy',
      });
      $('#fecha_t-field').Zebra_DatePicker({
        days:['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        months:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        readonly_element: false,
        lang_clear_date: 'Limpiar',
        show_select_today: 'Hoy',
      });
    
        
    });
    
    </script>
@endpush