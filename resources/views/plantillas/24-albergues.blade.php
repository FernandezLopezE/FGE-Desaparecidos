<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Documento</title>
<style type="text/css">


@page { margin: 1px; }

	

	
		
		
		div#cabecera{
			
			margin-left: 50px;
			margin-top: : 100px;
			
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
			
			height:100px;
			background-color: red;
			
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
		p{ font-size:20px; }
		
			
</style>

</head>


<body>

<div id="encabezado"></div>
		
<div id="cabecera">
	
	<p> <strong> LIC. </strong>	<strong> {{--{!! $datos->nombreRemitente !!}--}} </strong>
	</p>
	
	
	 <p><strong> Xalapa, Ver. </strong>	<strong> {{--{!! $datos->fechaHoy !!}--}}  </strong></p>
	
	
	
	<p> <strong> No. de Inv. </strong><strong> {{--{!! $datos->numCarpeta !!} --}} </strong></p>
	
	
	
	<p><strong> OFICIO NO. FGE/FIM/FEADPD/</strong>	<strong> {{--{!! $datos->numOficio !!}/{!! $datos->anio !!} --}} </strong></p>
	
	<br><br>
	<p align="center"><strong> PRESENTE</strong></p>	
	


		
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
body{
		background-image: url(./images/boletin555x790.png);
		background-size: 30%;
		font-family: Arial;
		
		}