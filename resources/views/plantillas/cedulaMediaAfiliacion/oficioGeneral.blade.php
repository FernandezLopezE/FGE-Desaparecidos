<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- <meta name="csrf-token" content="{{csrf_token()}}">
	<link rel="stylesheet"  href="{{asset ('css/oficio.css')}}"> -->
	<style>
	.page-break {
	    page-break-after: always;
	}
	p.fuente { font-size:18px;
				font-family: Arial, Helvetica, sans-serif; 
	}
	#sangria p text-indent:50px ; margin:0px ; padding:0px ; border:0px
	</style>
</head>
<body>
	<div class="page-break">@include('plantillas.cedulaMediaAfiliacion.solicitud')</div>
	<div class="page-break">@include('plantillas.cedulaMediaAfiliacion.cedula')</div>
	<div class="page-break">@include('plantillas.cedulaMediaAfiliacion.cedulaExtraviada')</div>
	<div class="page-break">@include('plantillas.cedulaMediaAfiliacion.fotografia')</div>
	<div class="page-break">@include('desaparecidos.boletin')</div>

	<!-- <div id="app">
		<oficio tipo="solicitud de la persona extraviada" url="{{url("jsonOficio1")}}" id="1" ></oficio>
		<oficio tipo="cedula persona extraviada" url="{{url("json_oficio2")}}" id="1" ></oficio>
		
	</div> -->
	
</body>
</html>
<!-- <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/oficio.js')}}"></script> -->