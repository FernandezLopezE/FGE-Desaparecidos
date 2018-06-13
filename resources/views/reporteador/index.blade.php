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
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}

    
</style>
	
@endsection

@section('content')

<nav>

</nav>

<div class="card border-success" id="divDependencias">
	<div class="card-header">
		<h5 class="card-title">Buscador de personas no localizadas
		</h5>
	</div>	
  <div class=""> 
	<!--
    <p >
        <imput type="button" class="btn btn-dark pull-right" id="filtrosTodos">Buscar todos los registros</imput>     
    </p> <br>
-->
      
     
      <div class="card-body bg-white">                              
        <div class="row">
               &nbsp;&nbsp;<h5>Datos generales</h5>                        
          </div>    <hr>    
            <div class="row" id="idDatosGral">               
               <div class="col-lg-2" >
                    <div class=""> 
                          <div class=""  id="campoGenero"> 
                            <div>
                               <p>&nbsp;</p>
                                {!! Form::label ('comple','Género:') !!}<br>
                                {!! Form::select ('comple', $generos, '',['class' => '', 'id' => 'generos','multiple' => 'multiple'] )!!}
                            </div>
                            </div>      
                      </div>
                    </div>
         
               
               <div class="col-lg-5" align="center">                             
                      <div class="" id="" >
                      
                       {!! Form::label ('','Fecha de desaparición',['class' => '']) !!} 
                        <div class="row">
                         <div class="col"> &nbsp;{!! Form::label ('','Desde:  ',['class' => '']) !!}</div> 
                         <div class="col">  &nbsp;{!! Form::label ('','Hasta:  ',['class' => '']) !!}</div> </div>
                         
                          <div class="row">                              
                          <div class="col-lg-6">
                              {!! Form::text ('fechaNacimiento',
                              '',
                              ['class' => 'form-control',
                                'id' => 'fechaDesaparicion1',
                                'data-validation' =>'date',
                                'data-validation-format'=>"dd/mm/yyyy",
                                'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                                'placeholder' => 'dd/mm/aaaa'
                              ] )!!} 
                          </div>
                          <div class="col-lg-6">
                              {!! Form::text ('fechaNacimiento',
                              '',
                              ['class' => 'form-control',
                                'id' => 'fechaDesaparicion2',
                                'data-validation' =>'date',
                                'data-validation-format'=>"dd/mm/yyyy",
                                'data-validation-error-msg-date' => 'Ingrese fecha correcta',
                                'placeholder' => 'dd/mm/aaaa'
                              ] )!!}
                          </div>                    
                        </div>
                    </div>     
              </div>
               
               <div class="col-lg-5" align="center">
                  <div class=""  id="" >                               
                      <div class="" id="div_idEstado">
                          {!! Form::label ('','Fecha de reporte  ',['class' => '']) !!}
                          <div class="row">
                         <div class="col"> &nbsp;{!! Form::label ('','Desde:  ',['class' => '']) !!}</div> 
                         <div class="col">  &nbsp;{!! Form::label ('','Hasta:  ',['class' => '']) !!}</div> </div>
                <div class="row"> 
                    <div class="col-lg-6">
                     {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte1',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/yyyy",
                        'data-validation-error-msg-date' => 'Ingrese una fecha válida o menor a la actual','placeholder' => 'dd/mm/aaaa'
                      ] )!!}
                </div>
                <div class="col-lg-6"> 
                      {!! Form::text ('fechaNacimiento',
                      '',
                      ['class' => 'form-control',
                        'id' => 'fechaReporte2',
                        'data-validation' =>'date',
                        'data-validation-format'=>"dd/mm/aaaa",
                        'data-validation-error-msg-date' => 'Ingrese una fecha válida o menor a la actual','placeholder' => 'dd/mm/aaaa'
                      ] )!!}                        
                </div>
                   </div>
                    </div>     
                  </div>
              </div>
           </div> <!-- div class row end -->
            
            <hr>
            <div class="col-lg-12">
                {!! Form::label ('comple','Filtros de búsqueda:') !!}<br>
            {!! Form::select ('comple', $tiposFiltros, '',['class' => '', 'id' => 'filtrosAvanzados','multiple' => 'multiple'] )!!}
            <br><br>
            </div> 
            <hr>
          <div id="catUbicacion" style="display:none">
         <div class="row">
                &nbsp;&nbsp;<h5>Ubicación de la desaparición</h5>                       
          </div> <hr>      
         <div class="row" id="idUbicación">
             <div class="col">
                {!! Form::label ('idEstados','Nacionalidad:') !!} 
                {!! Form::select('idEstados',$nacionalidades, '', ['class' => '', 'id' => 'nacionalidades','multiple' => 'multiple'] ) !!}
             </div>
             <div class="col">
                {!! Form::label ('idEstados','Estados:') !!} 
                {!! Form::select('idEstados',$estados, '', ['class' => '', 'id' => 'idEstadoC','multiple' => 'multiple'] ) !!}
             </div>
            <div class="col-lg-4" id="posicionMunicipio" style="display:none">
               
            </div>
          </div>
          </div>
         
         <div id="CatDescripcionFis" style="display:none">
         <br><div class="row">
                &nbsp;&nbsp;<h5>Descripción física </h5>                       
          </div> <hr>
          <DIV id="idDesFisica">       
          <div class="row" >
              <div class="col-lg-4" >
                  <div class=""  id="campoEdad" >                               
                      <div class="" id="div_EdadDes">
                          {!! Form::label ('','Edad de desaparición  ',['class' => '']) !!}
                        <div class="row">
                         <div class="col"> &nbsp;{!! Form::label ('','Desde:  ',['class' => '']) !!}</div> 
                         <div class="col">  &nbsp;{!! Form::label ('','Hasta:  ',['class' => '']) !!}</div> </div>
                          </div>
                             <div class="row">                           
                             <div class="col-lg-6">
                                 {!! Form::number('count','value', ['min' => '0' ,'max' => '120' ,'class' => 'form-control', 'id' => 'rng1']) !!} 
                           </div>
                           <div class="col-lg-6"> 
                                   {!! Form::number('count','value', ['min' => '0' ,'max' => '120' ,'class' => 'form-control', 'id' => 'rng2']) !!}             
                           </div>
                           </div>
                    </div>     
                  </div>
             
              
              
             <div class="col-lg-4"> 
                 <div class=""  id="campoEstatura" >                               
                      <div class="" id="div_EdadDes">           
                  {!! Form::label ('','Estatura  ',['class' => '']) !!}
                  <div class="row">
                         <div class="col"> &nbsp;{!! Form::label ('','Desde:  ',['class' => '']) !!}</div> 
                         <div class="col">  &nbsp;{!! Form::label ('','Hasta:  ',['class' => '']) !!}</div> </div>
                          </div>
                             <div class="row">                           
                             <div class="col-lg-6">
                    {!! Form::number('count','value', ['min' => '0' ,'max' => '300' ,'class' => 'form-control', 'id' => 'estatura1']) !!}
                    </div>
                           <div class="col-lg-6">
                    {!! Form::number('count','value', ['min' => '0' ,'max' => '300' ,'class' => 'form-control', 'id' => 'estatura2']) !!}
             </div>
                           </div>
                    </div>     
                  </div>
                 
            <div class="col-lg-4"> 
                 <div class=""  id="campoPeso" >                               
                      <div class="" id="div_EdadDes">           
                  {!! Form::label ('','Peso  ',['class' => '']) !!}
                  <div class="row">
                         <div class="col"> &nbsp;{!! Form::label ('','Desde:  ',['class' => '']) !!}</div> 
                         <div class="col">  &nbsp;{!! Form::label ('','Hasta:  ',['class' => '']) !!}</div> </div>
                          </div>
                             <div class="row">                           
                             <div class="col-lg-6">
                     {!! Form::number('count','value', ['min' => '0' ,'max' => '500' ,'class' => 'form-control', 'id' => 'peso1']) !!}
                     </div>
                           <div class="col-lg-6">
                     {!! Form::number('count','value', ['min' => '0' ,'max' => '500' ,'class' => 'form-control', 'id' => 'peso2']) !!}
              </div>
                           </div>
                    </div>     
                  </div>
          </div>
          <br><div class="row" >
             <div class="col-lg-6">
                 {!! Form::label ('idColorPiel','Color de piel') !!} <br>
                 {!! Form::select('cPiel',$coloresPiel, '', ['class' => '', 'id' => 'cPiel','multiple' => 'multiple'] ) !!}                             
             </div>
             <div class="col-lg-6">
                  {!! Form::label ('comple','Complexión') !!}<br>
                  {!! Form::select ('comple', $complexiones, '',['class' => '', 'id' => 'complexion','multiple' => 'multiple'] )!!}         
             </div>
        </div>
    </DIV>        
      </div>        
          
          <div id="catCabello" style="display:none"> 
              <br><div class="row">
                    &nbsp;&nbsp; <h5>Características del cabello</h5>                        
              </div> <hr>      
             <div class="row" id="idCabello">
                 <div class="col-lg-4">
                    {!! Form::label ('tipoCabello','Tipo de cabello') !!}
                    {!! Form::select('tipoCabello', $tipoCabello, '', ['class' => '', 'id' => 'tipoCabello','multiple' => 'multiple'] ) !!}           
                </div>
                 <div class="col-lg-4">
                   {!! Form::label ('tamanoCabello','Tamaño de cabello:') !!}
                   {!! Form::select('tamanoCabello', $tamanoCabello, '', ['class' => '', 'id' => 'tamanoCabello','multiple' => 'multiple'] ) !!}
                </div>
                <div class="col-lg-4">  
                    {!! Form::label ('tipoCabe','Color de cabello') !!}
                    {!! Form::select('colorCabello', $coloresCabello, '', ['class' => '', 'id' => 'colorCabello','multiple' => 'multiple'] ) !!}
                </div>
              </div>
          </div> 	
          
          <div id="catBarbaBigotePatilla" style="display:none"> 
              <br><div class="row">
                    &nbsp;&nbsp; <h5>Características del vello facial</h5>                        
              </div> <hr>      
             <div class="row">
                 <div class="col-lg-4">
                    {!! Form::label ('tipoBarba','Tipo de barba:') !!}
                    {!! Form::select('tipoBarba', $tipoBarba, '', ['class' => '', 'id' => 'tipoBarba','multiple' => 'multiple'] ) !!}
                 </div>
                 <div class="col-lg-4">
                     {!! Form::label ('color','Color de barba:') !!}
                     {!! Form::select('colorBarba', $coloresBarba, '', ['class' => '', 'id' => 'colorBarba','multiple' => 'multiple'] ) !!}
                </div>
                <div class="col-lg-4">
                      {!! Form::label ('tipoBigote','Tipo de bigote:') !!}
                      {!! Form::select('tipoBigote', $tipoBigote, '', ['class' => '', 'id' => 'tipoBigote','multiple' => 'multiple'] ) !!}
                 </div>                 
              </div>
              <br><div class="row" >
                  <div class="col-lg-4">
                    {!! Form::label ('colorBigotes','Color de bigote:') !!}
                    {!! Form::select('colorBigote', $coloresBigote, '', ['class' => '', 'id' => 'colorBigote','multiple' => 'multiple'] ) !!}
                  </div>
                  <div class="col-lg-4">
                     {!! Form::label ('tipoPatilla','Tipo de patilla:') !!}
                     {!! Form::select('tipoPatilla', $tipoPatilla, '', ['class' => '', 'id' => 'tipoPatilla','multiple' => 'multiple'] ) !!}
                  </div>
                  <div class="col-lg-4">
                    {!! Form::label ('colorPatillas','Color de patillas:') !!}
                    {!! Form::select('colorPatillas', $coloresPatilla, '', ['class' => '', 'id' => 'colorPatilla','multiple' => 'multiple'] ) !!}
                  </div>
              </div>
          </div>
                     
          <div id="catLabiosOjos" style="display:none"> 
              <br><div class="row">
                    &nbsp;&nbsp; <h5>Características de ojos y labios</h5>                        
              </div>  <hr>  
             <div class="row" id="idOjos"> 
                 <div class="col-lg-4">
                    {!! Form::label ('tamanoOjos','Tamaño de ojos:') !!}
                    {!! Form::select('tamanoOjos', $tamanoOjos, '', ['class' => '', 'id' => 'tamanoOjos','multiple' => 'multiple'] ) !!}
                 </div>
                 <div class="col-lg-4">
                  {!! Form::label ('colorOjoso','Color de ojos:') !!}
                  {!! Form::select('colorOjos', $coloresOjos, '', ['class' => '', 'id' => 'colorOjos','multiple' => 'multiple'] ) !!}
                 </div>               
                <div class="col-lg-4">  
                       {!! Form::label ('tipoLabios','Tipo de labios:') !!}
                       {!! Form::select('tipoLabio', $tipoLabios, '', ['class' => '', 'id' => 'tipoLabio','multiple' => 'multiple'] ) !!}
                </div>
 	        </div>
 	        </div>
          
          <div id="catModiParti" style="display:none"> 
              <br><div class="row">
                    &nbsp;&nbsp; <h5>Modificaciones y particularidades del cuerpo</h5>                        
              </div>  <hr>  
             <div class="row" id=""> 
                 <div class="col-lg-6">
                    {!! Form::label ('tipoLabios','Modificaciones:') !!}
                    {!! Form::select('modificaciones', $modificaciones, '', ['class' => '', 'id' => 'modificaciones','multiple' => 'multiple'] ) !!}
                </div>
                 <div class="col-lg-6">
                  {!! Form::label ('tipoLabios','Particularidades:') !!}
                  {!! Form::select('particularidades', $particularidades, '', ['class' => '', 'id' => 'particularidades','multiple' => 'multiple'] ) !!}
                 </div>
 	        </div>
 	        </div>                      
          
                  
                <br>
                <!--<imput type="button" class="btn btn-dark pull-right" id="try">prueba</imput>-->
           <imput type="button" class="btn btn-dark pull-right" id="filtros">Buscar</imput>
           <br><br>
           <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>           
            </div> <!--  div class="card-body bg-white" END  -->
            
           
           </div>
        <!--<imput type="button" class="btn btn-dark pull-right" id="button2">PRUEBA</imput>-->
       <!--<imput type="button" class="btn btn-dark pull-right" id="prueba">PRUEBA</imput>-->
        
        <div id="tablaGen" style="width:100%">


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
                        data-sortable="true" data-filter-control="input"  data-visible="false" ></th>
                        <th data-field="labios" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>         <th data-field="Estado" 
                        data-sortable="true" data-filter-control="input" data-visible="false" ></th>
                        <th data-field="Municipio" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="Nacionalidad" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="FechaR" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="Hechos" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="Modificaciones" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="particularidades" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
                        <th data-field="Observaciones" 
                        data-sortable="true" data-filter-control="input"  data-visible="false"></th>
               <th data-field="Acciones"> </th>
                </tr>
            </thead>
 <tbody >
    
    </tbody>
         </table>  
  @include('reporteador.modal.modal_reportes')

        </div>

       <br><br><br><br><br><br><br><br>
   
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
<script type="text/javascript">
  var variable= 0;
    $('#idEstadoC').on('change', function(){
        console.log($(this).val());
        var idMunicipio = $(this).val();
        if(idMunicipio) {
            $.ajax({
                url: '/consultas/get_municipios/'+idMunicipio,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    console.log(data);
                         $('#posicionMunicipio').empty();
                     $('#posicionMunicipio').append('<label>Municipios:</label><br> <select name="idMunicipios" id="idMunicipioC" multiple="multiple"></select>');
                     $('#posicionMunicipio').show();
                    $.each(data, function(key, value){
                       $("#idMunicipioC").append('<option value="'+ value.id +'">' +  value.nombre + '</option>');
                        
                    });  
                    variable=1;
                    console.log(variable);
                        $('#idMunicipioC').multipleSelect({
                            filter: true,
                            width: '100%'
                        });
                }              
            });
           
             
        } else {
            $('#idEstadoC').empty();
        }
        
    });
    
    
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
    
   $(function()
    {
       $('#selectall').change(function()
      {if ($(this).is(':checked')) {
            $('#catUbicacion').show();$('#catUbicacion').show();$('#CatDescripcionFis').show();$('#catCabello').show();$('#catBarbaBigotePatilla').show(); $('#catLabiosOjos').show();$('#catModiParti').show();
          
        }else{
            $('#catUbicacion').hide();$('#catUbicacion').hide();$('#CatDescripcionFis').hide();$('#catCabello').hide();$('#catBarbaBigotePatilla').hide(); $('#catLabiosOjos').hide();$('#catModiParti').hide();
        }; });
      $('#A1').change(function()
      {if ($(this).is(':checked')) {
            $('#catUbicacion').show();
          
        }else{
            $('#catUbicacion').hide()
        }; });  
     $('#A2').change(function()
      {if ($(this).is(':checked')) {
            $('#CatDescripcionFis').show();
        }else{
            $('#CatDescripcionFis').hide()
        }; }); 
     $('#A3').change(function()
      {if ($(this).is(':checked')) {
            $('#catCabello').show();
        }else{
            $('#catCabello').hide()
        }; });  
     $('#A4').change(function()
      {if ($(this).is(':checked')) {
            $('#catBarbaBigotePatilla').show();
        }else{
            $('#catBarbaBigotePatilla').hide()
        }; });  
     $('#A5').change(function()
      {if ($(this).is(':checked')) {
            $('#catLabiosOjos').show();
        }else{
            $('#catLabiosOjos').hide()
        }; }); 
     $('#A6').change(function()
      {if ($(this).is(':checked')) {
            $('#catModiParti').show();
        }else{
            $('#catModiParti').hide()
        }; });  }); 
     //$("#campoUbicacion").hide();
    
     //******VALIDACIONES DE LAS FECHAS******
    $('#fechaDesaparicion1').change(function(){  
    from = $("#fechaDesaparicion1").val().split("/");
    fechaDesaparicion1 = from[2] + "-" + from[1] + "-" + from[0];
    fechaInicioDesaparicion = Date.parse(fechaDesaparicion1);
     
    fechaActual= new Date();
     
     if (fechaInicioDesaparicion > fechaActual)
     {
       $("#fechaDesaparicion1").val("");
     }
   });

    $('#fechaDesaparicion2').change(function(){  
    from = $("#fechaDesaparicion1").val().split("/");
    fechaDesaparicion1 = from[2] + "-" + from[1] + "-" + from[0];
    fechaInicioDesaparicion = Date.parse(fechaDesaparicion1);
    from2 = $("#fechaDesaparicion2").val().split("/");
    fechaDesaparicion2 = from2[2] + "-" + from2[1] + "-" + from2[0];
    fechaFinDesaparicion = Date.parse(fechaDesaparicion2);
     
    fechaActual= new Date();
     
    if (fechaFinDesaparicion > fechaActual || fechaFinDesaparicion < fechaInicioDesaparicion)
      $("#fechaDesaparicion2").val("");
   });
