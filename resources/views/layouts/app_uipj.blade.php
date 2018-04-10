
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
   
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">
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
    @include('template.partials.sidebar2')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    
    </div>

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>--}}
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}" ></script>
    <script src="{{ asset('js/popper.min.js')}}" ></script>
    
    <script src="{{asset ('js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
    <script src="{{ asset('js/toastr.min.js')}}" ></script>
    <script src="{{ asset('js/jquery.form-validator.min.js')}}" ></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- REQUIRED SCRIPTS -->
    <!-- Bootstrap -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- SparkLine -->
    <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jVectorMap -->
    <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('admin/plugins/chartjs/Chart.min.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <!--<script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>-->

    <script type="text/javascript" src="{{ asset('js/idle-timer.min.js') }}"></script>
    @include('template.scriptExpireSession')
    {!! HTML::script('personal/js/jquery.form-validator.min.js') !!}
    {!! HTML::script('personal/js/jquery.mask.js') !!}
    {!! HTML::script('personal/js/datosgral.js') !!}
    @yield('scripts')
    <script type="text/javascript">
	$('#btnAdddInformante').click(function(){
        console.log('Entrando a los hijos');

		var nombre =$("#informanteNombres").val();
		var primerAp =$("#informantePrimerAp").val();
		var segundoAp =$("#informanteSegundoAp").val();
		var parentesco =$("#informanteidParentesco").val();
		var otroParentesco =$("#informanteOtroParentesco").val();
		var nacionalidad =$("#idNacionalidad").val();
		var documento =$("#informanteidDocumentoIdentidad").val();
		var otroDocumento =$("#informanteOtroDocIdentidad").val();
		var numDocIdenti=$("#informanteNumDocIdentidad").val();
		var tipoDirec=$("#informanteTipoDireccion").val();
		var calle=$("#informanteCalle").val();
		var numExt=$("#informanteNumExterno").val();
		var numInt=$("#informanteNumInterno").val();
		var estado=$("#idEstado").val();
		var municipio=$("#informanteidMunicipio").val();
		var localidad=$("#idLocalidad").val();
		var colonia=$("#informanteidColonia").val();
		var cp=$("#informanteidCodigoPostal").val();
		var tipoTel=$("#informanteTipoTel").val();
		var lada=$("#lada").val();
		var telefono =$("#informanteTelefonos").val();
		var ext=$("#ext").val();
		var email=$("#informanteCorreoElectronico").val();
		var informante=$("#informante").val();
		var autorizado=$("#recibir").val();

		var datos = {
			nombre: nombre,
			primerAp: primerAp, 
			segundoAp: segundoAp, 
			parentesco: parentesco, 
			otroParen: otroParentesco, 
			nacionalidad: nacionalidad, 
			documento: documento, 
			otroDocumento: otroDocumento,
			numDocIdenti: numDocIdenti,
			tipoDirec: tipoDirec,
			calle: calle,
			numExt: numExt,
			numInt: numInt,
			estado: estado,
			municipio: municipio,
			localidad: localidad,
			colonia: colonia,
			cp: cp,
			tipoTel: tipoTel,
			lada: lada,
			telefono: telefono,
			ext: ext,
			email: email,
			informante: informante,
			autorizado: autorizado

		};

		console.log(datos);
        tr = $('<tr>');
        td1 =$('<td>');
        td2 =$('<td>');
        td3 =$('<td>');
        td4 =$('<td>');
        td5 =$('<td>');
        td6 =$('<td>');

        td1.text('*');
        td2.text("{{ Session::get('nombre')}} {{ Session::get('apellido1')}} {{Session::get('apellido2')}}");
        td3.text("{{Session::get('parentesco')}}");
        td4.text("{{Session::get('telefono')}}");
        td5.text('INFORMANTE / RECIBIR INFORMACIÓN');
        td6.append("<button type='button' class='btn btn-dark data-toggle='modal' data-target='#mostrarModal' id='hola' >MOSTRAR</button>");
        



        tr.append(td1);
        tr.append(td2);
        tr.append(td3);
        tr.append(td4);
        tr.append(td5);
        tr.append(td6);

        $('#cuerpoT').append(tr);


   
        
    })
</script>
    @include('template.partials.footer')
</body>
</html>