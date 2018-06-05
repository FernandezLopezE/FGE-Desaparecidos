<div class="card" id="preDientes">
	<div class="card-header">
	<h5>
		Datos, tratamientos, higiene & hábitos dentales de la persona desaparecida
		<a href="{{route('datosdentales.edit', ['id' => $desaparecido->id])}}" class="btn btn-dark pull-right">Editar</a>   
	</h5>
	</div>

	<div class="card-body">
		<div class="row">
			<dt class="col-sm-2">Tamaño de dientes:</dt>
			<dd class="col-sm-10" id="tamDiente">GRANDES</dd>
			<dt class="col-sm-2">Datos del dentista</dt>
			<dd class="col-sm-10" id="datosDent">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. DISTINCTIO DOLOREMQUE DOLORES MAGNI NESCIUNT SAEPE FACERE BLANDITIIS TEMPORIBUS EXCEPTURI EAQUE, ATQUE EARUM, VELIT NECESSITATIBUS AT QUOD MAXIME IURE ITAQUE, QUO NISI.</dd>

			<dt class="col-sm-2">Tipo de perfil:</dt>
			<dd class="col-sm-10" id="tPerfil">CÓNVEXO</dd>
			<dt class="col-sm-2">Tipo de mordida:</dt>
			<dd class="col-sm-10" id="tMordida">CERRADA</dd>
			<dt class="col-sm-2">Tipo de sonrisa:</dt>
			<dd class="col-sm-10" id="tSonrisa">DIENTES SEPARADOS</dd>
		</div>

		<div class="row">
			<dt class="col-sm-2">Tratamientos dentales:</dt>
			<dd class="col-sm-10" id="tDentales">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. DISTINCTIO DOLOREMQUE DOLORES</dd>
			<dt class="col-sm-2">Hábitos bucales:</dt>
			<dd class="col-sm-10" id="habBucales">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT. DISTINCTIO DOLOREMQUE DOLORES</dd>
		</div>

	</div>
</div>