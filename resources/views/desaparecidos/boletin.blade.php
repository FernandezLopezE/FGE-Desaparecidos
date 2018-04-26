<

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>
<style type="text/css">


@page { margin: 1px; }



	body{
		background-image: url(./images/boletin790x555.png);
		background-size: 30%;
		
		}
		
		
		div#foto{
			float:right;
			margin-right: 10px;
			width: 280px;
			height: 300px;
			
		}
		div#informacion{
			float:left;
			margin-left:70px;
			margin-right: 10px;
			width: 400px;
			height:300px;
			
		}
		div#encabezado{
			margin:auto;
			width: 781px;
			height:200px;
			
		}

		h3{
			font-family: Arial;
		}
			img{
				width:200px; 
				height:250px;
				 border:10px solid #ddd;
			}
		
			
</style>

</head>


<body>
		
		<div id="encabezado"></div>
	
		<div id = "foto" >
			<img src="./personal/img/avatar.png" />
		</div>
		<div id = "informacion" >
			
				<h3>
					
						{!! $desaparecido->persona->nombres !!} 
						{!! $desaparecido->persona->primerAp !!} 
						{!! $desaparecido->persona->segundoAp !!}
					
				</h3>
				<strong class="d-inline-block mb-2 text-primary"><code>Apodo:</code> {!! $desaparecido->apodo !!} </strong>
				<div class="mb-1 text-muted"><code>Genero:</code> {!! $desaparecido->persona->sexo !!}</div>
				<div class="mb-1 text-muted"><code>Edad de extravio:</code>{!! $desaparecido->edadExtravio !!}</div>
				<div class="mb-1 text-muted"><code>Edad aparente:</code>{!! $desaparecido->edadAparente !!}</div>

				<div class="mb-1 text-muted"><code>Fecha de nacimiento:</code>{!! \Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!}</div>
				<div class="mb-1 text-muted"><code>Estado civil: </code>{!! $desaparecido->edocivil->nombre !!}</div>
				<div class="mb-1 text-muted"><code>Nacionalidad: </code>{!! $desaparecido->persona->nacionalidad->nombre !!}</div>
				<div class="mb-1 text-muted"><code>Escolaridad: </code>{!! $desaparecido->escolaridad->nombre !!}</div>
				<div class="mb-1 text-muted"><code>Ocupación: </code>{!! $desaparecido->ocupacion->nombre !!}</div>
	

		</div>

	
	

</body>

</html>

div#general{

			margin:auto;
			margin-top: 2px;
			width: 790px;
			height: 555px;
			background-color: red;

		}
<img src="/personal/img/avatar.png" width="200" height="250" />

