
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de inicio de Carpetas de Investigación</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{!! Html::style('bootstrap4/dist/css/bootstrap.min.css') !!}
	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}">
	{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">--}}

	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
	
	
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	
	<link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">

	<link rel="stylesheet" href="{{ asset('plugins/bootstrap_table/bootstrap-table.min.css') }}">
	{!! Html::style('plugins/icheck/skins/all.css') !!}
	<!-- CSS para personalizar la plantilla -->
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> 



	{!! Html::style('') !!}
	@yield('css')
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<div class="wrapper">
		
	<!-- Navbar -->
	@include('template.partials.navbar')
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	@include('template.partials.sidebar')

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-12">
						<h4 class="m-0 text-dark">
							<i class="fa fa-male" aria-hidden="true"></i>
							Cédula de investigación de la persona no localizada.
							@yield('titulo')
						</h4>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">						   
							{{--<li class="breadcrumb-item"><a href="#">Carpeta</a></li>
							<li class="breadcrumb-item"><a href="#">Home</a></li>						   
							<li class="breadcrumb-item active">Pruebas</li>--}}
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				@yield('content')
			</div>
		</section>

	</div>


	<!-- Control Sidebar (a secondary optional sidebar) -->
	
	<!-- /.control-sidebar -->

	<!-- Main Footer -->
	
	</div>
	{!! HTML::script('personal/js/jquery-3.3.1.js') !!}
	<script src="{{ asset('plugins/tether/js/tether.min.js')}}" ></script>
	{{-- {!! HTML::script('bootstrap4/dist/js/bootstrap.min.js') !!} --}}
	
	<script src="{{asset('/bootstrap4/dist/js/popper.min.js') }}"></script>
	<script src="{{asset('/bootstrap4/dist/js/bootstrap.min.js') }}"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="{{asset('/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
	
	{!! HTML::script('personal/js/jquery.form-validator.min.js') !!}
	{!! HTML::script('personal/js/jquery.mask.js') !!}
	<script src="{{asset('/plugins/ckeditor/ckeditor.js') }}"></script>
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>

    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('plugins/bootstrap_table/bootstrap-table.min.js') }}"></script>   

    <!-- Latest compiled and minified Locales -->
    <script src="{{ asset('plugins/bootstrap_table/locale/bootstrap-table-es-MX.min.js') }}"></script>

    {!! HTML::script('personal/js/datosgral.js') !!}
    {!! HTML::script('personal/js/style_mask.js') !!}
    {!! HTML::script('plugins/icheck/icheck.js') !!}
	{!! HTML::script('plugins/icheck/icheck.min.js') !!}
	{!! HTML::script('personal/js/avatar/cara.js') !!}
	
	
	@yield('scripts')
	<script type="text/javascript">
        
	$(function (){
		
		var routeIndex = '{!! route('consultas.index') !!}';

		$('[data-toggle="tooltip"]').tooltip()

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.validate({});

		// Mostrando los municipios que pertenecen a determinado estado.
		$('#idEstado').on('change', function(){		
			$("#idMunicipio").empty();
			var idEstado = $(this).val();
			if(idEstado) {
				$.ajax({
					url: routeIndex+'/get_municipios/'+idEstado,
					type:"GET",
					dataType:"json",
					success:function(data) {
							$("#idMunicipio").empty();
						$.each(data, function(key, value){
							$("#idMunicipio").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
						});
					},				
				});
			} else {
				$('#idMunicipio').empty();
			}
		});

		// Mostrando las localidades que pertenecen a determinado municipio.
		 $('#idMunicipio').on('change', function(){
			$("#idLocalidad").empty();
			var idMunicipio = $(this).val();
			if(idMunicipio) {			
				$.ajax({
					url: routeIndex+'/get_localidades/'+idMunicipio,
					type:"GET",
					dataType:"json",
					success:function(data) {
							$("#idLocalidad").empty();
						$.each(data, function(key, value){
							$("#idLocalidad").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
						});
					},				
				});
			}
			// Mostrando las colonias que pertenecen a determinado municipio.				
			$("#idColonia").empty();
			var idMunicipio = $(this).val();
			if(idMunicipio) {			
				$.ajax({
					url: routeIndex+'/get_colonias/'+idMunicipio,
					type:"GET",
					dataType:"json",
					success:function(data) {
						$("#idColonia").empty();
						$.each(data, function(key, value){
							$("#idColonia").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
						});
					},				
				});
			}

			// Mostrando los codigos postales que pertenecen a determinado municipio.		
			$("#idCodigoPostal").empty();
			var idMunicipio = $(this).val();
			if(idMunicipio) {
				$.ajax({
					url: routeIndex+'/get_colonias/'+idMunicipio,
					type:"GET",
					dataType:"json",
					success:function(data) {
							$("#idCodigoPostal").empty();
						$.each(data, function(key, value){
							$("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');
						});
					},				
				});
			}
		});

		//para Codigo Postal  seleccionando una colonia
		$('#idColonia').on('change', function(){
			$("#idCodigoPostal").empty();
			var idColonia = $(this).val();
			if(idColonia) {	
				$.ajax({
					url: routeIndex+'/codigos2/'+idColonia,
					type:"GET",
					dataType:"json",
					success:function(data) {
							$("#idCodigoPostal").empty();
						$.each(data, function(key, value){
							$("#idCodigoPostal").append('<option value="'+ value.id +'">' +  value.codigoPostal + '</option>');
						});
					},			   
				});
			} else {
				$('#idColonia').empty();
			}
		});
	})
</script>
	@include('template.partials.footer')
</body>
</html>