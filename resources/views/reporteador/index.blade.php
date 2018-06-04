@extends('layouts.app_uipj')

@section ('css')
{!! Html::style('') !!}
{!! HTML::style('personal/css/multiple-select.css') !!}
{!! HTML::style('personal/css/bootstrap-table-filter-control.css') !!}
<style type="text/css">
	.modal-lg {
		max-width: 80%;
	}


.class2:hover {
    transform:scale(1.5);
    
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
	<!--
    <p >
        <imput type="button" class="btn btn-dark pull-right" id="filtrosTodos">Buscar todos los registros</imput>     
    </p> <br>
-->
      <div class="card-body bg-white">       
            <div class="row" id="idDatosGral">               
               <div class="col-lg-2" style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                           Datos generales                        
                           </div>
                        <div class=" list-group-flush small">
                         
                          <div class="list-group-item list-group-item-action"  id="campoGenero"> 
                            <p style="text-align:LEFT"><b>Género</b></p>
                             <div class=" form-check ">

                                 <input class="form-check-input" Value="H" type="checkbox" id="masc" checked> Hombre: 
                            </div><br>
                            <div class=" form-check ">

                                 <input class="form-check-input" Value="M" type="checkbox" id="fem" checked> Mujer:
                            </div>      
                          </div>
                      </div>
                    </div>
              </div>
               <div class="col-lg-5"style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                              &nbsp;                   
                           </div>
                        <div class=" list-group-flush small" >
                        
                          <div class="list-group-item list-group-item-action"  id="campoEdad" > 
                              
                              <div class="" id="div_idEstado">
                                 {!! Form::label ('','Edad de desaparición desde:',['class' => '']) !!}
                                    <input  min="0" max="120" step="1" type="number" id="rng1" class="form-control" ><br>
                                {!! Form::label ('','Hasta:',['class' => '']) !!}&nbsp;
                                    <input  min="0" max="120" step="1" type="number" id="rng2" class="form-control"> 
                             </div>     
                          </div>
                      </div>
                    </div>
              </div>
                <div class="col-lg-5" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;
                        <!-- <i class="fa fa-chevron-circle-down" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar1"></i>-->
                           </div>
                        <div class=" list-group-flush small"  id="campoUbicacion">
                         
                          <div class="list-group-item list-group-item-action">
                             <p style="text-align:LEFT"><b>Ubicación de la desaparición</b></p> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Estados:') !!} 
                                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'estados','multiple' => 'multiple'] ) !!}
                            </div> 
                            <div class=""  id="infoCabello3">
                                {!! Form::label ('idEstados','Municipios:') !!} 
                                {!! Form::select('idEstados',$municipios, '', ['class' => '', 'id' => 'municipios','multiple' => 'multiple'] ) !!}
                            </div>     
                          </div>
                      </div>
              </div>                 
            </div>
             
             <div class="row" >
                 <!--   FECHAS  --><div class="col-lg-6" >  
             <div class="row" >
             <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                           Fechas
                           
                           </div>
                            
                          <div class="list-group-flush small" style="Display:none" id="campoFechaD" >
                             
                              <div class="list-group-item list-group-item-action" id="div_idEstado">
                                <p style="text-align:LEFT">    <b>Fecha de desaparición</b></p> 
                                 {!! Form::label ('fechaDesaparicion','Desde:', ['class' => 'form-control-label']) !!}
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaDesaparicion1',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!} <br>
                                {!! Form::label ('fechaDesaparicion','Hasta:', ['class' => 'form-control-label']) !!}
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaDesaparicion2',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!}    
                                  
                             </div>     
                          </div> 
             </div>
             <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                           &nbsp;
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar5"></i>
                           </div>
                            
                          <div class="list-group-flush small" style="Display:none" id="campoFechaR" >
                             
                              <div class="list-group-item list-group-item-action" id="div_idEstado">
                                <p style="text-align:LEFT">    <b>Fecha de reporte</b></p> 
                                 {!! Form::label ('fechaReporte','Desde:', ['class' => 'form-control-label']) !!}
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte1',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!} <br>
                                {!! Form::label ('fechaDesaparicion','Hasta:', ['class' => 'form-control-label']) !!}
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte2',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                      ] )!!}    
                                  
                             </div>     
                          </div> 
             </div>
          
            </div>
           
             </div>
             
             <!--   DESCRIPCIÓN FÍSICA  --><div class="col-lg-6" >  
             
             <div class="row" >
             <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                           Cuerpo
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
                                {!! Form::label ('idColorPiel','Color de piel') !!} <br>
                                {!! Form::select('cPiel',$coloresPiel, '', ['class' => '', 'id' => 'cPiel','multiple' => 'multiple'] ) !!}
                             </div>     
                          </div>
                      </div>
                      </div> 
                      <div class="col" style="padding-right:0px;padding-left:0px;">
                <div class="card-header">
                            &nbsp;
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar2"></i>
                           </div>
                        <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoComplexion" >
                             
                              <div class="" id="div_colorPiel">
                                {!! Form::label ('comple','Complexión') !!}<br>
                              {!! Form::select ('comple', $complexiones, '',['class' => '', 'id' => 'complexion','multiple' => 'multiple'] )!!}        
                             </div>     
                          </div>
                      </div>  
                      </div>  
            </div>
            
             </div>
           
             </div>
             
             
            <div class="row" >
             <!--   CABELLO  --><div class="col-lg-6">
            <div class="row"  >               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                    <div class="">
                        <div class="card-header">
                           Cabello 
                                                   
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
                           <div class=" list-group-flush small">
                          <div class="list-group-item list-group-item-action" style="Display:none" id="campoTamanoCabello"> 
                             <div class=""  id="infoCabello3">
                                {!! Form::label ('tamanoCabello','Tamaño de cabello:') !!}
                            {!! Form::select('tamanoCabello', $tamanoCabello, '', ['class' => '', 'id' => 'tamanoCabello','multiple' => 'multiple'] ) !!}
                            </div>      
                          </div>
                      </div>
              </div>
              <div class="col" style="padding-right:0px;padding-left:0px;" >
                        <div class="card-header">
                           &nbsp;
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar3"></i>                           
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoColorCabello">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoCabe','Color de cabello') !!}
                            {!! Form::select('colorCabello', $coloresCabello, '', ['class' => '', 'id' => 'colorCabello','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                  
            </div>
          
            </div>
             
             <!--   BARBA  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Barba                                                   
                                         
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoBarba">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('tipoBarba','Tipo de barba:') !!}
                            {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => '', 'id' => 'tipoBarba','multiple' => 'multiple'] ) !!}
                             </div>    
                          </div>
                      </div>
              </div>
              
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;    
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar4"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoColorBarba">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoCabello3">
                                {!! Form::label ('color','Color de barba:') !!}
                            {!! Form::select('colorBarba', $coloresBarba, '', ['class' => '', 'id' => 'colorBarba','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>
            </div>
             <div class="row" >
                  <!--   BIGOTE  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Bigote                                                  
                                         
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoBigote">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoBigote1">
                                {!! Form::label ('tipoBigote','Tipo de bigote:') !!}
                            {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => '', 'id' => 'tipoBigote','multiple' => 'multiple'] ) !!}
                             </div>    
                          </div>
                      </div>
              </div>
              
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;    
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar6"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoColorBigote">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoBigote2">
                                {!! Form::label ('colorBigotes','Color de bigote:') !!}
                            {!! Form::select('colorBigote', $coloresBigote, '', ['class' => '', 'id' => 'colorBigote','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>
              <!--   PATILLA  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Patilla                                                 
                                         
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoPatilla">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoPatilla1">
                                {!! Form::label ('tipoPatilla','Tipo de patilla:') !!}
                            {!! Form::select('tipoPatilla', $tipoPatilla, '', ['class' => '', 'id' => 'tipoPatilla','multiple' => 'multiple'] ) !!}
                             </div>    
                          </div>
                      </div>
              </div>
              
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;    
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar7"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoColorPatilla">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoPatilla2">
                                {!! Form::label ('colorPatillas','Color de patillas:') !!}
                            {!! Form::select('colorPatillas', $coloresPatilla, '', ['class' => '', 'id' => 'colorPatilla','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>
             </div>

              <div class="row" >
              <!--   OJOS  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >               
               <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Ojos                                                  
                                         
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTamanoOjos">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoTamanoOjos">
                                {!! Form::label ('tamanoOjos','Tamaño de ojos:') !!}
                            {!! Form::select('tamanoOjos', $tamanoOjos, '', ['class' => '', 'id' => 'tamanoOjos','multiple' => 'multiple'] ) !!}
                             </div>    
                          </div>
                      </div>
              </div>
              
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           &nbsp;    
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar8"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoColorOjos">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoColorOjos">
                                {!! Form::label ('colorOjoso','Color de ojos:') !!}
                            {!! Form::select('colorOjos', $coloresOjos, '', ['class' => '', 'id' => 'colorOjos','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>
            <!--   LABIOS  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >                            
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Labios   
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar9"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoTipoLabio">
                          <div class="list-group-item list-group-item-action"> 
                              <div class=""  id="infoLabio1">
                                {!! Form::label ('tipoLabios','Tipo de labios:') !!}
                            {!! Form::select('tipoLabio', $tipoLabios, '', ['class' => '', 'id' => 'tipoLabio','multiple' => 'multiple'] ) !!}
                            </div> 
                               
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>

              </div>
           
            <div class="row" >
             
            <!--   MODIFICACIONES  --><div class="col-lg-6"><!--   COL-LG-6-->
              <div class="row" >                            
              <div class="col" style="padding-right:0px;padding-left:0px;">
                        <div class="card-header">
                           Modifiaciones   
                           <i class="fa fa-chevron-circle-down class2" style="float: right;" data-toggle="collapse" data-target="#areaTalla" aria-expanded="true" aria-controls="areaTalla" id="colapsar10"></i>                       
                           </div>
                        <div class=" list-group-flush small" style="Display:none" id="campoModificaciones">
                          <div class="list-group-item list-group-item-action">                          
                            <div class=""  id="infoLabio1">
                                {!! Form::label ('tipoLabios','Modificaciones:') !!}
                            {!! Form::select('modificaciones', $modificaciones, '', ['class' => '', 'id' => 'modificaciones','multiple' => 'multiple'] ) !!}
                            </div>    
                          </div>
                      </div>
              </div>                   
            </div>             
            </div>

              </div>
           
           
         </div>
       <div class="row" >
       </div> 
        <!--<imput type="button" class="btn btn-dark pull-right" id="button2">PRUEBA</imput>-->
       <!--<imput type="button" class="btn btn-dark pull-right" id="prueba">PRUEBA</imput>-->
        <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
        
       <br><br>
           <div id="tablaGen" style="width:90%">


<!-- data-id-table="advancedTable" 
 -->          <table id="tableDependencias"
              data-search="true"
              data-advanced-search="true"
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
              data-show-print="true"
              data-filter-control="true"
              data-trim-on-search="false"
              data-page-list="[10, 50, 70, 100]"> 

             <thead>
                <tr>
                    <th data-field="nombres" 
                        data-sortable="true" data-filter-control="input"></th>
                    <th data-field="Fecha de desaparición" 
                        data-sortable="true" data-filter-control="input"></th>
                        <th data-field="Sexo" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Apodo" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Edad" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Estatura" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Peso" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Complexion" 
                        data-sortable="true"data-filter-control="input" data-visible="false"></th>
                        <th data-field="Color de piel" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="cabello" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="velloFacial" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="ojos" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="labios" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>                   
                        <th data-field="Estado" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Municipio" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Nacionalidad" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="FechaR" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Hechos" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="Modificaciones" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
                        <th data-field="particularidades" 
                        data-sortable="true" data-filter-control="input" data-visible="false"></th>
               <th data-field="Acciones"></th>
                </tr>
            </thead>
 <tbody>
    
    </tbody>
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
{!! HTML::script('personal/js/bootstrap-table-export.js') !!}
{!! HTML::script('personal/js/tableExport.js') !!}
{!! HTML::script('personal/js/jspdf.min.js') !!}  
{!! HTML::script('personal/js/jspdf.plugin.autotable.js') !!} 
{!! HTML::script('personal/js/FileSaver.min.js') !!} 
{!! HTML::script('personal/js/bootstrap-table-filter-control.js') !!}

<!--
{!! HTML::script('personal/js/bootstrap-table.js') !!}
{!! HTML::script('personal/js/bootstrap-table-print.js') !!}
-->

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
    $('#tamanoCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorCabello').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#tipoBarba').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorBarba').multipleSelect({
            filter: true,
            width: '100%'
        }); 

    $('#tipoBigote').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorBigote').multipleSelect({
            filter: true,
            width: '100%'
        }); 

     $('#tipoPatilla').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorPatilla').multipleSelect({
            filter: true,
            width: '100%'
        }); 

    $('#tamanoOjos').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#colorOjos').multipleSelect({
            filter: true,
            width: '100%'
        });
     $('#tipoLabio').multipleSelect({
            filter: true,
            width: '100%'
        });
    $('#modificaciones').multipleSelect({
            filter: true,
            width: '100%'
        });
    //-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<--<<--<<-<<--<--<<-<<

    $("#colapsar2").click(function(event) {
        $("#campoEstatura").toggle();
        $("#campoPeso").toggle();
        $("#campoColorPiel").toggle();
        $("#campoComplexion").toggle();
    });
    $("#colapsar3").click(function(event) {
        //$("#campoUbicacion").show();
        $("#campoTipoCabello").toggle();
        $("#campoTamanoCabello").toggle();
        $("#campoColorCabello").toggle();
 
    });
    
     $("#colapsar4").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoTipoBarba").toggle();        
        $("#campoColorBarba").toggle();
        
    });
    $("#colapsar5").click(function(event) {
        $("#campoFechaD").toggle();
        $("#campoFechaR").toggle();
    });
    $("#colapsar6").click(function(event) {
         $("#campoTipoBigote").toggle();        
        $("#campoColorBigote").toggle();
        
    });
    $("#colapsar7").click(function(event) {
         $("#campoTipoPatilla").toggle();        
        $("#campoColorPatilla").toggle();
        
    });
     $("#colapsar8").click(function(event) {
         $("#campoTamanoOjos").toggle(); 
         $("#campoColorOjos").toggle();               
    });

    $("#colapsar9").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoTipoLabio").toggle();             
    });
    $("#colapsar10").click(function(event) {
        //$("#campoUbicacion").show();
         $("#campoModificaciones").toggle();             
    });
   
    
    var prueba = $('#prueba');
    var btnVerReporte = $('#verReporte');
    var modalReportes = $('#modal_reportes');

    var CheckMasc = $('#masc');
    var filtros = $('#filtros');
    var filtrosTodos = $('#filtrosTodos');
        var CheckFem = $('#fem');
    
        var fem = "";  

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
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-
    
