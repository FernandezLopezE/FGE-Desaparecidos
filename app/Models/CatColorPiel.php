<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatColorPiel extends Model
{
	protected $table = 'cat_color_piel';
	protected $fillable = [
		'nombre',
		'imagen',
	];
}
