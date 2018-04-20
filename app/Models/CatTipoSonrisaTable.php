<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTipoSonrisaTable extends Model
{
    protected $table = 'cat_tipo_sonrisa';
	protected $fillable = [
		'id',
		'nombreTipoSonrisa'	
	];
}
