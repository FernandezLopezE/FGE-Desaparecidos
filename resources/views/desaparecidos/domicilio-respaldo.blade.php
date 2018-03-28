 <hr>   <!--Aqui empieza el titulo que se va a desplazar -->
		<h4>Domicilio actual o último del extraviado</h4><!-- Aqui termina el titulo-->
<div class ="form-horizontal">
	<div id = "domicilioForm">  <!--Aqui empieza el formulario -->
		
		<div class="form-group row " id ="divAgregarDomicilio"><!--Este es el grupo para el boton "Agregar domicilio" -->
			<button type = "button" id="agregarDomicilio" class="btn btn-primary">Agregar domicilio</button></div>
		
		<div class="form-group row " id ="domicilio"  > <!-- Tipo de domicilio -->
			<div class ="col-2">
				<label for="tipoDireccion" class="control-label">Tipo de domicilio</label>
			</div>
			<div class ="col-2">
				<select class="form-control" id="tipoDireccion" id ="domicilio">   
					<option value="WI">Personal</option>
					<option value="WY">Trabajo</option>
				</select>
			</div>
			<div class ="col-2"><!-- mi numero de telefono solo me deja escribir numeros y no letras -->
				<input type="text" class="input-medium bfh-phone form-control"  data-country="US" placeholder="Número telefónico" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			</div>
		</div>
		<div class="form-group row"  id ="domicilio2" > 
			<div class = "col-6">
			<!-- Calle -->
			<!--<label for="calle" class="control-label">Calle</label>-->
			<input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			</div>  
			<div class="col-2"> <!-- Numero exterior e´l pattern solo acepta numeros-->
			<input type="text" class="form-control" id="numExterno" name="numExterno" placeholder="Número Exterior" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			</div>  

			<div class="col-2"> <!-- Numero interior -->
			<input type="text" class="form-control" id="numInterno" name="numInterno" placeholder="Número Interior">
			</div>  
		</div>
		<!--inicia el select2 de localidad-->
			
		   <!-- <div class="jumbotron">
				 <div class="container">-->
		<div class="form-group row"  id ="domicilio3">                        
				<div class="select2-wrapper col-2">
					<select class="form-control codigoPostal" multiple="multiple" id ="codigoPostal">
						<option></option>
						<optgroup label="Alaskan/Hawaiian Time Zone">
						<option value="AK">Alaska</option>
						<option value="HI" disabled="disabled">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
						<option value="WA">Washington</option>
						</optgroup>
					</select><!--termina codigo postal -->
				</div>			  
				<div class="select2-wrapper col-3">
					<select class="form-control municipio" multiple="multiple" id = "idMunicipio">
						<option></option>
						<optgroup label="Alaskan/Hawaiian Time Zone">
						<option value="AK">Alaska</option>
						<option value="HI" disabled="disabled">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
						<option value="WA">Washington</option>
						</optgroup>
					</select><!--municipio -->
				</div>
				<div class="select2-wrapper col-3">
					<select class="form-control localidad" multiple="multiple" id=idLocalidad>
						<option></option>
						<optgroup label="Alaskan/Hawaiian Time Zone">
						<option value="AK">Alaska</option>
						<option value="HI" disabled="disabled">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
						<option value="WA">Washington</option>
						</optgroup>
					</select><!--termina Select Localidad -->
				</div>
				<div class="select2-wrapper col-3">
					<select class="form-control colonia" multiple="multiple" id ="idColonia">
						<option></option>
						<optgroup label="Alaskan/Hawaiian Time Zone">
						<option value="AK">Alaska</option>
						<option value="HI" disabled="disabled">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
						<option value="WA">Washington</option>
						</optgroup>
					</select><!--termina Select colonia -->
				</div>			   
		</div>
		<div class="form-group" > <!-- Boton para guardar la dirección -->
			<button type="button" class="btn btn-primary" id="guardar">Guardar</button>
		</div>  
	 <!-- este es el div de el ng-app hide>
		<!--Aqui  se maneja la tabla de los domicilios -->
		<div class="container">
			<h4>Domicilios</h4>          
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Tipo domicilio,Calle, Número exterior, Número interior, Código Postal, Municipio, Localidad, Colonia, Teléfono</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Personal, Girasoles, 10, NA, Xalapa, Xalapa, Flores de Casablanca, 1234567894</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>





		   <!-- </div>
		</div>    Scrits-->
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js"></script>
<!--ocultar -->


</div><!-- Aqui termina mi formulario-->
