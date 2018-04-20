@extends('layouts.app_uipj')


@section('content')
	

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						DATOS DE LOS INFORMANTES
						<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>

					</h5>
				</div>	
			</div>
			<div class ="row">
				
				<div class ="main-contact">
					{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data'])!!} 
					<div class ="col-6"></div>
					{!!Form::text('name', null,['placeholder'=>'nombre'])!!}
					{!!Form::text('email', null,['placeholder'=>'email'])!!}
					{!!Form::textarea('mensaje', null,['placeholder'=>'mensaje'])!!}
					{!!Form::file('file', null,['archivo'=>'Seleccionar archivo'])!!}
				</div>
				{!!Form::submit('ENVIAR')!!}
				{!!Form::close()!!}
				</div>

			</div>	
		</div>
		
	</div>

	

@endsection


