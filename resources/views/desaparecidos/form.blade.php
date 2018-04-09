@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}

	
	{!! Html::style('css/select2.css') !!}
	{!! Html::style('personal/css/select2.min.css') !!}
	{!! Html::style('css/select2-bootstrap.css',['rel'=>"stylesheet"]) !!}
	{!! Html::style('personal/js/icheck/skins/all.css') !!}
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

		@include('desaparecidos.seccion1')
		@include('desaparecidos.seccion2')

		@include('desaparecidos.seccion3')
		{!! Form::submit('Agregar datos', ['class' => 'btn btn-large btn-primary openbutton']); !!}
	{!! Form::close() !!}

@endsection


@section('script')
	{!! HTML::script('personal/js/jquery.min.js') !!}
	{!! HTML::script('personal/js/jquery.form-validator.min.js') !!}
	{!! HTML::script('personal/js/documentosIdentidad.js') !!}
	{!! HTML::script('personal/js/datosgral.js') !!}
	{!! HTML::script('personal/js/personasAutorizadas.js') !!}
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/datosdesaparicion.js') !!}
	{!! HTML::script('personal/js/select2.min.js') !!}
	{!! HTML::script('personal/js/jquery.mask.js') !!}
<<<<<<< HEAD
	{!! HTML::script('personal/js/datosvestimenta.js') !!}
	{!! HTML::script('personal/js/jscolor.js') !!}
	 <script type="text/javascript">
=======
	{!! HTML::script('personal/js/icheck/icheck.js') !!}
    {!! HTML::script('personal/js/icheck/icheck.min.js') !!}
	<script type="text/javascript">
>>>>>>> 95101b75a7e7bf43ec9c43ac0c887a2df27f0e96
	 	console.log("entrando")
			$.validate();
			 $('input[name="telefono"]').mask('(000) 000 0000');

			 
			 $('.icheck').iCheck({
			    checkboxClass: 'icheckbox_square',
			    radioClass: 'iradio_square',
			    increaseArea: '20%' // optional
			});
	</script>

@endsection
