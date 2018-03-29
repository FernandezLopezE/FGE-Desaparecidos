    <div class="form-group">
        {!! Form::label ('identificacion','Identificacion') !!}
        {!! Form::select ('identificacion',$identificacion,'', ['class' => 'form-control', 'id' => 'identificacion'] )!!}
    </div>

    <div class="form-group">
        {!! Form::label ('otroId','Otro') !!}
        {!! Form::text ('otroId',old('Otra identificacion'), ['class' => 'form-control', 'data-validation' =>'required'] )!!}
    </div>

    <div class="form-group">
        {!! Form::label ('noId','No. Identificación') !!}
        {!! Form::text ('noId',old('Numero identificacion'), ['class' => 'form-control', 'data-validation' =>'required'] )!!}
    </div>

    <div class="form-group">
        {!! Form::label ('antecedentes','Antecedentes') !!}
        {!! Form::select ('antecedentes',$option,'', ['class' => 'form-control', 'id' => 'opciones'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('mes','Meses') !!}
        {!! Form::select ('mes',$meses,'', ['class' => 'form-control', 'id' => 'meses'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('anio','Anios') !!}
        {!! Form::select ('anio',$anios,'', ['class' => 'form-control', 'id' => 'anios'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('delito','Delito') !!}
        {!! Form::select ('idDelito',$delitos,'', ['class' => 'form-control', 'id' => 'delitos'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('centro','Centro de reclucion') !!}
        {!! Form::select ('idCcentro',$centros,'', ['class' => 'form-control', 'id' => 'centro'] )!!}
    </div>
    
    <div class="form-group">
        {!! Form::label ('observaciones','Observaciones') !!}
        {!! Form::text ('observaciones',old('observaciones'), ['class' => 'form-control', 'data-validation' =>'required'] )!!}
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