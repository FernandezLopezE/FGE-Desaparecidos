<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>
<style type="text/css">


@page { margin: 1px; }

	

	body{
		background-image: url(./images/boletin555x790.png);
		background-size: 30%;
		font-family: Arial;
		
		}
		
		
		div#informacion{
			float:left;
			margin-left: 20px;
			margin-right: 10px;
			width: 250px;
			height: 300px;
			
		}
		div#foto{
			float:right;
			margin-left:20px;
			margin-right: 35px;
			width: 250px;
			height:300px;
			
		}
		div#encabezado{
			margin:auto;
			width: 554px;
			height:110px;
			
		}

		h3{
			
		}
		img{
				width:200px; 
				height:250px;
				 border:10px solid #ddd;
		}
		div#descripcionHechos{
				float: right;
				width: 515px;
				height: 200px
				margin-left: 20px;
				

		}
		
			
</style>

</head>


<body>
		
		<div id="encabezado"></div>
	
		<div id = "informacion" >
			<p></br>
				</br>
				

			</p>
			<br></br>
			<img src="./personal/img/avatar.png" />
		</div>
		<div id = "foto" >
			
				<h3>
					<code>
						{!! $desaparecido->persona->nombres !!} 
						{!! $desaparecido->persona->primerAp !!} 
						{!! $desaparecido->persona->segundoAp !!}
					</code>
				</h3>

				<div>
					<strong class="d-inline-block mb-2 text-primary"><code>Apodo:</code> </strong> <h9><code>{!! $desaparecido->apodo !!}</code></h9>
				</div>
				<div>
					<strong><code>Género:</code></strong> <h9><code>{!! $desaparecido->persona->sexo !!}</code></h9>
				</div>
				<div>					
				<strong><code>Edad de extravío:</code></strong> <h9><code>{!! $desaparecido->edadExtravio !!}</code></h9>
				</div>
				<div>
					<strong><code>Edad aparente:</code></strong> <h9><code>{!! $desaparecido->edadAparente !!}</code></h9>
				</div>
				<div>
					<strong><code>Fecha de nacimiento:</code></strong><h9> <code>{!! \Carbon\Carbon::parse($desaparecido->persona->fechaNacimiento)->format('d/m/Y') !!}</code></h9>
				</div>
				<div>
					<strong><code>Estado civil: </code></strong><h9> <code>{!! $desaparecido->edocivil->nombre !!}</code></h9>
				</div>
				<div>
					<strong><code>Nacionalidad: </code></strong><h9> <code>{!! $desaparecido->persona->nacionalidad->nombre !!}</code></h9>
				</div>
				<div>
					<strong><code>Escolaridad: </code></strong> <h9><code>{!! $desaparecido->escolaridad->nombre !!}</code></h9>
				</div>
				<div>
					<strong><code>Ocupación: </code></strong><h9><code> {!! $desaparecido->ocupacion->nombre !!}</code></code></h9>
				</div>
				


















				
				
				

				
				
				
				
				
				
			
	
	

		</div>
		<div id ="descripcionHechos">
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			<br></br>
			
			<br></br>

				<div>
					<strong><code>Señas particulares: </code></strong> <h9><code>Tiene un lunar en medio de la frente, y un tatuaje en el brazo (mandala), cabello largo de color negro.</code> </h9></div>
				<div>
					<strong><code>Descripción de los hechos: </code></strong><h9><code>La persona salió de la escuela a las 15:00 horas, se subió a un auto dorado, no dijo  a quién pertenecia el automovil. </code></code></h9>
				</div>

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
