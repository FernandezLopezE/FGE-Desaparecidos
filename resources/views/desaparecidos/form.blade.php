@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
	{!! Html::style('css/select2.css') !!}
	{!! Html::style('personal/css/select2.min.css') !!}
	{!! Html::style('css/select2-bootstrap.css') !!}
@endsection

@section('content')

	@include('desaparecidos.datosgral2')
	@include('desaparecidos.domicilio')

	@include('desaparecidos.datosidentidad')

@endsection


@section('script')

	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/select2.min.js') !!}

@endsection
