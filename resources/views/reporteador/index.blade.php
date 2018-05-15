@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
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
	    
	    
	    <input class="form-check-input" Value="H" type="checkbox" id="masc"  >Masculino
	    <input class="form-check-input" Value="M" type="checkbox" id="fem" >Femenino

	    
	     <section class="range-slider">
  <span class="rangeValues"></span>
  <input value="18" min="0" max="120" step="1" type="range" id="rng1">
  <input value="30" min="0" max="120" step="1" type="range" id="rng2">
</section>
        <imput type="button" class="btn btn-dark " id="range">Botón</imput>
        <imput type="button" class="btn btn-dark " id="filtros">Botón2</imput>
        
           <div id="tablaGen" style="display:none">
          <table id="tableDependencias"
data-toggle="table"
data-toolbar="#toolbar"
data-search="true"
data-show-refresh="true"
data-show-toggle="true"
data-show-columns="true"
data-sort-name="id_user"
data-unique-id="id_user"
data-sort-order="asc"
data-show-export="true"
data-pagination="true"
data-url=""
data-search="true" >
    <thead>
    <tr>
        <th data-field="id_user" 
            data-sortable="true">No.</th>
        <th data-field="username" 
            data-sortable="true">User</th>
        <th data-field="desactivate" 
            data-sortable="true">Desactivate</th>
        <th data-field="desactivate" 
            data-sortable="true">Desactivate2</th>       
        <th data-field="desactivate">Action</th>
    </tr>
    </thead>
</table>  
        </div>

	    
	    
	</div>
</div><hr>




	

@endsection

@section('scripts')

<script type="text/javascript">
    
    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
        var CheckFem = $('#fem');
    
        var fem = "";
    
    
    
    console.log(masc);
    
    function getVals(){
  // Get slider values
  var parent = this.parentNode;
  var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat( slides[0].value );
    var slide2 = parseFloat( slides[1].value );
  // Neither slider will clip the other, so make sure we determine which is larger
  if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
  
  var displayElement = parent.getElementsByClassName("rangeValues")[0];
      displayElement.innerHTML = slide1 + " - " + slide2;
}

window.onload = function(){
  // Initialize Sliders
  var sliderSections = document.getElementsByClassName("range-slider");
      for( var x = 0; x < sliderSections.length; x++ ){
        var sliders = sliderSections[x].getElementsByTagName("input");
        for( var y = 0; y < sliders.length; y++ ){
          if( sliders[y].type ==="range" ){
            sliders[y].oninput = getVals;
            // Manually trigger event first time to display values
            sliders[y].oninput();
          }
        }
      }
}


$('#range').click(function(e){
		var rango = $('#rng1').val();
        var rango2 = $('#rng2').val();
    alert(rango+ ' a ' +rango2);
		});

      
    var tablaGen = $('#tablaGen');
    
   var table = $('#tableDependencias');
          var routeIndex = '{!! route('consultas.index') !!}';
    
      filtros.click(function(){
          
       var masc = $("#masc").val();
        
      

          console.log(routeIndex+'/get_desaparecidos_personas/'+ masc);
          
          
        tablaGen.show();

        console.log("entrando")
        });
		 table.bootstrapTable({			
        
			url: routeIndex+'/get_desaparecidos_personas/'+ masc,
			columns: [{					
				field: 'nombres',
				title: 'Nombres.',
			}, {					
				field: 'pa',
				title: 'apellido1',
			}, {					
				field: 'sa',
				title: 'apellido2',
			}, {					
				field: 'sexo',
				title: 'Género',
			}, {					
				field: 'edad',
				title: 'Edad de extravío',
			}]				
		})
    
    
</script>
@endsection