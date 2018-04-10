@extends('layouts.app_uipj')

@section('content')
	<h1>Hola, Este es el diseño de la plantilla base.</h1>
		@php
			Session::forget('personas');
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
			Session::put('personas', [['nombre' => 'SELENE PATRICIA',
							'primerAp' => 'GARCÍA', 
							'segundoAp' => 'ROMAN', 
							'parentesco' => 'MADRE', 
							'otroParen '=> '', 
							'nacionalidad' => 'MEXICANA', 
							'documento' => 'CREDENCIAL DE ELECTOR', 
							'otroDocumento' => '',
							'numDocIdenti' => '375937502859',
							'tipoDirec' => 'TRABAJO',
							'calle' => 'CALLE BUGAMBILIAS M26 LOTE 12',
							'numExt' => 'S/N',
							'numInt' => 'S/N',
							'estado' => 'Veracruz',
							'municipio' => 'POZA RICA',
							'localidad' => 'ALGUNA',
							'colonia' => 'VILLA DE LAS FLORES',
							'cp' => '914567',
							'tipoTel' => 'CELULAR',
							'lada' => '+52',
							'telefono' => '7828199855',
							'ext' => '',
							'email' => 'NO TIENE',
							'informante' => '1',
							'autorizado' => '1']]);

            

        @endphp

@endsection