/////
    $('#fechaReporte1').change(function(){  
    from = $("#fechaReporte1").val().split("/");
    fechaReporte1 = from[2] + "-" + from[1] + "-" + from[0];
    fechaInicioReporte = Date.parse(fechaReporte1);
     
    fechaActual= new Date();
     
     if (fechaInicioReporte > fechaActual)
     {
       $("#fechaReporte1").val("");
     }
   });

    $('#fechaReporte2').change(function(){  
    from = $("#fechaReporte1").val().split("/");
    fechaReporte1 = from[2] + "-" + from[1] + "-" + from[0];
    fechaInicioReporte = Date.parse(fechaReporte1);
    from2 = $("#fechaReporte2").val().split("/");
    fechaReporte2 = from2[2] + "-" + from2[1] + "-" + from2[0];
    fechaFinReporte = Date.parse(fechaReporte2);
     
    fechaActual= new Date();
     
    if (fechaFinReporte > fechaActual || fechaFinReporte < fechaInicioReporte)
      $("#fechaReporte2").val("");
   });
    
    
    $('#rng1').change(function(){  
    desde = $("#rng1").val();
    hasta = $("#rng2").val();
        if(hasta=='' ){            
        }else{
            if (desde > hasta)
            { $("#rng1").val(""); }
        }
     
   });
    $('#rng2').change(function(){  
    desde2 = $("#rng1").val();
    hasta2 = $("#rng2").val();
      if(desde2=='' ){           
        }else{
            if (hasta2 < desde2)
            { $("#rng2").val(""); } 
        }
   });
    
    $('#estatura1').change(function(){  
    desde = $("#estatura1").val();
    hasta = $("#estatura2").val();
        if(hasta=='' ){            
        }else{
            if (desde > hasta)
            { $("#estatura1").val(""); }
        }
     
   });
    $('#estatura2').change(function(){  
    desde2 = $("#estatura1").val();
    hasta2 = $("#estatura2").val();
      if(desde2=='' ){           
        }else{
            if (hasta2 < desde2)
            { $("#estatura2").val(""); } 
        }
   });
    $('#peso1').change(function(){  
    desde = $("#peso1").val();
    hasta = $("#peso2").val();
        if(hasta=='' ){            
        }else{
            if (desde > hasta)
            { $("#peso1").val(""); }
        }
     
   });
    $('#peso2').change(function(){  
    desde2 = $("#peso1").val();
    hasta2 = $("#peso2").val();
      if(desde2=='' ){           
        }else{
            if (hasta2 < desde2)
            { $("#peso2").val(""); } 
        }
   });
  //*****************************
    //-<<--<--<<--<<--<<-MULTISELECTS-<<--<--<<--<<--<<-<<--<--<<--<<--<<
      
    $('#filtrosAvanzados').multipleSelect({
            width: '100%',
            multiple: true,
            multipleWidth: 390,
            filter: true
           
        });
    $('#generos').multipleSelect({
            selectAll: false,
            //isOpen: true,           
            width: '100%'
           
        });
    $('#generos').multipleSelect("setSelects", ['H','M']); 
    $('#nacionalidades').multipleSelect({
            filter: true,
            width: '100%'
           
        });
    $('#idEstadoC').multipleSelect({
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
    $('#particularidades').multipleSelect({
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
      $('#idMunicipio').multipleSelect();
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
    
    var formatCheckGenero = function(value, row, index){
      texto = '';
      if (row.sexo =='H') {
        texto = 'MASCULINO'
      }else{
                texto = 'FEMENINO'
            }

      return [texto].join('');
    }
    //-->-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-<_>-
    
var formatTableActions = function(value, row, index) {        
      btn = '<p align="center"> <button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button> </p>';


      return [btn].join('');
    };
    
    var formatTableActionsSexo = function(value, row, index) {        
      btn = '<p align="center"> <button class="btn btn-dark " id="verReporte" value="'+row.id+'">Ver detalles</button> </p>';


      return [btn].join('');
    };
    
    window.operateEvents = {
    'click #verReporte': function (e, value, row, index) {
                  modalReportes.modal('show');
 console.log(row);
            $("#idNombre").empty();
            $("#idGenero").empty(); 
            $("#idEstadoM").empty();
            $("#idMunicipioM").empty();
            $("#idFecha").empty();
            $("#idEdad").empty();
            $("#apodo").empty();            
            $("#idEstatura").empty();
            $("#idPeso").empty();
            $("#idCPiel").empty();
            $("#idComplexion").empty();            
            $("#idNacionalidad").empty();
            $("#idCabelloM").empty();
            $("#idVelloFacialM").empty();
            $("#idOjos").empty();
            $("#idLabios").empty();
        $("#idModificaciones").empty();
        $("#idParticularidades").empty();
        $("#idObservaciones").empty();
        $("#foto").empty();
          
        console.log("MENSAJE DE FOTO");
        console.log(row.foto);
      $("#idNombre").append(row.nombre);
            if(row.sexo =='H'){ 
                $("#idGenero").append('Masculino'); 
                              }else{
                if(row.sexo =='M'){ 
                    $("#idGenero").append('Femenino');}
                             }
            $("#idEstatura").append(row.estatura+ ' cm'); 
            $("#idPeso").append(row.peso + ' kg'); 
            $("#idCPiel").append(row.cPiel); 
            $("#idComplexion").append(row.complexion); 
            $("#idEstadoM").append(row.estado);
            $("#idMunicipioM").append(row.municipio);
            $("#idFecha").append(row.fecha);
            $("#idEdad").append(row.edad + ' años');
            $("#apodo").append(row.apodo);
            $("#idNacionalidad").append(row.nacionalidad);
            //$("#idTipoCabello").append(row.tipoCabello);
            $("#idCabelloM").append(row.cabello);
            $("#idVelloFacialM").append(row.velloFacial);
            $("#idOjos").append(row.ojos);
            $("#idLabios").append(row.labios);
        $("#idModificaciones").append(row.modificaciones);
        $("#idParticularidades").append(row.particularidades);
        $("#idObservaciones").append(row.observaciones);
        
        
        if(row.foto ==null  ){ 
                $("#foto").append('<img src="images/perfil3.png" class="rounded w-100 p-3 float-right">'); 
                              }else{
                $("#foto").append('<img src="'+row.foto+'" class="rounded w-100 p-3 float-right" width="80%">'); 
                                  
                             }
        //<img src="html/imagenes/prueba.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="300">
//        {{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => 'rounded w-100 p-3 float-right')) }}
//         @if(empty($desaparecido->fotoDesaparecido))
//        <center>{{ HTML::image('images/perfil3.png', 'Fiscal', array('class' => '','style' => "width: 80%;")) }}</center>
//         <p>sin foto</p>
//          @else
//            <center>{{ HTML::image(asset($desaparecido->fotoDesaparecido), 'Fiscal', array('class' => '', 'style' => "width: 80%;")) }}</center>
//        @endif
        
        
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
//          var estados = $('#estados').multipleSelect('getSelects');
//          console.log("El string:")
//        console.log(estados)
//        var array = JSON.parse("[" + estados + "]");
//         // estados.toString();
//          //estados.replace(/['"]+/g, '');
//          console.log("El arreglo:")
//          console.log(array)
//          
//          console.log('ids de estados:'+' ' + estados);
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
          estados: $('#idEstado').multipleSelect('getSelects'),
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
                formatter: formatCheckGenero
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
        
        var municipiosData='';
    if(variable==0){
        municipiosData='';
    }else if(variable==1){
        municipiosData= $('#idMunicipioC').multipleSelect('getSelects');
    }
          tablaGenTodos.hide();
          var estados = $('#idEstado').multipleSelect('getSelects');
          var municipios = $('#idMunicipio').multipleSelect('getSelects');
          console.log("El string:")
        console.log(estados)
        
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
        
//{          var sexo = '';
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
//                } } } 

          var dataString = {
                nacionalidad: $('#nacionalidades').multipleSelect('getSelects'),              
                estados: $('#idEstadoC').multipleSelect('getSelects'),
                municipios: municipiosData,
                cPiel: $('#cPiel').multipleSelect('getSelects'),
                complexion: $('#complexion').multipleSelect('getSelects'),
                tipoCabello: $('#tipoCabello').multipleSelect('getSelects'),
                tamanoCabello: $('#tamanoCabello').multipleSelect('getSelects'),
                colorCabello: $('#colorCabello').multipleSelect('getSelects'),
                tipoBarba: $('#tipoBarba').multipleSelect('getSelects'),
                colorBarba: $('#colorBarba').multipleSelect('getSelects'),
              
                tipoBigote: $('#tipoBigote').multipleSelect('getSelects'),
                colorBigote: $('#colorBigote').multipleSelect('getSelects'),
                tipoPatilla: $('#tipoPatilla').multipleSelect('getSelects'),
                colorPatilla: $('#colorPatilla').multipleSelect('getSelects'),
              
                tamanoOjos: $('#tamanoOjos').multipleSelect('getSelects'),
                colorOjos: $('#colorOjos').multipleSelect('getSelects'),
                tipoLabio: $('#tipoLabio').multipleSelect('getSelects'),
                modif: $('#modificaciones').multipleSelect('getSelects'),
                partic: $('#particularidades').multipleSelect('getSelects'),
                genero: $('#generos').multipleSelect('getSelects'),
                //fem : $("input#fem:checked").val(),     
                //masc : $("input#masc:checked").val(),
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
                    title: 'Género',
                formatter: formatCheckGenero,
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
         $("#idLiExport").remove();
         $("#ulExport").append("<li id='idLiExport' data-type='Pdf'><a href='javascript:void(0)' id = 'exportPdf'>PDF</a></li>");

        var try2 = $('#exportPdf');
        console.log('hiiiiiiiiiiiiiiiiii');
       
         try2.click(function(){
        var doc = new jsPDF('l', 'pt');
    var res = doc.autoTableHtmlToJson(document.getElementById('tableDependencias'));
   doc.autoTable(res.columns, res.data, {
        theme: 'striped', 
        styles: {
            cellPadding: 1.5,
            overflow: 'linebreak',
            valign: 'middle',
            halign: 'left',
            lineColor: [0, 0, 0],
            lineWidth: 0.2 
        },
       grid: {
            table: { fillColor: 255, textColor: 80, fontStyle: 'normal', lineWidth: 0.1 },
            header: { textColor: 255, fillColor: [16, 8, 6], fontStyle: 'bold', lineWidth: 0 },
            body: {},
            alternateRow: {}
        }
       
    });
    doc.save('no_localizados.pdf');
        });
        
        
        
//{
//     table.bootstrapTable('hideColumn', 'nombres');
//
//       
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
//  }); } } }
});
    
   
    //<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<->.<-
</script>
@endsection