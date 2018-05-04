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

		

		
		
		
		p.fuente { font-size:18px;
				font-family: Arial, Helvetica, sans-serif; 
		}

		#sangria p {text-indent:0px ; margin:0px ; padding:0px ; border:0px}
        #sangria2 p {text-indent:50px ; margin:0px ; padding:0px ; border:0px}

	
			
</style>

</head>


<body>

<div id="encabezado"></div>
		
<div id="cuerpo">



<p class="fuente"><strong> LIC. </strong>	<strong> {{--{!! $datos->nombreRemitente !!}--}} </strong>
	</p>
	<p class="fuente"><strong> Director General de la Policía Ministerial y/o Delegado Regional de la Policía Ministerial y/o Comandante de la Policía Ministerial según sea el caso</strong>
 </strong>
	</p>
	
	
	
	 <p class="fuente"><strong> Xalapa, Ver. </strong>	<strong> {{--{!! $datos->fechaHoy !!}--}}  </strong></p>
	
	
	
	<p class="fuente"> <strong> No. de Inv. </strong><strong> {{--{!! $datos->numCarpeta !!} --}} </strong></p>
	
	
	
	<p class="fuente"><strong> OFICIO NO. FGE/FIM/FEADPD/</strong>	<strong> {{--{!! $datos->numOficio !!}/{!! $datos->anio !!} --}} </strong></p>

	<p class="fuente" align="left"><strong> PRESENTE</strong></p>	
	
	<div id="sangria2">
        
        <p align="justify"  class="fuente">
			Con fundamento en lo que disponen el artículo 19, 20 y 21 de la Constitución General de la República; 67 Fracción I apartado A de la Constitución Política Local; <strong>{{--{!! $datos->articulos !!} --}} </strong></p>
        
        <p align="justify" class="fuente">
               El Protocolo Homologado para la Búsqueda de Personas Desaparecidas y la Investigación del Delito de Desaparición Forzada; los acuerdos 025/2011, 01/2013, 023/2013, emitidos por el Procurador General de Justicia del Estado; acuerdo General número 07/2017 signado por el Fiscal General del Estado de Veracruz; I, II, V, VI y XVII, de la Declaración Americana de los Derechos y Deberes del Hombre; 1, 2, 3, 7 y 8 de la Declaración Universal de Derechos Humanos; 1, 3, 6 numero 1; 9 numero 1; 27 y 26 del Pacto Internacional de Derechos Civiles y Políticos; 3 y 5 del Pacto Internacional de Derechos Económicos, Sociales y Culturales; 8, 27 núm. 1, 9, 24 y 25 de la Convención Americana sobre Derechos Humanos, “Pacto San José”; 1, 8, 12 incisos a) y b) y 27) de los Principios y directrices básicas sobre el derecho de las víctimas de violaciones manifiestas de las normas Internacionales de Derechos Humanos y de violaciones graves del derecho internacional humanitario a interponer recursos y obtener reparaciones; 1, 2 y 3 de la Declaración Sobre los Principios Fundamentales  de justicia para las víctimas del delito y del abuso de poder; así como el artículo 7 Fracción X, de la Ley General de Victimas, le solicito su colaboración para con esta Representación Social, hago de su conocimiento lo siguiente:
        </p>
        <p class="fuente" align="justify">
           Como consta dentro de la comparecencia de la ciudadana (o) <strong> {{--{!! $datos->informante !!}--}} </strong>, refirió que su <strong> {{--{!! $datos->parentesco !!}--}} </strong>, de nombre <strong> {{--{!! $datos->desaparecidoNombre !!}--}} </strong>, quien ahora se encuentra desaparecido, frecuentaba los siguientes lugares:
		</p>
		<p class="fuente" align="justify">
           <strong> {{--{!! $datos->lugares1 !!}--}} </strong>
		</p>
		<p class="fuente" align="justify">
           <strong> {{--{!! $datos->lugares2 !!}--}} </strong>
		</p>
		<p class="fuente" align="justify">
           <strong> {{--{!! $datos->lugares3 !!}--}} </strong>
		</p>
	</div>

