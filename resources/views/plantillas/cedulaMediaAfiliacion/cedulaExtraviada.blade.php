<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<p style="text-align: center;">
    <span style="font-size: 11px;">
        <span style="font-family: Tahoma,Geneva,sans-serif;">
            CÉDULA DE DATOS DE PERSONA<br /> EXTRAVIADA, SUSTRAIDA O AUSENTE
        </span>
    </span>
</p>

<table border="1" align="center">
	<tbody>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>DATOS PERSONALES (MEDIA FILIACION)</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						NOMBRE: <strong>{{$data['nombreDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top; " colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						SOBRENOMBRE: <strong>{{$data['apodoDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDAD: <strong>{{$data['edadExtravioDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						GÉNERO: <strong>{{$data['generoDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDO. CIVIL: <strong>{{$data['estadoCivilDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						ESTATURA:
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$data['estaturaDesa']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        TEZ (COLOR DE PIEL):
					</span>
				</span>
			</td>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$data['colorPiel']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        TIPO DE CABELLO:
					</span>
				</span>
			</td>
            <td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['tipoCabello']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        COLOR DE CABELLO: (NEGRO, CASTAÑO CLARO U OSCURO, CANO, ENTRECANO, RUBIO, ROJIZO)
					</span>
				</span>
			</td>
            <td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['colorCabello']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        TIPO DE OJOS: (GRANDES, MEDIANOS, CHICOS)
					</span>
				</span>
			</td>
            <td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['tipoOjos']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        COLOR DE OJOS: 
					</span>
				</span>
                <br />
                <span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        (CAFÉ CLARO U OSCUROS, VERDES,AZULES, GRISES, MIEL)
					</span>
				</span>
			</td>
            <td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['colorOjos']}}</strong>
					</span>
				</span>
			</td>
        </tr>
        <tr>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						SEÑAS PARTICULARES:
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						TODO AQUELLO QUE SEA VISIBLE: CICATRICES, TATUAJES, LUNARES, CEJAS DEPILADAS, SI SE TIÑE EL CABELLO, ETC.
					</span>
				</span>
			</td>
		</tr>
        <tr>
			<td style="border-color: black; text-align: justify; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        
                        	<?php $x = 0; ?>
                        	@if(isset($dataPartes))
                        		<center><strong>SIN INFORMACIÓN</strong></center>
                        	@else
	                    		@foreach ($dataPartes as $key => $parte)
									@foreach ($parte['hijos'] as $value)
										<strong>{!! $value->parteh !!} -</strong>
										@foreach (json_decode($value->reglas) as $ket => $regla)                                            
	                                                          @switch($ket)
	                                                            @case('tipo')
	                                                              @if($regla == 1)
	                                                                @if($value->tipo == 'OTRO')
	                                                                
	                                                                  <strong>Tipo: </strong>{!! $value->otroTipo !!}
	                                                                
	                                                                @else
	                                                                  <strong>Tipo: </strong>{!! $value->tipo !!}

	                                                                @endif          
	                                                                
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif
	                                                              
	                                                            @case('tamano')
	                                                              @if($regla == 1)          
	                                                                <strong>Tamaño: </strong>{!! $value->tamano !!}
	                                                                <br>
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif

	                                                            @case('color')
	                                                              @if($regla == 1)
	                                                                @if($value->color == 'OTRO')
	                                                                
	                                                                    <strong>Color: </strong>{!! $value->otroColor !!}
	                                                                
	                                                                
	                                                                @else
	                                                                  <strong>Color: </strong>{!! $value->color !!}

	                                                                @endif                    
	                                                                
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif

	                                                            @case('posicion')
	                                                              @if($regla == 1)          
	                                                                <strong>Posición: </strong>{!! $value->posicion !!}
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif

	                                                            @case('modificaciones')
	                                                              @if($regla == 1)                                                                 
	                                                                <strong><label for="">Modificaciones:</label></strong>
	                                                                @php $tmpModi = ''; @endphp 
	                                                                @foreach ($value->modificaciones as $modificacion)
	                                                                    @php $tmpModi = $modificacion.', '.$tmpModi; @endphp 
	                                                                @endforeach
	                                                                  @php $tmpModi = trim($tmpModi,', '); @endphp 
	                                                                 {!! $tmpModi !!}
	                                                                <br>
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif

	                                                            @case('particularidades')
	                                                              @if($regla == 1)          
	                                                                <strong><label for="">Particularidades:</label></strong>
	                                                                @php $tmpParti = ''; @endphp 
	                                                                @foreach ($value->particularidades as $particularidad)
	                                                                  @php $tmpParti = $particularidad.', '.$tmpParti; @endphp 
	                                                                @endforeach
	                                                                 @php $tmpParti = trim($tmpParti,', '); @endphp 
	                                                                  {!! $tmpParti !!}
	                                                                <br>
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif

	                                                            @case('observaciones')
	                                                              @if($regla == 1)          
	                                                                <strong><label for="">Observaciones:</label></strong>
	                                                                {!! $value->observaciones !!}
	                                                                <br>
	                                                                <hr>
	                                                                @break
	                                                              @else
	                                                                  @break
	                                                              @endif
	                                                          @endswitch
	                                            @endforeach
									@endforeach
	                    		@endforeach
	                    	@endif
                        
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						FECHA DE NACIMIENTO:
					</span>
				</span>
			</td>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['fechaNacimiento']}}</strong>
					</span>
				</span>
			</td>
		</tr>
        <tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        LUGAR Y FECHA DE EXTRAVIO:
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        (DELEGACIÓN Y/O MUNICIPIO. ESTADO. DIA, MES Y AÑO.)
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        LUGAR: <strong>{{$data['lugarExtravio']}}</strong>
					</span>
				</span>
                <br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        </strong> FECHA: <strong>{{$data['fechaDesaparicion']}}.</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        OBSERVACIONES: (ENFERMEDADES QUE PADECE U OTRA CIRCUNSTANCIA QUE SEA PARTICULAR DEL EXTRAVIADO)
					</span>
				</span>
			</td>
            <td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>NINGUNA</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        FOTOGRAFIA: (DEBERÁ SER DIGITALIZADA EN JPG, RECIENTE Y LEGIBLE DEL EXTRAVIADO)
					</span>
				</span>
			</td>
            <td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['fotoExtra']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>OTRAS CARACTERISTICAS<strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        <strong>{{$data['observacionDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
	</tbody>
</table>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>A T E N T A M E N T E</strong></span></span></p>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>FISCAL ESPECIALIZADO PARA LA ATENCI&Oacute;N DE DENUNCIAS</strong><br /> <strong>POR PERSONAS DESAPARECIDAS, ZONA CENTRO XALAPA</strong></span></span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>LIC. {{$data['entrevistador']}}</strong></span></span></p>
</body>
</html>