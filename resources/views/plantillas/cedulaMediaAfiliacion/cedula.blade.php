<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table border="1" align="center">
	<tbody>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>CEDULA DE PERSONAS EXTRAVIADAS, SUSTRA&Iacute;DAS O AUSENTES</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>C&Eacute;DULA DE RECEPCI&Oacute;N</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; text-align: center; vertical-align: top; " colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						CARPETA DE INVESTIGACI&Oacute;N: 
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$oficio2['carpeta']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						FECHA Y &nbsp;HORA &nbsp;DE REGISTRO:
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$oficio2['fechaHora']}}</strong>
					</span>
				</span>
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						TIPO DE SOLICITUD: 
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						PERSONAL (<strong>X</strong>) CORRESPONDENCIA ( )&nbsp;&nbsp; TELEF&Oacute;NICA ( )
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						FISCAL ESPECIALIZADO EN LA ATENCI&Oacute;N DE DENUNCIAS POR PERSONAS DESAPARECIDAS, ZONA CENTRO XALAPA.
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>DATOS PERSONALES</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						NOMBRE: <strong>{{$oficio2['nombreDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDAD: <strong>{{$oficio2['edadDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						G&Eacute;NERO: <strong>{{$oficio2['generoDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDO. CIVIL: <strong>{{$oficio2['estadoCivilDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						DOMICILIO: 
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$oficio2['domicilioDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						ESCOLARIDAD: <strong>{{$oficio2['escolaridadDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						OCUPACI&Oacute;N: <strong>{{$oficio2['ocupacionDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EXTRAVIADO (&nbsp;&nbsp; )&nbsp;&nbsp;&nbsp; SUSTRACCI&Oacute;N&nbsp; (&nbsp; X )&nbsp;&nbsp; AUSENCIA ( &nbsp;)&nbsp; 
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black;  vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						LUGAR DE EXTRAVI&Oacute;: <strong>{{$oficio2['lugarExtravio']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EN CASO DE CONTROVERSIA FAMILIAR SI SE LO LLEVO:
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						PAPA:----------
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						MAMA:--------
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						OTRO FAMILIAR:--------- 
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>DATOS DE LA PERSONA SOLICITANTE</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						NOMBRE: <strong>{{$oficio2['nombreInfo']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDAD: <strong>{{$oficio2['edadInfo']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						PARENTESCO CON EL DESAPARECIDO: <strong>{{$oficio2['parentescoInfo']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						G&Eacute;NERO: <strong>{{$oficio2['generoInfo']}}</strong>
					</span>
				</span>
			</td>
			<td style="vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						EDO. CIVIL: <strong>{{$oficio2['estadoCivilInfo']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; text-align: center; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						DOMICILIO: 
					</span>
				</span>
				<br />
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$oficio2['domicilioInfo']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>S&Iacute;NTESIS</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top;" colspan="2">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>{{$oficio2['observacionDesa']}} </strong>
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
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>LIC. {{$oficio2['entrevistador']}}</strong></span></span></p>
</body>
</html>