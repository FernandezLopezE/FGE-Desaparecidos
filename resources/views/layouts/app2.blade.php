<!doctype html>
<html lang="en">
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
    {[!! Html::style('assets-master/css/font-neosans.css') !!}

    @yield('style')

    <title>Personas desaparecidas</title>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Persona Desaparecida</h2>
      </div>

      <!--<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
        </div>
      </div>-->
      @yield('content')
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    {!! HTML::script('bootstrap4/js/popper.js') !!}
    {!! HTML::script('assets-master/dist/js/bootstrap.js') !!}
    {!! HTML::script('js/jquery-3.3.1.js') !!}

    @yield('script')
  </body>
</html>