<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		{!! Html::style('bootstrap4/css/bootstrap.css') !!}
		<!-- icons-fontawesome -->
	 
		<!-- custom style -->
		{!! Html::style('assets-master/style.css') !!}
		<!-- tipografía oficial -->
		{!! Html::style('assets-master/css/font-neosans.css') !!}

		@yield('style')

		<title>Personas desaparecidas</title>
	</head>

	<body class="bg-light">
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
						<li class="nav-item">
							<a class="nav-link" href="#">Cerrar sesión</a>
						</li>
					</ul>
					<form class="form-inline mt-2 mt-md-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</header>

		<main role="main" class="container">
			@yield('content')
		</main>
		<footer class="footer">
			<div class="container">
				<span class="text-muted">Place sticky footer content here.</span>
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