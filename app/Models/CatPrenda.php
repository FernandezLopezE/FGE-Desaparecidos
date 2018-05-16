<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatPrenda extends Model
{
	protected $table = 'cat_prendas';
	protected $fillable = ['nombre', 'sexo', 'idVestimenta'];
}
