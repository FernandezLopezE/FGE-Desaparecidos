<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatMalosHabitosTable extends Model
{
    protected $table = 'cat_malos_habitos';
	protected $fillable = [
		'id',
		'nombreMalHabito'	
	];
}
