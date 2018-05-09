<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">    
      
		{!! Html::style('bootstrap4/dist/css/bootstrap.min.css') !!}

		<!-- icons-fontawesome -->

		@yield('style')

		<style type="text/css">
			.container {
    			margin: 70px;
			}
			.dropdown-menu {
 			   text-align: center;
 			   margin-left: -120px;
			}
			div.dropdown {
				margin-left: 470px;
			}
		</style>

		<title>Personas desaparecidas</title>
	</head>

	<body class="bg-light">
		@php
			Session::put('region', 'POZA RICA');
            Session::put('nombreComp', 'MARÍA DE LA LUZ ESCUDERO RAMÍREZ');
            Session::put('cargo', 'FISCAL 2DA ESP. EN LA INV. DE DELITOS DE VIOLENCIA CONTRA LA FAMILIA CONTRERAS');
            Session::put('nombre', 'SELENE PATRICIA');
            Session::put('apellido1', 'GARCÍA');
            Session::put('apellido2', 'ROMAN');
            Session::put('parentesco', 'HERMANO/A');
			Session::put('identificacion', 'CREDENCIAL PARA VOTAR');
			Session::put('nacionalidad', 'MEXICANA');
			Session::put('numIdentificacion', '375937502859');
			Session::put('domicilio', 'CALLE BUGAMBILIAS M26 LOTE 12');
			Session::put('identificacion', 'CREDENCIAL PARA VOTAR');
			Session::put('numExt', 'S/N');
			Session::put('numInt', 'S/N');
			Session::put('estado', 'Veracruz');
			Session::put('municipio', 'POZA RICA');
			Session::put('localidad', 'ALGUNA');
			Session::put('colonia', 'VILLA DE LAS FLORES');
			Session::put('cp', '914567');
			Session::put('delegacion', 'POZA RICA');
			Session::put('tipoTel', 'CELULAR');
			Session::put('lada', '+52');
			Session::put('telefono', '7828199855');
			Session::put('celular', '');
			Session::put('correo', 'NO TIENE');

            

        @endphp
		<header>
			<!-- Fixed navbar -->
			<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
				<a class="navbar-brand" href="#">UIPJ</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Formulario</a>
						</li>
					</ul>
					<div class="dropdown dropdown-toggle">
						<a href="#" data-toggle="dropdown">
							{{ HTML::image('images/perfil.png', 'profile', array('width' => '40', 'height' => '40', 'class' => 'rounded-circle'))}}
						</a>
                		<ul class="dropdown-menu">
                   		 	<li>{{ Session::get('nombreComp') }}</li>
                   		 	<div class="dropdown-divider"></div>
                    		<li>REGIÓN: {{ Session::get('region') }}</li>
                    		<div class="dropdown-divider"></div>
                    		<a class="dropdown-item" href="">Regresar a UIPJ</a>
                		</ul>
					</div>
				</div>
			</nav>
		</header>
		<main role="main" class="container">
			@yield('content')
		</main>
		<footer class="footer">
			<div class="container">
				<span class="text-muted">Fiscalia General Del Estado De Veracruz</span>
			</div>
		</footer>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		{!! HTML::script('personal/js/jquery-3.3.1.js') !!}
		{!! HTML::script('bootstrap4/assets/js/vendor/jquery-slim.min.js') !!}
		{!! HTML::script('bootstrap4/assets/js/vendor/popper.min.js') !!}
		{!! HTML::script('bootstrap4/dist/js/bootstrap.min.js') !!}		

		@yield('script')
	</body>
</html>