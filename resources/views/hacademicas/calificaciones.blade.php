@extends('plantillas.admin_template')

@include('hacademicas._common')

@section('header')

	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('hacademicas.index') }}">@yield('hacademicasAppTitle')</a></li>
	    <li class="active">Calificaciones</li>
	</ol>

    <div class="page-header">
        <h3><i class="glyphicon glyphicon-plus"></i> @yield('hacademicasAppTitle') / Calificaciones </h3>
    </div>

    <style>
      table tr:hover {
        background-color: #A9D0F5;
        cursor: pointer;
    }
    </style>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            
            {!! Form::open(array('route' => 'hacademicas.calificaciones', "id"=>"frm_academica")) !!}
            
            <div class="form-group col-md-4 @if($errors->has('plantel_id')) has-error @endif">
                       <label for="plantel_id-field">Plantel</label>
                       {!! Form::select("plantel_id", $list["Plantel"], null, array("class" => "form-control select_seguridad", "id" => "plantel_id-field")) !!}
                       @if($errors->has("plantel_id"))
                        <span class="help-block">{{ $errors->first("plantel_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group col-md-4 @if($errors->has('grupo_id')) has-error @endif">
                       <label for="grupo_id-field">Grupo</label>
                       {!! Form::select("grupo_id", $list["Grupo"], null, array("class" => "form-control select_seguridad", "id" => "grupo_id-field")) !!}
                       @if($errors->has("grupo_id"))
                        <span class="help-block">{{ $errors->first("grupo_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group col-md-4 @if($errors->has('lectivo_id')) has-error @endif">
                       <label for="lectivo_id-field">Lectivo</label>
                       {!! Form::select("lectivo_id", $list["Lectivo"], null, array("class" => "form-control select_seguridad", "id" => "lectivo_id-field")) !!}
                       @if($errors->has("lectivo_id"))
                        <span class="help-block">{{ $errors->first("lectivo_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group col-md-4 @if($errors->has('materium_id')) has-error @endif">
                       <label for="materium_id-field">Materia</label>
                       {!! Form::select("materium_id", $list["Materium"], null, array("class" => "form-control select_seguridad", "id" => "materium_id-field")) !!}
                       @if($errors->has("materium_id"))
                        <span class="help-block">{{ $errors->first("materium_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group col-md-4 @if($errors->has('cve_alumno')) has-error @endif">
                       <label for="cve_alumno-field">Clave Alumno</label>
                       {!! Form::text("cve_alumno", null, array("class" => "form-control", "id" => "cve_alumno-field")) !!}
                       @if($errors->has("cve_alumno"))
                        <span class="help-block">{{ $errors->first("cve_alumno") }}</span>
                       @endif
                    </div>

                <div class="row">
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Procesar</button>
                </div>
                @if(isset($hacademicas))
                    <table class="table table-condensed table-striped">
                        <theader>
                            <tr>
                                <td>
                                    <input type="checkbox" id="select-all" /> Todos<br/>
                                </td>
                                <td>Alumno</td><td>Grado</td><td>Materia</td><td>Examen</td><td>Calificacion</td>
                                <td>Fecha</td><td>Reportar</td>
                            </tr>
                        </theader>
                        <tbody>
                            @foreach($hacademicas as $h)
                                
                                <tr>
                                    <td>
                                        {{ Form::checkbox("id[]", $h->id) }}
                                    </td>
                                    <td>
                                        {{$h->nombre}}
                                    </td>
                                    <td>
                                        {{$h->grado}}
                                    </td>
                                    <td>
                                        {{$h->materia}}
                                    </td>
                                    <td>
                                        {{$h->examen}}
                                    </td>
                                    <td>
                                        <input type="text" name="calificacion[]" value={{ $h->calificacion }} class="from-control">
                                    </td>
                                    <td>
                                        <input type="text" name="fecha[]" value={{ $h->fecha }} class="from-control fecha">
                                        
                                    </td>
                                    <td>
                                        {!! Form::checkbox("reporte_bnd[]", $h->id, $h->reporte_bnd) !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection
@push('scripts')
  
  <script type="text/javascript">
    
    $(document).ready(function() {
      getCmbGrupo();
      getCmbMateria();

      $('#plantel_id-field').change(function(){
          getCmbGrupo();
          getCmbMateria();
          if($('#plantel_id-field').val()>0){
              $('#cve_alumno-field').prop('disabled', true);
          }else{
              $('#cve_alumno-field').prop('disabled', false);
          }
      });

      //$("tr td").parent().addClass('has-sub');
      $('.fecha').Zebra_DatePicker({
        days:['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
        months:['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        readonly_element: false,
        lang_clear_date: 'Limpiar',
        show_select_today: 'Hoy',
      });
     


      $('#select-all').click(function(event) {   
            if(this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function() {
                    this.checked = true;                        
                });
            }else{
                $(':checkbox').each(function() {
                    this.checked = false;                        
                });
            }
        });

    });
    function getCmbGrupo(){
          //var $example = $("#especialidad_id-field").select2();
          var a= $('#frm_academica').serialize();
              $.ajax({
                  url: '{{ route("grupos.getCmbGrupo") }}',
                  type: 'GET',
                  data: "plantel_id=" + $('#plantel_id-field option:selected').val() + "&grupo_id=" + $('#grupo_id-field option:selected').val() + "",
                  dataType: 'json',
                  beforeSend : function(){$("#loading13").show();},
                  complete : function(){$("#loading13").hide();},
                  success: function(data){
                      //$example.select2("destroy");
                      $('#grupo_id-field').html('');
                      
                      //$('#especialidad_id-field').empty();
                      $('#grupo_id-field').append($('<option></option>').text('Seleccionar').val('0'));
                      
                      $.each(data, function(i) {
                          //alert(data[i].name);
                          $('#grupo_id-field').append("<option "+data[i].selectec+" value=\""+data[i].id+"\">"+data[i].name+"<\/option>");
                      });
                      //$example.select2();
                  }
              });       
      }
    function getCmbMateria(){
          var $example = $("#especialidad_id-field").select2();
          var a= $('#frm_academica').serialize();
              $.ajax({
                  url: '{{ route("materias.getCmbMateria") }}',
                  type: 'GET',
                  data: "plantel_id=" + $('#plantel_id-field option:selected').val()+"&materium_id="+ $('#materium_id-field option:selected').val(),
                  dataType: 'json',
                  beforeSend : function(){$("#loading3").show();},
                  complete : function(){$("#loading3").hide();},
                  success: function(data){
                      //$example.select2("destroy");
                      $('#materium_id-field').html('');
                      
                      //$('#especialidad_id-field').empty();
                      $('#materium_id-field').append($('<option></option>').text('Seleccionar Opción').val('0'));
                      
                      $.each(data, function(i) {
                          //alert(data[i].name);
                          $('#materium_id-field').append("<option "+data[i].selectec+" value=\""+data[i].id+"\">"+data[i].name+"<\/option>");
                          
                      });
                      //$example.select2();
                  }
              });       
      }
      
</script>
@endpush