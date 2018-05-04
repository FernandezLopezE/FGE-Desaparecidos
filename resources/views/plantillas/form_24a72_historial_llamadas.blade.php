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

		#sangria p {text-indent:50px ; margin:0px ; padding:0px ; border:0px}
	
			
</style>

</head>


<body>

<div id="encabezado"></div>
		
<div id="cuerpo">



<p class="fuente"><strong> LIC. </strong>	<strong> {{--{!! $datos->nombreRemitente !!}--}} </strong>
	</p>
	<p class="fuente">	<strong> {{--{!! $datos->cargo !!}--}}  </strong>
 </strong>
	</p>
	
	
	
	 <p class="fuente"><strong> Xalapa, Ver. </strong>	<strong> {{--{!! $datos->fechaHoy !!}--}}  </strong></p>
	
	
	
	<p class="fuente"> <strong> No. de Inv. </strong><strong> {{--{!! $datos->numCarpeta !!} --}} </strong></p>
	
	
	
	<p class="fuente"><strong> OFICIO NO. FGE/FIM/FEADPD/</strong>	<strong> {{--{!! $datos->numOficio !!}/{!! $datos->anio !!} --}} </strong></p>
	
	<br>
	<p class="fuente" align="left"><strong> PRESENTE</strong></p>	
	
	<div id="sangria">
        
        <p align="justify"  class="fuente">
			Con fundamento en lo dispuesto por los artículos 16, 20, 21 de la Constitución General de la Republica, 52 del a Constitución Política Local,  <strong>{{--{!! $datos->articulos !!} --}} </strong></p>
        
        <p align="justify" class="fuente">
               , así como los numerales 189 y 190 Fracción II de la Ley Federal de Telecomunicaciones y Radiodifusión, publicada en el Diario Oficial de la Federación en fecha catorce de Julio del dos mil catorce; I, II, V, VI y XVII, de la Declaración Americana de los Derechos y Deberes del Hombre; 1, 2, 3, 7 y 8 de la Declaración Universal de Derechos Humanos; 1, 3, 6 numero 1; 9 numero 1; 27 y 26 del Pacto Internacional de Derechos Civiles y Políticos; 3 y 5 del Pacto Internacional de Derechos Económicos, Sociales y Culturales; 8, 27 núm. 1, 9, 25 y 25 de la Convención Americana sobre Derechos Humanos, “Pacto San José”; 1, 8, 12 incisos a) y b) y 27) de e los Principios y directrices básicas sobre el derecho de las víctima de violaciones manifiestas de las normas Internacionales de Derechos Humanos y de violaciones graves del derecho internacional humanitario a interponer recursos y obtener reparaciones; 1, 2 y 3 de la Declaración Sobre los Principios Fundamentales  de justicia para las víctimas del delito y del abuso de poder; 1, 2, 4, 5, 7, Fracción I, VII y XXVI, 10, 11, 18, 21 y demás relativos aplicables de ley General de Victimas;  acuerdo 25/2011, acuerdo 11/2013  Acuerdo 23/2013, todos de la Procuraduría General de Justicia del Estado, en los cuales se establece los lineamientos para la atención de personas desaparecidas; acuerdos 02/2014 y 11/2014, signados por el Procurador General de Justicia del Estado, le solicito de la manera más atenta y respetuosa, gire oficio al C. Representante Legal de RADIOMOVIL DIPSA, S.A. DE C.V., con domicilio en la calle Lago Zurich, número 245, edificio Telcel,  piso 4mde, de la colonia Ampliación Granada, Delegación Miguel Hidalgo, C.P.11529 en México, Distrito Federal, para que remita información sobre la línea celular número <strong> {{--{!! $datos->numeroCelular !!}--}} </strong>, de la cual no se cuenta con el número de IMEI; lo anterior, toda vez que se dio inicio a la investigaciones ministerial  <strong> {{--{!! ?????????? !!}--}} </strong>, por la comisión del delito de <strong> {{--{!! $datos->delito !!}--}} </strong>, establecido por los artículos <strong> {{--{!! $datos->articulos !!}--}} </strong> y del <strong> {{--{!! ????????????? !!}--}} </strong>, en agravio de <strong> {{--{!! ??????????? !!}--}} </strong>, debiendo informar lo siguiente (a partir del día <strong> {{--{!! $datos->fecha !!}--}} </strong>, hasta la fecha de recepción del presente):
        </p>
	</div>

    <br>
	<div >

        <p class="fuente" align="justify">
           <strong>a.-</strong> NOMBRE, DENOMINACIÓN O RAZÓN SOCIAL Y DOMICILIO DEL SUSCRIPTOR del siguiente número telefónico: <strong> {{--{!! $datos->numeroTelefono !!}--}} </strong>; 
		</p>
        <p class="fuente" align="justify">
           <strong>b.-</strong> Informe tipo de comunicación (transmisión de voz, buzón local, conferencia, datos), servicios suplementarios (incluidos el reenvió o transferencia de llamadas) o servicios de mensajería o multimedia empleados (incluidos los servicios de mensajes cortos, servicios multimedia y avanzados), del número telefónico <strong> {{--{!! $datos->numeroTelefono !!}--}} </strong>; 
        </p>
		<p class="fuente" align="justify">
           <strong>c.-</strong> Datos necesarios para rastrear e identificar el origen y destino de las comunicaciones de teléfono móvil: número destino, modalidad de líneas con contrato o plan tarifario, como en la modalidad de líneas de prepago, del número telefónico <strong> {{--{!! $datos->numeroTelefono !!}--}} </strong>;
		</p>
		 <p class="fuente" align="justify">
           <strong>d.-</strong> Datos necesarios para determinar la fecha, hora y duración de la comunicación, así como el servicios de mensajería multimedia del número telefónico mencionado.
       </p>
        <p class="fuente" align="justify">
           <strong>e.-</strong> Además de los datos anteriores, se deberá de conservar la fecha y hora de la primera activación del servicio y la etiqueta de localización (identificador de celda) desde la que se haya activado el servicio,  del número telefónico <strong> {{--{!! $datos->numeroTelefono !!}--}} </strong>; 
        </p>
         <p class="fuente" align="justify">
           <strong>f.-</strong> En su caso, identificación y características técnicas de los dispositivos, incluyendo entre otros, los códigos internacionales de identidad de fabricación del equipo y suscriptor.
       </p>
        <p class="fuente" align="justify">
           <strong>g.-</strong> La ubicación digital del posicionamiento geográfico de la línea telefónica <strong> {{--{!! $datos->numeroTelefono !!}--}} </strong>; 
        </p>
		<p class="fuente"align="justify" >
           Hago mención que esta autoridad se encuentra facultada para solicitar la información antes señala, de conformidad con lo que establece el artículo 303 del Código Nacional de Procedimientos Penales, por encontrarse en peligro la vida e integridad física del ciudadano <strong> {{--{!! $datos->desaparecidoNombre !!}--}} </strong>.
		</p>
		<p class="fuente"align="justify">
           Sin otro particular por el momento, aprovecho la ocasión para enviarle un cordial saludo.
		</p>
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