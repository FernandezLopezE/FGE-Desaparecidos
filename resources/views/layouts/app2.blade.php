<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="personal/js/select2.min.js"></script>
        <script type="text/javascript">
			$.validate();
		</script>
		{!! Html::style('bootstrap4/css/bootstrap.css') !!}
		<!-- icons-fontawesome -->
	 
		<!-- custom style -->
		{!! Html::style('assets-master/style.css') !!}
		<!-- tipografía oficial -->
		{!! Html::style('assets-master/css/font-neosans.css') !!}

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

            Session::put('nombre', 'Francisco');
            Session::put('region', 'Xalapa,Veracruz');

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
							<a class="nav-link" href="{!! route('desaparecido.create') !!}">Formulario</a>
						</li>
					</ul>
					<div class="dropdown dropdown-toggle">
						<a href="#" data-toggle="dropdown">
							{{ HTML::image('images/perfil.png', 'profile', array('width' => '40', 'height' => '40', 'class' => 'rounded-circle'))}}
						</a>
                		<ul class="dropdown-menu">
                   		 	<li>Fiscal {{ Session::get('nombre') }}</li>
                    		<li>{{ Session::get('region') }}</li>
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

		{!! HTML::script('bootstrap4/js/popper.js') !!}
		{!! HTML::script('assets-master/dist/js/bootstrap.js') !!}
		{!! HTML::script('personal/js/jquery-3.3.1.js') !!}

		@yield('script')
	</body>
</html>