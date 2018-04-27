@extends('layouts.app_uipj')


@section('content')
	

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						GENERACIÓN DE BOLETÍN
						{{--<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>--}}

					</h5>
				</div>	
			</div>
		</div>	
		<div class = "car-body">
			

		</div>
		<div class ="row">
				<div class = "md-col">
					{{ Form::hidden('idCedula', $id, array('id' => 'idCedula')) }}
					{{ Form::hidden('idDesaparecido', $id, array('id' => 'idDesaparecido')) }}

				</div>
				
		</div>
		<div class ="row">
				<div class = "col-8">
					
					{!!Form::label('gbe', 'Generar boletín de extravío', ['class' => 'center'])!!}
				</div>
				
				<div class = "col-3">
					{!!Form::submit('GENERAR PDF', ['id' => 'btnGenerarBoletin', 'class'=> 'btnGenerarBoletin form-control btn-primary openbutton' ])!!}


					{{--{!!link_to_action('MailController@generar_boletin', $title = 'GENERAR BOLETÍN', $parameters = ['idPersona'], $attributes = ['class'=> 'btnGenerarBoletin' ])!!}--}}
				</div>
		</div>	
	</div>
				
			

	<div class="card border-primary">
		<div class="card-header">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="card-title">
						ENVÍO DE BOLETÍN
						{{--<button type="button" class="btn btn-dark pull-right"  id="btnAgregarInformante"><i class="fa fa-plus"></i> AGREGAR PERSONA</button>--}}

					</h5>
				</div>	
			</div>
		</div>
			<div class ="main-contact">
				<div class = "row">
					<div class="col">
					{!! Form::label ('idEdocivil','Estado civil:') !!}
					
					</div>
					<div class="col">
					{!! Form::select ('idCorreosExternos',$correosExternos,'', 
								                   ['class' => 'form-control',
								                     'id' => 'idCorreosExternos',
								                    
                   									] )!!}  
					</div>
					
				</div>
			</br>
				<div class ="row">

					<div class="col">
						{!!Form::open(['route' =>'mail.store', 'method '=>'POST' , 'enctype' =>'multipart/form-data', 'class' => 'form-control' ])!!}
					


						{!!Form::submit('ENVIAR')!!}
						{!!Form::close()!!}
						
					</div>
					

				</div>
						
						<div class ="col-6">
							

						</div>
						
						
			</div>
			

	</div>		


	

@endsection

@section('scripts')


<script type="text/javascript">


		 $('idCorreosExternos').select2(
		 		placeholder: 'seleccione una opción'
		 	);



</script>

@endsection


