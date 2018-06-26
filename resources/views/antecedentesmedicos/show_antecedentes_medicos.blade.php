@extends('layouts.app_uipj')

@section('css')
{!! Html::style('') !!}
@endsection

@section('titulo', '')

@section('content')
@include('navs.navs_datos',array('activar' => 'ant_medicos'))
<div class="card border-primary">
<div class="card-body bg-white">
	<div class="row">
		<div class="col">
			<div> 
            	<a href="{{route('desaparicion.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">Editar </a>   
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<dl class="row">
				<dt class="col-sm-4">ENFERMEDADES:</dt>
				<dt class="col-sm-4">ADICCIONES:</dt>
				<dt class="col-sm-4">INTERVENCIONES QUIRÚRGICAS:</dt>
			</dl>
			<dl class="row">
				<dd class="col-sm-4"> 

				{!! $desaparecido->persona->nombres !!} 
					{!! $desaparecido->antecedentesMedicos->observaciones !!} 
							

				</dd>
				<dd class="col-sm-4">
<!--					egrfgregergerg		-->
				</dd>
				<dd class="col-sm-4">

								</dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-4">MEDICAMENTOS QUE TOMA:</dt>
				<dt class="col-sm-4">OBSERVACIONES:</dt>
			</dl>
			<dl class="row">
				<dd class="col-sm-4">

								</dd>
				<dd class="col-sm-4">
				
				</dd>
			</dl>
			<dl class="row">
				<dt class="col-sm-12">ANEXOS:</dt>
			</dl>
			<dl class="row">
				<dd class="col-sm-12">
				
				</dd>
			</dl>
		</div>
	</div>
</div>	
</div>
@endsection