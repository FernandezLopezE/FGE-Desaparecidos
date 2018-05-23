@extends('layouts.app_uipj')
@section('css')
{!! Html::style('personal/css/avatar/avatar.css') !!}
@endsection

@section('content')
@include('navs.navs_datos',array('activar' => 'desc_fisica'))
@include('includes.partesCuerpo.01Talla')
<div class="card border-success">
    <div class="card-body"> 
        <!--@include('descripcionfisica.seccion_Estatura')-->
        <div class="form-group" id="fomularioPrin2">
                <h6><b>Selecciona la parte del cuerpo</b></h6>
        </div>
        <div class="row" id="fomularioPrin" >
            <div class="col">
              <!-- Card de datos físicos-->
                <div class="card-transparent" style="max-width: 18rem;height: -70%;">
                  <div class="card-header-transparent">
                    <i class="fa fa-address-card" id="datosFis" style="font-size:40px;" data-toggle="tooltip" data-target="#card" data-placement="right" title="Editar datos físicos"></i>       
                  </div>
                  <div class="card-body" id="card" style="margin-top: 7px;border: 1px solid #BDBDBD;border-radius: 5px;z-index: 10; position: absolute; background: #ffffff; width: 80%;">
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Estatura:</b></h6>
                          </div>
                          <div class="col-7" style="margin-left: 0%;">
                              <input type="text" id="estatura" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Peso:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="peso" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div>   
                      <div class="row">
                          <div class="col-5">
                              <h6><b>Complexión:</b></h6>
                          </div>
                          <div class="col-7">
                              <input type="text" id="complexion" style="border: 0px;width: 70%;background: transparent;" disabled>
                          </div>
                      </div> 
                       <div class="row">
                          <div class="col-5">
                              <h6><b>Color de piel:</b></h6>
                          </div>
                          <div class="col-6">
                              <input type="text" id="piel" style="border: 0px;width: 110%;background: transparent;" disabled>
                          </div>
                      </div>
                  </div> 
              </div>
            </div>
            <div class="col" style="margin-left:-350px; margin-top:-20px;">
              @include('descripcionfisica.avatar')
            </div>
            <div class="col-8">
              @include('descripcionfisica.seccion_Cabello')
              @include('descripcionfisica.seccion_Cara')
              
            </div>
        </div>
    </div>
</div>

@endsection 

@section('scripts')
<script type="text/javascript">
  var aux ="{{$aux}}";
  var extraviado = "{{$desaparecido->id}}";
  var showCabello2 = "{{$showCabello}}";
  
</script>
{!! Html::script('personal/js/avatar/datos_fisicos.js') !!}
{!! Html::script('personal/js/avatar/cabello.js') !!}
{!! Html::script('personal/js/avatar/accionAvatar.js') !!}




@endsection