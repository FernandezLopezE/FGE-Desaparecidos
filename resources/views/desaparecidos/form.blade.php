@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
	{!! Html::style('css/select2.css') !!}
	{!! Html::style('personal/css/select2.min.css') !!}
	{!! Html::style('css/select2-bootstrap.css') !!}
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

		@include('desaparecidos.datosgral')
		@include('desaparecidos.domicilio')

		@include('desaparecidos.datosidentidad')
		{!! Form::submit('Agregar datos', ['class' => 'btn btn-large btn-primary openbutton']); !!}
	{!! Form::close() !!}

@endsection


@section('script')
	{!! HTML::script('personal/js/jquery.min.js') !!}
	{!! HTML::script('personal/js/jquery.form-validator.min.js') !!}
	{!! HTML::script('personal/js/documentosIdentidad.js') !!}
	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/select2.min.js') !!}
	 <script type="text/javascript">
			$.validate();
		</script>
@endsection
