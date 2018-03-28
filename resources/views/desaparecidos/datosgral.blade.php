<div class="form-horizontal">
	<h3>Datos de la persona desaparecida</h3><hr>
	<!--Genero -->
	<div class="form-group row">
		<div class="col-3">
			<fieldset class="form-group">
				<div class="row">
				<legend class="col-form-label col-sm-3 pt-0">Género</legend>
					<div class="col-sm-2">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="sexo" id="sexo" value="masculino">
							<label class="form-check-label" for="sexo"> Masculino</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="sexo" id="sexo" value="femenino">
							<label class="form-check-label" for="sexo"> Femenino</label>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		<!--Fin Genero -->

		<!--Nacionalidad -->
		
	</div>
		<!--fin de Nacionalidad -->
	</div>

	<!--Nombre, apellidos, apodo -->
	<div class="form-group row">
		<div class="col-3">
			<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre(s)">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="primerAp" name="primerApp" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="segundoAp" name="segundoAp" placeholder="Apellido materno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="apodo" name="apodo" placeholder="Apodo/alias">
		</div>
	</div>
	<!--Fin de Nombre, apellidos, apodo -->

	<!--Fecha de nacimiento y edades -->
	<div class="form-group row">
		<label class="col-1 col-form-label">Fecha de nacimiento</label>
		<div class="col-2">
			<input type="date" class="form-control" id="fechaNacimiento"  name="fechaNacimiento">
		</div>
		
		<div class="col-3">
			<input type="text" class="form-control" id="edad" name="edad" placeholder="Edad">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="edadAparente" name="edadAparente" placeholder="Edad aparente">
		</div>
	</div>
	<!--Fin de Fecha de nacimiento y edades -->

	<!--Escolaridad, ocupación y select de estado civil -->
	<div class="form-group row">
		
		<div class="col-3">
			<input type="text" class="form-control" id="idOcupacion" name="idOcupacion" placeholder="Ocupación">
		</div>	
		<div class="col-3">
			<select class="form-control" name="idEdocivil" id="idEdocivil">
				<option selected>Estado civil</option>
				<option value="soltero(a)">Soltero(a)</option>
				<option id="casado" name="casado" value="casado">Casado(a)</option>
				<option value="viudo(a)">Viudo(a)</option>
				<option value="divorciado(a)">Divorciado(a)</option>
				<option value="separado(a)">Separado(a)</option>
			</select>
		</div>	
	</div>
	<!--Fin de Escolaridad, ocupación y select de estado civil -->

	<!--Datos de la pareja en caso de que este casado -->
	<div class="form-group row " id="nombrePareja" style="display:none">
		<label class="col-3 col-form-label">Nombre de la esposa o pareja</label>
		<div class="col-3">
			<input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="primerAp" name="primerAp" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" id="segundoAp" name="segundoAp" placeholder="Apellido materno">
		</div>
	</div><hr>
	<!--Fin de datos de la pareja en caso de que este casado -->
	
	<!--Radios buttons para preguntar si tiene hijos -->
	<div class="form-group row" name="tieneHijos" id="tieneHijos">
		<label class="col-1 col-form-label">Hijos</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="hijos" id="hijos" value="si">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="hijos" id="hijos" value="no">No</label>
		</div>
	</div>
	<!--Fin de Radios buttons para preguntar si tiene hijos -->

	<!--Campos para ingresar nombre de los hijos -->
	<div class="form-group row" id="nombreHijo" style="display:none">
		<div class="col-3">
			<input type="text" class="form-control"  id="nombres" name="nombres" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control"  id="primerAp" name="primerAp" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control"  id="segundoAp" name="segundoAp" placeholder="Apellido materno">
		</div>
		<div class="col-3">
			<button type="button" class="btn btn-primary form-control">Agregar otro</button>
		</div>
	</div><hr>
	<!--Fin de Campos para ingresar nombre de los hijos -->

	<!--Radio buttons para preguntar si esta embarazada -->
	<div class="form-group row" id="estaEmbarazada">
		<label class="col-3 col-form-label">Embarazo al desaparecer</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="embarazo" id="embarazo" value="si">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="embarazo" id="embarazo" value="no">No</label>
		</div>
		<div class="col-2">
			<label class="radio-inline"><input type="radio" class="form-control" name="embarazo" id="embarazo" value="ignora">Lo ignoran</label>
		</div>
	</div>
	<!--Fin de Radio buttons para preguntar si esta embarazada -->

	<!--Periodo de embarazo -->
	<div class="form-group row" id="datosEmbarazo" style="display:none">
		<label class="col-3 col-form-label">Periodo de gestación estimado al tiempo de la desaparición</label>
		<div class="col-2">
			<input type="text" class="form-control" name="periodoGestacion" name="periodoGestacion" placeholder="Semanas">
		</div>
		<div class="col-2">
			<input type="text" class="form-control" name="periodoGestacion" name="periodoGestacion" placeholder="Meses">
		</div>
	</div>
	<!--Fin de Periodo de embarazo -->

	<!--Radio buttons para preguntar si conocen algun rumor -->
	<div class="form-group row" id="rumores" style="display:none">
		<label class="col-3 col-form-label">Rumores sobre el nacimiento o localización del bebé</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="rumor" id="rumor" value="si">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="rumor" id="rumor" value="no">No</label>
		</div>
		<div class="col-2">
			<label class="radio-inline"><input type="radio" class="form-control" name="rumor" id="rumor">Lo ignoran</label>
		</div>
	</div>
	<!--Fin de Radio buttons para preguntar si conocen algun rumor -->

	<!--Campo de texto para colocar pormenores -->
	<div class="form-group row" id="datosEmbarazo3" style="display:none">
		<div class="col-12">
			<textarea class="form-control" name="pormenores" id="pormenores" placeholder="Pormenores"></textarea>
		</div>
	</div><hr>
	<!--Campo de texto para colocar pormenores -->

	<!--Campo de textto para nombre y apellidos de la madre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre de la madre</label>
		<div class="col-3">
			<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="primerAp" id="primerAp" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="segundoAp" id="segundoAp" placeholder="Apellido materno">
		</div>
	</div>
	<!--Fin de Campo de textto para nombre y apellidos de la madre -->

	<!--Fin de Campo de textto para nombre y apellidos del padre -->
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre del padre</label>
		<div class="col-3">
			<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="primerAp" id="primerAp" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="segundoAp" id="segundoAp" placeholder="Apellido materno">
		</div>
	</div>
	<!--Fin de Campo de textto para nombre y apellidos del padre -->
</div>

