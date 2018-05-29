<!-- Modal de vestimenta-->
	<div class="modal fade" id="modalVestimenta" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
							<i class="fa fa-user-secret" aria-hidden="true" style="font-size:30px"></i> Datos de la vestimenta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body"> 
					<form id="formVestimenta">
					<!-- Contenido del formulario-->
					<div class="row">
						<div class="form-group col-md-4" id="div_idVestimenta">
							{!! Form::label ('idVestimenta','Tipo de vestimenta:',['class' => 'form-control-label']) !!}
							{!! Form::select('idVestimenta',
											 $vestimentas,
											 null,
											 ['class' => 'form-control' ,'id'=>'idVestimenta']) !!}
							<div class="form-control-feedback" id="error_idVestimenta"></div>
						</div>
						<div class="form-group col-md-4" id="div_idPrenda">
							{!! Form::label ('idPrenda','Prenda, calzado, accesorio u objeto:',['class' => 'form-control-label']) !!}
							{!! Form::select('idPrenda',
											 [],
											 null,
											 ['class' => 'form-control']) !!}
							<div class="form-control-feedback" id="error_idPrenda"></div>
						</div>
						<div class="form-group col-md-4" id="div_material">
							{!! Form::label ('material','Material:',['class' => 'form-control-label']) !!}
							{!! Form::text ('material',
												old('Material'),
												['class' => 'form-control mayuscula',
													'placeholder' => 'Material de la prenda'] )!!}
							<div class="form-control-feedback" id="error_material"></div>
						</div>							
					</div>

					<div class="row">
						<div class="form-group col-md-4" id="div_idMarca">
							{!! Form::label ('idMarca','Marca y origen:',['class' => 'form-control-label']) !!}
							{!! Form::select('idMarca',
											 $marcas,
											 null,
											 ['class' => 'form-control']) !!}
							<div class="form-control-feedback" id="error_idMarca"></div>
						</div>
						<div class="form-group col-md-4" id="div_talla">
							{!! Form::label ('talla','Talla:',['class' => 'form-control-label']) !!}
							{!! Form::text ('talla',old('Talla'), ['class' => 'form-control mayuscula', 'data-validation' => 'required', 'data-validation-error-msg-required' => 'Ingrese la talla', 'placeholder' => 'Talla'] )!!}
							<div class="form-control-feedback" id="error_talla"></div>
						</div>
						<div class="form-group col-md-4" id="div_idColor">
							{!! Form::label ('idColor','Color:',['class' => 'form-control-label']) !!}
							{!! Form::select('idColor',
											 [],
											 null,
											 ['class' => 'form-control']) !!}
							<div class="form-control-feedback" id="error_idColor"></div>
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6" id="div_diseno">
							{!! Form::label ('diseno','Observaciones:',['class' => 'form-control-label']) !!}
							{!! Form::textarea ('diseno',
											old('Dibujo/Bordado/Franjas'),
											['class' => 'form-control mayuscula',
												'data-validation' => 'required',
												'data-validation-error-msg-required' => 'Ingrese observaciones',
												'placeholder' => 'Ingrese el bordado, dibujo, franja u observaciones de la prenda'] )!!}
							<div class="form-control-feedback" id="error_diseno"></div>
						</div>
						<div class="form-group col-md-6" id="div_archivo">
							{!! Form::label ('archivo','Foto:',['class' => 'form-control-label']) !!}
							{!! Form::file('archivo', ['class' => 'form-control']) !!}
							<div class="form-control-feedback" id="error_archivo"></div>
						</div>
						

					</div>					
					<!-- Fin del Contenido del formulario-->
					</form> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" id="btnGuardarPrenda">GUARDAR</button>
					<button type="button" class="btn btn-dark" id="btnActualizarPrenda">ACTUALIZAR</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
				</div>
			</div>
		</div>
	</div>
<!-- Fin de Modal de vestimenta-->