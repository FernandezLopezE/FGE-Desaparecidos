<nav>
	<div class="nav nav-tabs" id="nav-tab" role="tablist">
		@if (isset($desaparecido->id))			
			<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="{{route('cedula.show',['id' => $desaparecido->idCedula])}}" aria-selected="true">
				Entrevista 
			</a>
			<a class="nav-item nav-link @if ($activar == 'informante') active @endif" href="{{route('informante.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				Informantes
			</a>
			<a class="nav-item nav-link @if ($activar == 'desaparecido') active @endif" href="{{route('extraviado.show',['id' => $desaparecido->idCedula])}}" aria-selected="false">
				Desaparecido
			</a>
			<a class="nav-item nav-link @if ($activar == 'familiar') active @endif" href="{{route('familiar.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Familiares
			</a>
			<a class="nav-item nav-link @if ($activar == 'contacto') active @endif" href="{{route('contactos.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Contacto
			</a>
			<a class="nav-item nav-link @if ($activar == 'domicilio') active @endif" href="{{route('domicilios.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Domicilios
			</a>
			<a class="nav-item nav-link @if ($activar == 'antecedente') active @endif" href="{{route('antecedentes.show',['id' => $desaparecido->id])}}" aria-selected="false">
				Antecedentes
			</a>
			<a class="nav-item nav-link @if ($activar == 'vestimenta') active @endif" href="{{route('desaparecido.show_vestimenta',['id' => $desaparecido->id])}}" aria-selected="false">
				Vestimenta
			</a>
			<a class="nav-item nav-link @if ($activar == 'desc_fisica') active @endif" href="{{route('descripcionfisica.show',['id' => $desaparecido->id])}}" aria-selected="false">
			Descripción física
			</a>		
			<a class="nav-item nav-link @if ($activar == 'ant_medicos') active @endif" href="{{route('antecedentesmedicos.show',['id' => $desaparecido->id])}}" aria-selected="false">
			Antecedentes medicos
			</a>
			<a class="nav-item nav-link @if ($activar == 'senas_part') active @endif" href="{{route('senas_particulares.show',['id' => $desaparecido->id])}}" aria-selected="false">
			Señas particulares
			</a>
			<a class="nav-item nav-link @if ($activar == 'dentadura') active @endif" href="{{route('datos_dentales.show',['id' => $desaparecido->id])}}" aria-selected="false">
			Datos dentales
			</a>
			<a class="nav-item nav-link @if ($activar == 'anexos') active @endif" href="{{route('image-view.show',['id' => $desaparecido->id])}}" aria-selected="false">
			Anexos
			</a>			
		@else
			@if (isset($cedula->id))
				<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="{{route('cedula.show',['id' => $cedula->id])}}" aria-selected="true">
					Entrevista
				</a>
				<a class="nav-item nav-link @if ($activar == 'informante') active @endif" href="{{route('informante.show',['id' => $cedula->id])}}" aria-selected="false">
					Informantes
				</a>
				<a class="nav-item nav-link @if ($activar == 'desaparecido') active @endif" href="{{route('extraviado.create_desaparecido',['id' => $cedula->id])}}" aria-selected="false">
					Desaparecido
				</a>
			@else
				<a class="nav-item nav-link @if ($activar == 'entrevista') active @endif" href="#" aria-selected="true">
					Entrevista
				</a>
			@endif
		@endif      
	</div>
 </nav>
