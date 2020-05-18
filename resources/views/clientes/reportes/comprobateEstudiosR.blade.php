
<html>
    <head>
        <style>
            
            body {
                font-family: Arial, Helvetica, sans-serif; 
                font-size: 14px; 
                padding: 5px 20px; 
                color: #000; 
                }
            table {
                font-family: Arial, Helvetica, sans-serif; 
                font-size: 14px;
                color: #000; 
                }
            p{
                text-align: justify;
            } 
          </style>
    </head>
    <body style="margin:10px;padding:5px;">
        <table width="100%">
            <tr>
                <td> <img src="{{asset('storage/especialidads/'.$inscripcion->especialidad->imagen)}}" alt="Logo" height="42" width="42" > </td>
            </tr>
            <tr>
                <td align="center">{{ $cliente->plantel->razon }}</td>
            </tr>
            <tr>
                <td align="center">ACUERDOS  DE  DGCFT  No. {{ $inscripcion->especialidad->rvoe }} {{ $inscripcion->grado->name }} DE FECHA </td>
            </tr>
            <TR>
                <td align="center">CCT: {{ $inscripcion->ccte }} {{ $inscripcion->especialidad->name }}</td>
            </TR>
        </table>
        @php
             $inicio=Carbon\Carbon::createFromFormat('Y-m-d', $inscripcion->lectivo->inicio);
             $fin=Carbon\Carbon::createFromFormat('Y-m-d', $inscripcion->lectivo->fin);   
        @endphp
        <br/><br/><br/>
        A QUIEN CORRESPONDA <br>
        P R E S E N T E    
        <br/><br/><br/>
        <p >
            Por medio del Presente se informa que el C. {{ $cliente->nombre }} {{ $cliente->nombre2 }} 
            {{ $cliente->ape_paterno }} {{ $cliente->ape_materno }} ({{ $cliente->id }}), es alumno activo de la 
            Especialidad en {{ $inscripcion->periodo_estudios->name }}, 
            misma que tiene duración de {{ $inscripcion->especialidad->duracion }}, dividida en {{ $inscripcion->especialidad->modulos }} 
            de los cuales cursa el {{ $inscripcion->periods_estudios->name }} en el horario {{ $inscripcion->turno->name }}, 
            cabe hacer mención que el módulo inicio el día {{ $inicio->format('d-m-Y') }} y finalizara el día {{ $fin->format('d-m-Y') }}.
        </p>
        </p>
            Se extiende la presente a petición para los fines  del interesado (a)  convengan. 
        </p>

        <div align="center">
            A T E N T A M E N T E. <br>
            <img src="data:image/png;base64, 
                                {!! base64_encode(QrCode::format('png')->size(100)->generate('Cliente:'.$cliente->id.', Token:'.$token->token)) !!} ">    
            <br>
            {{ $cliente->plantel->razon }}
        </div>

          
      </div>
      
    </body>
  </html>
  