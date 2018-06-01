@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))

<div class="card border-primary">
        <div class="card border-success">
          <div class="card-header"> 
                <h5>Antecedentes médicos
                 <a href="{{route('antecedentesmedicos.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">
						Editar </a>   
                </h5>
          </div>
        </div>
 			

<div class="card-body bg-white">
	
				

	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Enfermedades:</dt>
					<dd class="col-sm-5">
						{!!  $enfermedades !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Adicciones:</dt>
					<dd class="col-sm-5">
						{!!  $adicciones !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Intervenciones quirúrgicas:</dt>
					<dd class="col-sm-5">
						{!!  $iq !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Implantes:</dt>
					<dd class="col-sm-5">
						{!!  $implantes !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Observaciones:</dt>
					<dd class="col-sm-5">
						{!!  $observaciones !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	<div class="row">
		<div class="col">				
				<dl class="row">
					<dt class="col-sm-2">Medicamentos que toma:</dt>
					<dd class="col-sm-5">
						{!!  $medicamentosToma !!} 	  
					</dd>					
				</dl>
		</div>
	</div>
	


	 {{--@if(is_null($desaparecido->cedula->vehiculoPlacas))
			
	@else
			<div class="row">
				<div class="col">
						<dl class="row">
							<dt class="col-sm-8">DESCRIPCIÓN DEL AUTOMÓVIL:</dt>
						</dl>
						<dl class="row">
							<dt class="col-sm-2">Placas:</dt>
							<dd class="col-sm-3">
								{!!  placas !!} 
							</dd>
							<dt class="col-sm-2">Descripcion:</dt>
							<dd class="col-sm-5">
								{!!  descripcion!!} 
							</dd>

							
						</dl>
				</div>
			</div>
	@endif--}}
</div>	
</div>

{{--<dl class="row">
		<dt class="col-sm-8">ÚLTIMA PERSONA QUE LO VIO:</dt>
	</dl>--}}
@endsection
