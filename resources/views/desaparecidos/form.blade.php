@extends('layouts.app2')

@section('content')

	@include('desaparecidos.datosgral')
	@include('desaparecidos.domicilio')
	{{--@include('desaparecidos.datosidentidad')--}}
	@include('desaparecidos.nacionalidad')

@endsection
