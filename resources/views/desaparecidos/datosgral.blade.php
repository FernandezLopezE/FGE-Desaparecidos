<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<form class="form-horizontal">
	<h3>Datos de la persona desaparecida</h3><hr>
	<!--Genero -->
   <div class="form-group row">
   	<div class="col-3">
   	<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0">Género</legend>
      <div class="col-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1"> Masculino</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2"> Femenino</label>
        </div>
      </div>
    </div>
  	</fieldset>
  	 </div>
  	<!--Fin Genero -->
  	 <div class="col-6">
		<input type="text" class="form-control" placeholder="Aquí va la nacionalidad">
	</div>
	</div>
	
	<div class="form-group row">
		<div class="col-3">
			<input type="text" class="form-control" placeholder="Nombre(s)">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" placeholder="Apellido materno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" placeholder="Apodo/alias">
		</div>
	</div>
	
	<div class="form-group row">
		<label class="col-1 col-form-label">Fecha de nacimiento</label>
		<div class="col-2">
			<input type="date" class="form-control" name="">
		</div>
		
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Edad">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Edad aparente">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Escolaridad">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Ocupación">
		</div>	
		<div class="col-3">
			<select class="custom-select" name="estadoCivil" id="estadoCivil">
				<option selected>Estado civil</option>
  				<option value="soltero(a)">Soltero(a)</option>
  				<option id="casado" name="casado" value="casado">Casado(a)</option>
  				<option value="viudo(a)">Viudo(a)</option>
  				<option value="divorciado(a)">Divorciado(a)</option>
  				<option value="separado(a)">Separado(a)</option>
			</select>
		</div>	
	</div>

	<div class="form-group row " id="nombrePareja" style="display:none">
		<label class="col-3 col-form-label">Nombre de la esposa o pareja</label>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido materno">
		</div>
	</div><hr>
	
	<div class="form-group row">
		<label class="col-1 col-form-label">Hijos</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="si" id="si">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="no">No</label>
		</div>
		<div class="col-3" id="nombreHijo" style="display:none">
			<input type="text" class="form-control" name="" placeholder="Nombre">
		</div>
		<div class="col-3" id="nombreHijo" style="display:none">
			<input type="text" class="form-control" name="" placeholder="Apellido paterno">
		</div>
		<div class="col-3" id="nombreHijo" style="display:none">
			<input type="text" class="form-control" name="" placeholder="Apellido materno">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3 col-form-label">Embarazo al desaparecer</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">No</label>
		</div>
		<div class="col-2">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">Lo ignoran</label>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3 col-form-label">Periodo de gestación estimado al tiempo de la desaparición</label>
		<div class="col-2">
			<input type="text" class="form-control" name="" placeholder="Semanas">
		</div>
		<div class="col-2">
			<input type="text" class="form-control" name="" placeholder="Meses">
		</div>
	</div>

	<div class="form-group row">
		<label class="col-3 col-form-label">Rumores sobre el nacimiento o localización del bebé</label>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">Sí</label>
		</div>
		<div class="col-1">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">No</label>
		</div>
		<div class="col-2">
			<label class="radio-inline"><input type="radio" class="form-control" name="optradio">Lo ignoran</label>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-12">
			<textarea class="form-control" name="" placeholder="Pormenores"></textarea>
		</div>
	</div>
	 <hr>

	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre de la madre</label>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido materno">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-3 col-form-label">Nombre del padre</label>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Nombre">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido paterno">
		</div>
		<div class="col-3">
			<input type="text" class="form-control" name="" placeholder="Apellido materno">
		</div>
	</div><hr>

	<button type="button" id="prueba" class="btn btn-primary">Prueba xD</button>

	

</form>

<script>
	var a;
	$(document).ready(function(){
	//Botón de prueba
    //$("#prueba").click(function(){
       // alert("Hola mundo");
    //});

    //Obtener el valor de estado civil 
    $(document).on('change', '#estadoCivil', function(event) {
    a = $('#estadoCivil').val();
    //Mostrar formulario de datos de la pareja
    if (a == 'casado') {
    	console.log('Mostrar el campo datos de pareja')
    	$("#nombrePareja").show();
    } else {
    	console.log('No tienes pareja')
    	$("#nombrePareja").hide();
    }
	});

    //Mostrar formulario de datos hijos
    $("input[name$='si']").click(function() {
        var test = $(this).val();

       
        $("#si" + test).show();
    });

	

    
});	
</script>