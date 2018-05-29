<!-- Modal Datos del informante-->
<div class="modal fade" id="modalAntecedentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">
                <i class="fa fa-gavel" aria-hidden="true" style="font-size:30px"></i> Antecedentes penales</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<!-- Contenido del formulario-->
		<form id="formDesaparecido">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('mesAnio','Mes / Año:') !!}
                        {!! Form::text ('mesAnio',
                        					'',
                        					['class' => 'form-control',
                        						'id' => 'mesAnio',
                        						'data-validation-format'=>"dd/mm/yyyy"
                        					] )!!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('idDelito','Delito:') !!}
                        {!! Form::select ('idDelito',$delitos,'', ['class' => 'form-control', 'id' => 'idDelito'] )!!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('idCentroReclusion','Centro de reclusión:') !!}
                        {!! Form::select ('idCentroReclusion',$centros,'', ['class' => 'form-control', 'id' => 'idCentroReclusion'] )!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('observaciones','Observaciones:') !!}
                        {!! Form::textarea('observaciones',
                                            '',
                                            ['class' => 'form-control mayuscula', 'data-validation' =>'required','data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' => '1','data-validation-error-msg-required' =>'Este campo es requerido.'] )!!}
                    </div>
                </div>
            </div>
		</form>
		<!-- Fin del Contenido del formulario-->
	  </div>
	  <div class="modal-footer">
	  	<button type="button" class="btn btn-dark mr-auto" id="btnLimpiar"> LIMPIAR CAMPOS</button>
		<button type="button" class="btn btn-dark" id="btnGuardarAntecedente"><i class="fa fa-save"></i>  GUARDAR</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
	  </div>
	</div>
  </div>
</div>
<!-- Fin de Modal Datos del informante-->