<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>
<style type="text/css">


@page { margin: 1px; }

		body{
		background-image: url(./images/fondo-plantillas2.png);
		background-size: 30%;
		font-family: Arial;
		
		}

		div#encabezado{
			
			
			height:120px;
			
			
		}
		div#firma{
			margin:auto;
			margin-left: 200px;
			margin-right: 100px;
		
			
		}
		#firma p {font-size: 5x;}
	
		
		div#atentamente{
			margin:auto;
			margin-left: 250px;
			margin-right: 100px;
			width: 850px;
			height:200px;
			
			
		}

		div#cuerpo{
			margin:auto;
			margin-left: 250px;
			margin-right: 100px;
			width: 800px;
			height:1400px;
			
			
		}

		div#foto{
			float:right;
			margin-left:20px;
			margin-right: 35px;
			width: 250px;
			height:300px;
			
		}
		

		
		
		
		p{ font-size:20px;
		font-family: "calibri", Garamond, 'Comic Sans'; }

		#sangria p {text-indent:50px ; margin:0px ; padding:0px ; border:0px}
	
			
</style>

</head>


<body>

<div id="fondo"></div>

<div id="encabezado"></div>
		
<div id="cuerpo">
	
	<p><strong> LIC. </strong>	<strong> {{--{!! $datos->nombreRemitente !!}--}} </strong>
	</p>
	
	
	 <p><strong> Xalapa, Ver. </strong>	<strong> {{--{!! $datos->fechaHoy !!}--}}  </strong></p>
	
	
	
	<p> <strong> No. de Inv. </strong><strong> {{--{!! $datos->numCarpeta !!} --}} </strong></p>
	
	
	
	<p><strong> OFICIO NO. FGE/FIM/FEADPD/</strong>	<strong> {{--{!! $datos->numOficio !!}/{!! $datos->anio !!} --}} </strong></p>
	
	<br><br>
	<p align="left"><strong> PRESENTE</strong></p>	
	
	<div id="sangria">

		<p align="justify">
			Con fundamento en lo que disponen el artículo 19, 20 y 21 de la Constitución General de la República; 67 Fracción I apartado A de la Constitución Política Local; <strong>{{--{!! $datos->articulos !!} --}} </strong></p>
		<br>	
		<p align="justify">
			El Protocolo Homologado para la Búsqueda de Personas Desaparecidas y la Investigación del Delito de Desaparición Forzada; los acuerdos 025/2011, 01/2013, 023/2013, emitidos por el Procurador General de Justicia del Estado; acuerdo General número 07/2017 signado por el Fiscal General del Estado de Veracruz; I, II, V, VI y XVII, de la Declaración Americana de los Derechos y Deberes del Hombre; 1, 2, 3, 7 y 8 de la Declaración Universal de Derechos Humanos; 1, 3, 6 numero 1; 9 numero 1; 27 y 26 del Pacto Internacional de Derechos Civiles y Políticos; 3 y 5 del Pacto Internacional de Derechos Económicos, Sociales y Culturales; 8, 27 núm. 1, 9, 24 y 25 de la Convención Americana sobre Derechos Humanos, “Pacto San José”; 1, 8, 12 incisos a) y b) y 27) de los Principios y directrices básicas sobre el derecho de las víctimas de violaciones manifiestas de las normas Internacionales de Derechos Humanos y de violaciones graves del derecho internacional humanitario a interponer recursos y obtener reparaciones; 1, 2 y 3 de la Declaración Sobre los Principios Fundamentales  de justicia para las víctimas del delito y del abuso de poder; así como el artículo 7 Fracción X, de la Ley General de Victimas, le solicito su colaboración para con esta Representación Social, en la búsqueda y localización y presentación del ciudadano <strong>{{--{!! $datos->desaparecidoNombre !!} --}}</strong>, quien se encuentra desaparecido, siendo visto por última vez en <strong>{{--{!! $datos->desaparecidoLugar !!} --}}</strong>, el día <strong>{{--{!! $datos->desaparecidoFecha !!} --}}</strong>, a las <strong>{{--{!! $datos->desaparecidoHora !!} --}}</strong>  horas, así como del vehículo en el que viajaba siendo un: <strong>{{--{!! $datos->vehiculoDescripcion !!} --}}</strong> para lo cual anexo al presente:
		</p>
	</div>
	<div>
		<p> Cedula de Boletín de Persona Extraviada; y</p>		
		<p>	Registro Único de Persona Desaparecida;</p>
	</div>

	<div id="sangria">

		<p>
			Lo anterior a efecto de que las documentales antes señaladas sean distribuidas en los distintos DIF municipales, casas de Protección Social, Albergues, orfanatos según sea el caso, de este Estado y sean colocadas en lugares visibles al público en general, ya que estas acciones contribuyen a la búsqueda eficiente del ciudadano  <strong>{{--{!! $datos->desaparecidoNombre !!} --}}</strong>.
		</p>

		<p>
			Así también deberá informar lo siguiente:
		</p>

		<p>
			1.- Si a partir día <strong>{{--{!! $datos->desaparecidoFecha !!} --}}</strong>, a la fecha de recepción del presente oficio, en alguno de los DIF municipales, casas de Protección Social, Albergues, orfanatos según sea el caso, de este Estado, existe registro sobre el  ingreso del ciudadano <strong>{{--{!! $datos->desaparecidoNombre !!} --}}</strong> o de personas que coincida con sus características físicas;
		</p>
		<p>
			2.- Para el caso de ser afirmativo, deberá informar el nombre y domicilio de la institución; fecha de ingreso, el motivo del ingreso y la fecha en que se retiraron de la institución.
		</p>
		<p>
			La información solicitada deberá ser remitida en un término no mayor a 24 horas contadas a partir de la recepción del presente oficio. Sin más por el momento aprovecho la ocasión para enviarle un cordial saludo.
		</p>
	</div>
</div>
	<br>

<div id="atentamente">
	
	<p align="center"><strong> ATENTAMENTE</strong></p>
	<br>	
	<p align="center"><strong> LIC. </strong>	<strong> {{--{!! $datos->fiscalNombre !!}--}} </strong>
	</p>
	<p align="center"><strong> FISCAL {{--{!! $datos->fiscalNumero !!}--}} DE LA UNIDAD INTEGRAL DE PROCURACIÓN</strong></p>
	<p align="center"><strong> DE JUSTICIA DEL {{--{!! $datos->numDistrito !!}--}}  DISTRITO JUDICIAL DE {{--{!! $datos->fiscalLugar !!}--}}, VERACRUZ</strong></p>



</div>

<div id="firma">
	
	
	<p align="right"><strong> FD :</strong>	<strong> ASDFAS651FG5135df351g3d135df1g13f51gd1hjt35896{{--{!! $datos->fiscalNombre !!}--}} </strong>
	</p>
	



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
<img src="/personal/img/avatar.png" width="1148" height="1894" />
body{
		background-image: url(./images/boletin555x790.png);
		background-size: 30%;
		font-family: Arial;
		
		}




		div#fondo{
			margin:auto;
			margin-left: 1px;
			margin-top: 1px;
			width: 1148px;
			height:1894px;
			background-color: green;
			
		}