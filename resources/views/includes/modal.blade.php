<!-- Modal Datos del informante-->
        <div class="modal fade" id="modalGeneral" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DATOS DE LA PERSONA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- Contenido del formulario-->
                  <div class="row">
                <div class="col-lg-4">
                  {!! Form::label ('informanteNombres','Nombre(s):') !!}
                  {!! Form::text ('informanteNombres',old('informanteNombres'), ['class' => 'form-control mayuscula', 'id' => 'informanteNombres', ] )!!}
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('informantePrimerAp','Primer apellido:') !!}
                  {!! Form::text ('informantePrimerAp',old('informantePrimerAp'), ['class' => 'form-control mayuscula', 'id' => 'informantePrimerAp', ] )!!}
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('informanteSegundoAp','Segundo apellido:') !!}
                  {!! Form::text ('informanteSegundoAp',old('informanteSegundoAp'), ['class' => 'form-control mayuscula', 'id' => 'informanteSegundoAp', ] )!!}
                </div>
                
              </div>

              <div class="row">
                <div class="col-lg-4">
                  {!! Form::label ('informanteidParentesco','Parentesco:') !!}
                  {!! Form::select ('informanteidParentesco',$parentescos,'', ['class' => 'form-control', 'id' => 'informanteidParentesco'] )!!}    
                </div>
                <div class="col" id="otro_parent" style="display:none">
                  {!! Form::label ('informanteOtroParentesco','Especifique:') !!}
                  {!! Form::text ('informanteOtroParentesco',old('informanteOtroParentesco'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroParentesco', ] )!!}
                </div>
              </div><hr>

              <div class="row">   
                <div class="col-lg-4">
                  {!! Form::label ('idNacionalidad','Nacionalidad:') !!}
                  {!! Form::select ('idNacionalidad',$nacionalidades,'', ['class' => 'form-control', 'id' => 'idNacionalidad', 'data-validation' => 'required', 'data-validation-error-msg-required' => '* Elija una opción'] )!!}        
                </div>
                <div class="col">
                  {!! Form::label ('informanteidDocumentoIdentidad','Identificación:') !!}
                  {!! Form::select ('informanteidDocumentoIdentidad',$documentos,'', ['class' => 'form-control', 'id' => 'informanteidDocumentoIdentidad'] )!!}
                  
                </div>
              </div>

              <div class="row">
                <div class="col-lg-4" id="otro_doc" style="display:none">
                  {!! Form::label ('informanteOtroDocIdentidad','Especifique:') !!}
                  {!! Form::text ('informanteOtroDocIdentidad',old('informanteOtroDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteOtroDocIdentidad', ] )!!}        
                </div>
                <div class="col">
                  {!! Form::label ('informanteNumDocIdentidad','Número de identificación:') !!}
                  {!! Form::text ('informanteNumDocIdentidad',old('informanteNumDocIdentidad'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumDocIdentidad', ] )!!}       
                </div>
              </div><hr>

              <div class="row" id=""  >   
                <div class="col-lg-3">
                  {!! Form::label ('informanteTipoDireccion','Tipo de dirección:') !!}
                    {!! Form::select ('informanteTipoDireccion',['CASA'=>'CASA','TRABAJO'=>'TRABAJO'],'informanteTipoDireccion', ['class' => 'form-control', 'id' => 'informanteTipoDireccion'] )!!}  
                </div>
                <div class="col-lg-5">
                  {!! Form::label ('informanteCalle','Calle:') !!}
                  {!! Form::text ('informanteCalle',old('informanteCalle'), ['class' => 'form-control mayuscula', 'id' => 'informanteCalle', ] )!!}       
                </div>
                <div class="col-lg-2">
                  {!! Form::label ('informanteNumExterno','Num. ext:') !!}
                  {!! Form::text ('informanteNumExterno',old('informanteNumExterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumExterno', ] )!!}        
                </div>
                <div class="col-lg-2">
                  {!! Form::label ('informanteNumInterno','Num. int:') !!}
                  {!! Form::text ('informanteNumInterno',old('informanteNumInterno'), ['class' => 'form-control mayuscula', 'id' => 'informanteNumInterno', ] )!!}        
                </div>
              </div>

              <div class="row" id=""  >   
                <div class="col-lg-4">
                  {!! Form::label ('idEstado','Estado:') !!}
                  {!! Form::select ('idEstado',$estados,'', ['class' => 'form-control'] )!!}        
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('idMunicipio','Municipio:') !!}
                  {!! Form::select ('idMunicipio',$municipios,'', ['class' => 'form-control'] )!!}        
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('idLocalidad','Localidad:') !!}
                  {!! Form::select ('idLocalidad',$localidades,'', ['class' => 'form-control'] )!!}       
                </div>
              </div>
          
              <div class="row" id=""  >   
                <div class="col-lg-8">
                  {!! Form::label ('idColonia','Colonia:') !!}
                  {!! Form::select ('idColonia',$colonias,'', ['class' => 'form-control'] )!!}        
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('idCodigoPostal','Código postal:') !!}
                  {!! Form::select ('idCodigoPostal',$colonias,'', ['class' => 'form-control' ] )!!}        
                </div>
              </div><hr>

              <div class="row" id=""  > 
                <div class="col-lg-3">
                  {!! Form::label ('informanteTipoTel','Tipo de telefono:') !!}
                  {!! Form::select ('informanteTipoTel',['CASA'=>'CASA','TRABAJO'=>'TRABAJO','PERSONAL'=>'PERSONAL'],'', ['class' => 'form-control'] )!!} 
                </div>
                <div class="col-lg-2">
                  {!! Form::label ('lada','Lada:') !!}
                  {!! Form::select ('lada',['A'=>'+52','B'=>'+53','C'=>'+59'],'', ['class' => 'form-control'] )!!}  
                </div>
                <div class="col">
                  {!! Form::label ('informanteTelefonos','Número:') !!}
                  {!! Form::text ('informanteTelefonos',old('informanteTelefonos'), ['class' => 'form-control mayuscula'] )!!}        
                </div>
                <div class="col-lg-4">
                  {!! Form::label ('ext','Ext:') !!}
                  {!! Form::text ('ext',old(''), ['class' => 'form-control mayuscula'] )!!}       
                </div>  
              </div>
              
              <div class="row">
                <div class="col">
                  {!! Form::label ('informanteCorreoElectronico','Correo electrónico:') !!}
                  {!! Form::text ('informanteCorreoElectronico',old('informanteCorreoElectronico'), ['class' => 'form-control', 'id' => 'informanteCorreoElectronico', ] )!!}       
                </div>
              </div><hr>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input icheck" type="checkbox" id="informante"> SÓLO INFORMANTE
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input icheck" type="checkbox"  id="recibir"> AUTORIZADA PARA DAR, OIR Y RECIBIR INFORMES
                    </label>
                  </div>
                </div>
              </div>
                <!-- Fin del Contenido del formulario-->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" id="guardarInfo">GUARDAR</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin de Modal Datos del informante-->