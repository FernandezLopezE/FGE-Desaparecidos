<hr class="my-4">
<div class="card border-primary">
    <div class="card-header">
        <h5 class="card-title">Documentos de identidad</h5>      
    </div>
    
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label ('identificacion','Identificacion') !!}
                    {!! Form::select ('identificacion',$identificacion,'', ['class' => 'form-control', 'id' => 'identificacion'] )!!}
                </div>
            </div>
            <div class="col">
                <div class="form-group" id="otraIdDIV">
                    {!! Form::label ('otraIdentificacion','Otro') !!}
                    {!! Form::text ('otraIdentificacion',old('Otra identificacion'), ['class' => 'form-control', 'data-validation' => 'required','data-validation-help' => 'En caso de seleccionar otra identificación. Agregar aquí.', 'data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' =>'Otro(especifique)','data-validation-error-msg-required' =>'Este campo es requerido.'] )!!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label ('numIdentificacion','No. Identificación') !!}
                    {!! Form::text ('numIdentificacion',old('Numero identificacion'), ['class' => 'form-control', 'data-validation' =>'required', 'data-validation-help' => 'Ejemplo: 117OO02AS23SPPR0.', 'data-validation-error-msg-required' =>'Este campo es requerido.','data-validation' =>'alphanumeric','data-validation-error-msg' =>'Este campo solo acepta datos alfanumericos.'] )!!}
                </div>
            </div>
        </div>
        
        </div>
    </div>

</div>

<hr class="my-4">    

<div class="card border-primary">
    <div class="card-header">
        <h5 class="card-title">Antecedentes Judiciales</h5>      
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {!! Form::label ('antecedentesJudiciales','Antecedentes Judiciales') !!}
                    {!! Form::select ('antecedentesJudiciales',$option,'', ['class' => 'form-control'] )!!}
                </div>
            </div>
            <div class="col">
                
            </div>
            <div class="col">
                
            </div>
        </div>
        <div id="antecedentesDIV">
            <div class="row">
                
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label ('mes','Meses') !!}
                            {!! Form::select ('mes',$meses,'', ['class' => 'form-control', 'id' => 'meses'] )!!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label ('anio','Anios') !!}
                            {!! Form::select ('anio',$anios,'', ['class' => 'form-control', 'id' => 'anios'] )!!}
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            {!! Form::label ('idDelito','Delito') !!}
                            {!! Form::select ('idDelito',$delitos,'', ['class' => 'form-control', 'id' => 'delitos'] )!!}
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('idCentroReclusion','Centro de reclucion') !!}
                        {!! Form::select ('idCentroReclusion',$centros,'', ['class' => 'form-control', 'id' => 'centro'] )!!}
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        {!! Form::label ('observaciones','Observaciones') !!}
                        {!! Form::text ('observaciones',old('observaciones'), ['class' => 'form-control', 'data-validation' =>'required','data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' => '1','data-validation-error-msg-required' =>'Este campo es requerido.'] )!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<hr class="my-4">