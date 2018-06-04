$(document).ready(function(){
    //Cargar dentadura
    window.onload = function () {
        const pieces = document.getElementsByTagName('g');
        console.log(pieces);
        for (var i = 0; pieces.length; i++) {
            let _piece = pieces[i];
            _piece.onclick = function(t) {
                if (t.target.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.getAttribute('id');
                if (t.target.parentElement.getAttribute('id') != null) document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');

                var temp = document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('id');
                
            }
        }
    }

    //Generar formualrio 
     $('g').click(function(){
        parteDiente = $(this).attr("data-diente");
        if ($('#diente_'+parteDiente).length) {
          $('#diente_'+parteDiente).remove();
        } else {
          $.ajax({
            type: 'GET',
            url: '/consultas/get_diente/'+parteDiente,            
            dataType: 'json',
            success: function(data) {
                console.log(data);
                //$('#formDiente').empty();                
                $.each(data, function(key, value){
                    contenido = '<div class="form-group row" id="diente_'+value.id+'">';
                });
                contenido = contenido+ '<div class="col">';
                $.each(data, function(key, value){
                    contenido = contenido+'<input type="text" class="form-control" name="" value="'+value.nombreDiente+'" disabled>';
                });
                contenido = contenido+'</div>'
        
                contenido = contenido+'<div class="col">';
                contenido = contenido+'<input type="text" class="form-control" name="perdio[]" placeholder="ACCIDENTE, EXTRACCIÓN, NATURAL, ETC">';
                $.each(data, function(key, value){
                    contenido = contenido+'<input type="hidden" name="dienteselec[]" value="'+value.id+'">';
                });
                contenido = contenido+'</div>';

                contenido = contenido+'<div class="col-1">';
                contenido = contenido+'<i class="fa fa-trash" style="font-size:20px; margin-top: 10px" id="bote"></i>';
                contenido = contenido+'</div>';

                contenido = contenido+'</div>';

                $('#formDiente').append(contenido);
                
            }
        });
        }      
        //console.log($(this).attr("data-diente"));
        console.log('El valor es: '+this.id);
    }); 




});  
  
