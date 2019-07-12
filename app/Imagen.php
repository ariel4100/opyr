<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $fillable = [
    	'orden', 'file_image'
    ];

	public function novedad()
	{
		return $this->belongsTo('App\Novedad');
	}
}
