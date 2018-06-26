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
            <strong>FOTOGRAFÍA ESCANEADA DE PERSONA EXTRAVIADA, SUSTRAIDA O AUSENTE</strong>
        </span>
    </span>
</p>

<table border="1" align="center">
	<tbody>
		<tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="3">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>DATOS PERSONALES (MEDIA FILIACION)</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black;" colspan="3">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						NOMBRE: <strong>{{$oficio4['nombreDesa']}}</strong>
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td style="border-color: black; vertical-align: top; " colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        EDAD: <strong>{{$oficio4['edadDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        GÉNERO: <strong>{{$oficio4['generoDesa']}}</strong>
					</span>
				</span>
			</td>
			<td style="border-color: black; vertical-align: top;" colspan="1">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
                        EDO. CIVIL: <strong>{{$oficio4['estadoCivilDesa']}}</strong>
					</span>
				</span>
			</td>
        </tr>
    </tbody>
</table>
<br />
<br />
<table border="1" align="center">
    <tbody>
        <tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="3">
				<span style="font-size: 11px;">
					<span style="font-family: Tahoma,Geneva,sans-serif;">
						<strong>FOTOGRAFIA ESCANEADA</strong>
					</span>
				</span>
			</td>
		</tr>
        <tr>
			<td style="background-color: #d9d9d9; border-color: black; text-align: center;" colspan="3">
                <img src="{!! $oficio4['fotoExtra'] !!}" alt="" style="width: 400px;">
			</td>
		</tr>
    </tbody>
</table>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>A T E N T A M E N T E</strong></span></span></p>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>FISCAL ESPECIALIZADO PARA LA ATENCI&Oacute;N DE DENUNCIAS</strong><br /> <strong>POR PERSONAS DESAPARECIDAS, ZONA CENTRO XALAPA</strong></span></span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><span style="font-size: 11px;"><span style="font-family: Tahoma,Geneva,sans-serif;"><strong>LIC. {{$oficio4['entrevistador']}}</strong></span></span></p>
</body>
</html>