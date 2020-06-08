@extends('plantillas.admin_template')

@include('seguimientos._common')

@section('header')

	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('seguimientos.index') }}">@yield('seguimientosAppTitle')</a></li>
	    <li class="active">Reporte de Seguimientos</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-plus"></i> Calificaciones / Edicion Ponderaciones </h3>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::open(array('route' => 'calificacions.edicionPonderacionesR', 'id'=>'frm_analitica')) !!}

                
                <div class="form-group col-md-6 @if($errors->has('cliente_f')) has-error @endif">
                    <label for="cliente_f-field">Cliente:</label>
                    {!! Form::text("cliente_f", null, array("class" => "form-control input-sm", "id" => "cliente_f-field")) !!}
                    @if($errors->has("cliente_f"))
                    <span class="help-block">{{ $errors->first("cliente_f") }}</span>
                    @endif
                </div>

                <div class="form-group col-md-6 @if($errors->has('lectivo_f')) has-error @endif">
                    <label for="lectivo_f-field">Lectivo de:</label>
                    {!! Form::select("lectivo_f", $lectivos, null, array("class" => "form-control select_seguridad", "id" => "lectivo_f-field")) !!}
                    @if($errors->has("lectivo_f"))
                    <span class="help-block">{{ $errors->first("lectivo_f") }}</span>
                    @endif
                </div>
                
                <div class="row">
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Tabla</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@push('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
        
        $('#plantel_f-field').change(function(){
            getCmbEmpleados()
        });
        
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

    function getCmbEmpleados(){
        $.ajax({
        url: '{{ route("empleados.getAsesoresXplantel") }}',
        type: 'GET',
        data: "empleado_id="+$('#empleado_f-field option:selected').val()+"&plantel_id=" + $('#plantel_f-field option:selected').val()  + "",
        dataType: 'json',
        beforeSend : function(){$("#loading3").show();},
        complete : function(){$("#loading3").hide();},
        success: function(data){

            $('#empleado_f-field').html('');
            //$('#especialidad_id-field').empty();
            $('#empleado_f-field').append($('<option></option>').text('Seleccionar Opción').val('0'));


            $.each(data, function(i) {

                $('#empleado_f-field').append("<option "+data[i].selectec+" value=\""+data[i].id+"\">"+data[i].nombre+"<\/option>");

            });

        }
        });       
    }

    </script>
@endpush

