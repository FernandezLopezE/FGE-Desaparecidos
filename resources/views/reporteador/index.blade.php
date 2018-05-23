@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
{!! HTML::style('personal/css/multiple-select.css') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}

</style>
	
@endsection

@section('content')

<nav>

</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Reporteador
		</h5>
	</div>	
	<div class="card-body">	
    <p >
        <imput type="button" class="btn btn-dark pull-right" id="filtrosTodos">Buscar todos los registros</imput>	    
    </p> <br>
	    <div class="card-body bg-white">       
            <div class="row" id="idDatosGral">               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                           Datos generales                        
                           </div>
                        <div class=" list-group-flush small">
                         
                          <div class="list-group-item list-group-item-action"  id="campoGenero"> 
                            <p style="text-align:LEFT"><b>Género</b></p>
                             <div class=" form-check ">

                                 <input class="form-check-input" Value="H" type="checkbox" id="masc" checked> Hombre: 
                            </div>
                            <div class=" form-check ">

                                 <input class="form-check-input" Value="M" type="checkbox" id="fem" checked> Mujer:
                            </div>      
                          </div>
                      </div>
                    </div>
	            </div>
               <div class="col"style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                              &nbsp;                   
                           </div>
                        <div class=" list-group-flush small" >
                        
                          <div class="list-group-item list-group-item-action"  id="campoEdad" > 
                              <p style="text-align:LEFT"><b>Edad</b></p>
                              <div class="" id="div_idEstado">
                                 {!! Form::label ('','Desde:',['class' => '']) !!}
                                    <input  min="0" max="120" step="1" type="number" id="rng1"><br>
                                {!! Form::label ('','Hasta:',['class' => '']) !!}&nbsp;
                                    <input  min="0" max="120" step="1" type="number" id="rng2"> 
                             </div>     
                          </div>
                      </div>
                    </div>
	            </div>
                <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;
                        <!-- <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar1"></i>-->
                           </div>
                        <div class=" list-group-flush small"  id="campoUbicacion">
                         
                          <div class="list-group-item list-group-item-action">
                             <p style="text-align:LEFT"><b>Ubicación de la desaparición</b></p> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Estados:') !!} <br>
                                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'estados','multiple' => 'multiple'] ) !!}
                            </div> 
                            <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Municipios:') !!} <br>
                                {!! Form::select('idEstados',$municipios, '', ['class' => '', 'id' => 'municipios','multiple' => 'multiple'] ) !!}
                            </div>     
                          </div>
                      </div>
	            </div>                 
            </div>
            <div class="row" id="idDesFisica">
             <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                           Descripción física
                           </div>

                          <div class="list-group-flush small" style="Display:none" id="campoEstatura" >
                             
                              <div class="list-group-item list-group-item-action" id="div_idEstado">
                                <p style="text-align:LEFT">    <b>Estatura</b></p> 
                                 {!! Form::label ('','Desde:',['class' => '']) !!}
                                    <input  min="0" max="300" step="1" type="number" id="estatura1"><br>
                                {!! Form::label ('','Hasta:',['class' => '']) !!}&nbsp;
                                    <input  min="0" max="300" step="1" type="number" id="estatura2"> 
                             </div>     
                          </div> 
             </div>
              

                     <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                            &nbsp;
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoPeso" >
                             <p style="text-align:LEFT">    <b>Peso</b></p>  
                              <div class="" id="div_idEstado">
                                 {!! Form::label ('','Desde:',['class' => '']) !!}
                                    <input  min="0" max="400" step="1" type="number" id="peso1"><br>
                                {!! Form::label ('','Hasta:',['class' => '']) !!}&nbsp;
                                    <input  min="0" max="400" step="1" type="number" id="peso2"> 
                             </div>     
                          </div>
                      </div>
                      </div>
                      <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                            &nbsp;
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoColorPiel" >
                              
                              <div class="" id="div_colorPiel">
                                {!! Form::label ('idColorPiel','Color de piel:') !!} <br>
                                {!! Form::select('cPiel',$coloresPiel, '', ['class' => '', 'id' => 'cPiel','multiple' => 'multiple'] ) !!}
                             </div>     
                          </div>
                      </div>
                      </div> 
                      <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                            &nbsp;
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar2"></i>
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoComplexion" >
                             
                              <div class="" id="div_colorPiel">
                                {!! Form::label ('comple','Complexión:') !!}<br>
                              {!! Form::select ('comple', $complexiones, '',['class' => '', 'id' => 'complexion','multiple' => 'multiple'] )!!}        
                             </div>     
                          </div>
                      </div>  
                      </div>  
            </div>
             <div class="row" id="idTipos">               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                           Tipos en partes del cuerpo 
                                                   
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoTipoCabello"> 
                             <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoCabello','Tipo de cabello') !!}
                                {!! Form::select('tipoCabello', $tipoCabello, '', ['class' => '', 'id' => 'tipoCabello','multiple' => 'multiple'] ) !!}
                            </div>      
                          </div>
                      </div>
                    </div>
	            </div>
               
                <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;
                                                      
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoBarba">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoBarba','Tipo de barba') !!}
		                        {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => '', 'id' => 'tipoBarba','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
	            </div>
	            <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar3"></i>                           
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoBigote">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoBigote','Tipo de bigote') !!}
		                        {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => '', 'id' => 'tipoBigote','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
	            </div>                  
            </div>
             <div class="row" id="idTamanos">               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                           Tamaños en partes del cuerpo:
                                                   
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoTamanoCabello"> 
                             <div class=""  id="infoCabello3">
                                {!! Form::label ('tamanoCabello','Tamaño de cabello:') !!}
		                        {!! Form::select('tamanoCabello', $tamanoCabello, '', ['class' => '', 'id' => 'tamanoCabello','multiple' => 'multiple'] ) !!}
                            </div>      
                          </div>
                      </div>
                    </div>
	            </div>
               
                <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;                        
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTamanoOjos">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoBarba','Tamaño de barba:') !!}
		                        {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => '', 'id' => 'tamanoOjos','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
	            </div>
	            <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;    
                           <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar4"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTamanoBoca">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoBigote','Tamaño de bigote:') !!}
		                        {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => '', 'id' => 'tamanoBoca','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
	            </div>                  
            </div>
            
         </div>
	    
                     
          
	    
	     <div class="row" >
	        

	         
	     </div>
       <!--<imput type="button" class="btn btn-dark pull-right" id="prueba">PRUEBA</imput>-->
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
              data-search="true" 
              
              data-trim-on-search="false"> 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>
                    <th data-field="Fecha de desaparición" 
                        data-sortable="true"></th>
               <th data-field="Acciones"></th>
                </tr>
            </thead>
         </table>  
 	@include('reporteador.modal.modal_reportes')

        </div>
<div id="tablaGenTodos" >

          <table id="tableTodos"
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
              data-search="true" 
              
              data-trim-on-search="false"> 

             <thead>
                <tr>
                    <th data-field="Nombres" 
                        data-sortable="true"></th>

                    <th data-field="Genero" 
                        data-sortable="true"></th>       
                    <th data-field="Edad" 
                        data-sortable="true"></th> 

                    <th data-field="Fecha de desaparición" 
                        data-sortable="true"></th>
                        <th data-field="Estado de origen" 
                        data-sortable="true"></th>

                        <th data-field="Municipio" 
                        data-sortable="true"></th>
                        

               <th data-field="Acciones"></th>
                </tr>
            </thead>
         </table>  
 	@include('reporteador.modal.modal_reportes')

        </div>

	    <br><br><br><br><br><br><br><br><br>
	 
</div><hr>

@endsection

@section('scripts')
{!! HTML::script('personal/js/multiple-select.js') !!}
{!! HTML::script('personal/js/bootstrap-table-multiple-search.js') !!}
{!! HTML::script('personal/js/bootstrap-table-toolbar.js') !!}

<script type="text/javascript">
     //$("#campoUbicacion").hide();
    //-<<--<--<<--<<--<<-MULTISELECTS-<<--<--<<--<<--<<-<<--<--<<--<<--<<
     $('#estados').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#municipios').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#cPiel').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#complexion').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tipoCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tipoBarba').multipleSelect({
            filter: true,
            width: '100%'
        });
   $('#tipoBigote').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tamanoCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tamanoOjos').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tamanoBoca').multipleSelect({
            filter: true,
            width: '100%'
        });
    //-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<-<<
//    $("#colapsar1").click(function(event) {
//        $("#campoGenero").toggle();
//    });
    $("#colapsar2").click(function(event) {
        $("#campoEstatura").toggle();
        $("#campoPeso").toggle();
        $("#campoColorPiel").toggle();
        $("#campoComplexion").toggle();
    });
    $("#colapsar3").click(function(event) {
        //$("#campoUbicacion").show();
        $("#campoTipoCabello").toggle();
        $("#campoTipoBigote").toggle();
        $("#campoTipoBarba").toggle();

//        $('#partiCabello').multipleSelect({
//            filter: true
//        });
//    $('#municipios').multipleSelect({
//            filter: true
//        });
        
    });
    
     $("#colapsar4").click(function(event) {
        //$("#campoUbicacion").show();
        $("#campoTamanoCabello").toggle();
        $("#campoTamanoOjos").toggle();
        $("#campoTamanoBoca").toggle();

//        $('#partiCabello').multipleSelect({
//            filter: true
//        });
//    $('#municipios').multipleSelect({
//            filter: true
//        });
        
    });
    
    var prueba = $('#prueba');
    var btnVerReporte = $('#verReporte');
		var modalReportes = $('#modal_reportes');
    
    
    
    // $('select').multipleSelect();
    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
    var filtrosTodos = $('#filtrosTodos');
        var CheckFem = $('#fem');
    
        var fem = "";  
    
    //console.log(masc);

    prueba.click(function(e){
			alert("FGFg");
			modalReportes.modal('show');

           
		});
    
    btnVerReporte.click(function(e){
			alert("FGFg");
            
			modalReportes.modal('show');

           
		});
    
$('#range').click(function(e){
    
    alert('Selected values: ' + $('#estados').multipleSelect('getSelects'));
alert('Selected texts: ' + $('#estados').multipleSelect('getSelects', 'text'));
    
    
		var rango = $('#rng1').val();
        var rango2 = $('#rng2').val();
    alert(rango+ ' a ' +rango2);
		});
 
    var tablaGen = $('#tablaGen');
    var tablaGenTodos = $('#tablaGenTodos');
    
   var table = $('#tableDependencias');
   var table2 = $('#tableTodos');
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
    
var formatTableActions = function(value, row, index) {				
			btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
            //btn = '<a href="'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-address-card"></i></a>&nbsp;';

			return [btn].join('');
		};
    
    window.operateEvents = {
		'click #verReporte': function (e, value, row, index) {
            			modalReportes.modal('show');
 
            $("#idNombre").empty();
            $("#idGenero").empty(); 
            $("#idEstado").empty();
            $("#idMunicipio").empty();
            $("#idFecha").empty();
            $("#idEdad").empty();
            $("#apodo").empty();            
            $("#idEstatura").empty();
            $("#idPeso").empty();
            $("#idCPiel").empty();
            $("#idComplexion").empty();            
            $("#idNacionalidad").empty();
            $("#idTipoCabello").empty();
//                var btnEditarInformante = $('#btnEditarInformante');
//				
//				$('.modal-body div.has-danger').removeClass('has-danger');
//				$('.form-control-feedback').empty();
//
            
			$("#idNombre").append(row.nombre);
            if(row.sexo =='H'){ 
                $("#idGenero").append('Hombre'); 
                              }else{
                if(row.sexo =='M'){ 
                    $("#idGenero").append('Mujer');}
                             }
            $("#idEstatura").append(row.estatura+ ' cm'); 
            $("#idPeso").append(row.peso + ' kg'); 
            $("#idCPiel").append(row.cPiel); 
            $("#idComplexion").append(row.complexion); 
            $("#idEstado").append(row.estado);
            $("#idMunicipio").append(row.municipio);
            $("#idFecha").append(row.fecha);
            $("#idEdad").append(row.edad);
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
            $("#idTipoCabello").append(row.tipoCabello);
}
    }
        var formatTableActions2 = function(value, row, index) {				
			btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
            //btn = '<a href="'+row.id+'" class="btn btn-dark btn-sm" id="edit"><i class="fa fa-address-card"></i></a>&nbsp;';

			return [btn].join('');
		};
    
    window.operateEvents2 = {
		'click #verReporte': function (e, value, row, index) {
            			modalReportes.modal('show');
 
            $("#idNombre").empty();
            $("#idGenero").empty(); 
            $("#idEstado").empty();
            $("#idMunicipio").empty();
            $("#idFecha").empty();
            $("#idEdad").empty();
            $("#apodo").empty();
            $("#idNacionalidad").empty();
//                var btnEditarInformante = $('#btnEditarInformante');
//				
//				$('.modal-body div.has-danger').removeClass('has-danger');
//				$('.form-control-feedback').empty();
//
            
			$("#idNombre").append(row.nombre);
            if(row.sexo =='H'){ 
                $("#idGenero").append('Hombre'); 
                              }else{
                if(row.sexo =='M'){ 
                    $("#idGenero").append('Mujer');}
                              }
            $("#idEstado").append(row.estado);
            $("#idMunicipio").append(row.municipio);
            $("#idFecha").append(row.fecha);
            $("#idEdad").append(row.edad);
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
}
//	{			$("#primerAp").val(row.primerAp);
//				$("#segundoAp").val(row.segundoAp);
//				$('select#idParentesco option[value="'+row.idParentesco+'"]').attr("selected",true);
//				$("#otroParentesco").val(row.otroParentesco);
//				$('select#idNacionalidad option[value="'+row.idNacionalidad+'"]').attr("selected",true);
//				$("#otroDocIdentidad").val(row.otroDocIdentidad);
//				$("#numDocIdentidad").val(row.numDocIdentidad);
//				$('select#tipoDireccion option[value="'+row.tipoDireccion+'"]').attr("selected",true);
//				$("#calle").val(row.calle);
//				$("#numExterno").val(row.numExterno);
//				$("#numInterno").val(row.numInterno);
//				$('select#idEstado option[value="'+row.idEstado+'"]').attr("selected",true);
//
//				$.getJSON(routeIndex+'/get_municipios/'+row.idEstado)
//				.done(function(data){					
//					idSelect = row.idMunicipio;
//					selectedGeneral = $('#idMunicipio');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_localidades/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idLocalidad;
//					selectedGeneral = $('#idLocalidad');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idColonia;
//					selectedGeneral = $('#idColonia');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.nombre+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//
//				$.getJSON(routeIndex+'/get_colonias/'+row.idMunicipio)
//				.done(function(data){					
//					idSelect = row.idCodigoPostal;
//					selectedGeneral = $('#idCodigoPostal');
//					selectedGeneral.select2();
//					//selectedGeneral.append('<option value="0">[ SELECCIONE TIPO]</option>');
//					$.each(data, function(key, value){						
//						optionSelect = '<option';
//						if (idSelect == value.id) { optionSelect = optionSelect+' selected'; }
//						optionselect = optionSelect+' value='+value.id+'>'+value.codigoPostal+'</option>';
//						selectedGeneral.append(optionselect);
//					});
//				});
//                                            
//				telefonos = $.parseJSON(row.telefonos)
//                var etiqueta2 = 0;
//                console.log("Aqui los telefonos:");
//				//console.log(telefonos.length);
//                
//                informanteTele2 = $("input[name='telefonos[]']");
//                
//                for ($t =1; $t < telefonos.length; $t++ ){
//                    
//                    if (telefonos.length > informanteTele2.length ){
//                        addCamposTelefono(tipoTel = null, lada=null, telefono=null, ext=null);
//                    }                   
//                    
//                    
//                }
//                var informanteTipo = $("select[name='tipoTelefono[]']");
//                var informanteLada = $("input[name='lada[]']");
//                var informanteTele = $("input[name='telefonos[]']");
//                var informanteExt = $("input[name='ext[]']");
//				$.each(telefonos, function(key, value){
//                    //console.log(row.lenght);
//					console.log(value.telefono);
//                    informanteTipo[etiqueta2].value = value.tipoTelefono;
//                    informanteLada[etiqueta2].value = value.lada;
//                    informanteTele[etiqueta2].value = value.telefono;
//                    informanteExt[etiqueta2].value = value.ext;
//                    etiqueta2 = etiqueta2 +1;                    
//				})
//
//				$("#correoElectronico").val(row.correoElectronico);
//				if (row.informante == 0) {
//					$("input#informante").iCheck('uncheck');
//				}
//
//				if (row.notificaciones == 0) {
//					$("input#notificaciones").iCheck('uncheck');
//				}                
//                
//				//modalFooter.empty();
//				$("#btnEditarInformante").show();
//				$("#btnGuardarInformante").hide();
//                    
//                $("#btnEditarInformante").val(row.idDesaparecido);
//				
//				modalInformanteAgregar.modal('show');
//			}}
        
		}
     filtrosTodos.click(function(){
          tablaGen.hide();
          var estados = $('#estados').multipleSelect('getSelects');
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

          table2.bootstrapTable("refresh", {
              data: dataString
    });
          
          
          var dataString = {
			    estados: $('#estados').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
			};
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
				type: 'POST',
				url: routeIndex+'/get_desaparecidos_personas_todos',
				data: dataString,
				dataType: 'json',
				success: function(data) {
                    table2.bootstrapTable('refresh');
                    table2.bootstrapTable('load', data)

				},
				error: function(data) {
					console.log('Error en la consulta')
				}
			});
          
          table2.bootstrapTable({			
             
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
				title: 'Fecha de desaparición',
			}, {					
				field: 'estado',
				title: 'Estado',
			}, {					
				field: 'municipio',
				title: 'Municipio',
            }, {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})

          console.log(routeIndex+'/get_desaparecidos_personas_todos');
        tablaGenTodos.show();

        //console.log("entrando")
        });
      filtros.click(function(){
          tablaGenTodos.hide();
          var estados = $('#estados').multipleSelect('getSelects');
          var municipios = $('#municipios').multipleSelect('getSelects');
          console.log("El string:")
        console.log(estados)
        var arrayEst = JSON.parse("[" + estados + "]");
        var arrayMun = JSON.parse("[" + municipios + "]");
         // estados.toString();
          //estados.replace(/['"]+/g, '');
          console.log("El arreglo:")
          //console.log(array)
          
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
			    estados: $('#estados').multipleSelect('getSelects'),
                municipios: $('#municipios').multipleSelect('getSelects'),
                cPiel: $('#cPiel').multipleSelect('getSelects'),
                complexion: $('#complexion').multipleSelect('getSelects'),
                tipoCabello: $('#tipoCabello').multipleSelect('getSelects'), 
                tipoBarba: $('#tipoBarba').multipleSelect('getSelects'),
                fem : $("input#fem:checked").val(),     
                masc : $("input#masc:checked").val(),
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
                estatura1 : $('#estatura1').val(),
                estatura2 : $('#estatura2').val(),
                peso1 : $('#peso1').val(),
                peso2 : $('#peso2').val(),
			};
          console.log("El dataString:");
          console.log(dataString);
          $.ajax({
				type: 'POST',
				url: routeIndex+'/get_desaparecidos_personas',
				data: dataString,
				dataType: 'json',
				success: function(data) {
					//modalInformanteAgregar.modal('hide');
                    table.bootstrapTable('refresh');
                    table.bootstrapTable('load', data)
                    
					
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
             //
            //data: data,
			//url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados,
			columns: [{					
				field: 'sub',
				title: 'Nombre',
		}
                , {					
//				title: 'Género',
//                formatter: formatCheckInformante
//			}, {					
//				field: 'edad',
//				title: 'Edad de extravío',
//			}, 
                
                					
				field: 'fecha',
				title: 'Fecha de desaparición',
//			}, {					
//				field: 'estado',
//				title: 'Estado',
//			}, {					
//				field: 'municipio',
//				title: 'Municipio',
//		
                },
                      {					
				title: 'Acciones',
				formatter: formatTableActions,
				events: operateEvents
			}]				
		})
          
          
      //console.log(masc)

          console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados);
          
          
        tablaGen.show();

        //console.log("entrando")
        });
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.
		 
    
    
</script>
@endsection





