$(document).ready(function(){
    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        console.log(pieces);
        for (var i = 0; pieces.length; i++) {
            let _piece = pieces[i];
            _piece.onclick = function(t) {
                if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
                if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
                    
                //var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
              
            }
        }
    }

    $('g').click(function(){
        console.log($(this).attr("data-cuerpo"));
        parteCuerpo = $(this).attr("data-cuerpo");
        //console.log('El valor es:'+this.id+' Value: '+$('#'+this.id).val());

        $.ajax({
            type: 'GET',
            url: '/consultas/json_subparte_cuerpo/'+parteCuerpo,            
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#formulario').empty();                
                contenido = '<div class="form-group">';
                contenido = contenido+'<label for="idPartecuerpo">Partes del cuerpo:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idPartecuerpo">'
                $.each(data.subpartes, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idPosicion">Posición:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idPosicion">';
                contenido = contenido+'<option value="1">NO APLICA</option>';
                contenido = contenido+'<option value="2">AMBOS</option>';
                contenido = contenido+'<option value="3">IZQUIERDA</option>';
                contenido = contenido+'<option value="4">DERECHA</option>';
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idTipo">Tipo:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idTipo">'
                $.each(data.tipos, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idColor">Color:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idColor">'
                $.each(data.colores, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idTamano">Tamaño:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idTamano">'
                $.each(data.tamanos, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idParticularidad">Particularidades:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idParticularidad">'
                $.each(data.particularidades, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="idModificacion">Modificaciones:</label>';
                contenido = contenido+'<select type="select" class="form-control" id="idModificacion">'
                $.each(data.modificaciones, function(key, value){
                    console.log(value);
                    contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                contenido = contenido+'</select>';
                contenido = contenido+'</div>';
                contenido = contenido+'<div class="form-group">';
                contenido = contenido+'<label for="observaciones">Observaciones:</label>';
                contenido = contenido+'<textarea type="text" class="form-control" id="observaciones"></textarea>';
                contenido = contenido+'</div>';
                contenido = contenido+'<button type="submit" class="btn btn-primary">Guardar</button>';  

               $('#formulario').append(contenido);
          
            },
            error: function(data) {
            }
        });
    })

});