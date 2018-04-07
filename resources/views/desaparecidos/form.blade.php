@extends('layouts.app2')

@section('style')
	{!! Html::style('') !!}
	{!! Html::style('css/select2.css') !!}
	{!! Html::style('personal/css/select2.min.css', ['rel'=> 'stylesheed']) !!}

	{!! Html::style('personal/js/icheck/skins/all.css') !!}
@endsection

@section('content')
<ul class="nav nav-pills" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="sec1-tab" data-toggle="tab" href="#sec1" role="tab" aria-controls="home" aria-selected="true">Entrevistador</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="sec2-tab" data-toggle="tab" href="#sec2" role="tab" aria-controls="profile" aria-selected="false">Datos de informantes</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="sec3-tab" data-toggle="tab" href="#sec3" role="tab" aria-controls="contact" aria-selected="false">Personas autorizadas</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="sec4-tab" data-toggle="tab" href="#sec4" role="tab" aria-controls="contact" aria-selected="false">Persona desaparecida</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="sec5-tab" data-toggle="tab" href="#sec5" role="tab" aria-controls="contact" aria-selected="false">Datos de la desaparición</a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="sec1" role="tabpanel" aria-labelledby="sec1-tab">
		@include('desaparecidos.seccion1')
	</div>
	<div class="tab-pane fade" id="sec2" role="tabpanel" aria-labelledby="sec2-tab">
		@include('desaparecidos.seccion2')
	</div>
	<div class="tab-pane fade" id="sec3" role="tabpanel" aria-labelledby="sec3-tab">..3.</div>
	<div class="tab-pane fade" id="sec4" role="tabpanel" aria-labelledby="sec4-tab">..4.</div>
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
	{!! HTML::script('personal/js/domicilio.js') !!}
	{!! HTML::script('personal/js/datosdesaparicion.js') !!}
	{!! HTML::script('personal/js/select2.min.js') !!}
	{!! HTML::script('personal/js/jquery.mask.js') !!}
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
