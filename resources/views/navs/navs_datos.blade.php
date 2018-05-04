<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
		@if (isset($desaparecido->id))			
			<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="{{route('cedula.show',['id' => $desaparecido->idCedula])}}" aria-selected="true">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				@if ($activar == 'entrevista') Entrevista @endif
			</a>
			<a class="nav-item nav-link @if ($activar == 'informante') active @endif" href="{{route('informante.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				<i class="fa fa-commenting-o" aria-hidden="true"></i>
				@if ($activar == 'informante') Informante @endif
			</a>
			<a class="nav-item nav-link @if ($activar == 'desaparecido') active @endif" href="{{route('extraviado.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				<i class="fa fa-male" aria-hidden="true"></i>
				@if ($activar == 'desaparecido') Persona no localizada @endif
			</a>
			<a class="nav-item nav-link @if ($activar == 'familiar') active @endif" href="{{route('familiar.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-users" aria-hidden="true"></i>
				@if ($activar == 'familiar') Familiares @endif				
			</a>
			<a class="nav-item nav-link @if ($activar == 'contacto') active @endif" href="{{route('contactos.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-phone" aria-hidden="true"></i>
				@if ($activar == 'contacto') Contacto @endif				
			</a>
			<a class="nav-item nav-link @if ($activar == 'domicilio') active @endif" href="{{route('domicilios.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				@if ($activar == 'domicilio') Domicilios @endif				
			</a>
			<a class="nav-item nav-link @if ($activar == 'antecedente') active @endif" href="{{route('antecedentes.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-gavel" aria-hidden="true"></i>
				@if ($activar == 'antecedente') Antecedentes @endif				
			</a>
			<a class="nav-item nav-link @if ($activar == 'vestimenta') active @endif" href="{{route('desaparecido.show_vestimenta',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-user-secret" aria-hidden="true"></i>
				@if ($activar == 'vestimenta') Vestimenta @endif			
			</a>
			<a class="nav-item nav-link @if ($activar == 'desc_fisica') active @endif" href="{{route('descripcionfisica.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-universal-access" aria-hidden="true"></i>
				@if ($activar == 'desc_fisica') Descripción física @endif
			</a>		
			<a class="nav-item nav-link @if ($activar == 'ant_medicos') active @endif" href="{{route('antecedentesmedicos.show',['id' => $desaparecido->id])}}" aria-selected="false">

				<i class="fa fa-heartbeat" aria-hidden="true"></i>
				@if ($activar == 'ant_medicos') Antecedentes médicos @endif			

			</a>
			<a class="nav-item nav-link @if ($activar == 'senas_part') active @endif" href="{{route('senas_particulares.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-sign-language" aria-hidden="true"></i>
				@if ($activar == 'senas_part') Señas particulares @endif	
			</a>
			<a class="nav-item nav-link @if ($activar == 'dentadura') active @endif" href="{{route('datos_dentales.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-medkit" aria-hidden="true"></i>
				@if ($activar == 'dentadura') Datos dentales @endif
			</a>
			<a class="nav-item nav-link @if ($activar == 'anexos') active @endif" href="{{route('image-view.show',['id' => $desaparecido->id])}}" aria-selected="false">
				<i class="fa fa-upload" aria-hidden="true"></i>
				@if ($activar == 'anexos') Anexos @endif
			</a>			
		@else
			@if (isset($cedula->id))
				<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="{{route('cedula.show',['id' => $cedula->id])}}" aria-selected="true">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					@if ($activar == 'entrevista') Entrevista @endif
				</a>
				<a class="nav-item nav-link @if ($activar == 'informante') active @endif" href="{{route('informante.show',['id' => $cedula->id])}}" aria-selected="false">
					<i class="fa fa-commenting-o" aria-hidden="true"></i>
					@if ($activar == 'informante') Informante @endif
				</a>
				<a class="nav-item nav-link @if ($activar == 'desaparecido') active @endif" href="{{route('extraviado.create_desaparecido',['id' => $cedula->id])}}" aria-selected="false">
					<i class="fa fa-male" aria-hidden="true"></i>
					@if ($activar == 'desaparecido') Persona no localizada @endif
				</a>
			@else
				<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="#" aria-selected="true">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					@if ($activar == 'entrevista') Entrevista @endif
				</a>
			@endif
		@endif      
	</div>
 </nav>
