@extends('layouts.app_uipj')

@section('style')
	{!! Html::style('') !!}

	
	{!! Html::style('css/select2.css') !!}
	{!! Html::style('personal/css/select2.min.css') !!}
	{!! Html::style('css/select2-bootstrap.css',['rel'=>"stylesheet"]) !!}
	{!! Html::style('personal/js/icheck/skins/all.css') !!}
@endsection

@section('content')
<div id="detallehead" class="card-header">

	<div id="tabscarpeta">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active show" data-toggle="tab" href="#tseccion1">Entrevistador</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tseccion2">Desaparecido</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#tseccion3">Desaparicion</a>
			</li>
		</ul>
	</div>
	<div class="tab-content" id="contenidotabs">
	    <div class="tab-pane container active show" id="tseccion1">
	    	@include('desaparecidos.seccion1')
	    </div>
	    <div class="tab-pane container" id="tseccion2">
	    	
	    </div>
	    <div class="tab-pane container" id="tseccion3">
	    	@include('desaparecidos.seccion3')
	    </div>
	</div>
</div>

	{{--!! Form::model($desaparecido, ['action' => 'DesaparecidoController@store']) !!}
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
	{!! Form::close() !!--}}

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
	{!! HTML::script('personal/js/datosvestimenta.js') !!}
	{!! HTML::script('personal/js/jscolor.js') !!}
	{!! HTML::script('personal/js/icheck/icheck.js') !!}
	{!! HTML::script('personal/js/icheck/icheck.min.js') !!}
	<script type="text/javascript">

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