var formatTableActions = function(value, row, index) {        
      btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';


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
            $("#idCabello").empty();
            $("#idVelloFacial").empty();
            $("#idOjos").empty();
            $("#idLabios").empty();
            
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
            $("#idEdad").append(row.edad + ' años');
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
            $("#idTipoCabello").append(row.tipoCabello);
            $("#idCabello").append(row.cabello);
            $("#idVelloFacial").append(row.velloFacial);
            $("#idOjos").append(row.ojos);
            $("#idLabios").append(row.labios);
}
    }
    //-o-|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-
        var formatTableActions2 = function(value, row, index) {       
      btn = '<button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button>';
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
     //-o-|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-|||---|||-o-|||-o-|||-o-|||-o-
    filtros.click(function(){

            from = $("#fechaDesaparicion1").val().split("/");
            fechaDesaparicion1 = from[2] + "-" + from[1] + "-" + from[0];
            fechaInicio = Date.parse(fechaDesaparicion1);
            from2 = $("#fechaDesaparicion2").val().split("/");
            fechaDesaparicion2 = from2[2] + "-" + from2[1] + "-" + from2[0];
            fechaFin = Date.parse(fechaDesaparicion2);
            console.log("FECHA");                           
    console.log(fechaInicio);

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
   
          table.bootstrapTable("refresh", {
              data: dataString
              //url: routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+ '/'+ estados
    });
        
//          var sexo = '';
//                var femen = $("input#fem:checked").val();    
//                var mascul = $("input#masc:checked").val();
//        
//                
//                if (femen == null ){
//                    sexo = '\''+mascul+'\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                }else{ if (mascul == null ){
//                    sexo = '\''+femen+'\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                } else{
//                    sexo = '\'' +femen + '\',\'' + mascul+ '\'';
//                     console.log('--------------------------');
//                    console.log(sexo);
//                    
//                } }

          var dataString = {
          estados: $('#estados').multipleSelect('getSelects'),
                municipios: $('#municipios').multipleSelect('getSelects'),
                cPiel: $('#cPiel').multipleSelect('getSelects'),
                complexion: $('#complexion').multipleSelect('getSelects'),
                tipoCabello: $('#tipoCabello').multipleSelect('getSelects'),
                tamanoCabello: $('#tamanoCabello').multipleSelect('getSelects'),
                colorCabello: $('#colorCabello').multipleSelect('getSelects'),
                tipoBarba: $('#tipoBarba').multipleSelect('getSelects'),
                colorBarba: $('#colorBarba').multipleSelect('getSelects'),
              
                tipoBarba: $('#tipoBigote').multipleSelect('getSelects'),
                colorBarba: $('#colorBigote').multipleSelect('getSelects'),
                tipoPatilla: $('#tipoPatilla').multipleSelect('getSelects'),
                colorPatilla: $('#colorPatilla').multipleSelect('getSelects'),
              
                tamanoOjos: $('#tamanoOjos').multipleSelect('getSelects'),
                colorOjos: $('#colorOjos').multipleSelect('getSelects'),
                tipoLabio: $('#tipoLabio').multipleSelect('getSelects'),
                modif: $('#modificaciones').multipleSelect('getSelects'),
              fem : $("input#fem:checked").val(),     
              masc : $("input#masc:checked").val(),
          //    sexo,
                rg : $('#rng1').val(),
                rg2 : $('#rng2').val(),
                estatura1 : $('#estatura1').val(),
                estatura2 : $('#estatura2').val(),
                peso1 : $('#peso1').val(),
                peso2 : $('#peso2').val(),
                fechaDes1 : $('#fechaDesaparicion1').val(),
                fechaDes2 : $('#fechaDesaparicion2').val(),
                fechaRep1 : $('#fechaReporte1').val(),
                fechaRep2 : $('#fechaReporte2').val(),
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
                    field: 'nombre',
                    title: 'Nombre',
            },{
                    field: 'fecha',
                    title: 'Fecha de desaparición',
            },{         
                    field: 'sexo',
                    title: 'Sexo',
            },{         
                    field: 'apodo',
                    title: 'Apodo',
            },{         
                    field: 'edad',
                    title: 'Edad',
            },{         
                    field: 'estatura',
                    title: 'Estatura',
            },{         
                    field: 'peso',
                    title: 'Peso',
            },{         
                    field: 'complexion',
                    title: 'Complexión',
            },{         
                    field: 'cPiel',
                    title: 'Color de piel',
            },{         
                    field: 'estado',
                    title: 'Estado',
            },{         
                    field: 'municipio',
                    title: 'Municipio',
            },{         
                    field: 'nacionalidad',
                    title: 'Nacionalidad',
            },{
                    field: 'fechaReporte',
                    title: 'Fecha de reporte',
            },{         
                    field: 'hechos',
                    title: 'Hechos',
            },{
                    field: 'cabello',
                    title: 'Cabello',
            },{
                    field: 'velloFacial',
                    title: 'Vello facial',
            },{             
                    field: 'ojos',
                    title: 'Ojos',

            },{             
                    field: 'labios',
                    title: 'Labios',
            },{             
                    field: 'modificaciones',
                    title: 'Modificaciones',

            },{             
                    field: 'particularidades',
                    title: 'Particularidades',

            },{  
                    field: 'observaciones',
                    title: 'Observaciones',

            },{                
                    title: 'Acciones',
                    formatter: formatTableActions,
                    events: operateEvents
                }]        
            })

          console.log(routeIndex+'/get_desaparecidos_personas/'+ masc +'/'+ fem+'/'+ rg+'/'+ rg2+'/'+ estados);
        fechar1 =$('#fechaReporte1');

        tablaGen.show();
//
//     table.bootstrapTable('hideColumn', 'nombres');
//
//        });
//    
//    $(function() {
//$table = $('#tableDependencias');
// $button2 = $('#button2');
//  $button2.click(function() {
//      
//     
//      
//    $table.bootstrapTable('hideColumn', 'nombres');
//       $table.bootstrapTable({
//   reorderableColumns: true,
//  detailView: true
//          });
//  });
});
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<-
</script>
@endsection