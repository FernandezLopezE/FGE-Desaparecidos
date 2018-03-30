    <div class="form-group">
        {!! Form::label ('identificacion','Identificacion') !!}
        {!! Form::select ('identificacion',$identificacion,'', ['class' => 'form-control', 'id' => 'identificacion','data-validation-optional-if-answered' => 'Otro(especifique)'] )!!}
    </div>

    <div class="form-group" id="otraIdDIV">
        {!! Form::label ('otraIdentificacion','Otro') !!}
        {!! Form::text ('otraIdentificacion',old('Otra identificacion'), ['class' => 'form-control', 'data-validation-help' => 'En caso de seleccionar otra identificación. Agregar aquí.', 'data-validation-depends-on' => 'identificacion','data-validation-depends-on-value' =>'Otro(especifique)'] )!!}
    </div>

    <div class="form-group">
        {!! Form::label ('numIdentificacion','No. Identificación') !!}
        {!! Form::text ('numIdentificacion',old('Numero identificacion'), ['class' => 'form-control', 'data-validation' =>'required', 'data-validation-help' => 'Ejemplo: 117OO02AS23SPPR0.', 'data-validation-error-msg-required' =>'Este campo es requerido.'] )!!}
    </div>

    <div class="form-group">
        {!! Form::label ('antecedentesJudiciales','Antecedentes Judiciales') !!}
        {!! Form::select ('antecedentesJudiciales',$option,'', ['class' => 'form-control'] )!!}
    </div>
 <div id="antecedentesDIV">   
    <div class="form-group">
        {!! Form::label ('mes','Meses') !!}
        {!! Form::select ('mes',$meses,'', ['class' => 'form-control', 'id' => 'meses'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('anio','Anios') !!}
        {!! Form::select ('anio',$anios,'', ['class' => 'form-control', 'id' => 'anios'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('idDelito','Delito') !!}
        {!! Form::select ('idDelito',$delitos,'', ['class' => 'form-control', 'id' => 'delitos'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('idCentroReclusion','Centro de reclucion') !!}
        {!! Form::select ('idCentroReclusion',$centros,'', ['class' => 'form-control', 'id' => 'centro'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('observaciones','Observaciones') !!}
        {!! Form::text ('observaciones',old('observaciones'), ['class' => 'form-control', 'data-validation' =>'required','data-validation' =>'length','data-validation-length'=> '50-200', 'data-validation-error-msg' =>'Esta campo debe tener entre 50-200 caracteres.'] )!!}
    </div>
</div>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $('#identificacion').select2({
            width : "100%",
        });

        $('#opciones').select2({
            width : "100%",
        });

        $('#meses').select2({
            width : "100%",
        });

        $('#anios').select2({
            width : "100%",
        });

        $('#delitos').select2({
            width : "100%",
        });

        $('#centro').select2({
            width : "100%",
        });
    });
    </script>