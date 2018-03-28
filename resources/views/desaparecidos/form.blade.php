@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
	{!! Html::style('css/select2.css') !!}
	{{--{!! Html::style('css/select2-bootstrap.css') !!}--}}
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
	{!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store']) !!}
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

		@include('desaparecidos.datosgral2')
		@include('desaparecidos.domicilio')

		@include('desaparecidos.datosidentidad')
		@include('desaparecidos.nacionalidad')
		{!! Form::submit('Agregar datos'); !!}
	{!! Form::close() !!}

@endsection


@section('script')

	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script type="text/javascript">
		$(function (){	
			$('.nacionalidad').select2({
			  placeholder: 'Select an option'
			});
		})
	</script>

@endsection
