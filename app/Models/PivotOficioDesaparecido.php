<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotOficioDesaparecido extends Model
{
    protected $table = 'desaparecido_oficios';

	protected $fillable = [
				'idOficio',
				'idDesaparecido',
			];
}
