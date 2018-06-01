$(document).ready(function(){
    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        
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
        
        parteCuerpo = $(this).attr("data-cuerpo");
        //

        $.ajax({
            type: 'GET',
            url: routeConsul+'/json_subparte_cuerpo/'+parteCuerpo,            
            dataType: 'json',
            success: function(data) {
                $('#formulario').empty();

                
                if(data.subpartes.length > 1){

                    contenido = '<div class="form-group">';
                    contenido = contenido+'<label for="idPartecuerpo">Partes del cuerpo:</label>';
                    contenido = contenido+'<select type="select" class="form-control" id="idPartecuerpo">'
                    contenido =contenido+'<option value="">[Seleccione una opción]</option>';
                    $.each(data.subpartes, function(key, value){
                        
                        contenido = contenido+'<option value="'+value.id+'">'+value.nombre+'</option>';
                    });
                    contenido = contenido+'</select>';
                    contenido = contenido+'</div>';
                    contenido = contenido+'<div class="form-group" id="contenidoForm">';
                    contenido = contenido +'</div>';

                    $('#formulario').append(contenido);
                }else{
                    console.log(data.subpartes.length);
                    if(data.subpartes.length > 0){
                        var v= data.subpartes[0]['id'];
                        var campo = $('#formulario');
                        $('#formulario').empty();
                        formulario = pintar_formulario(v, campo);
                    } else {
                        $('#formulario').empty();
                        $('#formulario').append('<h5>No se encuentran registros</h5>');
                    }


                }
               

          
            },
            error: function(data) {
            }
        });
    });

    $(document).on("change", "#idPartecuerpo", function(){
        //$(this).next().toggle();
            //concole.log('Pintando el formulario');
            var v= $("#idPartecuerpo").val();
            var campo = $('#contenidoForm');
            $('#contenidoForm').empty();
            formulario = pintar_formulario(v, campo);
            //
            
    
    
        });
    
       /* $("#idPartecuerpo").change(function(){
            alert("hola");
            var v= $("#idPartecuerpo").val();
            pintar_formulario(v);
        });*/
    
        //función anonima
        function pintar_formulario(idParteCuerpo, campo){
            
            $.ajax({
                type: 'GET',
                url: routeConsul+'/json_subparte_cuerpo/'+idParteCuerpo,            
                dataType: 'json',
                success: function(data) {
    
                        html="";
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idPosicion">Posición:</label>';
                        html = html+'<select type="select" class="form-control" id="idPosicion">';
                        html = html+'<option value="1">NO APLICA</option>';
                        html = html+'<option value="2">AMBOS</option>';
                        html = html+'<option value="3">IZQUIERDA</option>';
                        html = html+'<option value="4">DERECHA</option>';
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idTipo">Tipo:</label>';
                        html = html+'<select type="select" class="form-control" id="idTipo">'
                        $.each(data.tipos, function(key, value){
                            //
                            html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                        });
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idColor">Color:</label>';
                        html = html+'<select type="select" class="form-control" id="idColor">'
                        $.each(data.colores, function(key, value){
                            //
                            html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                        });
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idTamano">Tamaño:</label>';
                        html = html+'<select type="select" class="form-control" id="idTamano">'
                        $.each(data.tamanos, function(key, value){
                            //
                            html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                        });
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idParticularidad">Particularidades:</label>';
                        html = html+'<select type="select" class="form-control" id="idParticularidad">'
                        $.each(data.particularidades, function(key, value){
                            //
                            html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                        });
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="idModificacion">Modificaciones:</label>';
                        html = html+'<select type="select" class="form-control" id="idModificacion">'
                        $.each(data.modificaciones, function(key, value){
                            //
                            html = html+'<option value="'+value.id+'">'+value.nombre+'</option>';
                        });
                        html = html+'</select>';
                        html = html+'</div>';
                        html = html+'<div class="form-group">';
                        html = html+'<label for="observaciones">Observaciones:</label>';
                        html = html+'<textarea type="text" class="form-control" id="observaciones"></textarea>';
                        html = html+'</div>';
                        html = html+'<button type="submit" class="btn btn-primary">Guardar</button>';
                        
                       campo.append(html);           
              
                },
                error: function(data) {
                }
            });
        }

});