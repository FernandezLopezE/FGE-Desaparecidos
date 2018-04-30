var estilo_modal = {
	divRow: function() {
		return $('<div class="row">');
	},

	divCol: function(divSize){
		return $('<div class="col-md-'+divSize+'">');
	},
	input: function(idCampo, nameCampo, typeCampo, valorCampo, placeholder, newClass, divSize){
		var divCol = $('<div class="col-md-'+divSize+'">');
		var div = $('<div id=div_'+idCampo+' class="form-group">');
		var label = $('<label for="'+idCampo+'">').text(nameCampo);
		var input = $('<input type="'+typeCampo+'" class="form-control '+newClass+'" id="'+idCampo+'" placeholder="'+placeholder+'" value="'+valorCampo+'" />');
		var span = $('<span id="error_'+idCampo+'" class="help-block"></span>');
		divCol.append(div);
		if (typeCampo == "hidden") {
			div.append(input);	
		} else {
			div.append(label);
			div.append(input);
			div.append(span);
		}			
		return divCol;
	},
	file: function(idCampo, nameCampo, newClass, divSize){			
		var divCol = $('<div class="col-md-'+divSize+'">');
		var div = $('<div id=div_'+idCampo+' class="form-group">');
		var label = $('<label for="'+idCampo+'">').text(nameCampo);
		var input = $('<input type="file" class="'+newClass+'" id="'+idCampo+'"  />');
		var span = $('<span id="error_'+idCampo+'" class="help-block"></span>');
		divCol.append(div);
		div.append(label);
		div.append(input);
		div.append(span);
		
		return divCol;
	},		
	option: function(valor,descripcion){
		return $('<option value="'+valor+'">').text(descripcion);
	},
	select: function(idCampo, nameCampo, newClass, divSize, datos){
		var divCol = $('<div class="col-md-'+divSize+'">');
		var div = $('<div id=div_'+idCampo+' class="form-group">');
		var label = $('<label for="'+idCampo+'">').text(nameCampo);
		var select = $('<select name="'+idCampo+'" id="'+idCampo+'" class="form-control '+newClass+'" data-live-search="true" >');
		var span = $('<span id="error_'+idCampo+'" class="help-block"></span>');
		for (var i = 0; i < datos.length; i++) {
			select.append(this.option(datos[i]['valor'],datos[i]['descripcion']));
		}
		divCol.append(div);
		div.append(label);
		div.append(select);
		div.append(span);

		return divCol;
	},
	detalle: function(divSizeClass, valorCampo, typeIcon, nombreCampo){			
		var campo = $('<div class="col-md-'+divSizeClass+'">');
		var valor = $('<strong>').append(valorCampo);
		var titulo = $('<p class="text-muted" ><i class="fa '+typeIcon+' margin-r-5"></i> '+nombreCampo+'</p> ');
		campo.append(valor);
		campo.append(titulo);

		return campo;
		
	},
	mostrar: function(campos){
				
		var divRow = this.divRow();

		for (var i = 0; i < campos.length; i++){
			switch(campos[i]['campo']) {
				case 'input':											
					divRow.append(this.input(campos[i]['idCampo'],
												campos[i]['nameCampo'],
												campos[i]['typeCampo'],
												campos[i]['valorCampo'],
												campos[i]['placeholder'],
												campos[i]['newClass'],
												campos[i]['divSize']
											));
					break;						
				case 'select':					
					divRow.append(this.select(campos[i]['idCampo'],
												campos[i]['nameCampo'],
												campos[i]['newClass'],
												campos[i]['divSize'],
												campos[i]['datos']
											));
					break;
				case 'detalle':					
					divRow.append(this.detalle(campos[i]['divSizeClass'],
												campos[i]['valorCampo'],
												campos[i]['typeIcon'],
												campos[i]['nombreCampo']
											));
					break;
				case 'file':						
					divRow.append(this.file(campos[i]['idCampo'],
												campos[i]['nameCampo'],
												campos[i]['newClass'],
												campos[i]['divSize']
											));
					break;
				default:
					console.log('El campo en la posicion: '+i+' no se puede agregar');
					
			}

		}

		return divRow;
	}
};
