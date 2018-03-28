@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
@endsection

@section('content')

	@include('desaparecidos.datosgral')
	@include('desaparecidos.domicilio')

	@include('desaparecidos.datosidentidad')
	@include('desaparecidos.nacionalidad')

@endsection


@section('script')
	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
@endsection
