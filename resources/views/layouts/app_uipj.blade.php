
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
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">
	<!--<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/adminlte.min.css') }}">-->

	<link rel="stylesheet" href="{{ asset('plugins/bootstrap_table/bootstrap-table.min.css') }}">
	{!! Html::style('personal/js/icheck/skins/all.css') !!}
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
					<div class="col-sm-6">
						<h4 class="m-0 text-dark">REGISTRO ÚNICO DE PERSONAS DESAPARECIDAS</h4>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						   
								<li class="breadcrumb-item"><a href="#">Carpeta</a></li>
							

								<li class="breadcrumb-item"><a href="#">Home</a></li>
						   
							<li class="breadcrumb-item active">Pruebas</li>
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
	{!! HTML::script('bootstrap4/assets/js/vendor/popper.min.js') !!}
	{!! HTML::script('bootstrap4/dist/js/bootstrap.min.js') !!}
	{!! HTML::script('personal/js/jquery.form-validator.min.js') !!}
	{!! HTML::script('personal/js/jquery.mask.js') !!}
	<script src="{{asset ('js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script src="{{ asset('js/toastr.min.js')}}" ></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('plugins/bootstrap_table/bootstrap-table.min.js') }}"></script>   

    <!-- Latest compiled and minified Locales -->
    <script src="{{ asset('plugins/bootstrap_table/locale/bootstrap-table-es-MX.min.js') }}"></script>

    {!! HTML::script('personal/js/datosgral.js') !!}
    {!! HTML::script('personal/js/style_mask.js') !!}
    {!! HTML::script('personal/js/icheck/icheck.js') !!}
	{!! HTML::script('personal/js/icheck/icheck.min.js') !!}
	
	@yield('scripts')
	<script type="text/javascript">
	$(function (){	
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.validate({});
	})
</script>
	@include('template.partials.footer')
</body>
</html>