<div id="sangria">
    <p class="fuente" align="justify">
           Por lo anterior lo solicito que comisione personal bajo y mando que realice labores de investigación y esté en condiciones de informar lo siguiente:
		</p>
		<p class="fuente" align="justify">
           <strong>1.-</strong> Domicilio exacto de los lugares antes mencionados;
		</p>

		<p class="fuente" align="justify">
           <strong>2.-</strong> Nombre del o los propietarios y/o encargados de los lugares antes mencionados;
        </p>

		<p class="fuente" align="justify">
           <strong>3.-</strong> Si existen cámaras de vigilancia en los lugares antes referidos;
		</p>

		<p class="fuente" align="justify">
           <strong>4.-</strong> Si dentro de alguno de esos lugares, el ciudadano <strong> {{--{!! $datos->desaparecidoNombre !!}--}} </strong>, pudo haber tenido algún altercado y/o confronta con alguno de los otros asistentes;
		</p>

		<p class="fuente" align="justify">
           <strong>5.-</strong> En caso de ser afirmativo el punto anterior informe nombre y domicilio del  o las personas con las que se haya suscitado el altercado;
		</p>
		<p class="fuente" align="justify">
           <strong>6.-</strong> Si el ciudadano <strong> {{--{!! $datos->desaparecidoNombre !!}--}} </strong>, acostumbraba a ir acompañado a los sitios señalados líneas arriba;
		</p>

		<p class="fuente" align="justify">
           <strong>7.-</strong> De ser afirmativo el punto anterior Nombre y domicilio de sus acompañantes;
        </p>

		<p class="fuente" align="justify">
           <strong>8.-</strong> Si los lugares citados líneas arriba se han suscitado algún hecho delictivo con anterioridad;
		</p>
		<p class="fuente" align="justify">
           <strong>9.-</strong> En caso de ser afirmativo el punto anterior informe la fecha, hora aproximada, en que consistió el hecho delictivo y denominación de las autoridades que brindaron el auxilio, y de ser posible nombre y domicilio de los involucrados en el hecho;
		</p>
		<p class="fuente" align="justify">
           <strong>10.-</strong> Si a partir del día <strong> {{--{!! $datos->fecha !!}--}} </strong> a la fecha de recepción del presente se han suscitado, se han llevado a cabo operativos de cualquier naturales, en las cercanías de los sitios antes mencionados, por parte de cualquiera de las fuerzas policiales ya sean municipales, estatales y/o federales;
		</p>
		
		<p class="fuente" align="justify">
           <strong>11.-</strong> Informe además dirección del centro de trabajo del ciudadano <strong> {{--{!! $datos->desaparecidoNombre !!}--}} </strong> y nombre completo del jefe inmediato;
        </p>
        <p class="fuente" align="justify">
           <strong>12.-</strong> Nombre y domicilio de amistades cercanas;
		</p>
		<p class="fuente" align="justify">
           <strong>13.-</strong> Nombre y domicilio de familiares cercanos;
		</p>
		
		<p class="fuente" align="justify">
           <strong>14.-</strong> Nombre y domicilio de testigos y/o personas claves que pudieran aportar información para el esclarecimiento de los hechos que se investigan;
		</p>
		<br>
    <div id="sangria2">
        <p class="fuente" >
           La información solicitada deberá ser remitida en un término no mayor a 48 horas contadas a partir de la recepción del presente ocurso. Sin más por el momento aprovecho la ocasión para enviarle un cordial saludo.
		</p>
    </div>
	    
</div>
 </div>
	<br>
<div id="atentamente">
	
	<p align="center" class="fuente"><strong> ATENTAMENTE</strong></p>
	
	<p align="center" class="fuente"><strong> LIC. </strong>	<strong> {{--{!! $datos->fiscalNombre !!}--}} </strong>
	</p>
	<p align="center" class="fuente"><strong> FISCAL {{--{!! $datos->fiscalNumero !!}--}} DE LA UNIDAD INTEGRAL DE PROCURACIÓN</strong></p>
	<p align="center" class="fuente"><strong> DE JUSTICIA DEL {{--{!! $datos->numDistrito !!}--}}  DISTRITO JUDICIAL DE {{--{!! $datos->fiscalLugar !!}--}}, VERACRUZ</strong></p>



</div>

<div id="firma">
	
	
	<p align="right" ><strong> FD :</strong>	<strong> ASDFAS651FG5135df351g3d135df1g13f51gd1hjt35896{{--{!! $datos->firma !!}--}} </strong>
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