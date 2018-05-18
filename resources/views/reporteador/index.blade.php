@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
{!! HTML::style('personal/css/multiple-select.css') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}
    
      section.range-slider {
    position: relative;
    width: 200px;
    height: 35px;
    text-align: center;
}

section.range-slider input {
    pointer-events: none;
    position: absolute;
    overflow: hidden;
    left: 0;
    top: 15px;
    width: 200px;
    outline: none;
    height: 18px;
    margin: 0;
    padding: 0;
}

section.range-slider input::-webkit-slider-thumb {
    pointer-events: all;
    position: relative;
    z-index: 1;
    outline: 0;
}

section.range-slider input::-moz-range-thumb {
    pointer-events: all;
    position: relative;
    z-index: 10;
    -moz-appearance: none;
    width: 9px;
}

section.range-slider input::-moz-range-track {
    position: relative;
    z-index: -1;
    background-color: rgba(0, 0, 0, 1);
    border: 0;
}
section.range-slider input:last-of-type::-moz-range-track {
    -moz-appearance: none;
    background: none transparent;
    border: 0;
}
  section.range-slider input[type=range]::-moz-focus-outer {
  border: 0;
}
</style>
	
@endsection


@section('content')

<nav>




</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Reporteador
		<button type="button" class="btn btn-dark pull-right" id="btnAgregarDependencia">
	AGREGAR
</button>
		</h5>
	</div>
	<div class="card-body">	
	    <div class="card-body bg-white">
            <div class="row">
                <div class=" form-check col-lg-1">
                  
                     <input class="form-check-input" Value="H" type="checkbox" id="masc" checked> Hombre: 
                </div>
                <div class=" form-check col-lg-1">
                    
                     <input class="form-check-input" Value="M" type="checkbox" id="fem" checked> Mujer:
                </div>
                 <div class="form-group col-lg-4" id="div_idEstado">
             {!! Form::label ('','Edad de:',['class' => '']) !!}
	            <input  min="0" max="120" step="1" type="number" id="rng1">
            {!! Form::label ('','Hasta:',['class' => '']) !!}
                <input  min="0" max="120" step="1" type="number" id="rng2"> 
	         </div>
            </div>
        </div>
	    

	    
	     <div class="row" >
	        

	         <div class="col-lg-3"  id="infoCabello3">
                {!! Form::label ('idEstados','Estados:') !!}
                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'partiCabello','multiple' => 'multiple'] ) !!}
		    </div>
	     </div>
	     <imput type="button" class="btn btn-dark pull-right" id="range">Botón</imput>
        <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
	     <br><br>

  
        
        

        
        
           <div id="tablaGen" >
          <table id="tableDependencias"
              data-search="true"
              data-toolbar="#toolbar"
              data-show-refresh="true"
              data-show-toggle="true"
              data-show-columns="true"
              data-sort-name="id_user"
              data-unique-id="id_user"
              data-sort-order="asc"
              data-show-export="true"
              data-pagination="true"
              data-search="true" > 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>
                    <th data-field="Genero" 
                        data-sortable="true"></th>       
                    <th data-field="Edad" 
                        data-sortable="true"></th> 
                    <th data-field="Desaparición" 
                        data-sortable="true"></th>
                        <th data-field="Estado de origen" 
                        data-sortable="true"></th>
                </tr>
            </thead>
         </table>  
 
        </div>

	    <br><br><br><br><br><br><br><br><br>
	 
	</div>
</div><hr>

@endsection

@section('scripts')
{!! HTML::script('personal/js/multiple-select.js') !!}
<script type="text/javascript">
    $('#partiCabello').multipleSelect({
            filter: true
        });
    // $('select').multipleSelect();
    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
        var CheckFem = $('#fem');
    
        var fem = "";  
    
    //console.log(masc);

$('#range').click(function(e){
    
    alert('Selected values: ' + $('#partiCabello').multipleSelect('getSelects'));
alert('Selected texts: ' + $('#partiCabello').multipleSelect('getSelects', 'text'));
    
    
		var rango = $('#rng1').val();
        var rango2 = $('#rng2').val();
    alert(rango+ ' a ' +rango2);
		});
 
    var tablaGen = $('#tablaGen');
    
   var table = $('#tableDependencias');
          var routeIndex = '{!! route('consultas.index') !!}';
          var routeReporteador = '{!! route('reporteador.index') !!}';
    
    var formatCheckInformante = function(value, row, index){
			texto = '';
			if (row.sexo =='H') {
				texto = 'HOMBRE'
			}else{
                texto = 'MUJER'
            }

			return [texto].join('');
		}
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<__
    
    //filtrodds.click(function(){
        
   // });
    
    function btTable(data)
{
    table.bootstrapTable('refresh');
    //alert("hiii");

        table.bootstrapTable('refresh');

}
    
      filtros.click(function(){
          
          var estados = $('#partiCabello').multipleSelect('getSelects');
          console.log("El string:")
        console.log(estados)
        var array = JSON.parse("[" + estados + "]");
         // estados.toString();
          //estados.replace(/['"]+/g, '');
          console.log("El arreglo:")
          console.log(array)
          
          
          
          
          console.log('ids de estados:'+' ' + estados);
         // var quote_str =  "'" + str + "'";
          var rg = $('#rng1').val();
          var rg2 = $('#rng2').val();
          if (rg==''){
              rg=0
          }
          if (rg2==''){
              rg2=120
          }
          
          var fem =' ';
          var masc =' ';
   
         //table.bootstrapTable('refresh');
          
          table.bootstrapTable("refresh", {
              data: dataString
              //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados
    });
          
          
          var dataString = {
			    estados: $('#partiCabello').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
			};
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
				type: 'POST',
				url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados,
				data: dataString,
				dataType: 'json',
				success: function(data) {
					//modalInformanteAgregar.modal('hide');
                    table.bootstrapTable('refresh');
                    table.bootstrapTable('load', data)
                    btTable(data);
					
                   // modalInformanteAgregar.find('form')[0].reset();
                    //modalInformanteAgregar.removeData('modal');
                    
				},
				error: function(data) {
					var errors = data.responseJSON;	
					$('.modal-body div.has-danger').removeClass('has-danger');
					$('.form-control-feedback').empty();
					$.each(errors.errors, function(key, value){					
						$('#div_'+key).addClass('has-danger');
						$('input#'+key).addClass('form-control-danger');
						$('#error_'+key).append(value);						
					});
				}
			});
          
          table.bootstrapTable({			
             
            //data: data,
			//url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados,
			columns: [{					
				field: 'nombre',
				title: 'Nombre',
			}, {					
				title: 'Género',
                formatter: formatCheckInformante
			}, {					
				field: 'edad',
				title: 'Edad de extravío',
			}, {					
				field: 'fecha',
				title: 'Desaparición',
			}, {					
				field: 'estado',
				title: 'Estado de origen',
			}]				
		})
          
          
      //console.log(masc)

          console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ array);
          
          
        tablaGen.show();

        //console.log("entrando")
        });
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
		 
    
    
</script>
@endsection





