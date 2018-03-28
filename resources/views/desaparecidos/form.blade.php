@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
@endsection

@section('content')

	@include('desaparecidos.datosgral2')
	@include('desaparecidos.domicilio')

	{{--@include('desaparecidos.datosidentidad')
	@include('desaparecidos.nacionalidad')--}}

@endsection


@section('script')
	{!! HTML::script('js/datosgral.js') !!}
	{!! HTML::script('js/jquery-3.3.1.js') !!}
	{!! HTML::script('js/domicilio.js') !!}
@endsection
