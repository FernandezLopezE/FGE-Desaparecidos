@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
	{!! Html::style('css/select2.css') !!}
	{{--{!! Html::style('css/select2-bootstrap.css') !!}--}}
	<link href="/css/select2.min.css" rel="stylesheet">
@endsection

@section('content')

	@include('desaparecidos.datosgral2')
	@include('desaparecidos.domicilio')

	@include('desaparecidos.datosidentidad')
	@include('desaparecidos.nacionalidad')

@endsection


@section('script')

<<<<<<< HEAD
	{!! HTML::script('js/datosgral.js') !!}
	{!! HTML::script('js/domicilio.js') !!}
	{!! HTML::script('js/select2.full.js') !!}

	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
=======
	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	<script src="/js/select2.min.js"></script>
>>>>>>> 3d8de6f79727e540483b61aa2c3052515afbb996

@endsection
