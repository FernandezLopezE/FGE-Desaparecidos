<div class="modal fade" id="modalDientes" rle="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="height: 50px; background-color: #A4A4A4">
        <h5 class="modal-title" style="margin-top: -10px; margin-left: 40%;" id="exampleModalLabel">Seleccionar dientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del formulario-->
        <div class="form-group row">
          <div class="col-md-4">
            <img src="/images/esquema-dental.jpg" width="362" height="446" border="0" usemap="#dientes" id="dientes" />
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group two-fields">
                  <div class="input-group">
                    <label style="margin-left: 12%">Diente seleccionado</label>
                    <label style="margin-left: 20%">Causa de pérdida</label>
                  </div>
                  <div class="input-group" id="PMSID">
                    {!! Form::text ('PMSI',old('PMSI'), ['class' => 'form-control mayuscula', 'id' => 'PMSI', 'disabled'])!!}
                    {!! Form::text ('perdio[]',old('PMSIP'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PMSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','14', array('id' => 'dienteselec26')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="SPSID">
                    {!! Form::text ('SPSI',old('SPSI'), ['class' => 'form-control mayuscula', 'id' => 'SPSI','disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'SPSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','13', array('id' => 'dienteselec25')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="PPSID">
                    {!! Form::text ('PPSI',old('PPSI'), ['class' => 'form-control mayuscula', 'id' => 'PPSI', 'disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'PPSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','12', array('id' => 'dienteselec24')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="CSID">
                    {!! Form::text ('CSI',old('CSI'), ['class' => 'form-control mayuscula', 'id' => 'CSI', 'disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'CSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','11', array('id' => 'dienteselec23')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="ILSID">
                    {!! Form::text ('ILSI',old('ILSI'), ['class' => 'form-control mayuscula', 'id' => 'ILSI', 'disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ILSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','10', array('id' => 'dienteselec22')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="ICSID">
                    {!! Form::text ('ICSI',old('ICSI'), ['class' => 'form-control mayuscula', 'id' => 'ICSI', 'disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ICSIP',] )!!}
                    {{ Form::hidden('dienteselec[]','9', array('id' => 'dienteselec21')) }}
                  </div>
                  <div class="input-group" style="margin-top: 10px" id="ICSDD">
                    {!! Form::text ('ICSD',old('ICSD'), ['class' => 'form-control mayuscula', 'id' => 'ICSD', 'disabled'] )!!}
                    {!! Form::text ('perdio[]',old('perdio'), ['class' => 'form-control mayuscula', 'placeholder' => 'ACCIDENTE, EXTRACCIÓN, NATURAL, ETC ' ,'id' => 'ICSDP',] )!!}
                    {{ Form::hidden('dienteselec[]','1', array('id' => 'dienteselec11')) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <map name="dientes">
          <area shape="poly" coords="67,186,79,176,81,162,71,149,49,142,37,150,34,165,34,180,44,186,55,189" value="PRIMER MOLAR SUPERIOR IZQUIERDO"  nohref="nohref" id="diente26" />
          <area shape="poly" coords="60,108,66,107,68,108,72,111,78,112,77,116,80,120,83,127,83,136,73,139,69,143,61,141,51,141,47,133,43,122,50,114,56,113" value="SEGUNDO PREMOLAR SUPERIOR IZQUIERDO"  nohref="nohref" id="diente25" />
          <area shape="poly" coords="70,76,78,74,82,75,84,77,93,80,91,90,93,99,89,104,81,107,78,106,76,106,72,106,69,104,65,99,61,93,61,82,69,78,70,77" value="PRIMER PREMOLAR SUPERIOR IZQUIERDO"  nohref="nohref" id="diente24"/>
          <area shape="poly" coords="89,51,101,47,105,47,111,58,113,66,116,75,112,83,107,82,98,83,96,78,94,75,86,72,84,63,85,58,96,49" value="CANINO SUPERIOR IZQUIERDO"  nohref="nohref" id="diente23" />
          <area shape="poly" coords="114,35,125,31,139,28,144,31,147,42,146,55,146,64,139,69,134,69,128,66,118,63,113,52,112,44,111,38" value="INCISIVO LATERAL SUPERIOR IZQUIERDO"  nohref="nohref" id="diente22" />
          <area shape="poly" coords="158,21,164,23,172,22,177,22,180,29,182,38,181,48,176,58,170,61,168,63,164,61,161,59,159,55,160,53,154,49,153,45,147,33,152,26" value="INCISIVO CENTRAL SUPERIOR IZQUIERDO"  nohref="nohref" id="diente21" />
          <area shape="poly" coords="193,23,198,24,205,26,213,25,210,29,220,34,218,30,214,43,205,55,200,62,198,64,196,65,195,63,194,62,192,62,189,59,188,56,185,52,187,45,187,39,187,35,187,29,186,25,188,24,189,24" value="INCISIVO CENTRAL SUPERIOR DERECHO"  nohref="nohref" id="diente11" />
          <area shape="poly" coords="216,51,216,63,223,71,232,73,239,67,247,61,254,51,255,45,251,41,241,35,233,32,226,31,224,31,218,46,218,39,221,40" value="INCISIVO LATERAL SUPERIOR DERECHO"  nohref="nohref" id="diente12" />
          <area shape="poly" coords="260,51,265,53,276,56,272,57,282,63,282,69,279,75,272,75,271,84,264,84,260,87,256,87,253,87,252,84,253,73,253,67,253,61,254,59,256,56,257,53" value="CANINO SUPERIOR DERECHA"  nohref="nohref" id="diente13" />
          <area shape="poly" coords="283,79,286,79,291,79,300,81,304,89,304,101,295,105,288,107,282,109,277,110,273,109,271,106,271,97,272,94,274,87,279,87,282,79" value="PRIMER PREMOLAR SUPERIOR DERECHO"  nohref="nohref" id="diente14" />
          <area shape="poly" coords="301,110,310,115,317,123,315,131,315,135,312,142,304,141,296,144,292,145,289,146,285,145,282,141,276,137,279,128,282,119,285,120,288,116,291,112" value="SEGUNDO PREMOLAR SUPERIOR DERECHO"  nohref="nohref" id="diente15" />
          <area shape="poly" coords="326,152,328,165,333,177,322,189,311,191,307,192,302,192,293,192,291,189,289,181,284,174,286,165,283,157,291,158,289,150,297,149,300,147,318,144" value="PRIMER MOLAR SUPERIOR DERECHO"  nohref="nohref" id="diente16" />
          <area shape="poly" coords="44,258,35,267,39,284,47,300,54,301,62,298,79,289,83,280,78,265,74,255,70,252,59,253,48,253,36,263" value="PRIMER MOLAR INFERIOR IZQUIERDO"  nohref="nohref" id="diente36" />
          <area shape="poly" coords="53,315,52,324,64,335,67,332,76,331,91,327,92,311,86,301,79,297,74,296,68,296,64,296,60,300,54,306,52,310" value="SEGUNDO PREMOLAR INFERIOR IZQUIERDO"  nohref="nohref" id="diente37" />
          <area shape="poly" coords="70,346,69,353,77,362,87,362,97,358,106,347,104,338,102,331,96,331,89,330,85,330,82,330,78,330,72,336" value="PRIMER PREMOLAR INFERIOR IZQUIERDO"  nohref="nohref" id="diente34" />
          <area shape="poly" coords="89,369,92,362,95,358,98,356,109,356,116,361,122,370,117,380,111,386,105,388,99,390,95,389,92,387,91,386,87,382,88,371" value="CANINO INFERIOR IZQUIERDO"  nohref="nohref" id="diente33" />
          <area shape="poly" coords="119,386,121,379,127,377,132,371,134,373,141,378,141,389,143,399,138,408,125,413,133,413,118,408,113,399,112,403,117,387,118,387" value="INCISIVO LATERAL INFERIOR IZQUIERDO"  nohref="nohref" id="diente32" />
          <area shape="poly" coords="153,390,157,383,167,383,160,383,173,390,173,399,173,413,166,420,160,420,155,420,150,420,147,414,146,408,147,400,157,385" value="INCISIVO CENTRAL INFERIOR IZQUIERDO"  nohref="nohref" id="diente31" />
          <area shape="poly" coords="187,382,201,398,202,413,194,419,186,417,182,417,179,414,180,407,180,397,180,391,180,383,185,382" value="INCISIVO CENTRAL INFERIOR DERECHO"  nohref="nohref" id="diente41" />
          <area shape="poly" coords="214,375,224,382,230,391,235,405,227,411,218,415,208,410,205,398,208,388,208,380,211,375" value="INCISIVO LATERAL INFERIOR DERECHO"  nohref="nohref" id="diente42" />
          <area shape="poly" coords="234,382,239,393,243,400,252,399,258,394,263,385,264,376,258,368,248,366,244,360,237,361,232,371" value="CANINO INFERIOR DERECHO"  nohref="nohref" id="diente43" />
          <area shape="poly" coords="248,346,252,357,252,361,260,367,266,372,279,368,285,357,281,346,274,339,268,339,265,339,263,332,260,336,254,335,249,341" value="PRIMER PREMOLAR INFERIOR DERECHO"  nohref="nohref" id="diente44" />
          <area shape="poly" coords="265,325,275,333,280,339,287,339,299,338,307,327,300,311,289,309,295,308,283,303,277,307,272,305,267,310" value="SEGUNDO PREMOLAR INFERIOR DERECHO"  nohref="nohref" id="diente45" />
          <area shape="poly" coords="278,296,287,303,300,306,302,303,311,303,317,290,321,278,315,268,309,260,299,260,293,262,289,262,285,264,281,267,278,271,277,284,278,295" value="PRIMER MOLAR INFERIOR DERECHO"  nohref="nohref" id="diente46" />
        </map>
        <!-- Fin del Contenido del formulario-->
      </div>
      <div class="modal-footer">
        <div class="col" align="left" >
          {!! Form::label ('instrucciones','Instrucciones: ') !!}
          <input id="toggle-teeth" type="checkbox" data-toggle="toggle" data-on="SI" data-off="NO" data-size="small" onchange="myFunctionTeeth()">
        </div>
        <button type="button" class="btn btn-warning" id="upDiente" onclick="ConfirmDemo()">EDITAR</button>
        <button type="button" class="btn btn-success" id="btnDiente">GUARDAR</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
</div>